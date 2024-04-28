@extends('layout.common-sidenav-layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                    <form action="{{ route('users.update', $user) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ old('name', $user->name)}}" id="name" class="form-control" >
                            @error('name')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input type="text" name="firstName" value="{{ old('firstName', $user->firstName)}}" id="firstNamew" class="form-control" >
                            @error('firstName')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastName">Name:</label>
                            <input type="text" name="lastName" value="{{ old('lastName', $user->lastName)}}" id="lastName" class="form-control" >
                            @error('lastName')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Input -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{ $user->email }}" id="email" class="form-control">
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Enter password" id="password" class="form-control">
                            @error('password')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        
                        </div>
                        <!--Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation">Password:</label>
                            <input type="password" name="password_confirmation" placeholder="Enter confirm password" id="password_confirmation" class="form-control">
                            @error('password_confirmation')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        
                        </div>
                       <!-- Status Checkboxes -->
                        <div class="form-group">
                            <label>Status:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="active" value="active" {{ $user->status === 'active' ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive" {{ $user->status === 'inactive' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>
                        </div>

                        <!-- Role Dropdown -->
                        <div class="form-group">
                            <label for="role_id">Role:</label>
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="" disabled>Select Role</option>
                                {{-- @foreach($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ $user->role && $user->role->id === $role->id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach --}}
                                @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @if(in_array($role->id, $data))
                                            selected 
                                            @endif
                                        >{{ $role->name }}</option>
                                    @endforeach
                                
                                
                            </select>

                            @error('role_id')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>                 


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



