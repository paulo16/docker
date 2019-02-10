@extends('layouts.default')

@section('head')
<link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
<title>Welcome</title>
@endsection

@section('racine_page','welcome')
@section('page_name','welcome')

@section('titre1_page','welcome')
@section('titre2_page','page')

@section('content')
<p> Welcome les amis </p>

<div class="row">
	<div class="space-6"></div>

	<div class="col-sm-12 infobox-container">
		<div class="infobox infobox-green">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-comments"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">32</span>
				<div class="infobox-content">Utilisateurs</div>
			</div>

			<div class="stat stat-success">8%</div>
		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-twitter"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">11</span>
				<div class="infobox-content">Clients</div>
			</div>

			<div class="badge badge-success">
				+32%
				<i class="ace-icon fa fa-arrow-up"></i>
			</div>
		</div>

		<div class="infobox infobox-pink">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-shopping-cart"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">8</span>
				<div class="infobox-content">Accessoires</div>
			</div>
			<div class="stat stat-important">4%</div>
		</div>

		<div class="infobox infobox-red">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-flask"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">7</span>
				<div class="infobox-content">Services</div>
			</div>
		</div>

		<div class="infobox infobox-orange2">
			<div class="infobox-chart">
				<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"><canvas width="44" height="33" style="display: inline-block; width: 44px; height: 33px; vertical-align: top;"></canvas></span>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">6,251</span>
				<div class="infobox-content">Interventions</div>
			</div>

			<div class="badge badge-success">
				7.2%
				<i class="ace-icon fa fa-arrow-up"></i>
			</div>
		</div>

		@stop

		@section('js')


		@endsection