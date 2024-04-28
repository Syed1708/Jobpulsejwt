@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.page.page-list')
    @include('components.company.page.page-delete') 
    @include('components.company.page.page-create')
    @include('components.company.page.page-update')
@endsection
