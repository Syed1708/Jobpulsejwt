@extends('layout.common-sidenav-layout')
@section('content')

@include('components.candidate.dashboard.training.training-list') 
@include('components.candidate.dashboard.training.training-delete') 
@include('components.candidate.dashboard.training.training-create')
@include('components.candidate.dashboard.training.training-update')

@endsection

