@extends('layouts.default')

@section('head')
<link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
<title>Clients</title>
@endsection

@section('racine_page','Clients')
@section('page_name','Profil')

@section('titre1_page','clients')
@section('titre2_page','Profil')

@section('content')

<!-- PAGE CONTENT BEGINS -->

<div class="page-header">
	<h1>
		Infos sur les clients
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			quelques informations sur le client 
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div>
			<div id="user-profile-1" class="user-profile row">
				<div class="col-xs-12 col-sm-3 center">
					<div>
						<span class="profile-picture">
							<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{asset('assets/images/avatars/profile-pic.jpg')}}">
						</span>

						<div class="space-4"></div>

						<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
							<div class="inline position-relative">
								<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
									<i class="ace-icon fa fa-circle light-green"></i>
									&nbsp;
									<span class="white">{{ $client->name}} &nbsp;&nbsp; {{$client->lastname }}</span>
								</a>

								<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
									<li class="dropdown-header"> Change Status </li>

									<li>
										<a href="#">
											<i class="ace-icon fa fa-circle green"></i>
											&nbsp;
											<span class="green">Available</span>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="ace-icon fa fa-circle red"></i>
											&nbsp;
											<span class="red">Busy</span>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="ace-icon fa fa-circle grey"></i>
											&nbsp;
											<span class="grey">Invisible</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="space-6"></div>

					<div class="profile-contact-info">


						<div class="space-6"></div>

						<div class="profile-social-links align-center">
							<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
								<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
							</a>

							<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
								<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
							</a>

							<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
								<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
							</a>
						</div>
					</div>

					<div class="hr hr12 dotted"></div>

					<div class="clearfix">



					</div>

					<div class="hr hr16 dotted"></div>
				</div>

				<div class="col-xs-12 col-sm-9">


					<div class="space-12"></div>

					<div class="profile-user-info profile-user-info-striped">
						<div class="profile-info-row">
							<div class="profile-info-name"> Nom</div>

							<div class="profile-info-value">
								<span class="editable editable-click" id="username">{{$client->name}}&nbsp;&nbsp;{{$client->lastname}} </span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Location </div>

							<div class="profile-info-value">
								<i class="fa fa-map-marker light-orange bigger-110"></i>
								<span class="editable editable-click" id="country">Maroc</span>
								<span class="editable editable-click" id="city">Casabalnca</span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Age </div>

							<div class="profile-info-value">
								<span class="editable editable-click" id="age">###</span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Telephone </div>

							<div class="profile-info-value">
								<span class="editable editable-click" id="signup">{{$client->telephone}}</span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Email </div>

							<div class="profile-info-value">
								<span class="editable editable-click" id="login">{{$client->email}}</span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Crée le </div>

							<div class="profile-info-value">
								<span class="editable editable-click" id="about">{{$client->created_at}}</span>
							</div>
						</div>
					</div>

					<div class="space-20"></div>

				</div>
			</div>
		</div>

	</div><!-- /.span -->
</div><!-- /.user-profile -->




<!-- PAGE CONTENT ENDS -->

@stop

@section('js')


@endsection