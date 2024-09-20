@extends('layout.layout')
@section('about', 'active')
@section('title', 'About Us')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/headerr2.jpg')}}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">About Us</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
        <div class="w-100">
          <span class="subheading">Autenthic Polowijen</span>
          <h2 class="mb-4">KAMPUNG BUDAYA POLOWIJEN</h2>
          <p align ="justify">Awal mula tercetus nama Kampung Budaya Polowijen diawali dengan sarasehan Budaya Polowijen di balai RT 03 RW 02 Kel. Polowijen, kec. Blimbing, Kota Malang yang di hadiri pelaku seni budaya tokoh masyarakat pada November 2016. Dalam diskusi itu, terungkap bahwa Polowijen memiliki sejarah tentang keberadaan Situs Sumur Windu Ken Dedes, Situs Joko Lolo, dan Situs Makam Ki Tjondro Suwono (Mbah Reni) Empu Topeng Malang, yang akan menguatkan konsep Polowijen adalah kampung sekaligus kantung budaya
            di Malang.</p>
          <p align="justify">Pada akhir Desember 2016 dan Februari 2017, sarasehan Budaya Polowijen melibatkan lebih banyak warga dan tokoh seni Malang, yang mengungkapkan keberagaman seni tradisional di Polowijen pada era 1950-an, termasuk ketoprak, ludruk, wayang kulit, wayang ope, jaranan, wayang topeng, dan pencak silat. Menyadari seni budaya yang makin lama
            makin punah, maka warga mendirikan Kampung Budaya Polowijen sebagai salah satu komunitas yang turut serla melakukan pelestarian budaya.
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 col-lg-5 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 d-block img" style="background-image: url({{asset("images/sarsehan.jpeg")}});">
              <div class="media-body">
                <h3 class="heading mb-3" style="visibility: hidden;"></h3>
                <p style="visibility: hidden;"></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-5 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 d-block img" style="background-image: url({{asset('images/pengesahan.jpg')}});">
              <div class="media-body">
                <h3 class="heading mb-3" style="visibility: hidden;"></h3>
                <p style="visibility: hidden;">A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 d-block img" style="background-image: url({{asset('images/galeri.jpg')}});">
              <div class="media-body">
                <h3 class="heading mb-3" style="visibility: hidden;">Galeri</h3>
                <p style="visibility: hidden;">A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 d-block img" style="background-image: url({{asset('images/galeri2-5.png')}});">
              <div class="media-body">
                <h3 class="heading mb-3" style="visibility: hidden;">Blog</h3>
                <p style="visibility: hidden;">A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-about img" style="background-image: url({{asset('images/AboutUs2.jpg')}});">
  <div class="overlay"></div>
  <div class="container py-md-5">
    <div class="row py-md-5">
      <div class="col-md d-flex align-items-center justify-content-center">
        <a href="https://www.youtube.com/embed/O3ZDI1pjr2M?si=hVjtOkSFO5yOo7P6" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          <span class="fa fa-play"></span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-12 about-intro">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url({{asset('images/AboutUs1.jpg')}});">
            </div>
          </div>
          <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <p align="justify">Adapun prosesnya dimulai dengan memberikan ornament bambu pada rumah warga RT 03 RW 02 Polowijen sebanyak 15 rumah dan menambahkan gazebo di depan rumah masing masing warga. Prosesnya dengan swadaya mandiri dengan prinsip gotong royong secara bertahap. Butuh waktu 2 tahun untuk melakukan pembenahan infrasturktur agar desain kampung lebih unik antik, indah dan menarik.</p>
                <p align="justify">Kampung Budaya Polowijen diresmikan pada tanggal 2 April 2017 selah 1 hari HUT Kota Malang oleh Walikota Malang, H.Moh Anton. Peresmian di meriahkan dengan Gerakan Senam Sehat, Menanam 100 Pohon, Peletakan Batu Pertama Sasana Budaya, Fragmen Wayang Topeng Tari Topeng Grebeg Jowo 100 Orang, Permainan Dolanan, Albanjari Dan Tari Topeng Gunungsari Dan Sarasehan Kampung Budaya Poloiwjen dengan tema mencari Hari jadi Polowijen oleh Arkelog UM Dwi Cahyono, Kepala Disbudpar Kota Malang Anggota DPRD Kota Malang, Camat Blimbing dan Lurah Polowijen</p>
                @if (Auth::check() && Auth::user()->role == 'user')
                <p><a href="{{route('blog')}}" class="btn btn-primary">Lihat Blog</a></p>
                @endif
                @guest
                <p><a href="{{route('blog')}}" class="btn btn-primary">Lihat Blog</a></p>
                @endguest
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-intro ftco-section ftco-no-pt">
  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <div class="img" style="background-image: url({{asset('images/Ask.jpg')}});">
          <div class="overlay"></div>
          <h2>KAMPUNG BUDAYA POLOWIJEN</h2>
          <p>Warisi Tradisi Lestarikan Budaya</p>
          @if (Auth::check() && Auth::user()->role == 'user')
          <p class="mb-0"><a href="{{route('contact')}}" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
          @endif
          @guest
          <p class="mb-0"><a href="{{route('contact')}}" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
          @endguest
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
