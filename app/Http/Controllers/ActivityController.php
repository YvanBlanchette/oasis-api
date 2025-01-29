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
        $activity = Activity::create($request->all());

        return response()->json([
            'activity' => $activity,
            'message' => 'Activité crée avec succès!'
        ], 201);
    }


    public function update(Request $request, $activity_id)
    {
        $activity = Activity::where('id', $activity_id)->first();
        $activity->update($request->all());

        return response()->json([
            'activity' => $activity,
            'message' => 'Activité mise à jour avec succès!'
        ], 200);
    }

    public function destroy($activity_id)
    {
        $activity = Activity::where('id', $activity_id)->first();

        $activity->delete();

        return response()->json([
            'message' => 'Activité supprimée avec succès!'
        ], 200);
    }

    // Method to toggle activity status
    public function toggleStatus($activity_id)
    {
        $activity = Activity::where('id', $activity_id)->first();

        $activity->update([
            'status' => !$activity->status,
        ]);

        return response()->json([
            'activity' => $activity,
            'message' => 'Activité mise à jour avec succès!'
        ], 200);
    }
}
