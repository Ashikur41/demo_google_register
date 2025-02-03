<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{url('Auth')}}/assets/img/favicon.png">
    <link rel="stylesheet" href="{{url('Auth')}}/assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{url('Auth')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url('Auth')}}/assets/css/uf-style.css">
    <title>Register Form Bootstrap 1 by UIFresh</title>
  </head>
  <body>
    <div class="uf-form-signin">
      <div class="text-center">
        <a href="https://uifresh.net/"><img src="{{url('Auth')}}/assets/img/logo-fb.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Account Register</h1>
      </div>
      <form class="mt-4" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" name="name" class="form-control" placeholder="Your name">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-envelope"></span>
          <input type="text" name="email" class="form-control" placeholder="Email address">
        </div>
        {{-- <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-phone"></span>
          <input type="text" class="form-control" placeholder="Your phone">
        </div> --}}
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Password confirmation">
        </div>
        <div class="d-grid mb-4">
          <button type="submit" class="btn uf-btn-primary btn-lg">Sign Up</button>
        </div>
        <div class="mt-4 text-center">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
          <a href="{{ route('login') }}">Login</a>
        </div>
      </form>
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="{{url('Auth')}}/assets/js/popper.min.js"></script>
    <script src="{{url('Auth')}}/assets/js/bootstrap.min.js"></script>
  </body>
</html>