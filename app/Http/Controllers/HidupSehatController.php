<?php

namespace App\Http\Controllers;

use App\Models\HidupSehat;
use Illuminate\Http\Request;

class HidupSehatController extends Controller
{
    public function index()
    {
        $healthyLivingItems = HidupSehat::all();
        return response()->json($healthyLivingItems);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string',
        ]);

        $healthyLivingItem = HidupSehat::create($validatedData);
        return response()->json(['message' => 'Data saved successfully', 'data' => $healthyLivingItem], 201);
    }

    public function show($id)
    {
        $healthyLivingItem = HidupSehat::find($id);
        if (!$healthyLivingItem) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($healthyLivingItem);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'type' => 'nullable|string',
        ]);

        $healthyLivingItem = HidupSehat::find($id);
        if (!$healthyLivingItem) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $healthyLivingItem->update($validatedData);
        return response()->json(['message' => 'Data updated successfully', 'data' => $healthyLivingItem]);
    }

    public function destroy($id)
    {
        $healthyLivingItem = HidupSehat::find($id);
        if (!$healthyLivingItem) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $healthyLivingItem->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
