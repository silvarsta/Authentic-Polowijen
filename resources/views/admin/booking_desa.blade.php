@extends('layout.sidebar')
@section('booking', 'active')
@section('title', 'Admin | Booking Desa')
@section('content')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Booking Kampung Budaya Polowijen</h4>
      <div class="card">
        <button
          type="button"
          class="btn btn-primary btn-lg mx-4 mb-4 mt-4"
          style="width: 200px;"
          data-bs-toggle="modal"
          data-bs-target="#tambahGaleri">
          Tambah Jenis Barang
        </button>
        <button
          type="button"
          class="btn btn-primary btn-lg mx-4 mb-4 mt-4"
          style="width: 200px;"
          data-bs-toggle="modal"
          data-bs-target="#tambahGaleri">
          Tambah Stock
        </button>
        
        
        <!-- Modal -->
        <div class="modal fade" id="tambahGaleri" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Jenis Barang</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
            <!-- Add this part -->
            <div class="modal-body">
              <button
                type="button"
                class="btn btn-secondary btn-lg mx-4 mb-4 mt-4"
                style="width: 200px;">
                Tambah Stock
              </button>
            </div>
            <!-- End of added part -->
              <div class="modal-body">
                <div class="row">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Pilih Gambar</label>
                    <input class="form-control" type="file" id="formFile" />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameBasic" class="form-label">Judul</label>
                    <input type="text" id="nameBasic" class="form-control" placeholder="Tambahkan Judul" />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameBasic" class="form-label">Deskripsi Galeri</label>
                    <input type="text" id="nameBasic" class="form-control" style="height: 100px;" placeholder="Tambahkan Deskripsi" />
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col-6 mb-0">
                    <label for="dobBasic" class="form-label">Time Stamp</label>
                    <input type="text" id="dobBasic" class="form-control" placeholder="12 / 02 / 2024" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
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
              <!-- Baris Isi Galeri -->
              <tr>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xl pull-up mx-3"
                      title="Paket A">
                      <img src="../assets/img/galeri/tembang.png" alt="Avatar"  />
                    </li>
                  </ul>
                </td>
                <td>
                  <strong class="truncate-text">PAKET A</strong>
                </td>
                <!-- Benahi lagi agar bisa fungsi buat cut judul jadi 2 kata saja -->
                <td>Deskripsi paket A</td>
                <td><span class="badge bg-label-primary me-1">12 Januari</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#previewGaleri"
                        ><i class="bx bx-edit-alt me-1"></i> More Preview</a>
                      <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#editGaleri"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
                <!-- Modal Preview-->
                <div class="modal fade" id="previewGaleri" tabindex="-1" aria-hidden="true" aria-labelledby="modalGambarLabel">
                  <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <!-- Dibuat mengambil nama gambar dri database msukannya juga -->
                        <h5 class="modal-title text-center">Sinau Tembang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="../assets/img/galeri/tembang.png" class="img-fluid" alt="Gambar" style="width: 500px;"/>
                        <p class="my-4">Kegiatan ini rutin ...</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal Edit-->
                <div class="modal fade" id="editGaleri" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Galeri</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Pilih Gambar</label>
                            <input class="form-control" type="file" id="formFile" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Judul</label>
                            <input type="text" id="nameBasic" class="form-control" placeholder="Tambahkan Judul" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Deskripsi Galeri</label>
                            <input type="text" id="nameBasic" class="form-control" style="height: 100px;" placeholder="Tambahkan Deskripsi" />
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6 mb-0">
                            <label for="dobBasic" class="form-label">Time Stamp</label>
                            <input type="text" id="dobBasic" class="form-control" placeholder="12 / 02 / 2024" />
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>

              <tr>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xl pull-up mx-3"
                      title="Lilian Fuller">
                      <img src="../assets/img/galeri/tandur.png" alt="Avatar" />
                    </li>
                  </ul>
                </td>
                <td>
                  <i class="fab fa-angular fa-lg text-danger"></i> 
                  <strong class="truncate-text">PAKET B</strong>
                </td>
                <!-- Benahi lagi agar bisa fungsi buat cut judul jadi 2 kata saja -->
                <script>
                  var truncateElement = document.getElementById('truncate');
                  var words = truncateElement.textContent.split(' ').slice(0, 2).join(' ');
                  truncateElement.textContent = words + '...';
                </script>

                <td>Deskripsi paket</td>
                <td><span class="badge bg-label-primary me-1">14 Febuari</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> More Preview</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xl pull-up mx-3"
                      title="Lilian Fuller">
                      <img src="../assets/img/galeri/tembang.png" alt="Avatar" />
                    </li>
                  </ul>
                </td>
                <td>
                  <i class="fab fa-angular fa-lg text-danger"></i> 
                  <strong class="truncate-text">PAKET C</strong>
                </td>
                <!-- Benahi lagi agar bisa fungsi buat cut judul jadi 2 kata saja -->
                <script>
                  var truncateElement = document.getElementById('truncate');
                  var words = truncateElement.textContent.split(' ').slice(0, 2).join(' ');
                  truncateElement.textContent = words + '...';
                </script>

                <td>Deskripsi Paket</td>
                <td><span class="badge bg-label-primary me-1">12 Januari</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> More Preview</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xl pull-up mx-3"
                      title="Lilian Fuller">
                      <img src="../assets/img/galeri/tandur.png" alt="Avatar" />
                    </li>
                  </ul>
                </td>
                <td>
                  <i class="fab fa-angular fa-lg text-danger"></i> 
                  <strong class="truncate-text">PAKET D</strong>
                </td>
                <!-- Benahi lagi agar bisa fungsi buat cut judul jadi 2 kata saja -->
                <script>
                  var truncateElement = document.getElementById('truncate');
                  var words = truncateElement.textContent.split(' ').slice(0, 2).join(' ');
                  truncateElement.textContent = words + '...';
                </script>

                <td>Deskripsi Paket</td>
                <td><span class="badge bg-label-primary me-1">12 Januari</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> More Preview</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
    </div>
@endsection