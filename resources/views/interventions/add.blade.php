@extends('layouts.default')

@section('head')
<link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
<title>Interventions</title>
@endsection

@section('racine_page','Interventions')
@section('page_name','ajout')

@section('titre1_page','Interventions')
@section('titre2_page','AJOUTER')

@section('content')

<!-- PAGE CONTENT BEGINS -->
<!--

<form action="{{route('interventions.store')}}" method="POST" enctype="multipart/form-data" class="form-inline" role="form">
	@csrf
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Client</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div class="row"> 
					<div class="col-sm-4 col-sm-offset-4">
						<span class="block input-icon input-icon-right">
							<input type="text" id="client" name="client"  placeholder="chercher un client" class="width-100">
							<i class="ace-icon fa fa-info-circle"></i>
						</span>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label for="name">Prénom</label>
					<input type="text"  id="name" name="name" class="form-control"  placeholder="">
				</div>
				<div class="form-group">
					<label for="lastnamename">Nom</label>
					<input type="text" class="form-control"  id="lastname" name="lastname"  placeholder="">
				</div>
				<div class="form-group">
					<label for="telephone">Télephone</label>
					<input type="text"  id="telephone" name="telephone"  class="form-control" placeholder=" ">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text"  id="email" class="form-control" name="email"  placeholder="">
				</div>
			</div>
		</div>
	</div>


	<div class="widget-box">
		<div class="widget-header">
			<h5 class="widget-title lighter">Moto</h5>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div class="row"> 
					<div class="col-sm-4 col-sm-offset-4 form-group">
						<span class="block input-icon input-icon-right">
							<input type="text" id="moto" name="moto"  placeholder="chercher une Moto" class="width-100">
							<i class="ace-icon fa fa-info-circle"></i>
						</span>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label for="moto">Nom de Moto </label>
					<input type="text"  id="nom" class="form-control col" name="nom" value="Nom de Moto"  placeholder="Nom">
				</div>
				<div class="form-group">
					<label for="matricule">Matricule</label>
					<input type="text" class="form-control col" id="matricule" name="matricule" placeholder="Matricule">
				</div>
				<div class="form-group">
					<label for="modele">Modèle</label>
					<input type="text"  id="modele" name="modele" class="form-control col"  placeholder="Modele">
				</div>
				<div class="form-group">
					<label for="couleur">Couleur</label>
					<input type="text"  id="couleur" name="couleur" class="form-control col"  placeholder="Couleur">
				</div>
			</div>

		</div>
	</div>

	<div class="space-4"></div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4"> 
			<a  data-id="" class="btn btn-primary waves-effect waves-light btn-sm" data-target="#modal-accessoire" id="add-accessoire" data-toggle="modal"><span class='glyphicon  glyphicon-plus'></span>
				Ajouter un accessoire
			</a>
			<a  data-id="" id="add-service" data-target="#modal-service" class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal"><span class='glyphicon  glyphicon-plus'></span>
				Ajouter un service
			</a>
		</div>
	</div>
	<div class="space-4"></div>
	<div class="col-sm-12">
		<table id="interventions-table" class="table  table-bordered table-hover">
			<thead>
				<tr>
					<th>Client</th>
					<th>Type</th>
					<th>Produit</th>
					<th>Prix</th>
					<th> crée le </th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr role="row" class="odd">
					<td>
						ZAA
					</td>
					<td>Service</td>
					<td class="hidden-480">REFRT112</td>
					<td>450 dh</td>

					<td class="hidden-480">
						10/02/2019
					</td>

					<td>
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="blue" href="#">
								<i class="ace-icon fa fa-search-plus bigger-130"></i>
							</a>

							<a class="green" href="#">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a class="red" href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>
					</td>
				</tr>
				<tr role="row" class="odd">
					<td>
						ZAA
					</td>
					<td>Service</td>
					<td class="hidden-480">REFRT112</td>
					<td>450 dh</td>

					<td class="hidden-480">
						10/02/2019
					</td>

					<td>
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="blue" href="#">
								<i class="ace-icon fa fa-search-plus bigger-130"></i>
							</a>

							<a class="green" href="#">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a class="red" href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>
					</td>
				</tr>
				<tr role="row" class="odd">
					<td>
						BOO SOIUYT
					</td>
					<td>Accessoire</td>
					<td class="hidden-480">REFRT112</td>
					<td>450 dh</td>

					<td class="hidden-480">
						11/02/2019
					</td>

					<td>
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="blue" href="#">
								<i class="ace-icon fa fa-search-plus bigger-130"></i>
							</a>

							<a class="green" href="#">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a class="red" href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>
					</td>
					<tr role="row" class="odd">
						<td>
							ZAA
						</td>
						<td>Service</td>
						<td class="hidden-480">REFRT112</td>
						<td>450 dh</td>

						<td class="hidden-480">
							10/02/2019
						</td>

						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								<a class="green" href="#">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="#">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>
							</div>
						</td>
					</tr>

				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-12">
		<div class="clearfix form-actions">
			<div class="col-md-offset-5 col-md-9">

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
	</div>
