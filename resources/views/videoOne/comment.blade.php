@auth

@include('header')

    <div class="container">
        
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

        <form action="{{ url('videoOne/'. $video->id) }}" method="POST">
            @csrf
            @method('PATCH')
        <h5>New Comment</h5>
            <input type="hidden" name="video_id" value="{{ $video->id }}">
            <input type="hidden" name="commenter" value="@php echo Auth::user()->name; @endphp">  

            <textarea name="comment" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
            <input type="hidden" name="is_private" value="0">

            <br>

            <input type="submit" value="Comment" class="btn btn-success">
            
        </form>

    </div>


@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




