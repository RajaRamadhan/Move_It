<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller
{
    public function index()
    {
        // Ini adalah contoh fungsi index untuk menampilkan data
        return response()->json([
            'message' => 'Controller dasar Laravel'
        ]);
    }

    public function create(Request $request)
    {
        // Fungsi untuk membuat data baru
        $data = $request->all();

        // Logika untuk menyimpan data

        return response()->json([
            'message' => 'Data berhasil dibuat',
            'data' => $data
        ]);
    }

    public function show($id)
    {
        // Fungsi untuk menampilkan data berdasarkan ID
        // Logika untuk mengambil data dari model

        return response()->json([
            'message' => 'Menampilkan data ID: ' . $id
        ]);
    }

    public function update(Request $request, $id)
    {
        // Fungsi untuk memperbarui data
        $data = $request->all();

        // Logika untuk memperbarui data

        return response()->json([
            'message' => 'Data berhasil diperbarui',
            'data' => $data
        ]);
    }

    public function delete($id)
    {
        // Fungsi untuk menghapus data berdasarkan ID
        // Logika untuk menghapus data

        return response()->json([
            'message' => 'Data berhasil dihapus dengan ID: ' . $id
        ]);
    }
}
