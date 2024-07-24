@extends('layout.layout')

@section('content')
<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <div class="py-2">
                <h2>Group Chat</h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                @if($user->koordinator == "Ya")
                <div class="mb-4">
                    <div class="alert alert-primary" role="alert">
                        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;Selamat anda dipilih menjadi Koordinator Angkatan Program Studi!
                    </div>
                </div>
                @endif
                <div class="d-flex align-items-center mb-4 flex-column flex-sm-row" style="max-width: 1000px;">
                    <div>
                        <h4>Ketentuan akun Telegram Peserta PKKMB FT 2024<span style="color:#FF0000">*</span></h4>
                        <ul class="ml-2 mb-2">
                            <li>- Foto profil peserta menggunakan pas foto yang di upload saat mengisi data registrasi</li>
                            <li>- Nama akun peserta menggunakan format <strong>(Nama lengkap_Program studi)</strong></li>
                        </ul>
                        <div class="mb-2">
                            Peserta PKKMB FT 2024 hanya diperbolehkan masuk ke telegram “Peserta PKKMB FT 2024” dan program studi masing-masing dengan ketentuan sebagai berikut:
                        </div>
                        <ul class="ml-2">
                            <li>- (ARS) Arsitektur</li>
                            <li>- (TS) Teknik Sipil</li>
                            <li>- (TM) Teknik Mesin</li>
                            <li>- (TE) Teknik Elektro</li>
                            <li>- (TL) Teknik Lingkungan</li>
                            <li>- (TI) Teknlogi Informasi</li>
                            <li>- (TIND) Teknik Industri</li>
                        </ul>
                    </div>
                    <div class="text-center mb-4">
                        <img src="{{url('/img/qrcode/grup-besar.jpg')}}" style="width:200px;">
                    </div>
                </div>
                <div class="mb-3">
                    <a href="https://t.me/+-0kbxXzSQQZiMDA1" style="width:100%;" type="button" target="_blank" class="model_bt btn btn-success"><i class="fa fa-sign-in text-white"></i>&nbsp;&nbsp;Bergabung ke Grup</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
