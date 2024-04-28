@extends('layout.common-sidenav-layout')
@section('content')
 

    {{-- Add education modal --}}
    @include('components.candidate.dashboard.education.education-list') 
    @include('components.candidate.dashboard.education.education-delete') 
    @include('components.candidate.dashboard.education.education-create')
    @include('components.candidate.dashboard.education.education-update')

@endsection

