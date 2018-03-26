<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\penjualan;
use App\laporanpenjualan;
class laporanpenjualanController extends Controller
{
    //
    public function index()
    {
        //
        $penjualan = penjualan::all();
        return view('laporan.jual',compact('penjualan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(Request $request)
    {
        //
     $a = $request->a;
     $b = $request->b;
     $penjualan = penjualan::whereBetween('created_at', [$a, $b])->get();
     // dd($transaksipenjualan);
     $sum = $penjualan->sum('total_harga');
        return view('laporan.jual1', compact('penjualan','a','b','sum'));
         
    }
}