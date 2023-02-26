<!DOCTYPE html>


@vite(['resources/scss/app.scss', 'resources/js/app.js'])

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    @include('layouts/includes/sidebar')
    <div class="main-panel">
        @include('layouts/includes/top_navigation')

        @yield('content')
    </div>
</body>
