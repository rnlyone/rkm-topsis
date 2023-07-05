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

                {{-- NILAI AKHIR --}}
                <div class="card">
                    <div style="margin: 10pt">
                        <div class="card-datatable table-responsive pt-0">
                            <div class="accordion" id="accordionExample" data-toggle-hover="true">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="nilaiakhirhead">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nilaiakhiracc" aria-expanded="true" aria-controls="nilaiakhiracc">
                                            Nilai Akhir
                                        </button>
                                    </h2>
                                    <div id="nilaiakhiracc" class="accordion-collapse collapse" aria-labelledby="nilaiakhirhead" data-bs-parent="#accordionMargin" style="">
                                        <div class="accordion-body">
                                            <table class="user-list-table table wptable" id="nilaiakhirtable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Alternatif</th>
                                                        @foreach ($kritdata as $krit)
                                                            <th>C{{$krit->id}}</th>
                                                        @endforeach
                                                        <th>Nilai Akhir</th>
                                                        <th>Rank</th>
                                                        <th>Tingkat Keparahan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($kelasdata as $kelas)
                                                    <tr class="
                                                        @if ($kelas->tingkat == 10)
                                                            table-primary
                                                        @elseif ($kelas->tingkat == 11)
                                                            table-success
                                                        @elseif ($kelas->tingkat == 12)
                                                            table-warning
                                                        @endif
                                                    "><td colspan="{{5+$kritdata->count()}}">Kelas {{$kelas->tingkat}} {{$kelas->nama}}</td></tr>
                                                        @foreach ($alterdata->where('kelas', $kelas->id) as $i => $alter)
                                                        <tr>
                                                            <td>A{{$i+1}}</td>
                                                            <td>{{$alter->nama}}</td>
                                                            @foreach ($kritdata as $krit)
                                                                <td>{{$krithasil[$krit->id][$alter->id]}}</td>
                                                            @endforeach
                                                            <td>{{$hasil[$alter->kelas][$alter->id]}}</td>
                                                            <td>{{$rankhasil[$alter->kelas][$alter->id]}}</td>
                                                            <td><span class="
                                                                @if ($labelhasil[$alter->kelas][$alter->id] == "Ringan")
                                                                    badge bg-success
                                                                @elseif ($labelhasil[$alter->kelas][$alter->id] == "Sedang")
                                                                    badge bg-warning
                                                                @elseif ($labelhasil[$alter->kelas][$alter->id] == "Berat")
                                                                    badge bg-danger
                                                                @else
                                                                    badge bg-secondary
                                                                @endif
                                                                ">{{$labelhasil[$alter->kelas][$alter->id]}}</span></td>
                                                        </tr>
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- NILAI AKHIR --}}
                <div class="card">
                    <div style="margin: 10pt">
                        <div class="card-datatable table-responsive pt-0">
                            <div class="accordion" id="accordionExample" data-toggle-hover="true">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="ranknilaiakhirhead">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ranknilaiakhiracc" aria-expanded="true" aria-controls="ranknilaiakhiracc">
                                            Nilai Akhir (Berdasarkan Ranking)
                                        </button>
                                    </h2>
                                    <div id="ranknilaiakhiracc" class="accordion-collapse collapse" aria-labelledby="ranknilaiakhirhead" data-bs-parent="#accordionMargin" style="">
                                        <div class="accordion-body">
                                            <table class="user-list-table table wptable" id="ranknilaiakhirtable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Alternatif</th>
                                                        @foreach ($kritdata as $krit)
                                                            <th>C{{$krit->id}}</th>
                                                        @endforeach
                                                        <th>Nilai Akhir</th>
                                                        <th>Rank</th>
                                                        <th>Tingkat Keparahan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($kelasdata as $kelas)
                                                    <tr class="
                                                        @if ($kelas->tingkat == 10)
                                                            table-primary
                                                        @elseif ($kelas->tingkat == 11)
                                                            table-success
                                                        @elseif ($kelas->tingkat == 12)
                                                            table-warning
                                                        @endif
                                                    "><td colspan="{{5+$kritdata->count()}}">Kelas {{$kelas->tingkat}} {{$kelas->nama}}</td></tr>
                                                        @foreach ($alterdata->where('kelas', $kelas->id)->sortBy('rank') as $i => $alter)
                                                        <tr>
                                                            <td>A{{$i+1}}</td>
                                                            <td>{{$alter->nama}}</td>
                                                            @foreach ($kritdata as $krit)
                                                                <td>{{$krithasil[$krit->id][$alter->id]}}</td>
                                                            @endforeach
                                                            <td>{{$hasil[$alter->kelas][$alter->id]}}</td>
                                                            <td>{{$rankhasil[$alter->kelas][$alter->id]}}</td>
                                                            <td><span class="
                                                                @if ($labelhasil[$alter->kelas][$alter->id] == "Ringan")
                                                                    badge bg-success
                                                                @elseif ($labelhasil[$alter->kelas][$alter->id] == "Sedang")
                                                                    badge bg-warning
                                                                @elseif ($labelhasil[$alter->kelas][$alter->id] == "Berat")
                                                                    badge bg-danger
                                                                @else
                                                                    badge bg-secondary
                                                                @endif
                                                                ">{{$labelhasil[$alter->kelas][$alter->id]}}</span></td>
                                                        </tr>
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
