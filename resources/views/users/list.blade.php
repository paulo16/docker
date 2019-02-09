@extends('layouts.default')

@section('head')
<link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
<title>Users</title>
@endsection

@section('racine_page','Users')
@section('page_name','liste')

@section('titre1_page','CLIENTS')
@section('titre2_page','LISTE')

@section('content')

<br><br><br>
<table id="users-table" class="dataTables_wrapper form-inline no-footer">
	<thead>
		<tr>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Télephone</th>
			<th> Email </th>
			<th> Crée Par </th>
			<th> Crée le </th>
			<th>Action</th>
		</tr>
	</thead>
</table>

@stop

@section('js')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(document).ready(function () {
		$('#users-table').DataTable({
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
					columns: [0,1, 2, 3, 4, 5]
				}
			},
			{
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5]
				}
			},
			{
				"extend": "pdf",
				"title": "Application DOCKER liste des users",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5]
				}
			},
			{
				"extend": "print",
				"title": "Application DOCKER liste des users",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
				"className": "btn btn-white btn-primary btn-bold",
				"exportOptions": {
					columns: [0,1, 2, 3, 4, 5]
				},
				autoPrint: false,
				message: 'This print was produced using the Print button for DataTables'
			}		  
			],
			processing: true,
			serverSide: true,
			ajax:{ 
				url:'{!! route('users.data') !!}'
			},
			data: {_token: '{{ csrf_token() }}'},
			columns: [
			{data: 'name', name: 'name'},
			{data: 'lastname', name: 'lastname'},
			{data: 'telephone', name: 'telephone'},
			{data: 'email', name: 'email'},
			{data: 'username', name: 'username'},
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name: 'action', orderable: false, searchable: false}
			],

		});


		 //////////////////// Delete User ///////////////////////////////////

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
		 	var url = '{{ route("users.delete", ":id") }}';
		 	url = url.replace(':id', id);
		 	swal(swal_ot, function () {
		 		$.ajax({
		 			url: url,
		 			type: 'POST',
		 			data: {_token: '{{ csrf_token() }}'},
		 		}).done(function () {
		 			swal("{{ Lang::get('sweetalert.supprime') }}", "{{ Lang::get('sweetalert.sub_sup') }}", "success");
		 			$('#users-table').DataTable().ajax.reload(null, false);
		 			;
		 		}).error(function () {
		 			swal("{{ Lang::get('sweetalert.oops') }}", "{{ Lang::get('sweetalert.problem_server') }}", "error");
		 		});
		 	});
		 });
		});



	</script>

	@endsection