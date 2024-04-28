@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.admin.blogCat.blogCat-list')
    @include('components.admin.blogCat.blogCat-delete') 
    @include('components.admin.blogCat.blogCat-create')
    @include('components.admin.blogCat.blogCat-update')
@endsection
