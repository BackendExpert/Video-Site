@include('header')

<style>
    .one-video{
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="one-video">
        <a href="{{ url('') }}"><button class="btn btn-primary">Back</button></a><br>
        <hr><br>
        <video width="400" class="view-video">
            <source src="{{ URL::asset("$video->video") }}" type="video/mp4">
            Your browser does not support HTML video.
        </video>

    </div>
</div>

@include('layouts.footer')