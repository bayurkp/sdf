<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\ProgramStudi;
use App\Models\Prestasi;
use App\Models\Note;
use Illuminate\Support\Str;
use App\Models\JalurPendaftaran;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use App\Models\Organisasi;
use Dompdf\Dompdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AdminRegistrasiController extends Controller
{
    public function index(Request $request)
    {
        $order_by = $request->order_by ?? 'nim';

        $query = User::with(['program_studi:id,nama', 'jalur_pendaftaran:id,nama', 'organisasis', 'prestasis', 'notes']);

        if (isset($request->program_studi) && $request->program_studi != 0) {
            $query->where('program_studi_id', $request->program_studi);
        }

        if (isset($request->jalur_pendaftaran) && $request->jalur_pendaftaran != 0) {
            $query->where('jalur_pendaftaran_id', $request->jalur_pendaftaran);
        }

        if (isset($request->status) && $request->status != 0) {
            $query->where('status', $request->status);
        }

        $order_direction = $order_by == 'nim' ? 'asc' : 'desc';
        $mahasiswas = $query->orderBy($order_by, $order_direction)->get();

        $program_studis = ProgramStudi::all();
        $jalur_pendaftarans = JalurPendaftaran::all();
        $statuses = array(
            'Belum registrasi',
            'Mengajukan registrasi',
            'Kesalahan data registrasi',
            'Mengajukan perbaikan registrasi',
            'Teregistrasi'
        );

        $filter_program_studi = $request->program_studi ?? 0;
        $filter_jalur_pendaftaran = $request->jalur_pendaftaran ?? 0;
        $filter_status = $request->status ?? 0;

        return view('admin.registrasi.index', compact(
            'mahasiswas',
            'program_studis',
            'jalur_pendaftarans',
            'statuses',
            'filter_program_studi',
            'filter_jalur_pendaftaran',
            'filter_status',
            'order_by',
        ));
    }


    public function downloadKrm($id): HttpFoundationResponse
    {
        $user = User::find($id);
        $filename = "krm-" . $user->nim . ".pdf";
        return response()->download(storage_path('/app/mahasiswa/krm/' . $user->krm), $filename);
    }

    public function downloadBuktiTransaksi($id): HttpFoundationResponse
    {
        $user = User::find($id);
        $filename = 'bukti-' . $user->nim . '.' . pathinfo($user->bukti_transaksi, PATHINFO_EXTENSION);
        return response()->download(storage_path('/app/mahasiswa/bukti_transaksi/' . $user->bukti_transaksi), $filename);
    }

    public function downloadPrestasi($id): HttpFoundationResponse
    {
        $prestasi = Prestasi::find($id);
        $filename = "prestasi-" . $prestasi->user->nim . "-" . Str::slug($prestasi->nama) . ".pdf";
        return response()->download(storage_path('/app/mahasiswa/prestasi/' . $prestasi->file_berkas), $filename);
    }

    public function downloadBiodata($id): HttpFoundationResponse
    {
        $user = User::find($id);
        $organisasis = Organisasi::where('user_id', $user->id)->get();
        $prestasis = Prestasi::where('user_id', $user->id)->get();
        $program_studi = ProgramStudi::find($user->program_studi_id)->nama;
        $filename = "FORM VERIFIKASI " . $user->nim . ".pdf";
        $dompdf = new Dompdf();
        $options = $dompdf->getOptions();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('chroot', realpath(base_path()));
        $dompdf->setOptions($options);
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($contxt);
        $view = View::make('user.berkas.verifikasi', compact('user', 'organisasis', 'prestasis', 'program_studi'));
        $html = $view->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfContent = $dompdf->output();

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="FILE VERIFIKASI ' . $user->nim . '.pdf"',
        ];
        $response = new Response($pdfContent, 200, $headers);
        return $response;
    }

    public function note(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'note' => 'required|string|min:1|max:1000'
        ]);
        $note = array(
            'user_id' => $id,
            'note' => $validated['note']
        );
        $user = User::find($id);
        $user->status = "Kesalahan data registrasi";
        $user->save();
        Note::create($note);
        return redirect()->back()->with(["toast" => ["type" => "success", "message" => "Berhasil mengirimkan note."]]);
    }

    public function konfirmasi($id): RedirectResponse
    {
        $user = User::find($id);
        $koordinator = User::where('program_studi_id', $user->program_studi_id)->where('koordinator', 'Ya')->first();
        $user->status = "Teregistrasi";
        if ($koordinator == null) {
            $user->koordinator = "Ya";
        } else {
            $user->koordinator = "Tidak";
        }
        $user->save();
        return redirect()->back()->with(["toast" => ["type" => "success", "message" => "Berhasil konfirmasi registrasi mahasiswa."]]);
    }
}
