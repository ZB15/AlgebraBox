@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <div class="page-header">
        <div class='btn-toolbar pull-right'>
            <a class="btn btn-primary btn-lg" href="{{ route('users.create') }}">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create User
            </a>
        </div>
        <h1>Users</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @foreach ($users as $user)
                <div>
                    <div class="panel panel-default">
					
                        <div class="panel-body text-left">
						<div class="col-md-4">
                            <img src="//www.gravatar.com/avatar/{{ md5($user->email) }}?d=mm" alt="{{ $user->email }}" class="img-circle">
                            @if (!empty($user->first_name . $user->last_name))
                                <h4>{{ $user->first_name . ' ' . $user->last_name}}</h4>
                                <p>{{ $user->email }}</p>
                            @else
                                <h4>{{ $user->email }}</h4>
                            @endif
							 </div>
							<div class="col-md-4">
							<ul class="list-group">
                            <li class="list-group-item">
                            @if ($user->roles->count() > 0)
                                {{ $user->roles->implode('name', ', ') }}
                            @else
                                <em>No Assigned Role</em>
                            @endif
                            </li>
							<li class="list-group-item">
                            Registreted on: {{ Sentinel::check()->created_at}}
                            </li>
							<li class="list-group-item">
                            Bandtwit: 2GB
                            </li>
							<li class="list-group-item">
                            Folder name: 2549+51sdhgfdhj+8915
                            </li>
                        </ul>
						 </div>
						 
						 
						 <div class="col-md-4">
						 <ul class="list-group">
							<li class="list-group-item">
								Used space: 1.8 GB
                            </li>
                            <li class="list-group-item">
								Folders: 185
                            </li>
							<li class="list-group-item">
								Files: 185
                            </li>
							<li class="list-group-item">
								Shared files: 18
                            </li>
							
                        </ul>
						  </div>
						  
						  
						  
                        </div>
                        
                        <div class="panel-footer">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                Edit
                            </a>
                            <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger action_confirm" data-method="delete" data-token="{{ csrf_token() }}">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {!! $users->render() !!}
@stop
