<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    // show pembayaran SPP
    public function showPembayaran()
    {
        $data['auth'] = 'kepala_staff';
        return view('master.pembayaran.index', $data);
    }

    // Show Laporan SPP Tahunan
    public function showReport()
    {
        $data['auth'] = 'kepala_staff';
        return view('master.pembayaran.report', $data);
    }
}