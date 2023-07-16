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
                <div class="col-lg-6">
                    <label for="Commeter">Commeter</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-lg-6"></div>
            </div>

            <input type="submit" value="hi" class="btn btn-success">
        </form>
    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




