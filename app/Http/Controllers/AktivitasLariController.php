<?php

namespace App\Http\Controllers;

use App\Models\AktivitasLari;
use Illuminate\Http\Request;

class AktivitasLariController extends Controller
{
    public function index()
    {
        $activities = AktivitasLari::all();
        return response()->json($activities);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'distance' => 'required|numeric',
            'duration' => 'required|time',
            'calories_burned' => 'required|numeric',
            'pace' => 'required|numeric',
            'time' => 'required|date_format:H:i:s',
        ]);

        $activity = AktivitasLari::create($validatedData);
        return response()->json(['message' => 'Data saved successfully', 'data' => $activity], 201);
    }

    public function show($id)
    {
        $activity = AktivitasLari::find($id);
        if (!$activity) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($activity);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'distance' => 'nullable|numeric',
            'duration' => 'nullable|time',
            'calories_burned' => 'nullable|numeric',
            'pace' => 'nullable|numeric',
            'time' => 'nullable|date_format:H:i:s',
        ]);

        $activity = AktivitasLari::find($id);
        if (!$activity) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $activity->update($validatedData);
        return response()->json(['message' => 'Data updated successfully', 'data' => $activity]);
    }

    public function destroy($id)
    {
        $activity = AktivitasLari::find($id);
        if (!$activity) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $activity->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
