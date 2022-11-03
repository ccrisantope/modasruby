
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<style>
    .activo a{
        color:red;
        text-decoration:underline;
    }
    </style>
</head>
<body>
<nav>
        <table class ="table" width="50%">
        @include('partials.nav')
        </table>
@yield('content')
</body>
</html>