</form>
-->


<div class="widget-box">
	<div class="widget-header widget-header-blue widget-header-flat">
		<h4 class="widget-title lighter">Réaliser une Intervention</h4>
	</div>

	<div class="widget-body">
		<div class="widget-main">
			<div id="fuelux-wizard-container">
				<div>
					<ul class="steps">
						<li data-step="1" class="active">
							<span class="step">1</span>
							<span class="title">Détails Client</span>
						</li>

						<li data-step="2">
							<span class="step">2</span>
							<span class="title">Informations Moto</span>
						</li>

						<li data-step="3">
							<span class="step">3</span>
							<span class="title">Informations Produits</span>
						</li>

						<li data-step="4">
							<span class="step">4</span>
							<span class="title">Confirmer</span>
						</li>
					</ul>
				</div>

				<hr />
				<div class="step-content pos-rel">
					
					<div class="step-pane active" data-step="1">
						<h3 class="lighter block green">Détails sur le client</h3>
						<form class="form-horizontal" id="form-client">
							
							<div class="row"> 

								<div class="col-sm-3 col-sm-offset-4">
									<span class="block input-icon input-icon-right">
										<input type="text" id="client" name="client"  placeholder="Chercher un Client" class="width-100">
										<i class="ace-icon fa fa-info-circle"></i>
									</span>
								</div>
							</div>

							<div class="space-4"></div>
							<div class="row">

								<div class="space-4"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Prénom:</label>

									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="name" id="name" class="col-xs-12 col-sm-6" />
										</div>
									</div>
								</div>
								<div class="space-2"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="lastname">Nom</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" class="col-xs-12 col-sm-6"  id="lastname" name="lastname"  placeholder="">
										</div>
									</div>
								</div>
								<div class="space-2"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="telephone">Télephone</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text"  id="telephone" name="telephone"  class="col-xs-12 col-sm-6" placeholder=" ">
										</div>
									</div>
								</div>
								<div class="space-2"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="email"  id="email" class="col-xs-12 col-sm-6" name="email"  placeholder="">
										</div>
									</div>
								</div>
								
							</div>
						</form>

					</div>

					<div class="step-pane" data-step="2">
						<h3 class="lighter block green">Informations sur la Moto</h3>
						<form class="form-horizontal" id="form-moto">

							<div class="row"> 
								<div class="col-sm-3 col-sm-offset-4">
									<span class="block input-icon input-icon-right">
										<input type="text" id="moto" name="moto"  placeholder="Chercher une Moto" class="width-100">
										<i class="ace-icon fa fa-info-circle"></i>
									</span>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nom_moto">Nom :</label>

								<div class="col-xs-12 col-sm-9">
									<div class="clearfix">
										<input type="text" name="nom_moto" id="nom_moto" class="col-xs-12 col-sm-6" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="matricule">Matricule</label>
								<div class="col-xs-12 col-sm-9">
									<div class="clearfix">
										<input type="text" class="col-xs-12 col-sm-6"  id="matricule" name="matricule"  placeholder="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="modele_moto">Modèle</label>
								<div class="col-xs-12 col-sm-9">
									<div class="clearfix">
										<input type="text"  id="modele_moto" name="modele_moto"  class="col-xs-12 col-sm-6" placeholder=" ">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="couleur">Couleur</label>
								<div class="col-xs-12 col-sm-9">
									<div class="clearfix">
										<input type="text"  id="couleur" class="col-xs-12 col-sm-6" name="couleur"  placeholder="">
									</div>
								</div>
							</div>
						</form>
					</div>

					<div class="step-pane" data-step="3">
						<div class="center">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-2"> 
									<a  data-id="" class="btn btn-primary waves-effect waves-light btn-sm" data-target="#modal-accessoire" id="add-accessoire" data-toggle="modal"><span class='glyphicon  glyphicon-plus'></span>
										Ajouter un accessoire
									</a>
									&nbsp;&nbsp;&nbsp;
									<a  data-id="" id="add-service" data-target="#modal-service" class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal"><span class='glyphicon  glyphicon-plus'></span>
										Ajouter un service
									</a>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="col-sm-12">
								<table id="interventions-table" class="table  table-bordered table-hover">
									<thead>
										<tr>
											<th>Client</th>
											<th>Type</th>
											<th>Produit</th>
											<th>Prix</th>
											<th> crée le </th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td>
												ZAA
											</td>
											<td>Service</td>
											<td class="hidden-480">REFRT112</td>
											<td>450 dh</td>

											<td class="hidden-480">
												10/02/2019
											</td>

											<td>
												<div class="hidden-sm hidden-xs action-buttons">
													<a class="blue" href="#">
														<i class="ace-icon fa fa-search-plus bigger-130"></i>
													</a>

													<a class="green" href="#">
														<i class="ace-icon fa fa-pencil bigger-130"></i>
													</a>

													<a class="red" href="#">
														<i class="ace-icon fa fa-trash-o bigger-130"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td>
												ZAA
											</td>
											<td>Service</td>
											<td class="hidden-480">REFRT112</td>
											<td>450 dh</td>

											<td class="hidden-480">
												10/02/2019
											</td>

											<td>
												<div class="hidden-sm hidden-xs action-buttons">
													<a class="blue" href="#">
														<i class="ace-icon fa fa-search-plus bigger-130"></i>
													</a>

													<a class="green" href="#">
														<i class="ace-icon fa fa-pencil bigger-130"></i>
													</a>

													<a class="red" href="#">
														<i class="ace-icon fa fa-trash-o bigger-130"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td>
												BOO SOIUYT
											</td>
											<td>Accessoire</td>
											<td class="hidden-480">REFRT112</td>
											<td>450 dh</td>

											<td class="hidden-480">
												11/02/2019
											</td>

											<td>
												<div class="hidden-sm hidden-xs action-buttons">
													<a class="blue" href="#">
														<i class="ace-icon fa fa-search-plus bigger-130"></i>
													</a>

													<a class="green" href="#">
														<i class="ace-icon fa fa-pencil bigger-130"></i>
													</a>

													<a class="red" href="#">
														<i class="ace-icon fa fa-trash-o bigger-130"></i>
													</a>
												</div>
											</td>
											<tr role="row" class="odd">
												<td>
													ZAA
												</td>
												<td>Service</td>
												<td class="hidden-480">REFRT112</td>
												<td>450 dh</td>

												<td class="hidden-480">
													10/02/2019
												</td>

												<td>
													<div class="hidden-sm hidden-xs action-buttons">
														<a class="blue" href="#">
															<i class="ace-icon fa fa-search-plus bigger-130"></i>
														</a>

														<a class="green" href="#">
															<i class="ace-icon fa fa-pencil bigger-130"></i>
														</a>

														<a class="red" href="#">
															<i class="ace-icon fa fa-trash-o bigger-130"></i>
														</a>
													</div>
												</td>
											</tr>

										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="step-pane" data-step="4">
						<div class="center">
							<h3 class="green">Congrats!</h3>
							Your product is ready to ship! Click finish to continue!
						</div>
					</div>
				</div>
			</div>

			<hr />
			<div class="wizard-actions">
				<button class="btn btn-prev">
					<i class="ace-icon fa fa-arrow-left"></i>
					Prev
				</button>

				<button class="btn btn-success btn-next" data-last="Finish">
					Next
					<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
				</button>
			</div>
		</div><!-- /.widget-main -->
	</div><!-- /.widget-body -->
