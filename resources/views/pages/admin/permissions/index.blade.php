@extends('layout.common-sidenav-layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Permissions</h4>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            
                            <h4 class="alert-heading">{{ session('success') }}</h4>
                          </div>
                        @endif
                    <div class="align-items-center col">
                        <a href="{{ route('permissions.create') }}" class="float-end btn m-0 bg-gradient-primary">Create</a>
                    </div>
                </div>
                <hr class="bg-dark"/>
                <table class="table" id="tableData">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableList">
                        @foreach ($permissions as $index => $permission)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->description }}</td>
                            <td>
                                <a href="{{ route('permissions.edit', $permission) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('permissions.destroy', $permission) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
