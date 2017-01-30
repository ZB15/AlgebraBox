@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@extends('includes.nav')

@section('content')

@include('user.categories.status')

<div class="row">

	<ol class="breadcrumb">
		<li class="active">Home</li>
		
		
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

<div id="folders" class="user-data row">
		
	<div class="col-md-3">

		<div class="list-group">
			<a href="#" class="list-group-item active">Folders &amp; Files </a>
			<a href="{{route('categories.index')}}" class="list-group-item">Categories</a>
			<a href="{{--  {{route('categories.shared')}} --}}#" class="list-group-item">Shared</a>
		</div>	
		
	</div>
	

	
	<div class="col-md-9">
		<div class="panel-default">
			<div class="clearfix">
				
				<div class="col-md-4 background-blue">
						<div class="status-info">
								<div class="dropdown">
									<button id="options-btn" class="font-2 btn background-blue dropdown-toggle" type="button" data-toggle="dropdown">Sort By
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Date</a></li>
										<li><a href="#">Size</a></li>
										<li><a href="#">Type</a></li>
									</ul>
								</div>
						</div>	
				</div>
				
				<div class="col-md-4 background-orange">
						<div class="status-info">
								<div class="dropdown">
									<button id="options-btn" class="font-2 btn background-orange dropdown-toggle" type="button" data-toggle="dropdown">Share
										<span class="caret"></span>
									</button>
								  <ul class="dropdown-menu">
									<li><a href="#">All</a></li>
									<li><a href="#">Folder</a></li>
									<li><a href="#">File</a></li>
								  </ul>
								</div>
						</div>	
				</div>
				  
				<div class="col-md-4 background-green">
						<div class="status-info">
								<div class="dropdown">
									<button id="options-btn" class="font-2 btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Create
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li class="disabled"><a href="#">PRO / Folder</a></li>
										<li class="active"><a href="#">Upgrade Acc</a></li>
										<li class="divider"></li>
										<li><a title="Create new folder" href="">
											<span class="pull-right glyphicon glyphicon-folder-close" aria-hidden="true"></span>
											<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
											Folder
										</a>
										</li>
									</ul>
								</div>
						</div>	
				</div>
				
				
				
				
			</div>
			
			
			<div class="panel-body">
<<<<<<< HEAD
<<<<<<< HEAD
				<ul>

				</ul>
=======
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
=======
			<div class="clearfix loop-inner">
				<div class="col-md-4 ">
					<p>
						<label class="checkbox-inline"><input type="checkbox" value="">
>>>>>>> 9e8a317f09a93fd3ac407b010c3ac5640ed6b42f
						<span class="float-left">Name</span>
						<span class="float-right">Type</span>
						</label>
					</p>
				</div>
				
				<div class="col-md-4 ">
					<p>Size</p>
				</div>
				
				<div class="col-md-4 ">
					<p class="float-right">Date created</p>
				</div>		
							
							
						
					
				
<<<<<<< HEAD
				<div id="user-file">
					<label class="checkbox-inline"><input type="checkbox" value="">
						<span class="float-left">Name</span>
						<span class="float-right">Size</span>
						<span class="float-right">Type</span>
						<span class="float-right">Date created</span>
					</label>
				</div>
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
=======
			</div>	

>>>>>>> 9e8a317f09a93fd3ac407b010c3ac5640ed6b42f
			</div>
		</div>
	</div>
</div>
@stop
