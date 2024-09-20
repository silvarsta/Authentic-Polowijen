@extends('layout.sidebar')
@section('sentra', 'active')
@section('title', 'Admin | Sentra')
@section('content')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Sentra Kampung Budaya Polowijen</h4>
      <div class="card">
        <button type="button" class="btn btn-primary btn-md mx-4 mb-4 mt-4" style="width: 150px;" data-bs-toggle="modal" data-bs-target="#tambahSentra">
          Tambah Produk
        </button>
        <!-- <button type="button" class="btn btn-primary btn-lg mx-4 mb-4 mt-4" style="width: 200px;" data-bs-toggle="modal" data-bs-target="#tambahGaleri">
          Tambah Stock
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="tambahSentra" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <form action="{{ route('tambahSentra') }}" method="post" enctype="multipart/form-data" name="productForm" id="productForm">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                @csrf
                  <div class="row">
                    <div class="mb-3">
                      <label for="picture" class="form-label">Pilih Foto Produk</label>
                      <input class="form-control" type="file" name="picture" id="picture" accept=".jpg, .jpeg, .png" />
                      <p class="errors"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="name" class="form-label">Nama Produk</label>
                      <input type="text" id="name" class="form-control" name="name" placeholder="Masukkan Nama Produk"/>
                      <p class="errors"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                        <label for="category" class="form-label">Kategori Produk</label>
                        <select class="form-select" id="category" name="category">
                          @foreach ($category as $category)
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="price" class="form-label">Harga Produk</label>
                      <input type="number" id="price" name="price" class="form-control" placeholder="Masukkan Harga Produk"/>
                      <p class="errors"></p>
                    </div>
                    <div class="col mb-3">
                      <label for="stock" class="form-label">Stok Produk</label>
                      <input type="number" id="stock" name="stock" class="form-control" placeholder="Masukkan Jumlah Produk"/>
                      <p class="errors"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="description" class="form-label">Deskripsi Produk</label>
                      <input type="text" id="description" name="description" class="form-control summernote" style="height: 100px;" placeholder="Tambahkan Deskripsi" />
                      <p class="errors"></p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Gambar / Video</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal Upload</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <!-- Baris Isi Sentra -->
              @foreach($product as $item)
                <tr>
                  <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                      <li
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        class="avatar avatar-xl pull-up mx-3"
                        title="{{ $item->name }}"
                        data-bs-target="#previewProduk{{ $item->id }}">
                        <img src="{{ asset('images/product/'.$item->picture) }}" alt="{{ $item->name }}"/>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <strong class="truncate-text" id="truncate">{{ Illuminate\Support\Str::limit($item->name, 15) }}</strong>
                  </td>
                  <td class="truncate-text" id="truncate">
                    {{ Illuminate\Support\Str::limit($item->description, 20) }}
                  </td>

                  <td>
                    <span class="badge bg-label-primary me-1">
                        {{ \Carbon\Carbon::parse($item->created_at)->toDateString() }}
                    </span>
                  </td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#previewProduk{{ $item->id }}"
                          ><i class="bx bx-edit-alt me-1"></i> More Preview</a><select class="form-select" id="category" name="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <!-- INI BELUM -->
                        <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#editProduct"
                          ><i class="bx bx-edit-alt me-1"></i> Edit</a>

                        <form action="{{ route('deleteSentra', $item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                  <i class="bx bx-trash me-1"></i> Delete
                              </button>
                          </form>
                      </div>
                    </div>
                  </td>
                  <!-- Modal Preview-->
                  @foreach($product as $item)
                    <div class="modal fade" id="previewProduk{{ $item->id }}" tabindex="-1" aria-hidden="true" aria-labelledby="modalGambarLabel">
                      <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-center">{{ $item->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            <img src="{{ asset('images/product/'.$item->picture) }}" class="img-fluid" alt="{{ $item->name }}" style="width: 500px;"/>

                            <!-- INI DI BENAHI LAGI -->
                            <p class="my-4" style="max-width: 100%; text-align: justify; word-wrap: break-word; margin-left: auto; margin-right: auto; word-wrap: break-word;">

                            {{ $item->description }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach

                  @foreach($product as $item)
                  <!-- Modal Edit-->
                  <div class="modal fade" id="editProduct" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel1">Edit Galeri</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('updateSentra', $item->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="row">
                            <div class="mb-3">
                              <label for="picture" class="form-label">Pilih Foto Produk</label>
                              <input class="form-control" type="file" name="picture" id="picture" accept=".jpg, .jpeg, .png" />
                              <p class="errors"></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <label for="name" class="form-label">Nama Produk</label>
                              <input type="text" id="name" class="form-control" name="name" value="{{ $item->name }}" placeholder="Masukkan Nama Produk"/>
                              <p class="errors"></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                                <label for="category" class="form-label">Kategori Produk</label>
                                <select class="form-select" id="category" name="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <label for="price" class="form-label">Harga Produk</label>
                              <input type="number" id="price" name="price" class="form-control"  value="{{ $item->price }}" placeholder="Masukkan Harga Produk"/>
                              <p class="errors"></p>
                            </div>
                            <div class="col mb-3">
                              <label for="stock" class="form-label">Stok Produk</label>
                              <input type="number" id="stock" name="stock" class="form-control" value="{{ $item->stock }}"  placeholder="Masukkan Jumlah Produk"/>
                              <p class="errors"></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <label for="description" class="form-label">Deskripsi Produk</label>
                              <input type="text" id="description" name="description"  value="{{ $item->description }}" class="form-control summernote" style="height: 100px;" placeholder="Tambahkan Deskripsi" />
                              <p class="errors"></p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                              Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
    </div>

@endsection
