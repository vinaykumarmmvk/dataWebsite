<html>
    <head>
        <title>beehive @yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
	
	<style>
.pageHeading{
	margin-left: 30px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.formTable{
	border-spacing: 30px;
	border-collapse: unset;
}
</style>

        @section('header')
        
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img class="small-logo" src="https://moodle.hof-university.de/pluginfile.php/1/core_admin/logocompact/0x35/1610371443/HS%20Logo_DE_Ohne%20Zusatz_Weiss_WEB.png" alt="Site-Logo">
	<a class="navbar-brand" href="#">BeeHive</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        
       
		
			@if(Auth::check())	
			<li class="nav-item">
				<a class="nav-link" href="{{ url('user/logout') }}">Logout</a>
			</li>
			@else
			<li class="nav-item">
				<a class="nav-link" href="{{ route('user.logout') }}">Login</a>
			</li>	
			<li class="nav-item">
				<a class="nav-link" href="{{ route('user.register') }}">New User</a>
			</li>
			@endif
        
      </ul>
	 
    </div>
  </nav>
  
        
        @if(Session::has('flash_message'))
			<div class="alert alert-success alert-dismissible fade show">
				{{ Session::get('flash_message') }}
				 <button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
		@endif

		@if(Session::has('error_message'))
			<div class="alert alert-danger alert-dismissible fade show">
				{{ Session::get('error_message') }}
				 <button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
		@endif
		
		@if($errors->any())
			@foreach($errors->all() as $error)
				<div class="alert alert-danger alert-dismissible fade show">
					{{ $error }}
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
				@endforeach
		@endif
		
        <div>			
            @yield('content')
        </div>
        
        <div>
		<!-- footer comes here -->
		</div>	
    </body>
</html>
