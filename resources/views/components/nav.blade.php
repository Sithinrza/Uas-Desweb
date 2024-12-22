@extends('layout.app')
<div class="container">
    <div class="navbar">
        <a href="index.html">
            <img src="{{ asset('css/ikon.png') }}" id="logo">
        </a>
        <h1 class="tlogo">MUSEUM GEOLOGI</h1>
        <nav>
            <ul class="left-menu">
                <!-- Menu kiri kosong, hanya logo dan title -->
            </ul>

            <ul class="right-menu">
                <li><a href="index.html" class="menu">Home</a></li>
                <li><a href="#event" class="menu">Event</a></li>
                <li><a href="collection.html" class="menu">About</a></li>

                @guest
                <!-- Tampilkan Sign In jika belum login -->
                <li><a href="{{ route('login') }}" class="menu">Sign In</a></li>
                @endguest

                @auth
                <!-- Dropdown untuk nama pengguna jika sudah login -->
                <li class="dropdown">
                    <a href="#" class="menu dropdown-toggle">
                        {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="menu logout-btn">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </nav>
    </div>



    <div class="row">
        <div class="col-1">
            <h2>Selamat Datang di</h2>
            <h3>MUSEUM GEOLOGI BANDUNG</h3>
            <p>Berwisata sambil belajar sejarah</p>
            <br>
            <button type="button"><b>Konsultasi</b></i></button>
        </div>
        <div class="col-2">
            <img style="height: 550px" src="{{ asset('css/foto.webp') }}" class="rex">
        </div>
</div>
<div class="row">
    <div class="col-1">
        <img src="img/pictures/geo.jpg" class="rex">
    </div>
    <div class="col-1">
        <h2>Menjelajahi</h2>
        <h3>MUSEUM GEOLOGI BANDUNG</h3>
        <p>Museum Geologi (Aksara Sunda Baku, Musieum Géologi Bandung) didirikan pada tanggal 16 Mei 1929 Museum ini telah direnovasi dengan dana bantuan dari JICA (Japan International Cooperation Agency). Setelah mengalami renovasi, Museum Geologi dibuka kembali dan diresmikan oleh Wakil Presiden RI, Megawati Soekarnoputri pada tanggal 23 Agustus 2000. Sebagai salah satu monumen bersejarah, museum berada di bawah perlindungan pemerintah dan merupakan peninggalan nasional. Dalam Museum ini, tersimpan dan dikelola materi-materi geologi yang berlimpah, seperti fosil, batuan, mineral. Kesemuanya itu dikumpulkan selama kerja lapangan di Indonesia sejak 1850.</p>
    </div>
</div>
</div>

