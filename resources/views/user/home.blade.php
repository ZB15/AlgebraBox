@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')

@include('user.categories.status')

<div class="row">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
</div>

<div id="folders" class="row">
		
	<div class="col-md-3">

		<div class="list-group">
			<a href="#" class="list-group-item active">Folders &amp; Files </a>
			<a href="{{route('categories.index')}}" class="list-group-item">Categories</a>
			<a href="{{--  {{route('categories.shared')}} --}}#" class="list-group-item">Shared</a>
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
				
				<div class="dropdown">
				  <button id="options-btn" class="btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Create
				  <span class="caret"></span></button>
				  <ul class="dropdown-menu">
					<li class="disabled"><a href="#">PRO / Folder</a></li>
					<li class="active"><a href="#">Upgrade Acc</a></li>
					<li class="divider"></li>
					<li><a title="Create new folder" href="">
						<span class="pull-right glyphicon glyphicon-folder-close" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
						Folder
					</a></li>
					
				  </ul>
				</div>
				
				<div id="user-search" class="pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group add-on">
								<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				  
					
				</div>
			</div>
			<div class="panel-body">
<<<<<<< HEAD
				<ul>

				</ul>
=======
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
						<span class="float-left">Name</span>
						<span class="float-right">Size</span>
						<span class="float-right">Type</span>
						<span class="float-right">Date created</span>
					</label>
				</div>
				
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
						<span class="float-left">Name</span>
						<span class="float-right">Size</span>
						<span class="float-right">Type</span>
						<span class="float-right">Date created</span>
					</label>
				</div>
				
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
						<span class="float-left">Name</span>
						<span class="float-right">Size</span>
						<span class="float-right">Type</span>
						<span class="float-right">Date created</span>
					</label>
				</div>
				
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
						<span class="float-left">Name</span>
						<span class="float-right">Size</span>
						<span class="float-right">Type</span>
						<span class="float-right">Date created</span>
					</label>
				</div>
				
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
						<span class="float-left">Name</span>
						<span class="float-right">Size</span>
						<span class="float-right">Type</span>
						<span class="float-right">Date created</span>
					</label>
				</div>
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
			</div>
		</div>
	</div>
</div>
@stop
