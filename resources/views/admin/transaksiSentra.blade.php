@extends('layout.sidebar')
@section('transaksi', 'active')
@section('title', 'Admin | Transaksi Sentra')
@section('content')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Transaksi Sentra</h4>
      <div class="card">
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
                <th>no</th>
                <th>no pesanan</th>
                <th>nama pembeli</th>
                <th>Tanggal pesanan</th>
                <th>Metode bayar</th>
                <th>Status bayar</th>
                <th>Total bayar</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <!-- Baris Isi Galeri -->
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>5</td>
                  
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
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>5</td>
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>5</td>
              </tr>              
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
    </div>

@endsection