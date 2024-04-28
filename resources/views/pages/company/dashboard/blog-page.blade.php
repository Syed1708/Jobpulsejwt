@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.company.blog.blog-list')
    @include('components.company.blog.blog-delete') 
    @include('components.company.blog.blog-create')
    @include('components.company.blog.blog-update')
@endsection
