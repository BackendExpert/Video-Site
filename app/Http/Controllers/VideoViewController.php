<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;

class VideoViewController extends Controller
{

    public function show(string $id)
    {
        $video_one = VideoM::find($id);
        return view('/videoOne.show')->with('video_one', $video_one);    
    }

    public function store(Request $request){
        $this->validate($request, [
            ""
        ]);

        return redirect()->back();
    }

}
