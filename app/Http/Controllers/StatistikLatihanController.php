<?php

namespace App\Http\Controllers;

use App\Models\StatistikLatihan;
use Illuminate\Http\Request;

class StatistikLatihanController extends Controller
{
    public function index()
    {
        $statistics = StatistikLatihan::all();
        return response()->json($statistics);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'total_distance' => 'required|numeric',
            'total_calories' => 'required|numeric',
            'total_time' => 'required',
            'avg_pace' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $statistic = StatistikLatihan::create($validatedData);
        return response()->json(['message' => 'Data saved successfully', 'data' => $statistic], 201);
    }

    public function show($id)
    {
        $statistic = StatistikLatihan::find($id);
        if (!$statistic) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($statistic);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'total_distance' => 'nullable|numeric',
            'total_calories' => 'nullable|numeric',
            'total_time' => 'nullable',
            'avg_pace' => 'nullable|numeric',
            'date' => 'nullable|date',
        ]);

        $statistic = StatistikLatihan::find($id);
        if (!$statistic) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $statistic->update($validatedData);
        return response()->json(['message' => 'Data updated successfully', 'data' => $statistic]);
    }

    public function destroy($id)
    {
        $statistic = StatistikLatihan::find($id);
        if (!$statistic) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $statistic->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
