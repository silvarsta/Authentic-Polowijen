@extends('layout.sidebar')
@section('dashboard', 'active')
@section('title', 'Admin | Dashboard')
@section('content')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <!-- Transactions -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Transactions</h5>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="cardOpt1"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                </div>
              </div>
            </div>

            <div class="card-body mt-3">
                <ul class="p-0 m-0">
                    @foreach($orders as $order)
                    <li class="d-flex mb-4 pb-1">
                        <div class="list-group list-group-flush w-100">
                            {{-- <a href="{{ route('orders.show', $order->id) }}" class="list-group-item list-group-item-action"> --}}
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">{{ $order->full_name }}</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <span class="text-muted">Rp</span>
                                        <h6 class="mb-0">{{ $order->total_price }}</h6>
                                    </div>
                                    <div>
                                        <span class="badge bg-label-success me-1">{{ $order->address }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
          </div>
        </div>
        <!--/ Transactions -->
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-3 col-xl-4 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
              <div class="card-title mb-0">
                <h5 class="m-0 me-2">Order Statistic</h5>
              </div>
            </div>
            <div class="card-body mt-3">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column align-items-center gap-1">
                  <h2 class="mb-2">{{ $orders->count() }}</h2>
                  <span>Total Transaksi</span>
                </div>
                <div id="orderStatisticsChart"></div>
              </div>
              <ul class="p-0 m-0 mt-4">
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"
                      ><i class="bx bx-mobile-alt"></i
                    ></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Booking</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">{{ \App\Models\Product::count() }}</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Topeng</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">{{ \App\Models\Product::where('category', 1)->count() }}</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Batik</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">{{ \App\Models\Product::where('category', 2)->count() }}</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-secondary"
                      ><i class="bx bx-football"></i
                    ></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Aksesoris</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">{{ \App\Models\Product::where('category', 1)->count() }}</small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/ Order Statistics -->

        <div class="col-lg-4 col-md-4 mb-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{asset ('admin/assets/img/icons/unicons/chart.png') }}"
                        alt="chart success"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt3"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Stok Produk</span>
                  <!-- dibuat jumlah dari stok produk(nyambung ke bgian stok) -->
                  <h3 class="card-title mb-2">{{ \App\Models\Product::count() }}</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{asset ('admin/assets/img/icons/unicons/galeri.png') }}"
                        alt="Galeri"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Total Galeri</span>
                  <h3 class="card-title text-nowrap mb-1">{{ \App\Models\Galeri::count() }}</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset ('admin/assets/img/icons/unicons/artikel.png') }}" alt="Artikel" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt4"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Total Artikel</span>
                  <h3 class="card-title text-nowrap mb-2">{{ \App\Models\Artikel::count() }}</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset ('admin/assets/img/icons/unicons/wallet.png') }}" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt1"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="cardOpt1">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Paket Booking</span>
                  <h3 class="card-title mb-2">{{ \App\Models\Product::where('category', 2)->count() }}</h3>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                      <div class="card-title">
                        <h5 class="text-nowrap">Website Viewer</h5>
                      </div>
                      <div class="mt-1">
                        <h3 class="mb-1">12</h3>
                      </div>
                    </div>
                    <div id="profileReportChart" class="mt-1"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
@endsection
