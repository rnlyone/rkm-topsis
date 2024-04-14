@include('app.app', ['hasil_active' => 'active', 'title' => 'Hasil Akhir'])

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
                            <h2 class="content-header-title float-start mb-0">Hasil Akhir</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="hasil">Hasil Akhir</a>
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
                          @if (auth()->user()->role == 'admin')
                            <div class="card-body">
                                @foreach ($users->where('role', '!=', 'admin') as $user)
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
                                                <table class="wptable user-list-table table">
                                                <thead>
                                                    <tr>
                                                    <th>No.</th>
                                                    <th>Alternatif</th>
                                                    <th>CF</th>
                                                    <th>SF</th>
                                                    <th>Total</th>
                                                    <th>Rank</th>
                                                    <th>Label</th>
                                                    <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($alter as $a => $alt)
                                                            <tr>
                                                                <td>{{$a}}</td>
                                                                <td>{{$alt->nama}}</td>
                                                                <td>{{$corefactor[$user->id][$alt->id]}}</td>
                                                                <td>{{$secondaryfactor[$user->id][$alt->id]}}</td>
                                                                <td>{{$total[$user->id][$alt->id]}}</td>
                                                                <td>{{$totalrank[$user->id][$alt->id]}}</td>
                                                                <td>
                                                                    @if ($total[$user->id][$alt->id] >= 1.00 && $total[$user->id][$alt->id] <=1.79)
                                                                        Sangat Tidak Baik
                                                                    @elseif ($total[$user->id][$alt->id] >= 1.80 && $total[$user->id][$alt->id] <=2.59)
                                                                        Tidak Baik
                                                                    @elseif ($total[$user->id][$alt->id] >= 2.60 && $total[$user->id][$alt->id] <=3.39)
                                                                        Kurang Baik
                                                                    @elseif ($total[$user->id][$alt->id] >= 3.40 && $total[$user->id][$alt->id] <=4.19)
                                                                        Baik
                                                                    @elseif ($total[$user->id][$alt->id] >= 4.20 && $total[$user->id][$alt->id] <=5.00)
                                                                        Sangat Baik
                                                                    @else
                                                                        Belum
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($total[$user->id][$alt->id] >= 1.00 && $total[$user->id][$alt->id] <=3.39)
                                                                        Pasar Tradisional
                                                                    @elseif ($total[$user->id][$alt->id] >= 3.40 && $total[$user->id][$alt->id] <=5.00)
                                                                        Retail Modern
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                          @else
                            <div class="card-body">
                                <div class="accordion accordion-margin" id="accordionMargin" data-toggle-hover="true">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingMargin{{auth()->user()->id}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMargin{{auth()->user()->id}}" aria-expanded="false" aria-controls="accordionMargin{{auth()->user()->id}}">
                                        User - {{auth()->user()->name}} ({{auth()->user()->id}})
                                        </button>
                                    </h2>
                                    <div id="accordionMargin{{auth()->user()->id}}" class="accordion-collapse collapse" aria-labelledby="headingMargin{{auth()->user()->id}}" data-bs-parent="#accordionMargin">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="wptable user-list-table table">
                                                <thead>
                                                    <tr>
                                                    <th>No.</th>
                                                    <th>Alternatif</th>
                                                    <th>CF</th>
                                                    <th>SF</th>
                                                    <th>Total</th>
                                                    <th>Rank</th>
                                                    <th>Label</th>
                                                    <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($alter as $a => $alt)
                                                            <tr>
                                                                <td>{{$a}}</td>
                                                                <td>{{$alt->nama}}</td>
                                                                <td>{{$corefactor[auth()->user()->id][$alt->id]}}</td>
                                                                <td>{{$secondaryfactor[auth()->user()->id][$alt->id]}}</td>
                                                                <td>{{$total[auth()->user()->id][$alt->id]}}</td>
                                                                <td>{{$totalrank[auth()->user()->id][$alt->id]}}</td>
                                                                <td>
                                                                    @if ($total[auth()->user()->id][$alt->id] >= 1.00 && $total[auth()->user()->id][$alt->id] <=1.79)
                                                                        Sangat Tidak Baik
                                                                    @elseif ($total[auth()->user()->id][$alt->id] >= 1.80 && $total[auth()->user()->id][$alt->id] <=2.59)
                                                                        Tidak Baik
                                                                    @elseif ($total[auth()->user()->id][$alt->id] >= 2.60 && $total[auth()->user()->id][$alt->id] <=3.39)
                                                                        Kurang Baik
                                                                    @elseif ($total[auth()->user()->id][$alt->id] >= 3.40 && $total[auth()->user()->id][$alt->id] <=4.19)
                                                                        Baik
                                                                    @elseif ($total[auth()->user()->id][$alt->id] >= 4.20 && $total[auth()->user()->id][$alt->id] <=5.00)
                                                                        Sangat Baik
                                                                    @else
                                                                        Belum
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($total[auth()->user()->id][$alt->id] >= 1.00 && $total[auth()->user()->id][$alt->id] <=3.39)
                                                                        Pasar Tradisional
                                                                    @elseif ($total[auth()->user()->id][$alt->id] >= 3.40 && $total[auth()->user()->id][$alt->id] <=5.00)
                                                                        Retail Modern
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          @endif
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
        })
        });

</script>
