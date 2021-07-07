<!doctype html>
<html lang="en">

<head>
    <title>Laravel Blog Management Application</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="{{ asset('backpanel/css/material-dashboard.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper ">
        <!--side bar area -->
        @include('backpanel.layouts.sidebar')
        <div class="main-panel">
            <!--top bar -->
            @include('backpanel.layouts.topbar')
            <div class="content">
                <div class="container-fluid">
                    <!-- your content here -->
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</body>
</html>
