@extends('layout.common-sidenav-layout')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>

                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ old('name')}}" id="name" class="form-control" >
                            @error('name')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input type="text" name="firstName" value="{{ old('firstName')}}" id="firstNamew" class="form-control" >
                            @error('firstName')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name:</label>
                            <input type="text" name="lastName" value="{{ old('lastName')}}" id="lastName" class="form-control" >
                            @error('lastName')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{ old('email')}}" id="email" class="form-control" >
                            @error('email')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Status Checkbox -->
                        <div class="form-group">
                            <label>Status:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="active" value="active" checked>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive">
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>
                        </div>
                         <!-- Role Dropdown -->
                        <div class="form-group">
                            <label for="role_id">Role:</label>
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="" disabled selected>Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                            
                        </div>


                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


