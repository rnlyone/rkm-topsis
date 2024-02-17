<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Subkriteria;
use App\Models\User;
use Illuminate\Http\Request;

class MautController extends Controller
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

        public function maut(){
            #get semua data
            $users = User::all();
            $alt = Alternatif::all();
            $krit = Kriteria::all();
            $sub = Subkriteria::all();
            $penilaian = Penilaian::all();



            try {
                foreach($users->where('role', '!=', 'pegawai') as $u => $user){
                    // Normalisasi
                    foreach ($krit as $i => $k) {
                        // Penentuan Nilai Min-Max dan Selisih
                        $max[$user->id][$k->id] = $penilaian->where('id_kriteria', $k->id)->where('id_user', $user->id)->max('nilai');
                        $min[$user->id][$k->id] = $penilaian->where('id_kriteria', $k->id)->where('id_user', $user->id)->min('nilai');
                        $selisih[$user->id][$k->id] = $max[$user->id][$k->id] - $min[$user->id][$k->id];

                        // Normalisasi
                        foreach($alt as $a => $al){
                            $nilai[$user->id][$al->id][$k->id] = $penilaian->where('id_alternatif', $al->id)->where('id_kriteria', $k->id)->first()->nilai;
                            try {
                                $normalisasi[$user->id][$al->id][$k->id] = ($nilai[$user->id][$al->id][$k->id] - $min[$user->id][$k->id]) / $selisih[$user->id][$k->id];
                            } catch (\Throwable $th) {
                                $normalisasi[$user->id][$al->id][$k->id] = 0;
                            }
                            // dd($normalisasi[$al->id][$k->id]);
                        }
                    }

                    //Nilai Akhir
                    foreach($alt as $a => $al){
                        $nilaiakhir[$user->id][$al->id] = 0;
                    }

                    foreach ($krit as $i => $k) {
                        foreach($alt as $a => $al){
                            $xbobot[$user->id][$al->id][$k->id] = $normalisasi[$user->id][$al->id][$k->id] * $k->bobot;
                            $nilaiakhir[$user->id][$al->id] += $xbobot[$user->id][$al->id][$k->id];
                        }
                    }
                    // dd($nilaiakhir, MautController::array_rank($nilaiakhir));
                    $ranking[$user->id] = MautController::array_rank($nilaiakhir[$user->id]);
                }
            } catch (\Throwable $th) {
                dd($th);
            }

            return view('auth.maut', [
                'users' => $users,
                'alter' => $alt,
                'krit' => $krit,
                'sub' => $sub,
                'max' => $max,
                'min' => $min,
                'selisih' => $selisih,
                'nilai' => $nilai,
                'normalisasi' => $normalisasi,
                'nilaiakhir' => $nilaiakhir,
                'xbobot' => $xbobot,
                'ranking' => $ranking
            ]);

        }

        public function indexHasil()
        {
            return view('auth.hasil', [
                'users' => MautController::maut()->users,
                'alter' => MautController::maut()->alter,
                'krit' => MautController::maut()->krit,
                'sub' => MautController::maut()->sub,
                'max' => MautController::maut()->max,
                'min' => MautController::maut()->min,
                'selisih' => MautController::maut()->selisih,
                'nilai' => MautController::maut()->nilai,
                'normalisasi' => MautController::maut()->normalisasi,
                'nilaiakhir' => MautController::maut()->nilaiakhir,
                'xbobot' => MautController::maut()->xbobot
            ]);
        }


}
