@extends('layout.common-sidenav-layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card px-5 py-5">
                    <div class="row justify-content-between ">
                        <div class="align-items-center col">
                            <h4>Employees</h4>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                
                                <h4 class="alert-heading">{{ session('success') }}</h4>
                              </div>
                            @endif
                        <div class="align-items-center col">
                            <a href="{{ route('users.create') }}" class="float-end btn m-0 bg-gradient-primary">Create</a>
                        </div>
                    </div>
                    <hr class="bg-dark"/>
                   
                        <table class="table" id="tableData">
                            <thead>
                                <tr class="bg-light">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Permissions</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                            {{ $role->name }} 
                                                
                                            @endforeach
                                         </td>
                                         
                                        
                                        
                                        {{-- <td>
                                            <ul>
                                                @foreach ($user->permissions as $permission)
                                                    <li>{{ $permission->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td> --}}
                                            <td>{!! $user->permissions !!}</td>
                                        
                                        <td>{{ ucfirst($user->status) }}</td>
                                        <td>
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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
@endsection




