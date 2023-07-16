<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;

class VideoViewController extends Controller
{

    // public function create()
    // {
    //     return view('/videoOne/comment');
    // }

    public function show(string $id)
    {
        $video_one = VideoM::find($id);
        return view('/videoOne.index')->with('video_one', $video_one);    
    }

    public function update(Request $request, string $id)
    {

    }

}
