@auth

@include('header')

<style>
    .comment-content{
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="comment-content">
        hii
    </div>
</div>

@include('layouts.footer')

@else
<script>window.location = "/";</script>
@endauth




