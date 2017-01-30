@extends('layouts.admin')

@section('title', 'Users')

@section('content')

    <div class="page-header">
        <div class='btn-toolbar pull-right'>
            <a class="btn  btn-lg background-orange" href="{{ route('users.create') }}">
                Create User
            </a>
        </div>
        <h1>USERS</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @foreach ($users as $user)
                <div>
                    <div class="panvel panel-default">
					
                        <div class="panel-body text-left">
						<div class="col-md-4 user-info background-blue">
						
						<div class="col-md-6 user-info-inner background-blue">
                            <p>
							<img src="//www.gravatar.com/avatar/{{ md5($user->email) }}?d=mm" alt="{{ $user->email }}">
                            </p>
							
							<p>
								<a href="{{ route('users.edit', $user->id) }}" class="btn background-green">
									Edit
								</a>
							</p>
							
							<p>
								<a href="{{ route('users.destroy', $user->id) }}" class="btn background-orange action_confirm" data-method="delete" data-token="{{ csrf_token() }}">
									Delete
								</a>
							</p>
						</div>
						
						
						<div class="col-md-6 user-info-inner background-blue">
						@if (!empty($user->first_name . $user->last_name))
                                <p>{{ $user->first_name . ' ' . $user->last_name}}</p>
                                <p>{{ $user->email }}</p>
                            @else
                                <p>{{ $user->email }}</p>
                            @endif
							
							<p>IP: 128.1.1.0</p>
							<p>Active: Yes / No</p>
						</div>
						</div>
						
						
						
							<div class="col-md-4 user-info background-orange">
							
                            <p>
                            @if ($user->roles->count() > 0)
                                {{ $user->roles->implode('name', ', ') }}
                            @else
                                <em>No Assigned Role</em>
                            @endif
                            <p>
							<p>
                            Registreted on: {{ Sentinel::check()->created_at}}
                            <p>
							<p>
                            Bandtwit: 2GB
                            <p>
							<p>
                            Folder name: 2549+51sdhgfdhj+8915
                            <p>
                       
						 </div>
						 
						 
						 <div class="col-md-4 user-info background-green">
						
							<p>
								Used space: 1.8 GB
                            </p>
                            <p>
								Folders: 185
                            <p>
							<p>
								Files: 185
                            <p>
							<p>
								Shared files: 18
                            <p>
							
                      
						  </div>
						  
						  
						  
                        </div>
                        
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {!! $users->render() !!}
@stop
