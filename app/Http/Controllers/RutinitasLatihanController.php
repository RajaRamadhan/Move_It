<?php

namespace App\Http\Controllers;

use App\Models\RutinitasLatihan;
use Illuminate\Http\Request;

class RutinitasLatihanController extends Controller
{
    public function index()
    {
        $routines = RutinitasLatihan::all();
        return response()->json($routines);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|time',
            'calories_burned' => 'required|numeric',
        ]);

        $routine = RutinitasLatihan::create($validatedData);
        return response()->json(['message' => 'Data saved successfully', 'data' => $routine], 201);
    }

    public function show($id)
    {
        $routine = RutinitasLatihan::find($id);
        if (!$routine) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($routine);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|time',
            'calories_burned' => 'nullable|numeric',
        ]);

        $routine = RutinitasLatihan::find($id);
        if (!$routine) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $routine->update($validatedData);
        return response()->json(['message' => 'Data updated successfully', 'data' => $routine]);
    }

    public function destroy($id)
    {
        $routine = RutinitasLatihan::find($id);
        if (!$routine) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $routine->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
