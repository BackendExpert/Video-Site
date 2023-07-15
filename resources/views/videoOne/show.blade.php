@include('header')

<style>
    .one-video{
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="one-video">
        {{ $video-> }}
    </div>
</div>

@include('layouts.footer')