</div>

@include('services.add')
@include('interventions.accessoire')


<!-- PAGE CONTENT ENDS -->

@stop

@section('js')
<!-- page specific plugin scripts -->
<script src="{{asset('assets/js/wizard.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-additional-methods.min.js')}}"></script>
<script src="{{asset('assets/js/bootbox.js')}}"></script>
<script src="{{asset('assets/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script type="text/javascript">

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});


	$(document).ready(function () {


        //Si on écrit dans le champ de recherche Client 
        $("#client").on("keyup", delay(function() {
        	$('#name').val("");
        	$('#lastname').val("");
        	$('#telephone').val("");
        	$('#email').val("");

        	var value = $(this).val();
        	if (value) {
        		$.ajax({
        			url: '{!! route("clients.dataclient") !!}',
        			type: 'GET',
        			data: {
        				_token: '{{ csrf_token() }}',
        				client:value, 
        			}
        		}).done(function (client) {
        			if (client){
        				//console.log("Client trouvé");

        				$('#name').val(client.name);
        				$('#lastname').val(client.lastname);
        				$('#telephone').val(client.telephone);
        				$('#email').val(client.email);

        			}else{
        				console.log("Aucun client trouvé");
					//console.log(JSON.stringify(client));
				}

			}).error(function () {
				swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
			})}

		},500)
        );
        // fin recherche client 


        //Si on écrit dans le champ de recherche Moto
        $("#moto").on("keyup", delay(function() {
        	$('#nom_moto').val("");
        	$('#matricule').val("");
        	$('#modele_moto').val("");
        	$('#couleur').val("");

        	var value = $(this).val();
        	if (value) {
        		$.ajax({
        			url: '{!! route("interventions.datamoto") !!}',
        			type: 'GET',
        			data: {
        				_token: '{{ csrf_token() }}',
        				moto:value, 
        			}
        		}).done(function (moto) {
        			if (moto){
        				//console.log("Client trouvé");

        				$('#nom_moto').val(moto.nom);
        				$('#matricule').val(moto.matricule);
        				$('#modele_moto').val(moto.modele);
        				$('#couleur').val(moto.couleur);

        			}else{
        				console.log("Aucune Moto trouvée");
					//console.log(JSON.stringify(client));
				}

			}).error(function () {
				swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
			})}

		},500)
        );
        // fin recherche Moto


        //Si on écrit dans le champ de recherche Accessoire
        $("#accessoire").on("keyup", delay(function() {
        	$('#reference').val("");
        	$('#modele_accessoire').val("");
        	$('#serie').val("");
        	$('#couleur_accessoire').val("");

        	var value = $(this).val();
        	if (value) {
        		$.ajax({
        			url: '{!! route("interventions.dataaccessoire") !!}',
        			type: 'GET',
        			data: {
        				_token: '{{ csrf_token() }}',
        				accessoire:value, 
        			}
        		}).done(function (accessoire) {
        			if (accessoire){
        				//console.log("Client trouvé");

        				$('#reference').val(accessoire.reference);
        				$('#modele_accessoire').val(accessoire.modele);
        				$('#serie').val(accessoire.serie);
        				$('#couleur_accessoire').val(accessoire.couleur);

        			}else{
        				console.log("Aucun Accessoire trouvé");
					//console.log(JSON.stringify(client));
				}

			}).error(function () {
				swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
			})}

		},500)
        );
        // fin recherche Moto

        $("#form-accessoire").submit(function( event ) {
			//event.preventDefault();
			var client , moto, accessoire, service;

            //si le client existe pas la peine d'envoyer ses données entièrement 
            if($("#client-id").val()){
            	client={id:$("#client-id").val()};
            }else{

            	client={
            		name: $('#name').val(),
            		lastname: $('#lastname').val(),
            		telephone: $('#telephone').val(),
            		email: $('#email').val(),
            	};
            }

            //Moto
            if ($("#moto-id").val()) {
            	moto={id :$("#moto-id").val()};
            } else {
            	moto={
            		nom :$('#nom_moto').val(),
            		matricule :$('#matricule').val(),
            		modele :$('#modele_moto').val(),
            		couleur :$('#couleur').val()
            	};
            }

            //accessoire 
            if ($("#accessoire-id").val()) {
            	accessoire={id :$("#accessoire-id").val()};
            } else {

            	accessoire= {
            		reference: $('#reference').val(),
            		modele:$('#modele_accessoire').val(),
            		serie:$('#serie').val(),
            		couleur:$('#couleur_accessoire').val()
            	}

            }
        });



        // Début du wizard ou le formulaire en plusieurs étapes 

        $('#fuelux-wizard-container')
        .ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
        .on('actionclicked.fu.wizard' , function(e, info){
        	if(info.step == 1) {
        		//e.preventDefault();
        		$("#nom_service").val(servicename());
        	}
        })
		//.on('changed.fu.wizard', function() {
		//})
		.on('finished.fu.wizard', function(e) {


		}).on('stepclick.fu.wizard', function(e){
			//e.preventDefault();//this will prevent clicking and selecting steps

		});


		/**$('#interventions-table').DataTable({
			"oLanguage": {
				"sProcessing": "{{ Lang::get('datatable.sProcessing') }}",
				"sSearch": "{{ Lang::get('datatable.sSearch') }}",
				"sLengthMenu": "{{ Lang::get('datatable.sLengthMenu') }}",
				"sInfo": "{{ Lang::get('datatable.sInfo') }}",
				"sInfoEmpty": "{{ Lang::get('datatable.sInfoEmpty') }}",
				"sInfoFiltered": "{{ Lang::get('datatable.sInfoFiltered') }}",
				"sInfoPostFix": "{{ Lang::get('datatable.sInfoPostFix') }}",
				"sLoadingRecords": "{{ Lang::get('datatable.sLoadingRecords') }}",
				"sZeroRecords": "{{ Lang::get('datatable.sZeroRecords') }}",
				"sEmptyTable": "{{ Lang::get('datatable.sEmptyTable') }}",
				"oPaginate": {
					"sFirst": "{{ Lang::get('datatable.sFirst') }}",
					"sPrevious": "{{ Lang::get('datatable.sPrevious') }}",
					"sNext": "{{ Lang::get('datatable.sNext') }}",
					"sLast": "{{ Lang::get('datatable.sLast') }}"
				},
				"oAria": {
					"sSortAscending": "{{ Lang::get('datatable.sSortAscending') }}",
					"sSortDescending": "{{ Lang::get('datatable.sSortDescending') }}"
				}
			},
			dom: '<"top" < "row" <"col-sm-4"B><"col-sm-8"lf>>> <"bottom"rtip><"clear">',
			buttons: [
			{
				"extend": "colvis",
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
				"className": "btn btn-white btn-primary btn-bold",
			},
			{
				"extend": "csv",
				"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5,6]
				}
			},
			{
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5,6]
				}
			},
			{
				"extend": "pdf",
				"title": "Application DOCKER liste des interventions",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5,6]
				}
			},
			{
				"extend": "print",
				"title": "Application DOCKER liste des interventions",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5,6]
				},
				autoPrint: false,
				message: 'This print was produced using the Print button for DataTables'
			}		  
			],
			processing: true,
			serverSide: true,
			ajax:{ 
				url:'{!! route('interventions.data') !!}'
			},
			data: {_token: '{{ csrf_token() }}'},
			columns: [
			{data: 'reference', name: 'reference'},
			{data: 'modele', name: 'modele'},
			{data: 'serie', name: 'serie'},
			{data: 'couleur', name: 'couleur'},
			{data: 'quantite', name: 'quantite'},
			{data: 'prix', name: 'prix'},
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name: 'action', orderable: false, searchable: false}
			],

		});


		 //////////////////// Delete Intervention ///////////////////////////////////

		 $(document).on('click', '.delete', function () {
		 	var id = $(this).data('id');
		 	var swal_ot = {
		 		title: "{{ Lang::get('sweetalert.sure') }}",
		 		text: "{{ Lang::get('sweetalert.subtext_sure') }}",
		 		type: "warning",
		 		showCancelButton: true,
		 		confirmButtonText: "{{ Lang::get('sweetalert.confirm_btn') }}",
		 		cancelButtonText: "{{ Lang::get('sweetalert.cancel_btn') }}",
		 		closeOnConfirm: false
		 	};
		 	var url = '{{ route("interventions.delete", ":id") }}';
		 	url = url.replace(':id', id);
		 	swal(swal_ot, function () {
		 		$.ajax({
		 			url: url,
		 			type: 'POST',
		 			data: {_token: '{{ csrf_token() }}'},
		 		}).done(function () {
		 			swal("{{ Lang::get('sweetalert.supprime') }}", "{{ Lang::get('sweetalert.sub_sup') }}", "success");
		 			$('#interventions-table').DataTable().ajax.reload(null, false);
		 			;
		 		}).error(function () {
		 			swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
		 		});
		 	});
		 });
		 **/

		 /* modal service */
		 $(document).on('click', '#add-service', function () {

		 	$('#modal-service').modal('show');

		 });

		 /* modal accessoire */
		 $(document).on('click', '#add-accessoire', function () {

		 	$('#modal-accessoire').modal('show');

		 });


		});


function delay(callback, ms) {
	var timer = 0;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timer);
		timer = setTimeout(function () {
			callback.apply(context, args);
		}, ms || 0);
	};
}

function servicename() {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; //January is 0!
	var hour = today.getHours(); 
	var min = today.getMinutes(); 
	var sec = today.getSeconds();

	var yyyy = today.getFullYear();
	if (dd < 10) {
		dd = '0' + dd;
	} 
	if (mm < 10) {
		mm = '0' + mm;
	} 
	var service = "SERVICE-"+dd+'-'+mm+'-'+yyyy+'-'+hour+'-'+min+'-'+sec;
	return service ;
}

</script>

@endsection