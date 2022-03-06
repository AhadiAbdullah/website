<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAPC | </title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
</head>
<body style="background:#F7F7F7;">
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="post" action="{{route('login.store')}}">
                        @csrf
                        <h1>Login</h1>
                        @if(session('status'))
                            <strong class="text-danger">{{ session('status') }}</strong>
                        @endif
                        <div>
                            <input type="text" class="form-control" value="{{ old('email') }}" name="email" placeholder="Username"  required />
                            @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div>
                        <button type="submit" class="btn btn-default submit">
                                    {{ __('Login') }}
                                </button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div>
                                <h1><i class="fa fa-support" style="font-size: 26px;"></i> Friends And Allies Project Corp</h1>
                                <p>Copyright © {{ date('Y') }}</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
            </div>
         </div>
    </div>
</body>
</html>