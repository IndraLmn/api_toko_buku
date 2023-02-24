<?php

namespace App\Http\Controllers;

use App\Models\logM;
use App\Http\Resources\LogR;
use Illuminate\Http\Request;

class LogC extends Controller
{
    public function index(){
        $log = logM::all();
       // return response()->json($posts);
       return LogR::collection($log);
    }

    public function detail($id){
        $log = logM::findOrFail($id);
        return new LogR($log);
    }
}
