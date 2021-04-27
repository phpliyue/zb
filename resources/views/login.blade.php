<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
{{--    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
{{--        <div>--}}

{{--            <h1 class="logo-name">IN+</h1>--}}

{{--        </div>--}}
        <form class="m-t" role="form" action="/home">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登入</button>

{{--            <a href="#"><small>Forgot password?</small></a>--}}
{{--            <p class="text-muted text-center"><small>Do not have an account?</small></p>--}}
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>
