<!DOCTYPE html>
<html lang="en"> 

<head>
<!-- Include: Assest Links -->
    @include('partials.head')
</head>

<body class="container-fluid">
<div class="row">
        <div class="col-md-12">
            <div class="alert alert-success text-center" role="alert">
            <h2>Welcome
            <u>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</u>
            you are logged in!</h2>
            </div>
        </div>
    </div>
    <!-- Include: Assest Links -->
    <div class="col-md-12">
      @include('partials.navbar')

    </div>
    <div class="col-md-12">

        @if(isset($siteTitle))
        <h3 class="page-title">
            {{ $siteTitle }}
        </h3>
        @endif @if (Session::has('message'))

        <div class="note note-info">
            <p>{{ Session::get('message') }}</p>
        </div>

        @endif @if ($errors->count() > 0)
        <div class="note note-danger">
            <ul class="list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif 
        
        @yield('content')


    </div>



    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
        <button type="submit">Logout</button>
    {!! Form::close() !!}

    @include('partials.javascripts')
</body>
</html>