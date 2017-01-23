@extends('layouts.index')


@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
</div>

{{-- @include('status.blade') --}} 

<div id="statistic" class="row">
		 
	<div class="col-md-3">
		<div class="user-info">
		
			<p>User ID: email</p>
			{{--  
			@foreach ($users as $user)
			<p>User ID: {{ $user->id }}</p>
			@endforeach
			--}} 
			<p class="user-gravatar">
				<img src="{!!asset('images/algebra-BOX-logo.png')!!}"/>
			</p>
				{{--  
				<img src="//www.gravatar.com/avatar/{{ md5($user->email) }}?d=mm" alt="{{ $user->email }}" class="img-circle">
				--}} 
			
		</div>	
	</div>
	

	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Status</h3>
			</div>
				<div class="panel-body">
					<div class="col-md-4">
						<div class="status-info">
							<h3>Overall Usage</h3>
							<p>
								<table>
								  <tr>
									<th>Storage:</th>
									<th class="used-info">1.2 GB</th>
								  </tr>
								  <tr>
									<td>of:</td>
									<td class="used-info">2 GB</td>
								  </tr>
									<tr>
									<td>Storage Used:</td>
									<td class="used-info"60%</td>
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
									<th>All Files:</th>
									<th class="used-info">63 files</th>
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
									<th>Images:</th>
									<th class="used-info">0.2 GB</th>
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


<div id="folders" class="row">
		
	<div class="col-md-3">

		
		<div class="list-group">
			<a href="#" class="list-group-item active">Folders &amp; Files </a>
			<a href="{{route('categories.index')}}" class="list-group-item">Categories</a>
			<a href="{{--  {{route('categories.shared')}} // {{route('shared.index')}} --}}#" class="list-group-item">Shared</a>
		</div>	
	</div>
	

	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<div>
				<h3 class="pull-left panel-title">Folders &amp; Files</h3>
				</div>
				<div class="dropdown">
				<button id="options-btn" class="btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Sort By
				  <span class="caret"></span></button>
				  <ul class="dropdown-menu">
					<li><a href="#">Date</a></li>
					<li><a href="#">Size</a></li>
					<li><a href="#">Type</a></li>
				  </ul>
				  </div>
				  
				  <div class="dropdown">
				  <button id="options-btn" class="btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Share
				  <span class="caret"></span></button>
				  <ul class="dropdown-menu">
					<li><a href="#">All</a></li>
					<li><a href="#">Folder</a></li>
					<li><a href="#">File</a></li>
				  </ul>
				</div>
				
				<div class="pull-right">
				
				  
					<a title="Create new folder" href="">
						<span class="pull-right glyphicon glyphicon-folder-close" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
			</div>
		</div>
	</div>
</div>
@stop
