<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/costumAuth/vendor/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/costumAuth/vendor/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/costumAuth/css/style.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/costumAuth/css/style.css')}}">
</head>
<body>

    <div class="main">
    
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('costumAuth/images/forget-image.jpg')}}" alt="sing up image" style="width:1850px;"></figure>
                        <a href="new-login" class="forget-image-link">Back</a>
                    </div>

                    <div class="signin-form">

                    <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                        <h2 class="form-title">Forget password</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('password.email') }}">
                        @csrf
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" :value="old('email')" required autofocus id="your_name" placeholder="Your email"/>
                            </div>
                            
                            
                            <div class="form-group form-button">
                                <button type="submit" name="forget" id="forget" class="form-submit" > {{ __('Email Password Reset Link') }}</button>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                              <li><a href="{{ url('/login/google') }}" class="btn btn-primary">{{ __('Login with Google') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>