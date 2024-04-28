@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.jobCat.jobCat-list')
    @include('components.company.jobCat.jobCat-delete') 
    @include('components.company.jobCat.jobCat-create')
    @include('components.company.jobCat.jobCat-update')
@endsection
