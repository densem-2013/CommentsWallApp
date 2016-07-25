<!Doctype html>
<head>
    @include('layouts.head')
</head>
<body>
    <div class="col-md-6 col-md-offset-3" id="wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <header class="row" >
                    @include('layouts.header')
                </header>
            </div>
            <div class="panel-body">
                <div class="container">
                    <div id="main" class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <footer class="row">
                    @include('layouts.footer')
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
