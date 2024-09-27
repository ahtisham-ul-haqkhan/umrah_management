@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-5 font-weight-semibold">Edit User:</h4>
                <form action="{{ route('role.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Role</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Role" value="{{ $role->name }}">
                                <div class="text-danger">@error('name'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-sm mt-3" type="submit">Update</button>
                    </div>
                </form>

        </div>
    </div>
</div>
@endsection
