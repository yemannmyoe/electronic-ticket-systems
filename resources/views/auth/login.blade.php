@extends('frontend')
@section('content1')
<h1 class="ml15 my-5" align="center">
  <span class="text-danger word">Admin</span>
  <span class="text-danger word">Login</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<h1 class="my-5" align="center">
  <span class="text-danger word">Our</span>
  <span class="text-danger word">Pataner</span>
</h1>
  <div class="colorlib-partner my-5">
      <div class="container">
        <div class="row">
           </div>
        <div class="row my-2">
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardoneModal" class=""><img src="{{asset('moviefrontend/image/visa.svg')}}" class="img-fluid" alt=""></a>
          </div>

          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardtwoModal" class=""><img src="{{asset('moviefrontend/image/mm.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardthreeModal" class=""><img src="{{asset('moviefrontend/image/pp.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardfourModal" class=""><img src="{{asset('moviefrontend/image/ww.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardfiveModal" class=""><img src="{{asset('moviefrontend/image/ok.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script type="text/javascript" >
    anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 10000  
  });
  </script>
@endsection
