@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
	<li class="active">Categories</li>
  </ol>
</div>
<div class="row">
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
			<form action="{{ route('categories.update', $categories->id) }}" method="POST">
			
			<div class="form-group">
			
			<label for="section">Choose section:</label>
      
	        <select class="form-control" name="sections_id">
			@foreach($sections as $section)
            			<option value="{{ $section->id }}" {{ $categories->sections_id==$section->id ? 'selected': null }}>{{ $section->name }}</option>
			@endforeach
               </select>
	       </div>
	  
	  
	       <div class="form-group">
	       <label for="name">Category name:</label>
			
		   <input type="text" class="form-control" name="name" id="name" value="{{ $categories->name }}">
		   		  
			
			</div>
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
	</div>
</div>
@stop
