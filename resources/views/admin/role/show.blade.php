@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mt-5">
            <div class="row">
                <div class="col-lg-2 mt-5 text-center">
                    <h3 class="card-title">All Roles</h3>
                </div>
                <div class="col-lg-10 text-end p-5">
                    <a href="{{ route('role.create') }}" class="btn btn-primary btn-sm">Create Role</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover card-table table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $user)
                           <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('role.edit', $user->id) }}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit">
                                    <i class="feather feather-edit-2 text-danger"></i>
                                </a>

                                <form action="{{ route('role.delete', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this role?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete">
                                        <i class="feather feather-trash-2 text-danger"></i>
                                    </button>
                                </form>
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
