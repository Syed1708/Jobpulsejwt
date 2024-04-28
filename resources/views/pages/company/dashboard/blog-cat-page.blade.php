@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.blogCat.blogCat-list')
    @include('components.company.blogCat.blogCat-delete') 
    @include('components.company.blogCat.blogCat-create')
    @include('components.company.blogCat.blogCat-update')
@endsection
