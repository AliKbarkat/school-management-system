<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="{{ URL::asset('https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900')}}">
     <link rel="stylesheet" href="{{asset('assets/css/plugins/font-awesome.min.css')}}">
    <link href="{{URL::asset('assets/css/wizard.css') }}" rel="stylesheet" id="bootstrap"> 
@yield('css')
<!--- Style css -->
 <link href="{{URL::asset('assets/css/app.css') }}" rel="stylesheet"> 

<!--- Style css -->
@if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif
