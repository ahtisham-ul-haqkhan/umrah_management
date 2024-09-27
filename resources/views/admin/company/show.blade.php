@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mt-5">
            <div class="row">
                <div class="col-lg-2 mt-5 text-center">
                    <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">Create Company</a>
                </div>
                <div class="col-lg-10 text-end p-5">
                    <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">View Trash</a>                </div>
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
                           @foreach ($companies as $comp)
                           <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $comp->name }}</td>
                            <td>{{ $comp->email }}</td>
                            {{-- <td>{{ $comp->Role->name }}</td> --}}
                            <td>
                                @if($comp->status == 'active')
                                    <span class="badge badge-success-light">Active</span>
                                @else
                                    <span class="badge badge-danger-light">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('assets/images/users/'. $comp->image) }}" height="42px" width="50px" alt="">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View" aria-label="View"><i class="feather feather-eye text-primary"></i></a>
                                    <a href="{{ route('user.edit', $comp->id) }}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="feather feather-edit-2 text-danger"></i></a>
                                    <a href="#" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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
