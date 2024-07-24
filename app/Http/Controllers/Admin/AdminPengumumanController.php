<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\PengumumanSdf;
use Illuminate\Support\Facades\File;

class AdminPengumumanController extends Controller
{
    public function index(): View
    {
        $pengumumans = PengumumanSdf::orderBy('id', 'asc')->get();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    public function read($id): View
    {
        $pengumuman = PengumumanSdf::find($id);
        return view('admin.pengumuman.read', compact('pengumuman'));
    }

    public function viewCreate(): View
    {
        $statuses = array(
            'Tidak aktif',
            'Aktif'
        );
        return view('admin.pengumuman.create', compact('statuses'));
    }

    public function create(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'judul' => 'required|string|min:1|max:50',
            'deskripsi' => 'nullable|string|min:1|max:2000',
            'status' => 'required|in:Tidak aktif,Aktif',
            'file_pengumuman' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:10240'
        ]);

        if ($validated['status'] == 'Aktif') {
            $pengumumans = PengumumanSdf::all();
            foreach ($pengumumans as $pengumuman) {
                $pengumuman->status = "Tidak aktif";
                $pengumuman->save();
            }
        }

        $pengumuman = array(
            'judul' => $validated['judul'],
            'status' => $validated['status']
        );

        if (!empty($validated['deskripsi'])) {
            $pengumuman['deskripsi'] = $validated['deskripsi'];
        }

        if (!empty($validated['file_pengumuman'])) {
            $file_pengumuman = $request->file('file_pengumuman');
            $filename = 'pengumuman-' . time() . "." . $file_pengumuman->getClientOriginalExtension();
            $path = public_path('/pengumuman-pkkmb');
            $file_pengumuman->move($path, $filename);
            $pengumuman['file_pengumuman'] = $filename;
        }

        PengumumanSdf::create($pengumuman);
        return redirect()->route('admin-view-pengumuman')->with(["toast" => ["type" => "success", "message" => "Berhasil menambahkan pengumuman."]]);
    }

    public function viewEdit($id): View
    {
        $pengumuman = PengumumanSdf::find($id);
        $statuses = array(
            'Tidak aktif',
            'Aktif'
        );
        return view('admin.pengumuman.edit', compact('pengumuman', 'statuses'));
    }

    public function edit(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'judul' => 'required|string|min:1|max:50',
            'deskripsi' => 'nullable|string|min:1|max:2000',
            'status' => 'required|in:Tidak aktif,Aktif',
            'file_pengumuman' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:10240'
        ]);

        if ($validated['status'] == 'Aktif') {
            $pengumumans = PengumumanSdf::all();
            foreach ($pengumumans as $pengumuman) {
                $pengumuman->status = "Tidak aktif";
                $pengumuman->save();
            }
        }

        $pengumuman = PengumumanSdf::find($id);
        $pengumuman->judul = $validated['judul'];
        $pengumuman->status = $validated['status'];

        if (!empty($validated['deskripsi'])) {
            $pengumuman->deskripsi = $validated['deskripsi'];
        } else {
            $pengumuman->deskripsi = null;
        }

        if (!empty($validated['file_pengumuman'])) {
            File::delete(public_path('/pengumuman-pkkmb') . $pengumuman->file_pengumuman);
            $file_pengumuman = $request->file('file_pengumuman');
            $filename = 'pengumuman-' . time() . "." . $file_pengumuman->getClientOriginalExtension();
            $path = public_path('/pengumuman-pkkmb');
            $file_pengumuman->move($path, $filename);
            $pengumuman->file_pengumuman = $filename;
        }

        $pengumuman->save();
        return redirect()->route('admin-view-edit-pengumuman', ['id' => $id])->with(["toast" => ["type" => "success", "message" => "Berhasil mengubah pengumuman."]]);
    }

    public function deleteGambar($id): RedirectResponse
    {
        $pengumuman = PengumumanSdf::find($id);

        if (!empty($pengumuman->file_pengumuman)) {
            File::delete(public_path('/pengumuman-pkkmb') . $pengumuman->file_pengumuman);
            $pengumuman->file_pengumuman = null;
            $pengumuman->save();
            return redirect()->route('admin-view-edit-pengumuman', ['id' => $id])->with(["toast" => ["type" => "success", "message" => "Berhasil menghapus gambar pengumuman."]]);
        }

        return redirect()->route('admin-view-edit-pengumuman', ['id' => $id])->with(["toast" => ["type" => "danger", "message" => "Tidak ada gambar pengumuman yang dihapus."]]);
    }

    public function delete($id): RedirectResponse
    {
        $pengumuman = PengumumanSdf::find($id);

        if (!empty($pengumuman->file_pengumuman)) {
            File::delete(public_path('/pengumuman-pkkmb') . $pengumuman->file_pengumuman);
        }

        $pengumuman->delete();
        return redirect()->route('admin-view-pengumuman')->with(["toast" => ["type" => "success", "message" => "Berhasil menghapus pengumuman."]]);
    }
}
