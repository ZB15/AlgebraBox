@extends('layouts.admin')

@section('title', 'Admin - Dashboard')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
<div class="row">
    @if (Sentinel::check())
    <div class="ejumbotron">
        
        	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3>STATUS</h3>
				
			</div>
			<div class="panel-body">
					<div class="col-md-4">
						<div class="status-info">
							<h3>BANDWITH</h3>
							<p>
								<table>
								  <tr>
									<td>Upload:</td>
									<td class="used-info">1.2 GB</td>
								  </tr>
								  <tr>
									<td>Download:</td>
									<td class="used-info">2 GB</td>
								  </tr>
									<tr>
									<td>All:</td>
									<td class="used-info">3.2 GB</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				
				
				
					<div class="col-md-4">
						<div class="status-info">
							<h3>USERS</h3>
							<p>
								<table class="used-info">
								  <tr>
									<td>User:</td>
									<td class="used-info">63</td>
								  </tr>
								  <tr>
									<td>Standard</td>
									<td class="used-info">6</td>
								  </tr>
									<tr>
									<td>Pro</td>
									<td class="used-info">1</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				
				
				
					<div class="col-md-4">
						<div class="status-info">
							<h3>Used Storage</h3>
							<p>
								<table class="used-info">
								  <tr>
									<td>Images:</td>
									<td class="used-info">0.2 GB</td>
								  </tr>
								  <tr>
									<td>Files:</td>
									<td class="used-info">0.5 GB</td>
								  </tr>
									<tr>
									<td>Music:</td>
									<td class="used-info">0.5 GB</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-4">
						<div class="status-info">
							<h3>Overall Usage</h3>
							<p>
								<table>
								  <tr>
									<td>Storage:</td>
									<td class="used-info">1.2 GB</td>
								  </tr>
								  <tr>
									<td>of:</td>
									<td class="used-info">2 GB</td>
								  </tr>
									<tr>
									<td>Storage Used:</td>
									<td class="used-info">60%</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				
				
				
					<div class="col-md-4">
						<div class="status-info">
							<h3>Data</h3>
							<p>
								<table class="used-info">
								  <tr>
									<td>All Files:</td>
									<td class="used-info">63 files</td>
								  </tr>
								  <tr>
									<td>All Foldefs</td>
									<td class="used-info">6 Folders</td>
								  </tr>
									<tr>
									<td>Linked files:</td>
									<td class="used-info">1</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				
				
				
					<div class="col-md-4">
						<div class="status-info">
							<h3>Used Storage</h3>
							<p>
								<table class="used-info">
								  <tr>
									<td>Images:</td>
									<td class="used-info">0.2 GB</td>
								  </tr>
								  <tr>
									<td>Files:</td>
									<td class="used-info">0.5 GB</td>
								  </tr>
									<tr>
									<td>Music:</td>
									<td class="used-info">0.5 GB</td>
								  </tr>
								</table>
							</p>
							
						</div>	
					</div>
				</div>
			</div>
		</div>
    </div>
    @else
        <div class="jumbotron">
            <h1>Welcome, Guest!</h1>
            <p>You must login to continue.</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('auth.login.form') }}" role="button">Log In</a></p>
        </div>
    @endif
</div>
@stop
