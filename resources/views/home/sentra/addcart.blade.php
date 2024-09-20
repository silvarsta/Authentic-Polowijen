@extends('layout.layout')
@section('sentra', 'active')
@section('title', 'My Cart')
@section('content')

<div class="content-wrapper">
    <section class="main-content" style= " position: absolute; z-index: 1; margin-top: 120px; margin-left: 240px; display: flex; flex-direction: column; min-height: 100vh;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="container bg-white">
                        <div class="row">
                            <section class="col-lg-12 col-md-12" style="padding-up: 100px;">
                                <div class="card mb-4 bg-light border-0 section-header">
                                    <div class="card-body p-5">
                                        <h2 class="mb-0">Shopping Cart</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-7">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item py-3 border-top">
                                                <div class="row align-items-center">
                                                    <div class="col-6 col-md-6 col-lg-7">
                                                        <div class="d-flex">
                                                          <img src="images/KriyaBatik.png" alt="Ecommerce" style="height: 70px; width: 130px; padding-right: 50px; object-fit: cover;">
                                                            <div class="ms-3">
                                                                <a href="product_link">
                                                                    <h6 class="mb-1">Batik Tulis</h6>
                                                                </a>
                                                                <span>
                                                                    <small>IDR 120.000</small>
                                                                </span>
                                                                <div class="mt-2 small lh-1">
                                                                    <a href="cart_delete_link" onclick="return confirm('Are you sure to delete?')" class="text-decoration-none text-inherit">
                                                                        <span class="me-1 align-text-bottom text-muted" style="display: inline-flex; align-items: center;">
                                                                            <img src="images/icon/remove.svg" alt="" style="width: 18px;">
                                                                            <span style="margin-left: 5px;">Remove</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-md-2 col-lg-2">
                                                        <input type="number" name="qty[item_id]" value="item_qty" class="form-control" min="1">
                                                    </div>
                                                    <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                        <span class="fw-bold" style=" color: black;">IDR 120.000</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-3 border-top">
                                                <div class="row align-items-center">
                                                    <div class="col-6 col-md-6 col-lg-7">
                                                        <div class="d-flex">
                                                        <img src="images/Screenshot 2024-02-28 090458.png" alt="Ecommerce" style="height: 70px; width: 130px; padding-right: 50px; object-fit: cover;">
                                                            <div class="ms-3">
                                                                <a href="product_link">
                                                                    <h6 class="mb-1">Topeng Polos</h6>
                                                                </a>
                                                                <span>
                                                                    <small>IDR 120.000</small>
                                                                </span>
                                                                <div class="mt-2 small lh-1">
                                                                    <a href="cart_delete_link" onclick="return confirm('Are you sure to delete?')" class="text-decoration-none text-inherit">
                                                                        <span class="me-1 align-text-bottom text-muted" style="display: inline-flex; align-items: center;">
                                                                            <img src="images/icon/remove.svg" alt="" style="width: 18px;">
                                                                            <span style="margin-left: 5px;">Remove</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-md-2 col-lg-2">
                                                        <input type="number" name="qty[item_id]" value="item_qty" class="form-control" min="1">
                                                    </div>
                                                    <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                        <span class="fw-bold" style=" color: black;">IDR 120.000</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-4">
                                            <a href="products_index_link" class="btn btn-first"
                                            style="background-color: #F15D30; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                                            Continue Shopping</a>
                                            <button type="submit" class="btn btn-second"
                                            style="background-color: transparent;  color: #F15D30;  border: 2px solid #F15D30;  padding: 10px 20px;  border-radius: 5px;">
                                            Update Cart</button>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-4 col-md-5">
                                        <div class="mb-5 card mt-6">
                                            <div class="card-body p-6">
                                                <!-- heading -->
                                                <h2 class="h5 mb-4">Summary</h2>
                                                <div class="card mb-2">
                                                    <!-- list group -->
                                                    <ul class="list-group list-group-flush">
                                                        <!-- list group item -->
                                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="me-auto">
                                                                <div>Item Subtotal</div>
                                                            </div>
                                                            <span>IDR 240.000</span>
                                                        </li>
                                                        <!-- list group item -->
                                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="me-auto">
                                                                <div>Discount</div>
                                                            </div>
                                                            <span>IDR 12.000</span>
                                                        </li>
                                                        <!-- list group item -->
                                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="me-auto">
                                                                <div style=" color: black;">Subtotal</div>
                                                            </div>
                                                            <span  style="color: black;">IDR 228.000</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-grid mb-1 mt-4">
                                                    <!-- btn -->
                                                    <!-- <button class="btn d-flex justify-content-between align-items-center" type="submit"
                                                    style="background-color: #F15D30;
                                                    color: white;
                                                    font-size: 16px;
                                                    padding: 10px 20px;
                                                    border-radius: 5px;">
                                                        Go to Checkout
                                                        <span class="fw-bold" style="padding-left: 49px;">IDR 228.000</span>
                                                    </button> -->
                                                    {{-- <a href="{{route('sentra.cekout', ['page' => $page])}}" class="btn d-flex justify-content-between align-items-center"
                                                        style="background-color: #F15D30;  color: white;  font-size: 16px;  padding: 10px 20px;  border-radius: 5px; text-decoration: none;">
                                                        Go to Checkout
                                                        <span class="fw-bold" style="padding-left: 49px;">IDR 228.000</span>
                                                    </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/sentra.jpg') }}'); position: relative; z-index: 0; display: flex; align-items: center; justify-content: center; min-height: 120vh;">
        <div class="overlay"></div>
        <div class="container"></div>
    </section>
</div>

@endsection
