@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-5 font-weight-semibold">Create User:</h4>
                <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Role</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Role" value="{{ old('name') }}">
                                <div class="text-danger">@error('name'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <!-- Permissions Heading with Select All Checkbox -->
                    <div class="row">
                        <div class="col-3">
                            <h4>Permissions</h4>
                        </div>
                        <div class="col-9">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkAll">
                                <label class="form-check-label" for="checkAll">Select All</label>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Grouping Permissions by Guard Name -->
                    <div class="table-responsive">
                        @foreach ($permissions->groupBy('guard_name') as $guard_name => $perms)
                            <div class="row">
                                <div class="col-3">
                                    <h5>{{ ucfirst($guard_name) }}</h5>
                                </div>
                                <div class="col-9">
                                    @foreach ($perms as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input permission-checkbox" name="permissions[]" value="{{ $permission->id }}">
                                            <label class="form-check-label">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-sm mt-3" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#checkAll').click(function() {
        $('.permission-checkbox').prop('checked', this.checked);
    });

    // // If any individual checkbox is unchecked, uncheck the "Select All" checkbox
    // $('.permission-checkbox').click(function() {
    //     if (!$(this).is(':checked')) {
    //         $('#checkAll').prop('checked', false);
    //     }
    // });
</script>
@endsection
