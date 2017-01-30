@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@extends('includes.nav')

@section('content')

@include('user.categories.status')

<div class="row">
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
	<li><a href="{{route('categories.index')}}">Categories</a></li></li>
	<li class="active">Create</li>
		<div id="user-search" class="pull-right">
			<form class="navbar-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default search-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
				</div>
			</form>
		</div>
	
	</ol>
</div>

<div id="create-folder" class="user-data row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="{{route('home')}}" class="list-group-item">Folders &amp; Files </a>
			<a href="{{route('categories.index')}}" class="list-group-item active">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>	
	</div>
	
	<div class="col-md-9">

		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Categories</h3>
				<div class="pull-right">
					<a href="{{route('categories.create')}}">
						<span class="pull-right glyphicon glyphicon-tag" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<div class="panel-body">
			<form action="/user/categories" method="POST">

			
			<div class="form-group">
			
				
				<div class="col-md-4">
						<div class="create-info">
			
			<h5 class="blue"><label for="section">Choose section:</label></h5>
      
	        <select class="form-control" name="sections_id">
			@foreach($sections as $section)
            			<option value="{{ $section->id }}">{{ $section->name }}</option>
			@endforeach
               </select>
	       </div>	
				</div>
				
				<div class="col-md-4">
						<div class="create-info">
	       <h5 class="orange"><label for="name">Category name:</label></h5>
			
		   <input type="text" class="form-control" name="name" required>
		   		   
			
			</div>	
				</div>
				  
				<div class="col-md-4">
						<div class="create-info">
						<h5 class="green"><label for="name">Create:</label></h5>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn background-green">Submit</button>
						</div>	
				</div>
				
				
				</form>
			</div>	
			</div>
		</div>
	</div>
@stop
