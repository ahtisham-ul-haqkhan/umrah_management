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
                    <a href="{{ route('company.view_trash', 0) }}" class="btn btn-primary btn-sm">View Trash</a>
                </div>


            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover card-table table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Quota</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($companies as $comp)
                           <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $comp->company_code }}</td>
                            <td>{{ $comp->company_name }}</td>
                            <td>No </td>
                            {{-- <td>{{ $comp->Role->name }}</td> --}}
                            <td>
                               <img src="{{ asset('assets/images/company/company_logo/' . $comp->company_logo) }}" height="62" width="62">
                            </td>

                            <td>
                                <div class="d-flex">
                                    <a href="#" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View" aria-label="View">
                                        <span class="material-icons text-primary">visibility</span> <!-- Material Icons Eye Icon -->
                                    </a>
                                    <a href="{{ route('company.restore', $comp->id) }}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Restore" aria-label="Restore">
                                        <span class="material-icons text-success">restore</span> <!-- Material Icons Restore Icon -->
                                    </a>
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
