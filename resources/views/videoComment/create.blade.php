@auth

@include('header')

<style>
    .comment-content{
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="comment-content">
        <button onclick="history.back()" class="btn btn-primary">Go Back</button>
        <br>
        <hr>
        <br>

        <form action="{{ url('/videoComment/create') }}" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-lg-12">
                    <label for="Commeter">Commeter</label>
                    <input type="text" name="commenter" id="" class="form-control" value="@php echo Auth::user()->name; @endphp" disabled>
                    <input type="hidden" name="commenter" value="@php echo Auth::user()->name; @endphp">
                    <input type="hidden" name="video_id" value="{{ $video->id }}">
                </div>
            </div>

            <input type="submit" value="hi" class="btn btn-success">
        </form>
    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




