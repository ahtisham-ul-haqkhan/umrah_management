@extends('admin.components.master')
@section('admin')
<div class="row">
<div class="col-xl-12 col-md-12 col-lg-12 mt-4">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-5 font-weight-semibold">Create User:</h4>
            <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter Role" value="{{ old('name') }}">
                            <div class="text-danger">@error('name'){{ $message }}@enderror</div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    @foreach ($permissions->groupBy('guard_name') as $guardName => $guardPermissions)
                        <h5>{{ ucfirst($guardName) }} Permissions</h5> <!-- Heading for guard group -->

                        <div class="row">
                            @foreach ($guardPermissions as $permission)
                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="permission-{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}">
                                        <label class="form-check-label" for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

                <div class="card-footer text-end">
                    <button class="btn btn-success btn-sm mt-3" type="submit">Submit</button>
                </div>
            </form>


    </div>
</div>
</div>
@endsection
