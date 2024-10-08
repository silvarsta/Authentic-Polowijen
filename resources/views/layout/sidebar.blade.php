  <!DOCTYPE html>

  <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Dashboard - Galeri | Authentic Polowijen</title>
      <meta name="description" content="" />
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="../assets/img/icons/logo-polowijen.png" />

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

      <!-- Icons. Uncomment required icon fonts -->
      <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

      <!-- Core CSS -->
      <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="../assets/css/demo.css" />
      <link rel="stylesheet" href="../extension/summernote/summernote-bs4.min.css">

      <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Helpers -->
      <script src="../assets/vendor/js/helpers.js"></script>
      <script src="../assets/js/config.js"></script>

      <script>
        // call summernote
        $(document).ready(function(){
          $(".summernote").summernote({
            height:200
          });
        });

        // Submit Product Form
        $("#productForm").submit(function(event){
          event.preventDefault();
          var formArray = $(this).serializaArray();

          $.ajax({
            url: '{{ route("tambahSentra") }}',
            type: 'post',
            data: formArray,
            dataType: 'json',
            success: function(response) {
              if (response['status'] == true) {

              } else {
                var errors = response['errors'];
                $(".error").removeClass('invalid-feedback').html('');

                $("input[type = 'text'], select").removeClass('is-invalid');

                $.each(errors, function(key, value){
                  $(`#${key}`).addClass('is-invalid')
                  .siblings('p')
                  .addClass('invalid-feedback')
                  .html(value);
                });
              }
            },
            error: function(){
              console.log("Something Went Wrong");
            }
          });
        });
      </script>
    </head>

    <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo" {{ Request()->is('dashboard') ? 'active' : '' }}>
              <a  href="{{ route('dashboard') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <img style="width: 45px;" src="{{asset ('admin/assets/img/icons/logo-polowijen.png')}}" alt="">
                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Polowijen</span>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item @yield('dashboard')">
                <a href="{{ route('dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Verifikasi</span></li>
              <li class="menu-item @yield('pembayaran')">
                <a href="{{ route('pembayaran') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-support"></i>
                  <div data-i18n="bayar">Verifikasi pembayaran</div>
                </a>
              </li>
              <!-- Website Information -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Website Informasi</span></li>
              <li class="menu-item @yield('galeri')">
                <a href="{{ route('admin.galeri') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-folder"></i>
                  <div data-i18n="galeri">Galeri Polowijen</div>
                </a>
              </li>
              <li class="menu-item @yield('artikel')">
                <a href="{{ route('artikel') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-file"></i>
                  <div data-i18n="artikel">Artikel Polowijen</div>
                </a>
              </li>
              <!-- Stock Obname -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Sentra Polowijen</span>
              </li>
              <li class="menu-item @yield('sentra')">
                <a href="{{ route('admin.sentra') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="sentra">Sentra</div>
                </a>
              </li>
              {{-- <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                  <div data-i18n="Authentications">Transaksi</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item @yield('transaksi')">
                    <a href="{{ url('admin/pembayaran') }}" class="menu-link">
                      <div data-i18n="transaksi">Transaksi Sentra</div>
                    </a>
                  </li> --}}
                  {{-- <li class="menu-item @yield('histori')">
                    <a href="{{ url('admin/histori') }}" class="menu-link" target="_blank">
                      <div data-i18n="history">User Histori</div>
                    </a>
                  </li> --}}
                {{-- </ul>
              </li> --}}

              <!-- Pages -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Edit</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div data-i18n="setting">Account</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item @yield('account')">
                    <a href="{{ route('account') }}" class="menu-link">
                      <div data-i18n="account">Account</div>
                    </a>
                  </li>
                  {{-- <li class="menu-item @yield('notifikasi')">
                    <a href="{{ url('admin/notifikasi') }}" class="menu-link">
                      <div data-i18n="notification">Notifications</div>
                    </a>
                  </li> --}}
                </ul>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->
          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar" >
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="/images/default.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="/images/default.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block">Admin</span>
                              <small class="text-muted">Polowijen</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('account') }}">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">My Profile</span>
                        </a>
                      </li>
                      {{-- <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-cog me-2"></i>
                          <span class="align-middle">Settings</span>
                        </a>
                      </li> --}}
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('logout')}}">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>
            <!-- / Navbar -->

              @section('content')
              @show
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Authentic Polowijen
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../extension/summernote/summernote-bs4.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.summernote').summernote({
          height:200
        });
      });
    </script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
