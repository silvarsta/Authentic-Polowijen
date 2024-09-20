@extends('layout.layout')
@section('galeri', 'active')
@section('title', 'Galeri')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/galeri-cover.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home
            <i class="fa fa-chevron-right"></i></a></span> <span>Galeri <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Galeri</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        {{-- <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset ('images/tembang-mocapat.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">SINAU TAMBANG MACOPAT JAWA</a></h3>
              <p class="location" align="justify">Kegiatan ini rutin diselanggarakan tiap Jumat Malam di asuh oleh Ki Suryono yang
                dengan sabar melatihkan mocopat disertai dengan tembang-tembang. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/budaya-tandur.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">BUDAYA TANDUR, WIWIT DAN METIK</a></h3>
              <p class="location" align="justify">kegiatan menanam dan memanen padi di sekitar KBP. Waktu tergantung pada penggarapan
                lahan sawah yang mau di tamani atau padi yang siap di panen</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/hari-tari-sedunia.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERINGATAN HARI TARI SEDUNIA</a></h3>
              <p class="location" align="justify">Peringatan Hari tari Sedunia di KBP selalu meriah dan disuport mahasiswa Jurusan Seni
                Tari dan Musik UM, Sanggar
                Tunjung Sekar, Sanggar Seni Tari Sanggar.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/temu-topeng.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">TEMU TOPENG DAN SESEKARAN TOPENG MALANG</a></h3>
              <p class="location" align="justify">
                Temu topeng adalah agenda rutin tahunan yang di selenggarkan oleh KBP agar para seniman topeng Malang.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/perpustakaan.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERPUSTAKAAN KAMPUNG BUDAYA POLOWIJEN</a></h3>
              <p class="location" align="justify">Perpustakaan KBP di gagas dari Himpunan Mahasiswa Jurusan
                Akuntansi Universitas Widyagama.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri-foto.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">GALERI FOTO DAN SENI KBP</a></h3>
              <p class="location" align="justify">Galeri Foto dan seni yang ada di KBP merupakan hasil dokumentasi kegiatan KBP yang
                berkaitan dengan proses kegiatan.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/duta-budaya.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">SEKOLAH DUTA BUDAYA</a></h3>
              <p class="location" align="justify">Sekolah Duta Budaya adalah sekolah informal yang dipersiapkan kepada generasi muda
                untuk mengetahui budaya daerah yang ada di Malang Raya</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/KriyaTopengMalang.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">KRIYA TOPENG MALANG</a></h3>
              <p class="location" align="justify">Kegiatan ini rutin diselanggarakan tiap Jumat Malam di asuh oleh Ki Suryono yang
                dengan sabar melatihkan mocopat disertai dengan tembang-tembang. </p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/gladitaritopeng.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">GLADHI TARI TOPENG MALANG</a></h3>
              <p class="location" align="justify">Kegiatan rutin yang dilakukan oleh anak-anak, ramaja dan ibu-ibu KBP yang rutin
                berlatih tari topeng serta tari tari tradisional pada hari Sabtu Malang dan Minggu pagi.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/perguruan-tinggi.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PERGURUAN TINGGI KE KAMPUNG BUDAYA POLOWIJEN</a></h3>
                <p class="location"align="justify">Lebih dari 30 Perguruan tinggi berkunjung ke
                  KBP dalam rangka penyelenggaraan belajar
                  budaya bagi mahasiswanya. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-2.png')}}');">

              </a>
              <div class="text p-4">
                <h3><a href="#">NEGARA YANG BEKUNJUNG KE KBP</a></h3>
                <p class="location" align="justify">Negara yang berkunjung
                  antara lain Thailand, Amerika, Papua Nugini,
                  Uzbekistan, Afganistan, Vietnam, Kamboja, Mesir, India, Korea Selatan, Ukraina, dll.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-3.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PENITISAN, JAMASAN DAN RUWATAN TOPENG MALANG</a></h3>
                <p class="location" align="justify">Satu tradisi yang berkaitan topeng
  yang secara turun- temurun di wariskan pada
  generasi penerusnya.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-4.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PERINGATAN HARI TARI SEDUNIA</a></h3>
                <p class="location" align="justify">
                  Peringatan Hari Tari Sedunia merupakan hari rayanya para penari yang jatuh pada tanggal 29 Mei. Semua penari bersuka cita merayakan
                  hari raya.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-5.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">GREBEG SURO</a></h3>
                <p class="location" align="justify">Kegiatan yang di selenggarakan
                  sebagai bentuk peringatan Tahun Baru Islam.
                  Grebeg Suro di selenggarakan pada
                  tanggal 1-10 Muharram sebagai
                  wujud syukur kepada Allah SWT.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-6.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">GEBYAK WAYANG
                  TOPENG POLOWIJEN</a></h3>
                <p class="location" align="justify">Pagelaran wayang topeng yang di
                  selenggarakan oleh KBP bersama warga
                  LPMK Polowijen sebagai bagian rangkaian
                  Bersih Desa Polowijen.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-7.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PANAWIDJEN
                  DJAMAN BIJEN</a></h3>
                <p class="location" align="justify">Acara peringatan hari Jadi polowijen
                  yang jatuh pada bulan November di
                  selenggarakan dengan konsep jaman biyen
                  atau tempo dulu.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-8.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">FESTIVAL KAMPUNG
                  BUDAYA POLOWIJEN</a></h3>
                <p class="location" align="justify">Festival peringatah Hari Ulang Tahun
                  KBP yang di rayakan setahun sekali yang di
                  meriahkan dengan berbagai macam atraksi.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-9.png')}}');">

              </a>
              <div class="text p-4">
                <h3><a href="#">PAMERAN DAN
                  EVENT</a></h3>
                <p class="location" align="justify">KBP selama ini aktif mengikuti
                  pameran yang bertemakan investasi,
                  pariwisata dan perdagangan. Pameran yang
                  di selenggarakan oleh Disbudpra Kota Malang.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-1.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PASAR MINGGU LEGI
                  JAJAN TRADISIONAL</a></h3>
                <p class="location" align="justify">Pasar Minggu Legi adalah pasar Jajan Tradisional. Pasar ini di buka khusus sebulan sekali dalam hitungan kalender jawa oleh warga KBP.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-2.png')}}');">

              </a>
              <div class="text p-4">
                <h3><a href="#">PASAR TOPENG
                  KAMPUNG BUDAYA
                  POLOWIJEN</a></h3>
                <p class="location" align="justify">Pasar topeng di resmikan oleh Plt. Walikota
                  Malang, Sutiaji pada tanggal 31 juni 2017 sebagai wadah para seniman topeng.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-3.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">SARASEHAN
                  KAMPUNG BUDAYA
                  POLOWIJEN</a></h3>
                <p class="location" align="justify">Kegiatan yang mambahas tentang
                  persoalan budaya yang di hadiri dari berbagai
                  kalangan masyarakat.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-4.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">SAMBANG KAMPUNG
                  BUDAYA POLOWIJEN</a></h3>
                <p class="location" align="justify">
                  Sambang
                  Kampung selalu di awali dengan MOU atau
                  kerjasama penyelenggaraan kegiatan, di lakukan secara
                  resmi dari instansi pemerintah.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-5.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">KOTHEKAN MUSIK
                  DOLANAN</a></h3>
                <p class="location" align="justify">Kegiatan permainan alat music yang
                  menggunakan bamboo lesung dan kendang.
                  Umumnya secara modern disebut dengan
                  perkusi.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-6.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PERMAINAN
                  TRADISIONAL</a></h3>
                <p class="location" align="justify">Kegiatan pelestarian tentang ragam
                  macam pernainan tradisioal tempo dulu.
                  Permaian tradisional yang penuh dengan
                  sarat makna di rekonstruksi.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-7.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">KRIYA BATIK
                  MALANG</a></h3>
                <p class="location" align="justify">Kriya batik polowijen telah merekrut kurang
                  lebih 50 orang untuk belajar membatik dalam
                  kegiatan workshop kriya batik Polowijen
                  sudah sebanyak 4 kali gelombang pelatihan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-8.png')}}');">

              </a>
              <div class="text p-4">

                <h3><a href="#">PERESMIAN
                  KAMPUNG BUDAYA
                  POLOWIJEN</a></h3>
                <p class="location" align="justify">Kampung Budaya Polowijen diresmikan para
                  daynggal 2 April 2017 selah 1 hari HUT Kota
                  Malang oleh Walikota Malang, H.Moh Anton.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-9.png')}}');">
              </a>
              <div class="text p-4">
                <h3><a href="#">PROSES
                  PEMBANGUNAN</a></h3>
                <p class="location" align="justify">Menyadari seni budaya yang makin lama
                  makin punah, warga mendirikan
                  Kampung Budaya Polowijen untuk melakukan
                  pelestarian budaya.</p>
              </div>
            </div>
          </div> --}}

          @foreach($galeri as $item)
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{ asset('images/'.$item->gambar) }}');">
              </a>
              <div class="text p-4">
                <h3><a href="#">{{ $item->judul }}</a></h3>
                <p class="location" align="justify">{{ $item->deskripsi }}</p>
              </div>
            </div>
          </div>
          @endforeach



      </div>






      {{-- <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              @guest
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="{{url ('galeri')}}">1</a> </li>
                <li><a href="{{url ('galeri/2')}}">2</a></li>
                <li><a href="{{url ('galeri/3')}}">3</a></li>
                <li><a href="#">&gt;</a></li>
              @endguest
              @if (Auth::check() && Auth::user()->role == 'user')
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="{{url ('user/galeri')}}">1</a> </li>
                <li><a href="{{url ('user/galeri/2')}}">2</a></li>
                <li><a href="{{url ('user/galeri/3')}}">3</a></li>
                <li><a href="#">&gt;</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div> --}}
    </div>
  </section>

  <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <div class="img" style="background-image: url('{{asset('images/ask.jpg')}}');">
            <div class="overlay"></div>
            <h2>KAMPUNG BUDAYA POLOWIJEN</h2>
            <p>Warisi Tradisi Lestarikan Budaya</p>
            <p class="mb-0"><a href="{{route('contact')}}" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
