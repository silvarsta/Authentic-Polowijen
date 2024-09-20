@extends('auth.layout')
@section('title', 'Log In')
@section('content')
<div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in" style="margin-top: 0; padding-top: 0;">
            <div class="container" >
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.png"></figure>
                        <a href="{{route('register')}}" style="text-decoration: none"class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form action="{{route('login')}}" method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input required type="text" class="@error('username') is-invalid @enderror" placeholder="Username"
                                    name="username" value="{{ old('username') }}" required>
                            </div>
                            @error('username')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="@error('password') is-invalid @enderror" placeholder="Password"
                            name="password" required>
                            </div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group form-button">
                                <input type="submit" value="Login" class="btn solid" name="login" /> <br>
                                {{-- <a href="{{ route('password.forgot') }}" style="text-decoration: none">Forgot your Password?</a> --}}
                            </form>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/mainlogin.js"></script>
</body>
</html>


@endsection
