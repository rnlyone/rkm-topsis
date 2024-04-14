@include('app.app', ['dash_active' => 'active', 'title' => 'Dashboard'])

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <!-- Greetings Card starts -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <div class="text-center mt-1">
                                    <h1 class="mb-1 text-white">Selamat Datang {{auth()->user()->name}},</h1>
                                    <p class="card-text m-auto w-75 mb-1">
                                        Selamat datang di Aplikasi RKM-TOPSIS, Pemilihan Alternatif Karir Mahasiswa Fakultas Ilmu Komputer Menggunakan Metode TOPSIS
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Greetings Card ends -->
                </div>

                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics">
                          <div class="card-header">
                            <h4 class="card-title">Menu</h4>
                            <div class="d-flex align-items-center">
                            </div>
                          </div>
                          <div class="card-body statistics-body">
                            <div class="row">
                              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                  <div class="avatar bg-light-primary me-2">
                                    <a href="{{route('alternatif.index')}}" class="avatar-content">
                                        <i data-feather="target"></i>
                                    </a>
                                  </div>
                                  <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">Alternatif</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                  <div class="avatar bg-light-info me-2">
                                    <a href="{{route('kriteria.index')}}" class="avatar-content">
                                        <i data-feather="grid"></i>
                                    </a>
                                  </div>
                                  <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">Kriteria</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                  <div class="avatar bg-light-danger me-2">
                                    <a href="{{route('subkriteria.index')}}" class="avatar-content">
                                        <i data-feather="archive"></i>
                                    </a>
                                  </div>
                                  <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">Sub Kriteria</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 col-12">
                                <div class="d-flex flex-row">
                                  <div class="avatar bg-light-success me-2">
                                    <a href="{{route('user.index')}}" class="avatar-content">
                                        <i data-feather="user"></i>
                                    </a>
                                  </div>
                                  <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">Manajemen User</h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>


            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@include('app.footer')
