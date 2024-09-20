@extends('layout.sidebar')
@section('artikel', 'active')
@section('title', 'Admin | Artikel')
@section('content')

 <!-- Content wrapper -->
 <div class="content-wrapper">
      <!-- Content -->
      <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Artikel Blog Kampung Budaya Polowijen</h4>
        <div class="card">
          <button
            type="button"
            class="btn btn-primary btn-lg mx-4 mb-4 mt-4"
            style="width: 200px;"
            data-bs-toggle="modal"
            data-bs-target="#tambahArtikel">
            Tambah Artikel
          </button>

          <!-- Modal -->
          <div class="modal fade" id="tambahArtikel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('admin.artikel.tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Tambah Artikel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar Blog</label>
                                    <input class="form-control" type="file" id="gambar" name="gambar"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="judul" class="form-label">Judul Blog</label>
                                    <input type="text" id="judul" class="form-control" name="judul" placeholder="Tambahkan Judul" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="penjelasan" class="form-label">Penjelasan</label>
                                    <input type="text" id="penjelasan" class="form-control" name="penjelasan" style="height: 100px;" placeholder="Tambahkan Penjelasan" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
              </div>
            </div>
          </div>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>Gambar / Video</th>
                  <th>Judul Blog</th>
                  <th>Penjelasan</th>
                  <th>Tanggal Upload</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">

                <!-- Baris Isi Artikel -->
                @foreach($artikel as $item)
                <tr>
                  <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xl pull-up mx-3"
                            title="{{ $item->judul }}"
                            data-bs-target="#previewArtikel{{ $item->id }}">
                            <img src="{{ asset('images/'.$item->gambar) }}" alt="Avatar" />
                        </li>
                    </ul>
                    </td>
                    <td>
                        <i class="fab fa-angular fa-lg text-danger"></i>
                        <strong class="truncate-text">{{ Illuminate\Support\Str::limit($item->judul, 15) }}</strong>
                    </td>

                    <td style="max-width: 150px; overflow: hidden; white-space: nowrap;">{{ Illuminate\Support\Str::limit($item->penjelasan, 30) }}</td>
                    <td><span class="badge bg-label-primary me-1">{{ \Carbon\Carbon::parse($item->created_at)->toDateString() }}</span></td>
                    <td>
                </form>

                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#previewArtikel{{ $item->id }}"
                            ><i class="bx bx-book-open me-1"></i> More Preview</a>

                            <!-- Tombol Edit -->
                            <a class="dropdown-item" href="{{ route('admin.artikel.edit', $item->id) }}" data-bs-toggle="modal" data-bs-target="#editArtikel{{ $item->id }}">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('admin.artikel.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                      </div>
                    </td>
                    @endforeach

            @foreach($artikel as $item)
            <!-- Modal Preview-->
              <div class="modal fade" id="previewArtikel{{ $item->id }}" tabindex="-1" aria-hidden="true" aria-labelledby="modalArtikelLabel{{ $item->id }}">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!-- Dibuat mengambil nama gambar dri database msukannya juga -->
                      <h5 class="modal-title text-center" id="modalArtikelLabel{{ $item->id }}">{{ $item->judul }}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="{{ asset('images/'.$item->gambar) }}" class="img-fluid" alt="Gambar" style="width: 500px;"/>
                      <p style="max-width: 310px; overflow: hidden; white-space: nowrap;">{{ $item->penjelasan }}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Modal Preview-->
            </tr>
            @endforeach

            @foreach($artikel as $item)
            <!-- Modal Edit-->
            <div class="modal fade" id="editArtikel{{ $item->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Edit Artikel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.artikel.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Pilih Gambar</label>
                                        <input class="form-control" type="file" id="formFile" name="gambar" />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Tambahkan Judul Blog" value="{{ $item->judul }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="penjelasan" class="form-label">Penjelasan Galeri</label>
                                        <input type="text" id="penjelasan" name="penjelasan" class="form-control" style="height: 100px;" placeholder="Tambahkan Penjelasan" value="{{ $item->penjelasan }}" />
                                    </div>
                                </div>
                                <!-- Tambahkan input lain sesuai kebutuhan -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Edit-->
            @endforeach

                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--/ Basic Bootstrap Table -->
      </div>
    </div>
@endsection