@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mt-5">
            <div class="row">
                <div class="col-lg-2 mt-5 text-center">
                    <h3 class="card-title">All Users</h3>
                </div>
                <div class="col-lg-10 text-end p-5">
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Create User</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover card-table table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $user)
                           <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->Role->name ?? 'nal' }}</td>
                            <td>
                                @if($user->status == 'active')
                                    <span class="badge badge-success-light">Active</span>
                                @else
                                    <span class="badge badge-danger-light">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('assets/images/users/'. $user->image) }}" height="42px" width="50px" alt="">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View" aria-label="View"><i class="feather feather-eye text-primary"></i></a>
                                    <a href="{{ route('user.edit', $user->id) }}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="feather feather-edit-2 text-danger"></i></a>
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this role?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
