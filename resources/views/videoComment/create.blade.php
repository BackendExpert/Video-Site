@auth

@include('header')

<style>
    .comment-content{
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="comment-content">
        <a href="videoOne/show"><button class="btn btn-primary">Back</button></a>
    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




