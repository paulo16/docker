@extends('layouts.default')

@section('head')
<link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
<title>Accessoires</title>
@endsection

@section('racine_page','Accessoires')
@section('page_name','ajout')

@section('titre1_page','Accessoires')
@section('titre2_page','AJOUTER')

@section('content')

<!-- PAGE CONTENT BEGINS -->
<form action="{{route('accessoires.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
	@csrf
	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="name"> Reference </label>

		<div class="col-sm-9">
			<input type="text" id="reference" name="reference" placeholder="reference" class="col-xs-10 col-sm-5">

			@if ($errors->has('reference'))
			<span class="help-block">
				<strong>{{ $errors->first('reference') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="modele"> Modèle </label>

		<div class="col-sm-9">
			<input type="text" id="modele" name="modele" placeholder="modele" class="col-xs-10 col-sm-5">
		</div>

		@if ($errors->has('modele'))
		<span class="help-block">
			<strong>{{ $errors->first('modele') }}</strong>
		</span>
		@endif
	</div>

	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="serie"> Serie </label>

		<div class="col-sm-9">
			<input type="text" id="serie" name="serie" placeholder="serie" class="col-xs-10 col-sm-5">
		</div>

		@if ($errors->has('serie'))
		<span class="help-block">
			<strong>{{ $errors->first('serie') }}</strong>
		</span>
		@endif
	</div>


	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="couleur"> Couleur </label>

		<div class="col-sm-9">
			<input type="text" id="couleur" name="couleur" placeholder="couleur" class="col-xs-10 col-sm-5">
		</div>

		@if ($errors->has('couleur'))
		<span class="help-block">
			<strong>{{ $errors->first('couleur') }}</strong>
		</span>
		@endif
	</div>

	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="quantite"> Quantité </label>

		<div class="col-sm-9">
			<input type="number" id="quantite" name="quantite" placeholder="quantite" class="col-xs-10 col-sm-5">
		</div>

		@if ($errors->has('quantite'))
		<span class="help-block">
			<strong>{{ $errors->first('quantite') }}</strong>
		</span>
		@endif
	</div>

	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="prix"> Prix </label>

		<div class="col-sm-9">
			<input type="number" id="prix" name="prix" placeholder="prix" class="col-xs-10 col-sm-5">
		</div>

		@if ($errors->has('prix'))
		<span class="help-block">
			<strong>{{ $errors->first('prix') }}</strong>
		</span>
		@endif
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="image"> Image </label>

		<div class="col-sm-4">
			<input id="image" name="image" data-height="100"  type="file" class="dropify" data-max-file-size="2M" />

			@if ($errors->has('image'))
			<span class="help-block">
				<strong>{{ $errors->first('image') }}</strong>
			</span>
			@endif
		</div>

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