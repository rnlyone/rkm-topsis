<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Subkriteria;
use App\Models\User;
use Illuminate\Http\Request;

class TopsisController extends Controller
{

    function array_rank( $in ) {
        $x = $in; arsort($x);
        $rank       = 0;
        $hiddenrank = 0;
        $hold = null;
        foreach ( $x as $key=>$val ) {
            $hiddenrank += 1;
            $rank = $hiddenrank;
            if ( is_null($hold) || $val < $hold ) {
                $hold = $val;
            }
            $in[$key] = $rank;
        }
        return $in;
        }

        function reverse_rank( $in ) {
            $k = array_keys($in);
            $v = array_values($in);

            $rv = array_reverse($v);

            $b = array_combine($k, $rv);

            return $b;
        }

        public function topsis(){
            #get semua data
            $users = User::all();
            $alt = Alternatif::all();
            $krit = Kriteria::all();
            $sub = Subkriteria::all();
            $penilaian = Penilaian::all();

            try {
                foreach ($users->where('role', '!=', 'admin') as $u => $user) {
                    #Menentukan Pembagi
                    try {
                        foreach ($krit as $i => $k) {
                            $pembagi[$user->id][$k->id] = 0;
                            foreach ($alt as $i => $al) {
                                $nilai[$user->id][$al->id][$k->id] = $penilaian->where('id_alternatif', $al->id)->where('id_kriteria', $k->id)->where('id_user', $user->id)->first()->nilai ?? 0;
                                $pembagi[$user->id][$k->id] += pow($penilaian->where('id_alternatif', $al->id)->where('id_kriteria', $k->id)->where('id_user', $user->id)->first()->nilai, 2);
                            }
                            $pembagi[$user->id][$k->id] = sqrt($pembagi[$user->id][$k->id]);
                        }
                    } catch (\Throwable $th) {
                        $pembagi[$user->id][$k->id] = 1;
                    }

                    #Normalisasi
                    foreach ($alt as $aq => $al) {
                        foreach ($krit as $iq => $k) {
                            try {
                                #Normalisasi Bobot Keputusan
                                $normalisasi[$user->id][$k->id][$al->id] = $nilai[$user->id][$al->id][$k->id] / $pembagi[$user->id][$k->id];
                                #Pembobotan Ternormalisasi
                                $bobotnormalisasi[$user->id][$k->id][$al->id] = $normalisasi[$user->id][$k->id][$al->id] * $k->bobot;
                                // dd($aq, $iq);
                                // if ($aq == 1 && $iq == 0) {
                                //     dd($user->id, $al->id, $k->id, $nilai, $nilai[$user->id][$al->id][$k->id], $pembagi[$user->id][$k->id], $normalisasi[$user->id][$k->id][$al->id]);
                                // }
                            } catch (\Throwable $th) {
                                $normalisasi[$user->id][$k->id][$al->id] = 0;
                                $bobotnormalisasi[$user->id][$k->id][$al->id] = 0;
                            }

                        }
                    }

                    #Solusi Ideal
                    foreach ($krit as $i => $k) {
                        $positif[$user->id][$k->id] = max($bobotnormalisasi[$user->id][$k->id]);
                        $negatif[$user->id][$k->id] = min($bobotnormalisasi[$user->id][$k->id]);
                        // dd($bobotnormalisasi[$user->id][$k->id], $positif[$user->id][$k->id]);
                    }


                    #Penentuan Jarak
                    foreach ($alt as $i => $al) {
                        $dpositif[$user->id][$al->id] = 0;
                        $dnegatif[$user->id][$al->id] = 0;
                        foreach ($krit as $i => $k) {
                            $dpositif[$user->id][$al->id] += pow($positif[$user->id][$k->id] - $bobotnormalisasi[$user->id][$k->id][$al->id], 2);
                            $dnegatif[$user->id][$al->id] += pow($negatif[$user->id][$k->id] - $bobotnormalisasi[$user->id][$k->id][$al->id], 2);
                        }
                        $dpositif[$user->id][$al->id] = sqrt($dpositif[$user->id][$al->id]);
                        $dnegatif[$user->id][$al->id] = sqrt($dnegatif[$user->id][$al->id]);
                        #Nilai Preferensi
                        try {
                            $nilaiakhir[$user->id][$al->id] = $dnegatif[$user->id][$al->id] / ($dnegatif[$user->id][$al->id]+$dpositif[$user->id][$al->id]);
                        } catch (\Throwable $th) {
                            $nilaiakhir[$user->id][$al->id] = 0;
                        }
                    }
                    $ranking[$user->id] = TopsisController::array_rank($nilaiakhir[$user->id]);
                }

            } catch (\Throwable $th) {
                throw $th;
            }

            return view('auth.topsis', [
                'users' => $users,
                'alter' => $alt,
                'krit' => $krit,
                'sub' => $sub,
                'nilai' => $nilai,
                'normalisasi' => $normalisasi,
                'bobotnormalisasi' => $bobotnormalisasi,
                'pembagi' => $pembagi,
                'positif' => $positif,
                'negatif' => $negatif,
                'dpositif' => $dpositif,
                'dnegatif' => $dnegatif,
                'nilaiakhir' => $nilaiakhir,
                'ranking' => $ranking
            ]);

        }

        public function indexHasil()
        {
            return view('auth.hasil', [
                'users' => TopsisController::topsis()->users,
                'alter' => TopsisController::topsis()->alter,
                'krit' => TopsisController::topsis()->krit,
                'sub' => TopsisController::topsis()->sub,
                'nilai' => TopsisController::topsis()->nilai,
                'normalisasi' => TopsisController::topsis()->normalisasi,
                'bobotnormalisasi' => TopsisController::topsis()->bobotnormalisasi,
                'pembagi' => TopsisController::topsis()->pembagi,
                'positif' => TopsisController::topsis()->positif,
                'negatif' => TopsisController::topsis()->negatif,
                'dpositif' => TopsisController::topsis()->dpositif,
                'dnegatif' => TopsisController::topsis()->dnegatif,
                'nilaiakhir' => TopsisController::topsis()->nilaiakhir,
                'ranking' => TopsisController::topsis()->ranking
            ]);
        }


}
