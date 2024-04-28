@extends('layout.common-sidenav-layout')
@section('content')

    @include('components.candidate.dashboard.job.job-list')
    @include('components.candidate.dashboard.job.job-delete') 
    @include('components.candidate.dashboard.job.job-create')
    @include('components.candidate.dashboard.job.job-update')

@endsection

