@extends('layouts.default')

@section('head')
<link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
<title>Users</title>
@endsection

@section('racine_page','Users')
@section('page_name','Edit')

@section('titre1_page','users')
@section('titre2_page','EDITER')

@section('content')

<!-- PAGE CONTENT BEGINS -->
<form action="{{route('users.update',$user)}}" method="POST" class="form-horizontal" 
role="form" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="name"> Prénom </label>

	<div class="col-sm-9">
		<input type="text" id="name" name="name" placeholder="Prénom"  class="col-xs-10 col-sm-5" value="{{ old('name',$user->name) }}">

		@if ($errors->has('name'))
		<span class="help-block">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="lastname"> Nom </label>

	<div class="col-sm-9">
		<input type="text" id="lastname" name="lastname" placeholder="Nom" class="col-xs-10 col-sm-5" value="{{ old('lastname',$user->lastname) }}">

		@if ($errors->has('lastname'))
		<span class="help-block">
			<strong>{{ $errors->first('lastname') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="telephone"> telephone </label>

	<div class="col-sm-9">
		<input type="text" id="telephone" name="telephone" placeholder="telephone" class="col-xs-10 col-sm-5" value="{{ old('telephone',$user->telephone) }}">
		@if ($errors->has('telephone'))
		<span class="help-block">
			<strong>{{ $errors->first('telephone') }}</strong>
		</span>
		@endif
	</div>
</div>


<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>

	<div class="col-sm-9">
		<input type="text" id="email" name="email" placeholder="Email" class="col-xs-10 col-sm-5" value="{{ old('email',$user->email) }}">

		@if ($errors->has('email'))
		<span class="help-block">
			<strong>{{ $errors->first('email') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="photo"> photo </label>

	<div class="col-sm-4">
		<input @if(Storage::exists($user->photo)) data-default-file="{{ Storage::url($user->photo) }}"
		@endif  data-height="100" type="file" id="photo" name="photo" class="dropify"
		data-max-file-size="2M"/>

		@if ($errors->has('photo'))
		<span class="help-block">
			<strong>{{ $errors->first('photo') }}</strong>
		</span>
		@endif
	</div>

</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="password"> Password </label>

	<div class="col-sm-9">
		<input type="password" id="password" name="password"  class="col-xs-10 col-sm-5">

		@if ($errors->has('password'))
		<span class="help-block">
			<strong>{{ $errors->first('password') }}</strong>
		</span>
		@endif
	</div>

</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="password_confirmation"> Confirmation Password </label>

	<div class="col-sm-9">
		<input type="password" id="password_confirmation" name="password_confirmation"  class="col-xs-10 col-sm-5">

		@if ($errors->has('password_confirmation'))
		<span class="help-block">
			<strong>{{ $errors->first('password_confirmation') }}</strong>
		</span>
		@endif
	</div>


	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="Submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Envoyé
			</button>

			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>

</form>

<!-- PAGE CONTENT ENDS -->

@stop

@section('js')


@endsection