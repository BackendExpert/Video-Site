<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;
use App\Models\VideoCommentM;
use Illuminate\Support\Facades\DB;


class VideoViewController extends Controller
{

    public function show(string $id)
    {
        $video_one = VideoM::find($id);
        // $comment = VideoCommentM::find($id);

        $all = DB::select("select * from videos__comments where video_id=".$id);
        return $all;

        // return view('/videoOne.show')->with('video_one', $video_one);    
    }

    public function store(Request $request){
        $this->validate($request, [
            'video_id' => 'required',
            'commenter' => 'required',
            'comment' => 'required',
            'is_private' => 'required',
        ]);

        $video_comment = new VideoCommentM;
        $video_comment->video_id = $request->video_id;
        $video_comment->commenter = $request->commenter;
        $video_comment->comment = $request->comment;
        $video_comment->is_private = $request->is_private;

        $video_comment->save();
        return redirect()->back();
    }

}
