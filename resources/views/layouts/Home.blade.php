@php use App\Facades\AnitaConfig;use Illuminate\Support\Facades\Route; @endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Hervé Lewis: Photographer, Art Gallery & Studio in Paris</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;800&family=Rajdhani:wght@700&display=swap"
          rel="stylesheet">
    <!-- Template Config -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/config.css')}}">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/libs.css')}}">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.png')}}" sizes="32x32"/>
</head>
<body>

<!-- Header -->
<x-header/>

<!-- Fullscreen Menu -->
<x-fullscreen-menu/>


@php
    $config = AnitaConfig::getConfig();
@endphp



@if(isset($hasBackground) && isset($data->cover))
    <!-- Page Background -->
    <div class="anita-page-background-wrap">
        <div class="anita-page-background" data-src="{{$data->cover->url}}" data-opacity="0.05"></div>
    </div>

@endif

<!-- Page Main -->
<main class="anita-main">
    @yield('content')
</main>

<x-footer></x-footer>

<!-- JS Scripts -->
<script src="{{asset('js/lib/jquery.min.js')}}"></script>
<script src="{{asset('js/lib/aos.min.js')}}"></script>
<script src="{{asset('js/core.js')}}"></script>

<script>

    const d_anita_config = {!! json_encode($config) !!};
    /* --- Activate Anita Core --- */

    // function init() {
    let anita = new Anita(d_anita_config);
    // }
    // setTimeout(()=> init(), 3000);
</script>

</body>
</html>
