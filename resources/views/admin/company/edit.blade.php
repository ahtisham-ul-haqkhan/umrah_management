@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-5 font-weight-semibold">Create User:</h4>
                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Name" value="{{ $user->name }}">
                                <div class="text-danger">@error('name'){{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter Email" value="{{ $user->email }}">
                                <div class="text-danger">@error('email'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-1">
                            <div class="custom-controls-stacked d-md-flex mt-5">
                                <label class="form-label mt-1 me-5">Status :</label>
                                <label class="custom-control custom-radio success me-4">
                                    <input type="radio" class="custom-control-input" name="status" value="active"
                                        {{ $user->status === 'active' ? 'checked' : '' }}>
                                    <span class="custom-control-label">Active</span>
                                </label>
                                <label class="custom-control custom-radio success me-4">
                                    <input type="radio" class="custom-control-input" name="status" value="inactive"
                                        {{ $user->status === 'inactive' ? 'checked' : '' }}>
                                    <span class="custom-control-label">Inactive</span>
                                </label>
                                <div class="text-danger">@error('status'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Edit Image:</label>
                        <div class="form-group">
                            <input class="form-control" type="file" name="image">
                            @if($user->image)
                                <img src="{{ asset('assets/images/users/' . $user->image) }}" alt="User Image" height="100" width="100">
                            @endif
                            <div class="text-danger">@error('image'){{ $message }}@enderror</div>
                        </div>
                    </div>



                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-sm mt-3" type="submit">Submit</button>
                    </div>
                </form>

        </div>
    </div>
</div>
@endsection
