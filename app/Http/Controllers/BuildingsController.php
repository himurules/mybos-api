<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\Contractors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildingsController extends Controller
{
    /**
     * Create a new BuildingsController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', []);
    }

    public function activityFeed(Buildings $buildings){
        $activityFeed = $buildings->activityFeed()->with('users')->paginate(15);
        return response()->json($activityFeed);
    }

    public function notes(Buildings $buildings) {
        $notes = $buildings->notes()->with('users')->paginate(10);
        return response()->json($notes);
    }

    public function workOrders(Buildings $buildings) {
        $workOrders = $buildings->workOrders()->with('contractors')->paginate(10);
        return response()->json($workOrders);
    }

    public function cases(Buildings $buildings) {
        $cases = $buildings->cases()->paginate(10);
        return response()->json($cases);
    }

    public function summary(Buildings $buildings) {
        $residents = $buildings->residents()->count();
        $assets = rand(100,150);
        $contractors = Contractors::all()->count();
        $activeCases = $buildings->cases()->whereNotIn('status', ['completed', 'deleted'])->count();
        $workOrders = $buildings->workOrders()->count();
        $returnObj = [
            'residents' => $residents,
            'assets'    => $assets,
            'contractors'   => $contractors,
            'activeCases'   =>  $activeCases,
            'workOrders'    => $workOrders,
        ];
        return response()->json($returnObj);
    }

    public function casesSummary(Buildings $buildings) {
        $cases = $buildings->cases()->groupBy('type')->select('type', DB::raw('count(*) as total'))->get();
        return response()->json($cases);
    }

    public function actionItems(Buildings $buildings) {
        $actionsItems = [
            'overdue_case' => 123,
            'insurance_expiring'    => 23,
            'resident_update'   =>11,
            'overdue_maintenance'    =>31,
            'pending_booking'   =>7,
            'warranty_expiring' =>3
        ];
        return response()->json($actionsItems);
    }
}
