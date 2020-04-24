<!DOCTYPE html>
<html lang="{{ config('app_locale') }}">
<head>
    <meta charset="utf-8">
    <title>Collapsible sidebar using Bootstrap 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   @include('layout.partials.head')
</head>
<body>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Menü</h3>
        </div>
        <ul class="list-unstyled components">
            <p></p>
            <li class="active">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="{{ route('books') }}">Books</a>
            </li>
            <li>
            <li>
                <a href="{{ route('products') }}">Prodcuts</a>
            </li>
            <li>

            </ul>
        </li>
        </ul>
        <ul class="list-unstyled CTAs">
            <li><a href="/login" class="download">Giriş Yap</a></li>
            <li><a></a></li>
        </ul>
    </nav>

    <div id="content">
        @yield('content')
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>
