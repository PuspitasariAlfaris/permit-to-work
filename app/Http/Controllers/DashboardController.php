<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// Pastikan nama Model ini (Permit) sesuai dengan yang ada di folder app/Models Anda
use App\Models\Permit; 

class DashboardController extends Controller
{
    public function admin()
{
     $tableData = [
        ['id' => 'PRM-001', 'nama' => 'Mira Agustiansyah', 'area' => 'Area Las', 'jenis' => 'Cold Work', 'tanggal' => '01 Mar 2026', 'status' => 'Disetujui'],
        ['id' => 'PRM-002', 'nama' => 'Budi Santoso', 'area' => 'Line 1', 'jenis' => 'Hot Work', 'tanggal' => '01 Mar 2026', 'status' => 'Pending'],
        ['id' => 'PRM-003', 'nama' => 'Dewi Rahayu', 'area' => 'Area Produksi', 'jenis' => 'Confined Space', 'tanggal' => '01 Mar 2026', 'status' => 'Ditolak'],
        ['id' => 'PRM-004', 'nama' => 'Ahmad Fauzi', 'area' => 'Area Gudang', 'jenis' => 'Working at Height', 'tanggal' => '06 Mar 2026', 'status' => 'Disetujui'],
        ['id' => 'PRM-005', 'nama' => 'Siti Nurhaliza', 'area' => 'Line 2', 'jenis' => 'Electrical Work', 'tanggal' => '06 Mar 2026', 'status' => 'Pending'],
        ['id' => 'PRM-006', 'nama' => 'Riko Permana', 'area' => 'Area Las', 'jenis' => 'Cold Work', 'tanggal' => '06 Mar 2026', 'status' => 'Ditolak'],
        ['id' => 'PRM-007', 'nama' => 'Lestari Wulandari', 'area' => 'Line 1', 'jenis' => 'Hot Work', 'tanggal' => '11 Mar 2026', 'status' => 'Disetujui'],
        ['id' => 'PRM-008', 'nama' => 'Yoga Prasetya', 'area' => 'Line 1', 'jenis' => 'Hot Work', 'tanggal' => '19 Mar 2026', 'status' => 'Pending'],
        ['id' => 'PRM-009', 'nama' => 'Fitri Handayani', 'area' => 'Area Gudang', 'jenis' => 'Confined Space', 'tanggal' => '11 Mar 2026', 'status' => 'Ditolak'],
        ['id' => 'PRM-010', 'nama' => 'Dani Kurniawan', 'area' => 'Line 2', 'jenis' => 'Electrical Work', 'tanggal' => '16 Mar 2026', 'status' => 'Disetujui'],
    ];
    $chartData = [
        'hot' => Permit::where('jenis_pekerjaan', 'Hot Work')->count(),
        'cold' => Permit::where('jenis_pekerjaan', 'Cold Work')->count(),
        'penggalian' => Permit::where('jenis_pekerjaan', 'Penggalian')->count(),
        'listrik' => Permit::where('jenis_pekerjaan', 'Listrik & Instrument')->count(),
        'kendaraan' => Permit::where('jenis_pekerjaan', 'Kendaraan & Alat Berat')->count(),
        'confined' => Permit::where('jenis_pekerjaan', 'Confined Space')->count(),
        'kompresor' => Permit::where('jenis_pekerjaan', 'Kompressor Oksigen')->count(),
    ];

    return view('admin.dashboard', compact('chartData', ''));
}

    public function pekerja()
    {
        return view('pekerja.dashboard');
    }

    public function supervisor()
    {
        return view('supervisor.dashboard');
    }

    public function safety()
    {
        return view('safety.dashboard');
    }
}