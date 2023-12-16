<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use App\Models\Rental;

class RentalController extends Controller
{
    public function rental()
    {
        // Ambil semua mobil yang belum dipinjam
        $allCars = Car::where('status', '!=', 'rented')->get();

        return view('rental', compact('allCars'));
    }

    // Metode untuk menyimpan peminjaman
    public function store(Request $request)
    {
        // Validasi data input sesuai kebutuhan
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $user = Auth::user();

        // Simpan peminjaman ke database
        if (Rental::create([
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'user_id' => $user->id, 
        ])) {
            return redirect('home')->with('success', 'Peminjaman berhasil ditambahkan.');
        }
        else{
            return redirect()->route('rental')->with('failed', 'Peminjaman tidak berhasil dibuat!');
        }
    }

        
    }

