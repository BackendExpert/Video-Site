<?php

namespace App\Http\Controllers;

use App\Models\VideoCommentM;
use Illuminate\Http\Request;

class VideoCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videoOne/show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'video_id' => 'required',
            'commenter' => 'required',
            'comment' => 'required',
            'is_private' => 'required',
        ]);

        $videoComment = new VideoCommentM;
        $videoComment->video_id = $request->video_id;
        $videoComment->commenter = $request->commenter;
        $videoComment->comment = $request->comment;
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
