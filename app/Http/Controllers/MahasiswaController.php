<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;
use PDF;

class MahasiswaController extends Controller
{
    public function store(Request $request){

        DB::table('mahasiswa')->insert(
            [
                'nama_mahasiswa' => $request['nama_mahasiswa'],
                'ttl' => $request['ttl'],
                'alamat' => $request['alamat'],
                'prodi' => $request['prodi'],
            ]
        );

        return redirect('/success');
    }
    public function cetak_kartu()
    {
    	$mahasiswa = Mahasiswa::all();
 
    	$pdf = PDF::loadview('mahasiswa/data',['mahasiswa'=>$mahasiswa]);
    	return $pdf->download('kartu-mahasiswa.pdf');
    }
}
