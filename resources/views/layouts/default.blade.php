<!DOCTYPE html>
<html>
<head>
    <title>SmartShop</title>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div id="section-navbar" class="col-xs-2">
            <a class="navbar-brand" href="#">Smart Shop</a>

            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
        </div>

        <div class="col-xs-10">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
