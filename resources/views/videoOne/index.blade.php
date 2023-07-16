@auth

@include('header')

<style>
    .one-video{
        padding: 40px 0;
    }
    .view-video{
        width: 100%;
    }
    .add-time{
        text-align: right;
    }
</style>


<div class="container">
    <div class="one-video">
        <a href="{{ url('') }}"><button class="btn btn-primary">Back</button></a><br>
        <hr><br>
        <video  class="view-video" controls>
            <source src="{{ URL::asset("$video->video") }}" type="video/mp4">
            Your browser does not support HTML video.
        </video>
        <hr>
        <h3>{{ $video->video_title }}</h3>
        <div class="row">
            <div class="col-lg-6">
                <h5>Uploader : {{ $video->uploader }}</h5>
            </div>
            <div class="col-lg-6 add-time">
                <h5>{{ $video->created_at }}</h5>
            </div>
        </div>
        <hr>
        <h4>Description</h4>
        <p>{{ $video->description }}</p>

        <hr>
        <h4>Comments</h4>
        <br>

        <a href="{{ url('videoOne/comment') }}"><button class="btn btn-success">Add New Comment</button></a>

        <br><hr>

    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




