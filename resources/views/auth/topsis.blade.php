@include('app.app', ['topsis_active' => 'active', 'title' => 'Perhitungan Topsis'])

@php
    use App\Http\Controllers\KriteriaController;
@endphp

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            {{-- directory content --}}
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Perhitungan Topsis</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="owa">Perhitungan Topsis</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Analytics Start -->
            <section class="app-user-list">

                <section id="accordion-with-margin">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">Perhitungan TOPSIS </h4>
                          </div>
                          <div class="card-body">
                            @foreach ($users->where('role', '==', 'mahasiswa') as $user)
                            <div class="accordion accordion-margin" id="accordionMargin" data-toggle-hover="true">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingMargin{{$user->id}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMargin{{$user->id}}" aria-expanded="false" aria-controls="accordionMargin{{$user->id}}">
                                      User - {{$user->name}} ({{$user->id}})
                                    </button>
                                  </h2>
                                  <div id="accordionMargin{{$user->id}}" class="accordion-collapse collapse" aria-labelledby="headingMargin{{$user->id}}" data-bs-parent="#accordionMargin">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <style>
                                                .sticky-column {
                                                    position: sticky;
                                                    right: 0;
                                                    background-color: white; /* Sesuaikan dengan warna latar belakang tabel */
                                                }
                                            </style>
                                            <table class="wptable user-list-table table table-striped">
                                              <thead>
                                                <tr>
                                                    <th colspan="2">Informasi</th>
                                                    <th colspan="{{$krit->count()}}">Nilai</th>
                                                    <th colspan="{{$krit->count()}}">Normalisasi</th>
                                                    <th colspan="{{$krit->count()}}">Normalisasi Terbobot</th>
                                                    <th colspan="2">Jarak Alt. & Solusi Ideal</th>
                                                    <th colspan="2">Nilai Akhir</th>
                                                </tr>
                                                <tr>
                                                  <th>No.</th>
                                                  <th>Alternatif</th>
                                                  @foreach ($krit as $k => $kr)
                                                  <th>K{{$kr->id}}</th>
                                                  @endforeach
                                                  @foreach ($krit as $k => $kr)
                                                  <th>K{{$kr->id}}</th> {{--normalisasi--}}
                                                  @endforeach
                                                  @foreach ($krit as $k => $kr)
                                                  <th>K{{$kr->id}}</th> {{--normalisasi terbobot --}}
                                                  @endforeach
                                                  <th>D+</th> {{--Jarak Alt. & Solusi Ideal --}}
                                                  <th>D-</th> {{--Jarak Alt. & Solusi Ideal --}}
                                                  <th>Preferensi</th>
                                                  <th>Ranking</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach ($alter as $a => $alt)
                                                          <tr>
                                                              <td>{{$a+1}}</td>
                                                              <td>{{$alt->nama}}</td>
                                                              @foreach ($krit as $k => $kr)
                                                              <td>{{$nilai[$user->id][$alt->id][$kr->id] ?? 0}}</td>
                                                              @endforeach
                                                              @foreach ($krit as $k => $kr)
                                                              <td>{{round($normalisasi[$user->id][$kr->id][$alt->id], 2)}}</td>
                                                              @endforeach
                                                              @foreach ($krit as $k => $kr)
                                                              <td>{{round($bobotnormalisasi[$user->id][$kr->id][$alt->id], 2)}}</td>
                                                              @endforeach
                                                              <td>{{$dpositif[$user->id][$alt->id]}}</td>
                                                              <td>{{$dnegatif[$user->id][$alt->id]}}</td>
                                                              <td>{{round($nilaiakhir[$user->id][$alt->id], 2)}}</td>
                                                              <td>{{$ranking[$user->id][$alt->id]}}</td>
                                                          </tr>
                                                  @endforeach
                                              </tbody>
                                              <tfoot>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Alternatif</th>
                                                    @foreach ($krit as $k => $kr)
                                                    <th>K{{$kr->id}}</th>
                                                    @endforeach
                                                    @foreach ($krit as $k => $kr)
                                                    <th>K{{$kr->id}}</th> {{--normalisasi--}}
                                                    @endforeach
                                                    @foreach ($krit as $k => $kr)
                                                    <th>K{{$kr->id}}</th> {{--normalisasi terbobot --}}
                                                    @endforeach
                                                    <th>D+</th> {{--Jarak Alt. & Solusi Ideal --}}
                                                    <th>D-</th> {{--Jarak Alt. & Solusi Ideal --}}
                                                    <th>Preferensi</th>
                                                    <th>Ranking</th>
                                                  </tr>
                                                <tr>
                                                    <th colspan=""></th>
                                                    <th colspan="">Nilai Pembagi</th>
                                                    @foreach ($krit as $k => $kr)
                                                    <th>{{$pembagi[$user->id][$kr->id] ?? 0}}</th>
                                                    @endforeach
                                                    <th colspan="{{$krit->count()-1}}"></th>
                                                    <th colspan="">SI+</th>
                                                    @foreach ($krit as $k => $kr)
                                                    <th>{{$positif[$user->id][$kr->id] ?? 0}}</th>
                                                    @endforeach
                                                    <th colspan="4"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="{{$krit->count()*2+1}}"></th>
                                                    <th colspan="">SI-</th>
                                                    @foreach ($krit as $k => $kr)
                                                    <th>{{$negatif[$user->id][$kr->id] ?? 0}}</th>
                                                    @endforeach
                                                    <th colspan="4"></th>
                                                </tr>
                                              </tfoot>
                                            </table>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endforeach


                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

            </section>
            @if (session()->get('success'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Sukses</h4>
                <div class="alert-body">
                    {{session('success')}}
                </div>
              </div>
            @elseif (session()->get('error'))
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error</h4>
                <div class="alert-body">
                    {{session('error')}}
                </div>
              </div>
            @endif

        </div>
    </div>
</div>

{{-- MODAL --}}


{{-- MODAL END --}}


<!-- END: Content-->
@include('app.footer')
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
        const table = $('.wptable').DataTable({
            searching: false,
            paging: false,
            info: false,
        })
        });
</script>
