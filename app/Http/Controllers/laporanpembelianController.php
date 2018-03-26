<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\pembelian;
use DB;
use App\laporanpembelian;
class laporanpembelianController extends Controller
{
     public function index()
    {
        //
        
        $pembelian = pembelian::all();
        return view('laporan.beli',compact('pembelian'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index2(Request $request)
   {
     $a = $request->a;
     $b = $request->b;
     $pembelian = pembelian::whereBetween('tgl_pembelian', [$a, $b])->get();
     $sum = $pembelian->sum('total_harga');
        return view('laporan.beli1', compact('pembelian','a','b','sum'));
    }
    public function show()
    {
        # code...
    }
}