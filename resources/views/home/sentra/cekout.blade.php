    @extends('layout.layout')
    @section('sentra', 'active')
    @section('title', 'Checkout')
    @section('content')

    <section class="main-content" style="position: absolute; z-index: 1; padding-top: 80px; padding-left: 90px; padding-bottom: 120px; display: flex; flex-direction: column; min-height: 100vh; justify-content: center; align-items: center; width: 80%;">
        <div class="container-fluid" style="background-color: white; min-width: 180vh; align-items: center;">
            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 shopping-cart">
                    <div class="card mb-3 bg-light border-0 section-header mt-3 mx-5">
                        <div class="card-body p-1">
                            <h3 class="mb-0">Checkout</h3>
                        </div>
                    </div>
                    <div class="row mx-3">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " style="padding-top:45px;">
                            <div class="mb-5 card mt-6 shadow">
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <h2 class="h5 mb-4">Order Details</h2>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3 ">
                                            <div class="row align-items-center">
                                                <div class="col-6 col-md-6 col-lg-7">
                                                    <div class="d-flex">
                                                        <img src="{{ asset('images/product/'.$product->picture) }}" alt="{{ $product->name }}" style="height: 70px; width: 100px; padding-right: 10px; object-fit: cover;">
                                                        <div class="ms-3 mt-1 mx-3">
                                                            <a href="#">
                                                                <h6 class="mb-0">{{ Illuminate\Support\Str::limit($product->name, 20) }}</h6>
                                                            </a>
                                                            <span class="my-2">
                                                                <small style= "color: black;" class="mt-2">IDR {{ number_format($product->price, 0, ',', '.') }}</small>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1 col-md-1 col-lg-1">
                                                    1
                                                </div>
                                                <div class="col-4 text-lg-end text-start text-md-end col-md-4">
                                                    <span class="fw-bold">IDR {{ number_format($product->price, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                            $discount = $product->price * 0.05;
                                            $tax = $product->price * 0.05;
                                        ?>
                                        <li class="list-group-item py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>Item Subtotal</div>
                                                <div class="fw-bold">IDR {{ number_format($product->price, 0, ',', '.') }}</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>Discount</div>
                                                <div class="fw-bold">IDR {{ number_format($discount, 0, ',', '.') }}</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>Tax (5%)</div>
                                                <div class="fw-bold">IDR {{ number_format($tax, 0, ',', '.') }}</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>Shipping Fee</div>
                                                <div class="fw-bold" id="shipping-fee">IDR 0</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="d-flex align-items-center justify-content-between mb-4 fw-bold">
                                                <div>Grand Total</div>
                                                <div id="grand-total">IDR {{ number_format($product->price, 0, ',', '.') }}</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <a href="{{ route('sentra') }}" class="btn btn-first  @yield('sentra')" style="background-color: #F15D30; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Back to Sentra</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0"><i class='bx bx-map'></i> Form Confirmation</h5>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <form id="addressForm" method="post" enctype="multipart/form-data" action="{{ route('sentra.kirim') }}">
                                        @csrf
                                        <div class="card card-body p-6">
                                            <div class="mb-2">
                                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                                <input style="font-size: 0.9em;" type="text" value="{{ $product->full_name }}" class="form-control" id="fullName" name="fullName" placeholder="Masukkan nama lengkap Anda" required>
                                            </div>
                                            <div class="mb-2">
                                                <label for="address" class="form-label">Alamat</label>
                                                <textarea style="font-size: 0.9em;" class="form-control" value="{{ $product->address }}" id="address" name="address" rows="2" placeholder="Masukkan alamat Anda" required></textarea>
                                            </div>
                                            <div class="mb-2">
                                                <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                                                <input style="font-size: 0.9em;" type="number" class="form-control" value="{{ $product->phoneNumber }}" id="phoneNumber" name="phoneNumber" placeholder="Masukkan nomor telepon Anda" required>
                                            </div>
                                            {{-- <div class="mb-2">
                                                <label for="jumlahTransfer" class="form-label">Jumlah Transfer</label>
                                                <input class="form-control" style="font-size: 0.9em;" type="number" value="{{ $product->JumlahTransfer }}" id="jumlahTransfer" style="height: 10px;" placeholder="Masukkan jumlah transfer" required>
                                            </div> --}}
                                            <div class="mb-2">
                                                <label for="transferMethod" class="form-label">Transfer Melalui</label>
                                                <select class="form-control" id="transfer-melalui" name="transferMethod" style="font-size: 0.9em;" value="{{ $product->transferMethod}}" required>
                                                    <option value="bri" >BRI (6367 0829 8376 917)</option>
                                                    <option value="bca" >BCA (724 9274 9284)</option>
                                                    <option value="shopeepay" >ShopeePay (0863 8366 8923)</option>
                                                    <option value="mandiri" >Mandiri (2467 8247 91)</option>
                                                </select>
                                            </div>
                                            {{-- <div class="mb-2">
                                                <label for="transferMethod" class="form-label">Transfer Melalui</label>
                                                @if(isset($metodes))
                                            <select class="form-control" id="transfer-melalui" name="transferMethod" style="font-size: 0.9em;" required>
                                                @foreach ($metodes as $metode)
                                                    <option value="{{ $metode->id }}">{{ $metode->name }}</option>
                                                @endforeach
                                            </select>
                                        @else
                                            <!-- Display a message or a default option if $metodes is not defined -->
                                            <p>No transfer methods available.</p>
                                        @endif --}}
                                            <div class="mb-3">
                                                <label for="buktiPembayaran" class="form-label">Foto Bukti Transfer</label>
                                                <input class="form-control" type="file" name="buktiPembayaran" value="{{ $product->buktiPembayaran }}" id="buktiPembayaran" accept=".jpg, .jpeg, .png" placeholder="Unggah bukti pembayaran Anda" required/>
                                                <p class="errors"></p>
                                            </div>
                                            <div class="mb-2">
                                                <label for="note" class="form-label">Catatan</label>
                                                <textarea style="font-size: 0.9em;" class="form-control" value="{{ $product->catatan}}" id="note" name="note" rows="2" placeholder="Opsional"></textarea>
                                            </div>


                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="total_price" value="{{ $product->price }}">
                                            <div class="d-flex justify-content-center my-2">
                                                <button type="submit" class="btn btn-second" style="background-color: transparent; color: #F15D30; border: 2px solid #F15D30; padding: 10px 20px; border-radius: 5px;">
                                                    Pesan Sekarang
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/sentra.jpg') }}'); position: relative; z-index: 0; display: flex; align-items: center; justify-content: center; min-height: 180vh;">
            <div class="overlay"></div>
            <div class="container"></div>
    </section>

    @endsection
