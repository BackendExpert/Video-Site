@include('header')

<style>
    .one-video{
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="one-video">
        <a href="{{ url(welcome) }}">Back</a>
    </div>
</div>

@include('layouts.footer')