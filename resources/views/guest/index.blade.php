<!DOCTYPE html>
<html class="scroll-smooth">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="GdY2fjlMijpYrGAM2WM9TsHULDBVcupKLvwtCeBp">
    <title>SMFT</title>
    <meta name="description:" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{url('img/icon.png')}}">
    {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i,800|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Icon+Name">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('lib/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .modal a {
            text-decoration: none;
            border-radius: 5px;
        }

        body::-webkit-scrollbar {
            width: 0.4em;
        }

        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #222222;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #666666;
            opacity: 0.6;
            border-radius: 10px;
        }
    </style>
</head>

<body class="mx-auto">
    <header id="header">
        <div class="w-full d-flex align-items-center justify-content-between px-4 md:px-10">
            <div id="logo">
                <img src="{{url('img/logo-pkkmb-ft-2024.png')}}" alt="Logo PKKMB FT 2024">
                <h1 class="text-[#c3872e] text-base">PKKMB FT 2024</h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu flex items-center space-x-6 text-base">
                    <li class="menu-active"><a href="#home">Home</a></li>
                    <li class=""><a href="#about">Tentang</a></li>
                    <li class="menu-has-children"><a href="#program-kerja">Program Kerja</a></li>
                    <li class="menu-has-children"><a href="#informasi-terkait">Penerimaan Mahasiswa</a></li>
                    <li class="mb-4 lg:mb-0"><a href="#kontak">Kontak</a></li>

                    <a href="{{ route("login") }}" id="btnNavLogin" class="ml-3 px-4 py-2 bg-[#c3872e] text-white font-bold rounded-md uppercase">Login</a>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        {{-- section home --}}
        <section id="home">
            <div class="hero min-h-screen flex flex-col-reverse md:flex-row items-center justify-center 2xl:justify-start py-20 px-6 md:px-10 bg-hero-pattern bg-cover bg-no-repeat bg-center">
                <div class="hero-text w-full md:w-2/3 2xl:w-3/5 h-fit pr-0 md:pr-10 2xl:pr-28 text-center md:text-left">
                    <h1 class="text-white font-extrabold text-4xl sm:text-6xl uppercase">pkkmb fakultas teknik 2024</h1>
                    <p class="text-gray-200 mt-4 mb-8">
                        PKKMB FT merupakan rangkaian dari kegiatan penerimaan mahasiswa baru di lingkungan Fakultas Teknik Universitas Udayana. Sebagaimana kegiatan penerimaan mahasiswa baru lainnya, PKKMB ini merupakan kegiatan yang wajib diikuti yang nantinya akan mempengaruhi penginputan SKP, syarat yudisium, dan kelulusan mahasiswa.</p>
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-[#c3872e] mt-4 text-white font-semibold rounded-md uppercase">Daftar PKKMB</a>
                </div>
                <div class="hero-image w-full md:w-1/3 2xl:w-2/5 flex justify-center ">
                    <img src="{{ url('img/logo-pkkmb-ft-2024.png') }}" class="w-3/4 md:w-full 2xl:w-10/12" alt="">
                </div>
            </div>
        </section>

        {{-- section about --}}
        <section id="about">
            {{-- about bpmft --}}
            <div class="flex flex-col md:flex-row items-center justify-center py-20 px-6 md:px-10">
                <div class="about-image w-full md:w-1/2 flex justify-center">
                    <img src="{{ url('img/logo-bpmft.png') }}" class="w-44 md:w-1/2 2xl:w-1/3" alt="">
                </div>
                <div class="about-text w:full md:w-1/2">
                    <p class="w-fit relative text-red-500 font-bold text-xl capitalize mb-2 pb-1 after:absolute after:w-full after:h-[1px] after:rounded-full after:bottom-0 after:left-0 after:bg-red-500 uppercase">BPMFT</p>
                    <h2 class="text-gray-800 font-bold text-3xl sm:text-4xl uppercase">
                        Badan Perwakilan Mahasiswa Fakultas Teknik
                    </h2>
                    <p class="text-gray-600 mt-2 mb-1">
                        Badan Perwakilan Mahasiswa Fakultas Teknik (BPMFT) di Universitas Udayana adalah badan yang berfungsi sebagai legislator, pengawas, dan fasilitator bagi mahasiswa di Fakultas Teknik. Tugas utama BPMFT meliputi:
                        Melakukan fungsi legislasi untuk Senat Mahasiswa Fakultas Teknik (SMFT),
                        Memberikan pendapat, usul, dan saran kepada pimpinan Fakultas Teknik,
                        Melaksanakan hasil-hasil Musyawarah Mahasiswa Fakultas Teknik (Musma FT),
                        Mengawasi pelaksanaan keputusan-keputusan Musma FT,
                        Melakukan pengawasan dan koordinasi dengan SMFT dan Himpunan Mahasiswa Jurusan (HMJ)
                    </p>
                </div>
            </div>

            {{-- about smft --}}
            <div class="flex flex-col-reverse md:flex-row  items-center justify-center pb-20 px-6 md:px-10">
                <div class="about-text w-full md:w-1/2">
                    <p class="w-fit relative text-[#c3872e] font-bold text-xl capitalize mb-2 pb-1 after:absolute after:w-full after:h-[1px] after:rounded-full after:bottom-0 after:left-0 after:bg-[#c3872e] uppercase">SMFT</p>
                    <h2 class="text-gray-800 font-bold text-3xl sm:text-4xl uppercase">
                        Senat Mahasiswa Fakultas Teknik
                    </h2>
                    <p class="text-gray-600 mt-2 mb-1">
                        Senat Mahasiswa Fakultas Teknik (SMFT) Universitas Udayana merupakan lembaga eksekutif di tingkat fakultas yang berada di Fakultas Teknik Universitas Udayana. SMFT Unud mempunyai tugas pokok: Mengkoordinasikan dan menyelenggarakan kegiatan kemahasiswaan dalam bidang ekstrakurikuler. Memberikan pendapat, usul, saran dan memperjuangkan aspirasi mahasiswa pada pimpinan FT Unud. Melaksanakan hasil-hasil Musma FT Unud.
                    </p>
                </div>
                <div class="about-image w-full md:w-1/2 flex justify-center">
                    <img src="{{ url('img/logo-smft.png') }}" class="w-44 md:w-1/2 2xl:w-1/3" alt="">
                </div>
            </div>
        </section>

        {{-- section prodi --}}
        <section id="prodi" class="py-20 px-6 md:px-10 bg-neutral-100">
            <div class="text-center space-y-3 pb-6">
                <h2 class="w-fit mx-auto relative text-gray-800 font-bold text-3xl uppercase pb-1 after:absolute after:w-full after:h-[1px] after:rounded-full after:bottom-0 after:left-0 after:bg-[#c3872e]">
                    Program Studi
                </h2>
                <p class="text-gray-600 text-center">Program studi yang ada di lingkungan Fakultas Teknik Universitas Udayana</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 content-start mt-5">
                <div class="bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hma.png') }}" class="w-24 2xl:w-32" alt="Logo Arsitektur">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Arsitektur</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknik Arsitektur di Fakultas Teknik Universitas Udayana memfokuskan pada pengembangan kemampuan desain dan perencanaan arsitektur yang berkelanjutan dan inovatif. Lulusan diharapkan mampu merancang bangunan yang estetis, fungsional, dan ramah lingkungan.
                    </p>
                </div>
                <div class="bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hms.png') }}" class="w-24 2xl:w-32" alt="Logo Teknik Sipil">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknik Sipil</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknik Sipil di Fakultas Teknik Universitas Udayana bertujuan untuk menghasilkan lulusan yang kompeten di bidang perencanaan, desain, konstruksi, dan pemeliharaan infrastruktur. Program ini dirancang untuk menjawab kebutuhan pembangunan infrastruktur yang semakin kompleks dan modern.
                    </p>
                </div>
                <div class="bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hmm.png') }}" class="w-24 2xl:w-32" alt="Logo Teknik Mesin">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknik Mesin</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknik Mesin merupakan salah satu Program Studi di Fakultas Teknik Universitas Udayana yang latar belakang pendiriannya didasarkan pada upaya antisipasi pada perkembangan pesat di bidang teknik Mesin.
                    </p>
                </div>
                <div class="bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hme.png') }}" class="w-24 2xl:w-32" alt="Logo Teknik Elektro">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknik Elektro</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknik Elektro bertujuan untuk membekali mahasiswa dengan pengetahuan dan keterampilan di bidang teknologi listrik dan elektronik. Program ini mencakup berbagai aspek seperti sistem tenaga, elektronika, dan telekomunikasi, yang sangat dibutuhkan dalam era teknologi informasi dan komunikasi saat ini.
                    </p>
                </div>
                <div class="bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hmti.png') }}" class="w-24 2xl:w-32" alt="Logo Teknologi Informasi">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknologi Informasi</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknologi Informasi di Fakultas Teknik Universitas Udayana dirancang untuk menghasilkan lulusan yang kompeten dalam bidang teknologi informasi dan komunikasi. Program ini bertujuan untuk membekali mahasiswa dengan pengetahuan dan keterampilan dalam pengembangan perangkat lunak, manajemen sistem informasi, jaringan komputer, keamanan siber, dan teknologi terkini lainnya.
                    </p>
                </div>
                <div class="bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hmtin.png') }}" class="w-24 2xl:w-32" alt="Logo Teknik Industri">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknik Industri</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknik Industri mengkombinasikan ilmu teknik dan manajemen untuk meningkatkan efisiensi dan efektivitas proses produksi. Program ini bertujuan untuk menghasilkan lulusan yang mampu merancang, mengembangkan, dan mengoptimalkan sistem industri yang kompleks, serta siap menghadapi tantangan industri 4.0.
                    </p>
                </div>
                <div class="md:col-span-2 lg:col-span-1 lg:col-start-2 bg-white flex flex-col items-center space-y-2 border border-gray-300 p-4 2xl:p-8 rounded-md hover:shadow-lg transition-all duration-500">
                    <img src="{{ url('img/logo-prodi/hmtl.png') }}" class="w-24 2xl:w-32" alt="Logo Teknik Lingkungan">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknik Lingkungan</h4>
                    <p class="text-gray-600 text-center">
                        Program Studi Teknik Lingkungan dirancang untuk mencetak ahli yang mampu mengelola dan mengatasi berbagai masalah lingkungan. Program ini mencakup studi tentang pengelolaan sumber daya alam, pengolahan limbah, dan penerapan teknologi ramah lingkungan untuk mendukung pembangunan berkelanjutan.
                    </p>
                </div>
            </div>
        </section>

        {{-- section kelompok studi --}}
        <section id="kelompok-studi" class="py-20 px-6 md:px-10">
            <div class="text-center space-y-3 pb-6">
                <h2 class="w-fit mx-auto relative text-gray-800 font-bold text-3xl uppercase pb-1 after:absolute after:w-full after:h-[1px] after:rounded-full after:bottom-0 after:left-0 after:bg-[#c3872e]">
                    Kelompok Studi
                </h2>
                <p class="text-gray-600 text-center">Kelompok studi yang ada di lingkungan Fakultas Teknik Universitas Udayana</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 place-content-center mt-5">
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/maestro.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Maestro</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok Studi Jurnalistik Mahasiswa Fakultas Teknik Universitas Udayana
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/tecart.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Technology Artisan</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok studi yang bergerak di bidang pengembangan Teknologi Informasi
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/ureka.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Ureka</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok Studi Udayana Rekayasa Fakultas Teknik, Universitas Udayana
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/robot.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Robot</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok Studi Robot Fakultas Teknik Universitas Udayana
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/cipta-loka.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Cipta Loka</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok Studi Cipta Loka Udayana Fakultas Teknik, Universitas Udayana
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/etc.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Engineering Technopreneur Community</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok Wirausaha Teknik
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/parasugeni.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Parasugeni</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok studi yang bergerak di bidang kesenian
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/paksi.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Paksi</h4>
                    <p class="text-gray-600 text-center">
                        Kelompok studi di lingkungan Fakultas Teknik yang bergerak dibidang antariksa
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/ieee.png') }}" class="w-24 2xl:w-32 opacity-70 group-hover:opacity-100 transition-all duration-300 py-4" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">IEEE Udayana Student Branch</h4>
                    <p class="text-gray-600 text-center">
                        IEEE Udayana Student Branch
                    </p>
                </div>
                <div class="flex flex-col items-center space-y-2 p-4 group">
                    <img src="{{ url('img/logo-kelompok-studi/basket.png') }}" class="w-36 opacity-70 group-hover:opacity-100 transition-all duration-300" alt="">
                    <h4 class="text-gray-800 text-xl font-semibold text-center">Teknik Basketball</h4>
                    <p class="text-gray-600 text-center">
                        Teknik Udayana Basketball Team
                    </p>
                </div>
                
            </div>
        </section>

        <section id="program-kerja" class="py-20 px-6 md:px-10 bg-neutral-100">
            <div class="text-center space-y-3 pb-6">
                <h2 class="w-fit mx-auto relative text-gray-800 font-bold text-3xl uppercase pb-1 after:absolute after:w-full after:h-[1px] after:rounded-full after:bottom-0 after:left-0 after:bg-[#c3872e]">
                    Program Kerja SMFT
                </h2>
                <p class="text-gray-600 text-center">Beberapa program kerja Senat Mahasiswa Fakultas Teknik Universitas Udayana</p>
            </div>
            
            <!-- Slider main container -->
            <div class="swiper pb-14 mt-5 w-full h-full">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">GrAnaT</h4>
                                <p class="text-gray-600 text-center">
                                    GrAnaT merupakan kegiatan tahunan dari Senat Mahasiswa Fakultas Teknik Universitas Udayana. GrAnaT adalah salah satu konser musik Underground terbesar di Bali yang menampilkan band-band lokal beraliran musik Underground
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">TBTN</h4>
                                <p class="text-gray-600 text-center">
                                    Teknik Back to Nature merupakan kegiatan untuk menumbuh kembangkan kecintaan dan kepedulian mahasiswa terhadap alam lingkungan sekaligus untuk memupuk rasa kekeluargaan antar civitas akademika Fakultas Teknik. Aktivitas yang dilaksanakan dalam TBTN ini berupa kegiatan pengabdian kepada masyarakat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">TFT</h4>
                                <p class="text-gray-600 text-center">
                                    Tekno Futsal Tournament adalah lomba futsal di Bali diselenggarakan oleh Senat Mahasiswa Fakultas Teknik Universitas Udayana dengan 3 kategori yakni SMA, Mahasiswa, dan Umum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">PORTEK</h4>
                                <p class="text-gray-600 text-center">
                                    Pekan Olahraga Teknik (PORTEK) adalah kegiatan di bidang olahraga yang diselenggarakan setiap tahun oleh Senat Mahasiswa Fakultas Teknik (SMFT). Portek memiliki tujuan selain sebgai wadah untuk mengembangkan wawasan, juga menyalurkan minat dan bakat mahasiswa di bidang olahraga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">BKFT</h4>
                                <p class="text-gray-600 text-center">
                                    BKFT adalah kegiatan fakultas yang melibatkan seluruh civitas akademika dan alumni Fakultas Teknik yang diselenggarakan secara rutin tiap tahunnya dalam rangka menyambut ulang tahun Fakultas Teknik Universitas Udayana
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">PKM</h4>
                                <p class="text-gray-600 text-center">
                                    PKM merupakan salah satu upaya untuk meningkatkan kualitas peserta didik (mahasiswa) di perguruan tinggi agar kelak dapat menjadi anggota masyarakat yang dapat menerapkan, mengembangkan dan menyebarluarkan ilmu pengetahuan, teknologi dan/atau kesenian serta memperkaya budaya nasional
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">PKKMB TEKNIK</h4>
                                <p class="text-gray-600 text-center">
                                    PKKMB TEKNIK merupakan rangkaian penerimaan mahasiswa baru yang berisikan kegiatan pengenalan kehidupaan mahasiswa di kampus, berbagai kegiatan kemahasiswaan yang bersifat ko-kurikuler dan ekstrakurikuler yang bermuara pada pengembangan dan peningkatan soft-skills
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">SEMINAR TEKNIK</h4>
                                <p class="text-gray-600 text-center">
                                    Seminar Teknik merupakan kegiatan yang ditujukan pada mahasiswa baru Fakultas Teknik Universitas Udayana yang setiap tahunnya mengambil tema yang berbeda. Latar belakang diadakannya kegiatan ini adalah mengingat pentingnya diadakan sebuah kegiatan kemahasiswaan dan juga seminar yang dapat melatih kecakapan berorganisasi atau soft-skills
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">DIES NATALIS</h4>
                                <p class="text-gray-600 text-center">
                                    Dies Natalis merupakan kegiatan yang ditujuakan untuk memperingati hari jadi Universitas Udayana. Tujuannya adalah untuk mempererat ikatan seluruh civitas akademika Universitas Udayana. Acara ini dibagi menjadi dua kegiatan yaitu Pekan Olahraga dan Seni
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">PILMAPRES</h4>
                                <p class="text-gray-600 text-center">
                                    PILMAPRES merupakan kegiatan untuk mencari mahasiswa berprestasi yang ada di Fakultas Teknik
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-11/12 sm:w-96">
                        <div class="bg-white overflow-hidden flex flex-col items-center border border-gray-300 rounded-md hover:shadow-lg transition-all duration-500">
                            <img src="{{ url('img/tekno-futsal.jpg') }}" class="" alt="">
                            <div class="p-4 2xl:p-6 text-center space-y-2">
                                <h4 class="text-gray-800 text-xl font-semibold">PPK ORMAWA</h4>
                                <p class="text-gray-600 text-center">
                                    Program Penguatan Kapasitas Organisasi Kemahasiswaan (PPK Ormawa) merupakan salah satu program kompetisi yang diselenggarakan oleh Belmawa Kemdikbud. Program ini merupakan program dalam skala organisasi kemahasiswaan yang tergolong dalam bidang masyarakat. Program ini menitikberatkan mengenai perluasan dan penguatan kapasitas organisasi Mahasiswa hingga ke masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                {{-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> --}}
            </div>
        </section>

        {{-- informasi terkait ppkmb --}}
        <section id="informasi-terkait" class="w-full h-fit py-20 px-6 md:px-10 bg-hero-pattern bg-cover bg-no-repeat">
            <div class="flex flex-col justify-center w-4/5 2xl:w-3/5">
                <p class="w-fit relative text-[#c3872e] font-bold text-xl capitalize mb-2 pb-1 after:absolute after:w-full after:h-[1px] after:rounded-full after:bottom-0 after:left-0 after:bg-[#c3872e] uppercase">informasi terkait</p>
                <h2 class="text-gray-100 font-bold text-4xl py-6">Akses Informasi Lainnya Terkait PKKMB Fakultas Teknik Universitas Udayana</h2>
                <p class="text-gray-300 mt-2 mb-1">
                    Peserta diharapkan untuk benar-benar memahami isi dari ketentuan secara menyeluruh sehingga pada proses Verifikasi PKKMB FT tidak melakukan kesalahan. Ketentuan Verifikasi PKKMB FT dapat diakses melalui tombol di bawah.
                </p>
                <a href="#" class="w-fit px-4 py-2 bg-[#c3872e] mt-4 text-white font-semibold rounded-md uppercase">Lihat Informasi Terkait</a>
            </div>
        </section>

        {{-- section contact --}}
        <section id="kontak" class="w-full h-fit pt-20 pb-10 px-6 md:px-10 bg-[#222]">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="info-pilihan space-y-3">
                    <h5 class="text-lg text-neutral-300 mb-5">Informasi Pilihan</h5>
                    <h6>
                        <a class="text-neutral-500 hover:text-neutral-300 transition-color duration-300" href="{{route('login')}}">
                            PKKMB FT
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                        </a>
                    </h6>
                    <h6>
                        <a class="text-neutral-500 hover:text-neutral-300 transition-color duration-300" href="#">
                            Pengumuman
                        </a>
                    </h6>
                    <h6>
                        <a class="text-neutral-500 hover:text-neutral-300 transition-color duration-300" target="_blank" href="#">
                            GrAnaT
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            
                        </a>
                    </h6>
                </div>
                <div class="info space-y-3 my-8 md:my-0">
                    <h5 class="text-lg text-neutral-300 mb-5">Sekretariat SMFT</h5>
                    <div class="flex items-center">
                        <i class="material-symbols-outlined mr-4 text-[32px] 2xl:text-[48px] text-[#c3872e]">
                            location_on
                        </i>
                        <p class="text-neutral-500 hover:text-neutral-300 transition-color duration-300">Jl. PB Sudirman<br>Denpasar, Bali</p>
                    </div>
                    <div class="flex items-center">
                        <i class="material-symbols-outlined mr-4 text-[32px] 2xl:text-[48px] text-[#c3872e]">
                            mail
                        </i>
                        <p class="text-neutral-500 hover:text-neutral-300 transition-color duration-300 cursor-pointer">
                            <a href="mailto:senat.ft.unud@gmail.com">
                                senat.ft.unud@gmail.com
                            </a>
                        </p>
                    </div>
                    <div class="social-links flex items-center space-x-3">
                        <a href="https://twitter.com/smft_unud?lang=en" target="_blank" class="twitter text-[32px] flex items-center justify-center bg-neutral-600 text-white w-12 h-12 rounded-full text-center hover:bg-[#c3872e] transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/senat.ft.unud" target="_blank" class="facebook text-[32px] flex items-center justify-center bg-neutral-600 text-white w-12 h-12 rounded-full text-center hover:bg-[#c3872e] transition-all duration-300">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/smft_unud/" target="_blank" class="instagram text-[32px] flex items-center justify-center bg-neutral-600 text-white w-12 h-12 rounded-full text-center hover:bg-[#c3872e] transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="line://ti/p/@bye5870b" target="_blank" class="instagram text-[32px] flex items-center justify-center bg-neutral-600 text-white w-12 h-12 rounded-full text-center hover:bg-[#c3872e] transition-all duration-300">
                            <i class="fab fa-line"></i>
                        </a>
                    </div>
                </div>

                <div class="w-full md:w-1/3 h-80 md:h-72">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.1031456915207!2d115.21920857969029!3d-8.671922290645485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ec7f9cc977%3A0xb424284c3310f82c!2sFakultas+Teknik+UNUD%2C+Kampus+Sudirman+-+Denpasar!5e0!3m2!1sen!2sid!4v1531969481290" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="w-full px-6 md:px-10">
            <div class="py-3">
                <div class="footer-line">

                </div>
            </div>

            <div class="copyright">
                &copy; {{date('Y')}} <a href="route('index')"><strong class="text-[#c3872e]">SMFT</strong></a>. All Rights Reserved
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery-migrate.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/easing.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/hoverIntent.js')}}"></script>
    <script src="{{url('js/superfish.min.js')}}"></script>
    <script src="{{url('lib/magnific-popup/magnific-popup.min.js')}}"></script>
    <script src="{{url('js/jquery.nav.js') }}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>

</html>