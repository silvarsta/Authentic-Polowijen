@extends('layout.layout1')
@section('blog', 'active')
@section('title', 'Blog')
@section('content')


  <section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-15 order-md-last heading-section pl-md-20 ftco-animate d-flex align-items-center">
        <div class="w-100">
          <span class="subheading"></span>
          <h2 class="mb-4">{{ $artikel->judul }}</h2>
          <p align="justify"> {{$artikel->penjelasan}}</p>
      </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>
@if (Auth::check() && Auth::user()->role == 'user')
  <p class="text-center"><a href="{{ route('blog')}}" class="btn btn-primary">Kembali</a></p>

@else
<p class="text-center"><a href="{{ route('blog')}}" class="btn btn-primary">Kembali</a></p>
@endif

<section class="ftco-intro ftco-section ftco-no-pt">
  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <div class="img" style="background-image: url(images/Ask.jpg);">
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


    <!-- <p align="justify">Momen paling menggembirakan dan dinantikan oleh anak-anak sekolah adalah masa perayaan kelulusan atau wisuda sekolah. Suasana haru, riang, dan gembira melalui prosesi wisuda sebagai ajang perpisahan/pelepasan siswa untuk melanjutkan pendidikan yang lebih tinggi. Suasana seperti itulah, salah satunya terjadi di SDN 3 Polowijen, Blimbing, Kota Malang, Jawa Timur, Senin (22/5/2017).</p>
          <p align="justify">Kepala sekolah SDN 3 Polowijen Dra. Endang Tripuji dalam pidatonya menitipkan pesan kepada anak-anak dan wali murid yang hadir mendampingi agar tetaplah semangat belajar meraih prestasi tinggi dan mengembangkan seni budaya untuk membangun karakter pribadi berbudi pekerti luhur. "Itulah sejatinya pencapaian prestasi belajar dan pendidikan," terang Endang.</p>
          <p align="justify">Ditegaskan Endang, sebagai warga Polowijen patutlah berbangga dengan kekayaan sejarah seni tradisi dan kebudayaan, bahwa Polowijen itu dulu sebagai daerah otonom atau desa perdikan yang disebut Sima atau Swatantra Panawidyan karena ada Mandala Mahayana Mpu Purwa yang tidak lain adalah ayahnya Ken Dedes.</p>
          <p align="justify">"Swatantra Panawidyan kala itu sebagai pusat pendidikan dan penyebaran keagamaan pada abad X kerajaan Kanjuruhan," katanya. </p>
          <p align="justify">"Oleh karena itu siswa-siswa Polowijen harus maju dan berprestasi dalam bidang pendidikan dan kebudayaan," tandasnya.</p>
          <p align="justify">Panggung hiburan wisuda SDN 3 Polowijen dipentaskan beberapa tarian topeng oleh siswa-siswa setempat, diantaranya Tari Topeng Grebeg Jowo, Grebeg Sabrang, Bapang, dan Gunungsari, serta tari-tari kreasi lain seperti Tari Merak, Jaran Kore, Khuntul, Dor-Dor, Onclang dan Gagak.</p> -->
