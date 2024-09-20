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
          <h2 class="mb-4">Pegiat Kampung Budaya Polowijen Bentuk Asosiasi Batik Malang</h2>
          <p align="justify">Malang – Dalam rangka menghidupkan kembali gairah batik Malang usai pandemi Covid-19, Pegiat Kampung Budaya Poln, Isa Wahyudi punya langkah strategis. </p>
          <p align="justify">Pria yang akrab dipanggil Ki Demang ini memelopori terbentuknya Asosiasi Pengusaha dan Pengrajin Batik Kota Malang, Jumat Isa Wahyudi akrab dipanggil Ki Demang, memelopori terbentuknya Asosiasi Pengusaha dan Pengrajin Batik Kota Malang, Jumat 21 Oktober 2022. Isa Wahyudi mengungkapkan sudah ada 30 pengusaha batik dan pengrajin batik yang tergabung dalam asosiasi yang dikelolanya. Hal ini dilakukan untuk membantu agar dunia perbatikan di Kota Malang bisa berkembang pesat.</p>
          <p align="justify">“Dari 30 pengusaha dan pengrajin batik yang kami kelola ada yang sukses go internasional. Namun ada juga yang masih di lokal Malang saja. Beragamnya asal anggota kami menjadi kekuatan untuk bisa saling belajar dan saling membantu,” jelas Ki Demang.</p>
          <p align="justify">Ke depannya, Ki Demang juga menyebutkan asosiasi batik Malang ini akan membentuk koperasi salah satu di antaranya koperasi nanti mencari bahan baku batik bersama. Pasalnya dengan mendatangkan bersama, bahan baku tentunya ongkos produksi batik bisa terus ditekan. Ke depan yang ditonjolkan akan mengangkat batik-batik yang bernuansa heritage, termasuk juga menonjolkan ikon Arema. Terlebih saat ini Malang Raya sedang berduka setelah adanya tragedi di Stadion Kanjuruhan. “Kami ingin melalui batik bisa mengangkat semangat dan jiwa arek-arek Malang yang tercermin dari lambang singa,” terangnya.</p>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>
<p class="text-center"><a href="{{ route('blog')}}" class="btn btn-primary">Kembali</a></p>

<section class="ftco-intro ftco-section ftco-no-pt">
  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <div class="img" style="background-image: url(images/Ask.jpg;">
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
