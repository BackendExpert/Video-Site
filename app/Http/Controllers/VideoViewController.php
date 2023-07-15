<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;

class VideoViewController extends Controller
{

    public function show(string $id)
    {
        $video = VideoM::find($id);
        return view('/videos.show')->with('video', $video);    
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
