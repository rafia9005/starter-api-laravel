<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::paginate(10);

        if($jobs->isEmpty()){
            return response()->json([
                'message' => 'tidak ada jobs'
            ]);
        }

        return response()->json($jobs);
    }
    public function show($id)
    {
        $jobs = Jobs::find($id);

        if(!$jobs){
            return response()->json([
                'message' => 'jobs not found'
            ]);
        }
        return response()->json($jobs);
    }
}
