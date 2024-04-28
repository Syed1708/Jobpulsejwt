@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.job.candidate-applied-list')
    @include('components.company.job.candidate-applied-view')
    @include('components.company.job.candidate-accept')
    @include('components.company.job.candidate-reject')
@endsection
