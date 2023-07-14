
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
                        <h3>Welcome to Video Site</h3>
                        <a href="{{ route('login') }}"><button class="home-login">Login Here</button></a>
                    </div>
                    <hr>
                    <div class="home-body">
                        @foreach ($video as $vid)
                            <div class="row">
                                <div class="col-lg-5">
                                    <video width="400">
                                        <source src="{{ URL::asset("$vid->video") }}" type="video/mp4">
                                        Your browser does not support HTML video.
                                    </video>
                                </div>
                                <div class="col-lg-7"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            @include('layouts.footer')
    </body>
</html>
