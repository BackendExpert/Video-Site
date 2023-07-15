
    @include('header')

    <style>
        .home-content{
            background-image: url(https://wallpaperaccess.com/full/2140.jpg);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;            
        }
        .home-title{
            padding: 35px 0;
            text-align: center;
        }
        .home-title h3{
            padding: 15px 0;
            font-size: 40px;
        }
        .home-title .home-login{
            padding: 10px 30px;
            font-size: 22px;
            border-radius: 5px;
            border:1px solid white;
            background: transparent;
            transition: 0.5s;
            color: white
        }
        .home-title .home-login:hover{
            cursor: pointer;
            background: white;
            color: black;
        }
        .home-body{
            padding: 20px 0;
        }
        .one-video{
            margin: 15px 0;
            background: rgb(36, 36, 36);
            padding: 25px;
            transition: 0.5s;
            border-radius: 8px;
        }
        .one-video:hover{
            margin: 0 -15px;
            border: 1px solid white;
            background: rgb(49, 49, 49);
        }
        .view-video{
            border-radius: 5px;
        }
        .tags{
            padding: 5px 10px;
            background-color: rgb(74, 172, 218);
            border-radius: 5px;
            color: white;
        }
        .one-video-link{
            text-decoration: none;
            color: white;
        }
    </style>

    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="main-content">
                    <div class="container text-center main-btns">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3 btn-login">
                                @auth
                                    <a href="{{ url('/home') }}"><button class="login-btn">Home</button></a>
                                @else
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <a href="{{ route('login') }}" ><button class="login-btn">Login</button></a>
                                </div>
                                @endauth
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>

            @endif            
        </div> --}}


            {{-- All Videoss
            <a href="{{ route('login') }}">login here</a> --}}



            <div class="home-content">
                <div class="container">
                    <div class="home-title">
                        @auth
                            <h3>Welcome back</h3>
                            <a href="javascript:window.history.back()"><button class="home-login">Back</button></a>
                        @else
                            <h3>Welcome to Video Site</h3>
                            <a href="{{ route('login') }}"><button class="home-login">Login Here</button></a>
                        @endauth
                    </div>
                    <hr>
                    <div class="home-body">
                        @auth
                            @foreach ($video as $vid)
                                <a href="{{  url('/videoOne/show/' . $vid->id) }}" class="one-video-link">
                                    <div class="one-video">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <video width="400" class="view-video">
                                                    <source src="{{ URL::asset("$vid->video") }}" type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                            <div class="col-lg-8">
                                                @php
                                                    $vid_tags = json_decode($vid->video_tags);
                                                @endphp
                                                @foreach ($vid_tags as $tags)
                                                    <span class="tags">{{ $tags }}</span><br><br>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2>{{ $vid->video_title }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>                        
                            @endforeach
                        @else
                            @foreach ($video as $vid)
                                <div class="one-video">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <video width="400" class="view-video">
                                                <source src="{{ URL::asset("$vid->video") }}" type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                        <div class="col-lg-8">
                                            @php
                                                $vid_tags = json_decode($vid->video_tags);
                                            @endphp
                                            @foreach ($vid_tags as $tags)
                                                <span class="tags">{{ $tags }}</span><br><br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>{{ $vid->video_title }}</h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endauth

                    </div>
                </div>
            </div>

            @include('layouts.footer')
    </body>
</html>
