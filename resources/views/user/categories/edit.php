@extends('layouts.index')

@section('title', 'New category')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit</h3>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('user.categories.edit') }}">
					<fieldset>
						<input class="form-control" placeholder="Category name" name="name" type="text">
						<input name="_token" value="{{ csrf_token() }}" type="hidden">
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Save">
					</fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
