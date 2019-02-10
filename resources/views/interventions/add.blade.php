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
<br><br>
<form action="{{route('interventions.store')}}" method="POST" enctype="multipart/form-data" class="form-inline" role="form">
	@csrf
	<div class="col-sm-7">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Client</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<input type="text"  id="name" name="name" class="input-small"  placeholder="Prénom">
					<input type="text"  id="lastname" name="lastname"  placeholder="Nom">
					<input type="text"  id="telephone" name="telephone"  class="input-small" placeholder=" Telephone">
					<input type="text"  id="email" name="email"  placeholder="Email">
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-5">

		<div class="widget-box">
			<div class="widget-header">
				<h5 class="widget-title lighter">Moto</h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<input type="text"  id="nom" name="nom" value="Moto" hidden="1" placeholder="Nom">
					<input type="text"  id="matricule" name="matricule" placeholder="Matricule">
					<input type="text"  id="modele" name="modele" class="input-small"  placeholder="Modele">
					<input type="text"  id="couleur" name="couleur" class="input-small"  placeholder="Couleur">

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
	</div>
</form>

@include('services.add')
@include('interventions.accessoire')


<!-- PAGE CONTENT ENDS -->

@stop

@section('js')

<script type="text/javascript">

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});


	$(document).ready(function () {
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

	</script>

	@endsection