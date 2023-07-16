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

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errors : </strong> You got Following Errors while validation this form<br>
                        <b>{{ $error }}</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        @endif

        <form action="{{ url('/videoOne.show') }}" method="post">
            @csrf
        <h5>New Comment</h5>
            <input type="hidden" name="video_id" value="{{ $video->id }}">
            <input type="hidden" name="commenter" value="@php echo Auth::user()->name; @endphp">  

            <textarea name="comment" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
            <input type="hidden" name="is_private" value="0">

            <br>

            <input type="submit" value="Comment" class="btn btn-success">
            
        </form>


    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




