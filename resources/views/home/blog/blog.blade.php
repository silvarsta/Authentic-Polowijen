@extends('layout.layout')
@section('blog', 'active')
@section('title', 'Blog')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/sentratop.png')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home
            <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Blog</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
      <!-- 1 Blog -->
      @foreach ($artikel as $item)
      <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('{{ asset('images/'.$item->gambar) }}');"></a>
              <div class="text">
                  <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                      <span class="day" style="font-size: 32px;">{{ $item->created_at->format('d') }}</span>
                  </div>
                  <div class="two">
                      <span class="yr">{{ $item->created_at->format('Y') }}</span>
                      <span class="mos">{{ $item->created_at->format('M') }}</span>
                  </div>

                  </div>
                  <h3 class="heading"><a href=" ">{{ Illuminate\Support\Str::limit($item->judul, 60) }}</a></h3>

                  <p>{{ Illuminate\Support\Str::limit($item->penjelasan, 80) }}</p>

                  <p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreProduk{{ $item->id }}">
                      Read More
                    </button>
                  </p>
              </div>
          </div>
      </div>
      @endforeach
  </div>


<!-- Modal -->
@foreach($artikel as $item)
<div class="modal fade" id="moreProduk{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">{{ $item->judul }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-4 mt-3">
                      <img src="{{ asset('images/'.$item->gambar) }}" class="img-fluid" alt="{{ $item->name }}" style="width: 250px; height: 250px; object-fit: cover;">
                  </div>
                  <div class="col-md-8 mt-2">
                      <p>{{ $item->penjelasan }}</p>
                  </div>
              </div>
            </div>
      </div>
  </div>
</div>
@endforeach

  </div>
  </section>

  <section class="ftco-intro ftco-section ftco-no-pt">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12 text-center">
      <div class="img"  style="background-image: url('{{asset('images/Ask.jpg')}}');">
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
