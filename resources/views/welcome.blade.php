<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CITY HOSTEL</title>

        <link rel="icon" href="{{ asset('adminbackend/assets/images/favicon-32x32.png') }}" type="image/png" />

        <link href="{{ asset('adminbackend/assets/css/welcome.css') }}" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        @foreach ($data as $data)

        <div>
            <div style="width: 100%;height:100px;display:flex" class="row">
                <div style="width: 100%;height:100%;" class="column"><a href="" class="HomeButton1">{{$data->Home_button_1}}</a><br /></div>
            </div>
            <p id='head1' class='header'>{{$data->home_title}}</p>
            <p id='head2' class='header'>THE DREAM HOME</p>
            <p id='head3' class='header'>JUST FOR YOU</p>
            <p id='head4' class='header'>WELL MANAGED AND SUPER CLEAN</p>
            <p id='head5' class='header'>{{$data->home_sub_Title}}</p>
            <a href="{{ route('hostel.information') }}"><button style="align-items: center;width:50rem;font-size:35px;height:5rem" class="HomeButton2">{{$data->home_button_2}}</button></a>
            <div class='light x1'></div>
            <div class='light x2'></div>
            <div class='light x3'></div>
            <div class='light x4'></div>
            <div class='light x5'></div>
            <div class='light x6'></div>
            <div class='light x7'></div>
            <div class='light x8'></div>
            <div class='light x9'></div>
        </div>
        @endforeach
    </body>
</html>
