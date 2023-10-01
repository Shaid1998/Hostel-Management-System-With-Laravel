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

        
    </head>
    <body class="antialiased">
        @foreach ($data as $data)

        <div>
            <div style="width: 100%;height:100px;display:flex" class="row">
                <div style="width: 50%;height:100%;" class="column"><a href="{{ route('login') }}" class="HomeButton1">{{$data->Home_button_1}}</a><br /></div>
                <div style="width: 50%;height:100%;" class="column"><a href="{{ route('hostel.information') }}" class="HomeButton2">{{$data->home_button_2}}</a> </div>
            </div>
            <div style="width: 100%;height:400px;padding-top:7rem" class="row">
                <h4 style="padding-bottom: 3rem" class="HomePage1">{{$data->home_title}}</h4>
                <h1 class="HomePage2">{{$data->home_sub_Title}} </h1>
            </div>
            <div class="glowing">
                
                <span style="--i:1;"></span>
                
                <span style="--i:2;"></span>
                
                <span style="--i:3;"></span>
                
            </div>
            
              
            <div class="glowing">
                
                <span style="--i:1;"></span>
                
                <span style="--i:2;"></span>
                
                <span style="--i:3;"></span>
                
            </div>
              
            <div class="glowing">
                
                <span style="--i:1;"></span>
                
                <span style="--i:2;"></span>
                
                <span style="--i:3;"></span>
                
            </div>
              
            <div class="glowing">
                
                <span style="--i:1;"></span>
                
                <span style="--i:2;"></span>
                
                <span style="--i:3;"></span>
                
            </div>
        </div>
        @endforeach
    </body>
</html>
