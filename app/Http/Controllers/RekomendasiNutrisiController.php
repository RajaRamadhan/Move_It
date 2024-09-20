<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiNutrisi;
use Illuminate\Http\Request;

class RekomendasiNutrisiController extends Controller
{
    public function index()
    {
        $recommendations = RekomendasiNutrisi::all();
        return response()->json($recommendations);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'activity_id' => 'required|integer',
            'food_name' => 'required|string|max:255',
            'calories' => 'required|numeric',
            'protein' => 'required|numeric',
            'carbs' => 'required|numeric',
            'fat' => 'required|numeric',
        ]);

        $recommendation = RekomendasiNutrisi::create($validatedData);
        return response()->json(['message' => 'Data saved successfully', 'data' => $recommendation], 201);
    }

    public function show($id)
    {
        $recommendation = RekomendasiNutrisi::find($id);
        if (!$recommendation) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($recommendation);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'food_name' => 'nullable|string|max:255',
            'calories' => 'nullable|numeric',
            'protein' => 'nullable|numeric',
            'carbs' => 'nullable|numeric',
            'fat' => 'nullable|numeric',
        ]);

        $recommendation = RekomendasiNutrisi::find($id);
        if (!$recommendation) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $recommendation->update($validatedData);
        return response()->json(['message' => 'Data updated successfully', 'data' => $recommendation]);
    }

    public function destroy($id)
    {
        $recommendation = RekomendasiNutrisi::find($id);
        if (!$recommendation) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $recommendation->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
