<!doctype html>
@section('content')
<html>
<head>

@extends('layouts.app')
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
    html, body {
        background-color: #a0fff0;
        color: #040404;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .top-left{
        position: absolute;
        left: 10px;
        top:18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #040404;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>




<body>


<button type="submit" class="btn btn-primary">
    <a href="{{ url('/docente') }}">Docente</a>
</button>

<button type="submit" class="btn btn-primary">
    <a href="{{ url('/discente') }}">Discente</a>
</button>
</div>

</body>
@endsection

    <div class="content">
        <div class="title m-b-md">
            PROVEST
        </div>
    </div>
</html>