<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Dreamscape Networks</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-login.css')}}" />
        <link href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">

            <form id="loginform" method="POST" class="form-vertical" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
				 <div class="control-group normal_text"> <h3><img src="{{asset('images/backend_images/logo.png')}}" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="email" class="form-control{{$errors->has('email') ? 'is-invalid': '' }}" placeholder="Email Address" required autofocus />
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>            
                         @endif
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" />
                        </div>
                        @if ($errors->has('password'))                
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>                  
                        @endif
                    </div>
                </div>
                <div class="form-actions">
                <button type="submit" class="btn btn-primary pull-right">
                    {{ __('Login') }}
                </button>
                </div>
            </form>
        </div>
        
        <script src="{{asset('js/backend_js/jquery.min.js')}}"></script>  
        <script src="{{asset('js/backend_js/matrix.login.js')}}"></script> 
    </body>

</html>
