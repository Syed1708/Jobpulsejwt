@extends('layout.common-sidenav-layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Role</div>

                <div class="card-body">
                    <form action="{{ route('roles.update', $role) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control">{{ $role->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Select Permissions *</label><br>
                            {{-- <input type="checkbox" id="select-all-checkbox">Select All<br> --}}
                            @foreach($permissions as $permission)
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}> {{ $permission->name }}<br>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.getElementById('select-all-checkbox').addEventListener('change', function() {
        var permissionCheckboxes = document.getElementsByName('permissions[]');
        for (var i = 0; i < permissionCheckboxes.length; i++) {
            permissionCheckboxes[i].checked = this.checked;
        }
    });
</script>

