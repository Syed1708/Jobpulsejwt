@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.job.job-list')
    @include('components.company.job.job-delete') 
    @include('components.company.job.job-create')
    @include('components.company.job.job-update')
@endsection
