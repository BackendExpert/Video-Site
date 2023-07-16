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
            <source src="{{ URL::asset("$video_one->video") }}" type="video/mp4">
            Your browser does not support HTML video.
        </video>
        <hr>
        <h3>{{ $video_one->video_title }}</h3>
        <div class="row">
            <div class="col-lg-6">
                <h5>Uploader : {{ $video_one->uploader }}</h5>
            </div>
            <div class="col-lg-6 add-time">
                <h5>{{ $video_one->created_at }}</h5>
            </div>
        </div>
        <hr>
        <h4>Description</h4>
        <p>{{ $video_one->description }}</p>

        <hr>
        <h4>Comments</h4>
        <br>

        <form action="{{ url('videoOne') }}" method="post">
            @csrf
            
            <input type="hidden" name="commenter" value="@php echo Auth::user()->name; @endphp">
            {{-- <p>@php echo Auth::user()->name; @endphp</p> --}}
            <input type="hidden" name="video_id" value="{{ $video_one->id }}">
            {{-- <p>{{ $video_one->id }}</p> --}}
            

            <textarea name="comment" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
            <input type="hidden" name="is_private" value="0">

            <br>
            <input type="submit" value="Comment" class="btn btn-success">
        </form>

        {{-- <a href="{{ url('videoComment/create') }}"><button class="btn btn-success">Add New Comment</button></a> --}}

        <br><hr>

        <p>New Comment</p>

    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




