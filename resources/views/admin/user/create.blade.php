@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-5 font-weight-semibold">Create User:</h4>
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                                <div class="text-danger">@error('name'){{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter Email" {{ old('email') }}>
                                <div class="text-danger">@error('email'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Enter Password" {{ old('password') }}>
                                <div class="text-danger">@error('password'){{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assign Role</label>
                                <select name="role_id" class="form-control custom-select select2" data-placeholder="Select Country">
                                    <option label="Select Role"></option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">@error('role_id'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Upload Image:</label>
                        <div class="form-group">
                            <input class="form-control" type="file" name="image">
                            <div class="text-danger">@error('image'){{ $message }}@enderror</div>
                        </div>
                    </div>

                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 me-5">Status :</label>
                        <label class="custom-control custom-radio success me-4">
                            <input type="radio" class="custom-control-input" name="status" value="active">
                            <span class="custom-control-label">Active</span>
                        </label>
                        <label class="custom-control custom-radio success me-4">
                            <input type="radio" class="custom-control-input" name="status" value="inactive">
                            <span class="custom-control-label">Inactive</span>
                        </label>
                        <div class="text-danger">@error('status'){{ $message }}@enderror</div>
                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-sm mt-3" type="submit">Submit</button>
                    </div>
                </form>

        </div>
    </div>
</div>
@endsection
