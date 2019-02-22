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
							<input type="text" id="client-id" name="client-id" hidden="1">
							<div class="row"> 

								<div class="col-sm-3 col-sm-offset-4">
									<span class="block input-icon input-icon-right">
										<input type="text" id="client" name="client"  placeholder="Chercher un Client" class="width-100">
										<i class="ace-icon fa fa-info-circle"></i>
									</span>
								</div>
							</div>

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


						</form>

					</div>

					<div class="step-pane" data-step="2">
						<h3 class="lighter block green">Informations sur la Moto</h3>
						<form class="form-horizontal" id="form-moto">
							<input type="text" id="moto-id" name="moto-id" hidden="1">
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
										<input type="text" class="col-xs-12 col-sm-6"  id="matricule_moto" name="matricule_moto"  placeholder="">
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
										<input type="text"  id="couleur_moto" class="col-xs-12 col-sm-6" name="couleur_moto"  placeholder="">
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
							
							<table id="interventions-table" width="100%" class="table  table-bordered table-hover">
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
							</table>
							
						</div>
					</div>

					<div class="step-pane" data-step="4">
						<div class="center">
							<h3 class="green">Merci!</h3>
							vos interventions ont bien été pris en compte  . 
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

	var client_id_after_create; 
	var moto_id_after_create; 
	var accessoire_id_after_create;


	$(document).ready(function () {


        //Si on écrit dans le champ de recherche Client 
        $("#client").on("keyup", delay(function() {
        	$('#client-id').val("");
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
        				$('#client-id').val(client.id);
        				$('#name').val(client.name);
        				$('#lastname').val(client.lastname);
        				$('#telephone').val(client.telephone);
        				$('#email').val(client.email);
        				client_id_after_create = client.id; 

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
        	$('#moto-id').val("");
        	$('#nom_moto').val("");
        	$('#matricule_moto').val("");
        	$('#modele_moto').val("");
        	$('#couleur_moto').val("");

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
        				$('#moto-id').val(moto.id);
        				$('#nom_moto').val(moto.nom);
        				$('#matricule_moto').val(moto.matricule);
        				$('#modele_moto').val(moto.modele);
        				$('#couleur_moto').val(moto.couleur);
        				moto_id_after_create = moto.id; 

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
        	$('#accessoire-id').val("");
        	$('#reference').val("");
        	$('#modele_accessoire').val("");
        	$('#serie').val("");
        	$('#couleur_accessoire').val("");
        	$('#prix_accessoire').val("");

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
        				$('#accessoire-id').val(accessoire.id);
        				$('#reference').val(accessoire.reference);
        				$('#modele_accessoire').val(accessoire.modele);
        				$('#serie').val(accessoire.serie);
        				$('#couleur_accessoire').val(accessoire.couleur);
        				$('#prix_accessoire').val(accessoire.prix);
        				accessoire_id_after_create = accessoire.id;

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

        // Début du wizard ou le formulaire en plusieurs étapes 
        //var service_id_after_create= = $("#accessoire-id").val() ?$("#accessoire-id").val():null;

        console.log("Client-id: "+$("#client-id").val() );
        $('#fuelux-wizard-container')
        .ace_wizard({
        	//step: 2 //optional argument. wizard will jump to step "2" at first
        	//buttons: '.wizard-actions:eq(0)'
        })
        .on('actionclicked.fu.wizard' , function(e, info){

        	
        	if(info.step == 1) {
	        	//e.preventDefault();
	        	//si on clique sur ajouter un service 
	        	$("#nom_service").val(servicename());
	        	var client;

	        	client={	
	        		name: $('#name').val(),
	        		lastname: $('#lastname').val(),
	        		telephone: $('#telephone').val(),
	        		email: $('#email').val(),
	        	};

	        	if (!$("#client-id").val() && !$("#name").val() && !$("#lastname").val() ) {
	        		swal({
	        			title: " Veillez renseigner le Client",
	        			text: "les Informations client sont obligatoire",
	        			type: "info",
	        		});

	        		e.preventDefault();

	        	} else if(!$("#client-id").val()){
	        		$.ajax({
	        			url: '{!! route("clients.createclientwizard") !!}',
	        			type: 'GET',
	        			data: {
	        				_token: '{{ csrf_token() }}',
	        				client:client, 
	        			}
	        		}).done(function (client) {
	        			client_id_after_create = client.id;
	        			console.log(client.id);

	        		}).error(function () {
	        			swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
	        		})

	        	} 
	        }


	        if(info.step == 2) {

	        	if (!$("#moto-id").val() && !$("#nom_moto").val()) {
	        		swal({
	        			title: " Informations Moto svp ! ",
	        			text: "les Informations moto sont requis ,le nom au moins",
	        			type: "info",
	        		});

	        	}else if(!$("#moto-id").val()){
	        		moto={
	        			nom :$('#nom_moto').val(),
	        			matricule :$('#matricule_moto').val(),
	        			modele :$('#modele_moto').val(),
	        			couleur :$('#couleur_moto').val()
	        		};

	        		$.ajax({
	        			url: '{!! route("interventions.createmotowizard") !!}',
	        			type: 'GET',
	        			data: {
	        				_token: '{{ csrf_token() }}',
	        				moto:moto, 
	        			}
	        		}).done(function (moto) {
	        			moto_id_after_create = moto.id;
	        			console.log(moto.id);

	        		}).error(function () {
	        			swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
	        		})

	        	}
	        }

	    }).on('finished.fu.wizard', function(e) {


	    }).on('stepclick.fu.wizard', function(e){
        	//e.preventDefault();//this will prevent clicking and selecting steps

        });


	    /**$("#form-accessoire").submit(function( event ) {


	    	event.preventDefault();

	    });*/

	    $('#envoyer-accessoire').click(function () {
	    	if (!$("#accessoire-id").val() && !$("#reference").val()) {
	    		swal({
	    			title: " Informations Accessoire svp ! ",
	    			text: "les Informations accessoire sont requis ,le nom au moins",
	    			type: "info",
	    		});

	    	}else if(!$("#accessoire-id").val()){
	    		accessoire= {
	    			reference: $('#reference').val(),
	    			modele:$('#modele_accessoire').val(),
	    			serie:$('#serie').val(),
	    			couleur:$('#couleur_accessoire').val(),
	    			prix:$('#prix_accessoire').val(),
	    		}


	    		$.ajax({
	    			url: '{!! route("interventions.createaccessoirewizard") !!}',
	    			type: 'GET',
	    			data: {
	    				_token: '{{ csrf_token() }}',
	    				client: client_id_after_create,
	    				moto : moto_id_after_create,
	    				accessoire:accessoire,
	    				accessoire_id :accessoire_id_after_create 
	    			}
	    		}).done(function (interventions) {
	        			//moto_id_after_create = moto.id;
	        			$('#modal-accessoire').modal('hide');
	        			console.log(JSON.stringify(interventions));

	        		}).error(function () {
	        			swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
	        		})

	        	}else{


	        		$.ajax({
	        			url: '{!! route("interventions.createaccessoirewizard") !!}',
	        			type: 'GET',
	        			data: {
	        				_token: '{{ csrf_token() }}',
	        				client: client_id_after_create,
	        				moto : moto_id_after_create,
	        				accessoire_id :accessoire_id_after_create 
	        			}
	        		}).done(function (interventions) {
	        			//moto_id_after_create = moto.id;
	        			$('#modal-accessoire').modal('hide');
	        			table.ajax.reload(null, false);
	        			console.log(JSON.stringify(interventions));

	        		}).error(function () {
	        			swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
	        		})

	        	}
	        })



	    $('#interventions-table').DataTable({
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
	    	dom: 'tip',
	    	processing: true,
	    	serverSide: true,
	    	ajax:{ 
	    		url:'{!! route('interventions.dataclient') !!}'
	    	},
	    	data: {_token: '{{ csrf_token() }}'},
	    	columns: [
	    	{data: 'name', name: 'name'},
	    	{data: 'type', name: 'type'},
	    	{data: 'produit', name: 'produit'},
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