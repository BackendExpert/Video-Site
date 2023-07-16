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

        <form action="{{ url('') }}" method="post"></form>
    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




