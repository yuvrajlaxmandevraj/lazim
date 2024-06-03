<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}"  rel="stylesheet">
    @yield('style')
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @yield('content')
            </div>
        </div>
    </div>
    @yield('script')
</body>
</html>
