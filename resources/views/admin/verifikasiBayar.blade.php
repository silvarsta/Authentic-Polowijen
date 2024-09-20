@extends('layout.sidebar')
@section('pembayaran', 'active')
@section('title', 'Admin | Verifikasi Pembayaran')
@section('content')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Transaksi Sentra</h4>
      <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>No pesanan</th>
                <th>Nama pembeli</th>
                <th>Tanggal pesanan</th>
                <th>Alamat</th>
                <th>Total bayar</th>
                <th></th>
              </tr>
            </thead>
            @foreach($orders as $order)
            <tbody class="table-border-bottom-0">
              <!-- Baris Isi Galeri -->
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->full_name }}</td>
                <td>{{ $order->phone_number }}</td>
                <td>{{ $order->address }}</td>
                <td>Rp {{ $order->total_price }}</td>
                <td>
                    <button type="button" class="btn btn-success btn-md mx-2 mb-4 mt-4">
                    Terima
                    </button>
                    <button type="button" class="btn btn-danger btn-md mx-2 mb-4 mt-4">
                    Tolak
                    </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
    </div>

@endsection
