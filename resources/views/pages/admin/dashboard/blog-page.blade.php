@extends('layout.common-sidenav-layout')
@section('content')
    @include('components.admin.blog.blog-list')
    @include('components.admin.blog.blog-delete') 
    @include('components.admin.blog.blog-create')
    @include('components.admin.blog.blog-update')
@endsection
