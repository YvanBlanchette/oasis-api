<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        $summerActivities = Activity::where('category', 'summer')->get();
        $winterActivities = Activity::where('category', 'winter')->get();
        return response()->json([
            'activities' => $activities,
            'summerActivities' => $summerActivities,
            'winterActivities' => $winterActivities,
            'message' => 'Activités chargées avec succès!'
        ]);
    }

    public function show($activity_id)
    {
        $activity = Activity::find($activity_id);
        return response()->json([
            'activity' => $activity,
            'message' => 'Activité récupérée avec succès!'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|boolean',
            'pricePerAdult' => 'required|integer',
            'pricePerChildren' => 'nullable|integer',
            'durationInMinutes' => 'required|integer',
            'ageRestriction' => 'required|string',
            'isIncluded' => 'required|boolean',
            'notes' => 'nullable|string',
        ]);

        $activity = Activity::create($validatedData);

        return response()->json([
            'activity' => $activity,
            'message' => 'Activité crée avec succès!'
        ], 201);
    }


    public function update(Request $request, Activity $activity)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|boolean',
            'pricePerAdult' => 'required|integer',
            'pricePerChildren' => 'nullable|integer',
            'durationInMinutes' => 'required|integer',
            'ageRestriction' => 'required|string',
            'isIncluded' => 'required|boolean',
            'notes' => 'nullable|string',
        ]);

        $activity->update($validatedData);

        return response()->json([
            'activity' => $activity,
            'message' => 'Activité mise à jour avec succès!'
        ], 200);
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return response()->json([
            'message' => 'Activité supprimée avec succès!'
        ], 200);
    }


    public function changeStatus(Request $request, Activity $activity)
    {
        $validatedData = $request->validate([
            'status' => 'required|boolean',
        ]);

        $activity->update([
            'status' => $validatedData['status'],
        ]);

        return response()->json([
            'activity' => $activity,
            'message' => 'Activité mise à jour avec succès!'
        ], 200);
    }
}
