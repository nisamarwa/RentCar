<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; 

class AddCarController extends Controller
{
    public function add()
    {
        return view('add-car');
    }

    public function addcaraction(Request $request)
    {
        $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif_sewa' => 'required|numeric',
        ]);

        if (Car::create([
            'merek' => $request->merek,
            'model' => $request->model,
            'nomor_plat' => $request->nomor_plat,
            'tarif_sewa' => $request->tarif_sewa
        ])) {
            return redirect('home')->with('success', 'Mobil berhasil ditambahkan.');
        } else {
            return redirect('home')->with('error', 'Gagal menambahkan mobil.');
        }
    }
}

