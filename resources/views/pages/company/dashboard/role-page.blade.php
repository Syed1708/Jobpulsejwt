@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.role.role-list')
    @include('components.company.role.role-delete') 
    @include('components.company.role.role-create')
    @include('components.company.role.role-update')
@endsection
