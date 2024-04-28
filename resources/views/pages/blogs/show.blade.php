@extends('layout.common-sidenav-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User Details</div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Role:</strong> 
                            @foreach ($user->roles as $role)
                            {{ $role->name }} 
                            
                            @endforeach
                        </p>
                        <p><strong>Status:</strong> {{ ucfirst($user->status) }}</p>
                        <!-- Add other user details as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
