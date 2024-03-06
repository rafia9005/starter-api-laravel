<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobsResource;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return JobsResource::collection($jobs);
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'company' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $jobs = Jobs::find($id);

        if(!$jobs){
            return response()->json(['message' => 'Jobs not found'],404);
        }

        $jobs->title = $request->title;
        $jobs->company = $request->company;
        $jobs->description = $request->description;
        $jobs->type = $request->type;
        $jobs->updated_at = now();
        $jobs->update();

        return response()->json([
            'message' => 'succes update',
            'data' => $jobs
        ]);
    }
}
