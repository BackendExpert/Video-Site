<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;

class VideoViewController extends Controller
{

    public function create()
    {
        return view('/videoOne/comment');
    }

    public function show(string $id)
    {
        $video = VideoM::find($id);
        return view('/videoOne.index')->with('video', $video);    
    }

    public function update(Request $request, string $id)
    {

    }

}
