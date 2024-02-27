<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index() {
        $date = Carbon::now() -> toDateString();
        $trains = Train::whereDate('departure_time', $date)->get();
        return view('train.index', compact('trains'));
    }
}
