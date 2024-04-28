@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.admin.plugin.plugin-list')
    @include('components.admin.plugin.plugin-delete') 
    @include('components.admin.plugin.plugin-create')
    @include('components.admin.plugin.plugin-update')
@endsection
