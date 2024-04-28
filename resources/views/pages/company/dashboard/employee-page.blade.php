@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.employee.employee-list')
    @include('components.company.employee.employee-delete') 
    @include('components.company.employee.employee-create')
    @include('components.company.employee.employee-update')
@endsection
