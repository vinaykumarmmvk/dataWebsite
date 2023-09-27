
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')	
	<h4 class="pageHeading">Grafana Data</h4>
	
	@if(Auth::check())
		<div style="margin-left:30px">
		<p>Logged in as:</p>
		
		<p>
			Name: {{ Auth::user()->name }}<br>
			Email: {{ Auth::user()->email }}<br>
		</p>
		<p>
		Please <strong>click</strong> on below collapsable panels to <strong>show/hide</strong>:
		</p>
		</div>
			<div class="row">
			<div id="accordion1" class="col-lg-4">
			  <div class="card">
				<div class="bg-dark card-header">
				  <a class="text-white card-link" data-toggle="collapse" href="#collapseOne">
					Weight ini
				  </a>
				</div>
				<div id="collapseOne" class="collapse show" data-parent="#accordion1">
				  <div class="card-body">
					<iframe src="http://se-psi40.netlab.hof-university.de:3000/d-solo/ot8J3HJGk/cs_dashboard?orgId=1&from=1573254000000&to=1577833199000&panelId=4" width="450" height="200" frameborder="0"></iframe>
				  </div>
				</div>
			  </div>
			</div>
			
			<div id="accordion2" class="col-lg-4">
			  <div class="card">
				<div class="bg-dark card-header">
				  <a class="text-white collapsed card-link" data-toggle="collapse" href="#collapseTwo">
					Brood Temperature Max
				  </a>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordion2">
				  <div class="card-body">
					<iframe src="http://se-psi40.netlab.hof-university.de:3000/d-solo/ot8J3HJGk/cs_dashboard?orgId=1&from=1573254000000&to=1577833199000&panelId=6" width="450" height="200" frameborder="0"></iframe>
				  </div>
				</div>
			  </div>
			</div>
			
			<div id="accordion3" class="col-lg-4">
			  <div class="card">
				<div class="bg-dark card-header">
				  <a class="text-white collapsed card-link" data-toggle="collapse" href="#collapseThree">
					Yield
				  </a>
				</div>
				<div id="collapseThree" class="collapse" data-parent="#accordion3">
				  <div class="card-body">
					<iframe src="http://se-psi40.netlab.hof-university.de:3000/d-solo/ot8J3HJGk/cs_dashboard?orgId=1&from=1573254000000&to=1577833199000&panelId=2" width="450" height="200" frameborder="0"></iframe>
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		
	@else
	
		
	@endif
		
@endsection
