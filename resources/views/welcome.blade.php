@extends('layouts.default')

@section('head')
    <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon_1.ico')}}">
    <title>Welcome</title>
@endsection

@section('racine_page','welcome')
@section('page_name','welcome')

@section('content')
  <p> Welcome les amis </p>
@stop

@section('js')


@endsection