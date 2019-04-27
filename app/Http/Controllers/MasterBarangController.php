<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterBarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = DB::table('masterbarang')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['barang' => $nama_barang]);

    }
}
