@extends('admin.components.master')
@section('admin')
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-5 font-weight-semibold">Roles:</h4>
                <div class="table-responsive">
                    <table class="table table-bordered border-top text-nowrap mb-0 client-perm-table">
                        <thead>
                            <tr>
                                <th>All Role</th>
                                <th class="text-center">View</th>
                                <th class="text-center">Create</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td class="font-weight-semibold">{{ $role->name }}</td>
                              <td class="text-center">
                                <label class="custom-control custom-checkbox success">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                    <span class="custom-control-label"></span>
                                </label>
                            </td>
                                <td class="text-center">
                                    <label class="custom-control custom-checkbox success">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option2">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="custom-control custom-checkbox success">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option3">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="custom-control custom-checkbox success">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option4">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
