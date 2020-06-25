<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class TrackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return response()->json([
            'diagnostic' => [
                'code' => 200,
                'message' => 'Ok'
            ],
            'data' => \Auth::user()->track
            ],200);
    }

    public function store(Request $req)
    {
        $data = \Auth::user()->track()->create([
            'lat' => $req['lat'],
            'long' => $req['long'],
        ]);

        return response()->json([
            'diagnostic' => [
                'code' => 200,
                'message' => 'Ok'
            ],
            'data' => $data
        ],200);
    }
}