<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">

    <title>address ::: user office ::: foodclub</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="cbc">
    <div class="main">
        @include('layouts.header')
        <div class="center_box cb">
            @include('layouts.tabs')
            <div class="page_content bg_gray">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
</body>

</html>
