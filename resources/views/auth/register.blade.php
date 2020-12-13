<!DOCTYPE html>
<html>
<head>
<title>SofTechLove</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('admin-register/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Admin Registration</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <input id="name" class="text @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <input  id="email" class="text email @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" rvalue="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <input id="password" class="text @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <input id="password-confirm" class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    <div class="wthree-text">
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="{{ __('Register') }}" >
                </form>
                <p>Don't have an Account? <a href="{{route('login')}}"> Login Now!</a></p>
            </div>
        </div>
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>