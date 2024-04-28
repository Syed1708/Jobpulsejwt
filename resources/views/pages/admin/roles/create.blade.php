@extends('layout.common-sidenav-layout')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Role</div>

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ old('name')}}" id="name" class="form-control" >
                            @error('name')
                        <p class="alert-danger ">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Select Permissions *</label><br>
                            {{-- <input type="checkbox" id="select_all_permissions"> Select All<br> --}}
                            @foreach($permissions as $permission)
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"> {{ $permission->name }}<br>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    window.addEventListener('load', function() {
        document.getElementById('select_all_permissions').addEventListener('change', function() {
            var permissionCheckboxes = document.getElementsByName('permissions[]');
            for (var i = 0; i < permissionCheckboxes.length; i++) {
                permissionCheckboxes[i].checked = this.checked;
            }
        });
    });
</script>
@endsection
