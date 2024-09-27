@extends('admin.components.master')
@section('admin')
<div class="row mt-5">
    <div class="col-xl-12 col-md-12 col-lg-12 mt-5">
        <div class="tab-menu-heading hremp-tabs p-0 ">
            <div class="tabs-menu1">
                <ul class="nav panel-tabs">
                    <li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">Company Details</a></li>
                    <li><a href="#tab6" data-bs-toggle="tab" class="">Contact Details</a></li>
                    <li><a href="#tab7" data-bs-toggle="tab" class="">Licence Details</a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
           <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="tab-content">
                <div class="tab-pane active" id="tab5">
                    <div class="card-body">
                        <h4 class="mb-4 font-weight-bold">Create Company</h4>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Company Name <span class="text-danger fw-bold"> *</span>    </label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-building"></i></span>
                                        <input class="form-control"  type="text"  name="company_name" placeholder="Enter Company Name..."  value="{{ old('company_name') }}">
                                    </div>
                                    <div class="text-danger">@error('company_name'){{ $message }}@enderror</div>
                                </div>
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Company Code <span class="text-danger fw-bold"> *</span>    </label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-building"></i></span>
                                        <input class="form-control"  type="text"  name="company_code" placeholder="Enter Company Code..."  value="{{ old('company_code') }}">
                                    </div>
                                    <div class="text-danger">@error('company_code'){{ $message }}@enderror</div>
                                </div>

                                <div class="col-sm-12 col-md-6 mb-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Company Logo<span class="text-danger fw-bold"> *</span></label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" name="company_logo" type="file" >
                                    </div>
                                    <div class="text-danger">@error('company_logo'){{ $message }}@enderror</div>
                                </div>
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <label class="form-label" for="basic-icon-default-fullname">Company Stamp<span class="text-danger fw-bold"> *</span></label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" name="company_stamp" type="file" >
                                    </div>
                                    <div class="text-danger">@error('company_stamp'){{ $message }}@enderror</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab6">
                    <div class="card-body">
                        <div class="form-group">
                            <div id="addresses">
                                <div class="row" id="address_0">
                                    <div class="col-sm-12 mb-2">
                                        <h5 class="float-start">Address</h5>
                                        <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                                        <button class="btn btn-outline-info float-end" type="button" onclick="addAddress(event)">Add <i class="bx bx-add-to-queue"></i></button>
                                    </div>
                                    <div class="col-sm-12 col-md-3 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Address Of <span class="text-danger fw-bold"> *</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-building"></i></span>
                                            <select class="form-select" name="address_type[]">
                                                <option>Select Address...</option>
                                                    <option value="1">Main Branch</option>
                                                    <option value="2">International Branch</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('address_type.*'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Address <span class="text-danger fw-bold"> *</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-building"></i></span>
                                            <input type="text" name="address[]" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <span class="text-danger">@error('address.*'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Preferred? </label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-check"></i></span>
                                            <select class="form-select" name="address_prefered[]">
                                                <option value="true" selected="">Yes</option>
                                                <option value="false">No</option>
                                            </select>
                                        </div>
                                        {{-- <span class="text-danger">@error('address_prefered'){{ $message }}@enderror</span> --}}
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div id="contacts">
                                <div class="row mt-2" id="contact_0">
                                    <div class="col-sm-12 mb-2 ">
                                        <h5 class="float-start">Contact</h5>
                                        <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="Contact" data-valmsg-replace="true"></span>
                                        <button class="btn btn-outline-info float-end" type="button" onclick="addContact(event)">Add <i class="bx bx-add-to-queue"></i></button>
                                    </div>
                                    <div class="col-sm-12 col-md-3 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Contact Type <span class="text-danger fw-bold"> *</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                            <select class="form-select" name="contact_type[]">
                                                <option>Select Contact Type...</option>
                                                    <option value="office">Office</option>
                                                    <option value="fax">FAX</option>
                                                    <option value="uan">UAN</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('contact_type.*'){{ $message }}@enderror</span>

                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Contact <span class="text-danger fw-bold"> *</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                            <input type="text" name="contact[]" class="form-control" placeholder="Enter Contact" value="">
                                        </div>
                                        <span class="text-danger">@error('contact.*'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Preferred?</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-check"></i></span>
                                            <select class="form-select" name="contact_prefered[]">
                                                <option value="true" selected="">Yes</option>
                                                <option value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div id="emails">
                                <div class="row mt-2" id="email_0">
                                    <div class="col-sm-12 mb-2 ">
                                        <h5 class="float-start">Email</h5>
                                        <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                        <button class="btn btn-outline-info float-end" type="button" onclick="addEmail(event)">Add <i class="bx bx-add-to-queue"></i></button>
                                    </div>
                                    <div class="col-sm-12 col-md-3 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Email Type <span class="text-danger fw-bold"> *</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-envelope"></i></span>
                                            <select class="form-select" name="email_type[]">
                                                <option>Select Email Type...</option>
                                                    <option value="hajj">For Hajj</option>
                                            </select>
                                        </div>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Email <span class="text-danger fw-bold"> *</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-envelope"></i></span>
                                            <input type="text" name="email[]" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname" name="">Preferred? </label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-check"></i></span>
                                            <select class="form-select" name="EmailPreferred[]">
                                                <option value="true" selected="">Yes</option>
                                                <option value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab7">
                    <div class="card-body">
                        <div id="licenses">
                            <div class="row mt-2" id="license_0">
                                <div class="col-sm-12 mb-2 ">
                                    <h5 class="float-start">Licenses</h5>
                                    <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="LicenseNo" data-valmsg-replace="true"></span>
                                    <button class="btn btn-outline-info float-end" type="button" onclick="addLicense(event)">Add <i class="bx bx-add-to-queue"></i></button>
                                </div>
                                <div class="col-sm-12 col-md-4 mb-3">
                                    <label class="form-label" for="basic-icon-default-fullname" name="">License Type <span class="text-danger fw-bold"> *</span></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-envelope"></i></span>
                                        <select class="form-select" name="LicenseTypeId[]">
                                            <option>Select License Type...</option>
                                                <option value="1">NTN</option>
                                                <option value="2">HOAP</option>
                                                <option value="3">MUNAZZIM</option>
                                                <option value="4">DTS</option>
                                                <option value="5">Enrollment No.</option>
                                        </select>
                                    </div>

                                    <span class="text-danger"></span>
                                </div>
                                <div class="col-sm-12 col-md-8 mb-3">
                                    <label class="form-label" for="basic-icon-default-fullname" name="">License # <span class="text-danger fw-bold"> *</span></label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-envelope"></i></span>
                                        <input type="text" name="LicenseNo[]" class="form-control" placeholder="Enter License #...">
                                    </div>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary save-btn" style="display: none;">Save</button>
                </div>
            </div>
           </form>
        </div>
    </div>
</div>
<script>
  let addressIndex = 1;
let contactIndex = 1;
let emailIndex = 1;
let licenseIndex = 1;

function addAddress(event) {
    const addressesContainer = document.getElementById('addresses');
    const newAddress = `
        <div class="row mt-2" id="address_${addressIndex}">
            <div class="col-sm-12 mb-2">
                <h5 class="float-start">Address</h5>
                <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                <button class="btn btn-outline-danger float-end" type="button" onclick="removeField('address_${addressIndex}')">Remove</button>
            </div>
            <div class="col-sm-12 col-md-3 mb-3">
                <label class="form-label">Address Of <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-building"></i></span>
                    <select class="form-select" name="address_type[]">
                        <option>Select Address...</option>
                        <option value="1">Main Branch</option>
                        <option value="2">International Branch</option>
                    </select>
                </div>
                <span class="text-danger"></span>
            </div>
            <div class="col-sm-12 col-md-6 mb-3">
                <label class="form-label">Address <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-building"></i></span>
                    <input type="text" name="address[]" class="form-control" placeholder="Enter Address">
                </div>
                   <span class="text-danger">@error('address.*'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <label class="form-label">Preferred?</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-check"></i></span>
                    <select class="form-select" name="address_prefered[]">
                        <option value="true" selected="">Yes</option>
                        <option value="false">No</option>
                    </select>
                </div>
            </div>
            <hr>
        </div>
    `;
    addressesContainer.insertAdjacentHTML('beforeend', newAddress);
    addressIndex++;
}

function addContact(event) {
    const contactsContainer = document.getElementById('contacts');
    const newContact = `
        <div class="row mt-2" id="contact_${contactIndex}">
            <div class="col-sm-12 mb-2">
                <h5 class="float-start">Contact</h5>
                <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="Contact" data-valmsg-replace="true"></span>
                <button class="btn btn-outline-danger float-end" type="button" onclick="removeField('contact_${contactIndex}')">Remove</button>
            </div>
            <div class="col-sm-12 col-md-3 mb-3">
                <label class="form-label">Contact Type <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                    <select class="form-select" name="contact_type[]">
                        <option>Select Contact Type...</option>
                        <option value="office">Office</option>
                        <option value="fax">FAX</option>
                        <option value="uan">UAN</option>
                    </select>
                </div>
                <span class="text-danger"></span>
            </div>
            <div class="col-sm-12 col-md-6 mb-3">
                <label class="form-label">Contact <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                    <input type="text" name="contact[]" class="form-control" placeholder="Enter Contact">
                </div>
                <span class="text-danger"></span>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <label class="form-label">Preferred?</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-check"></i></span>
                    <select class="form-select" name="contact_prefered[]">
                        <option value="true" selected="">Yes</option>
                        <option value="false">No</option>
                    </select>
                </div>
            </div>
            <hr>
        </div>
    `;
    contactsContainer.insertAdjacentHTML('beforeend', newContact);
    contactIndex++;
}

function addEmail(event) {
    const emailsContainer = document.getElementById('emails');
    const newEmail = `
        <div class="row mt-2" id="email_${emailIndex}">
            <div class="col-sm-12 mb-2">
                <h5 class="float-start">Email</h5>
                <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                <button class="btn btn-outline-danger float-end" type="button" onclick="removeField('email_${emailIndex}')">Remove</button>
            </div>
            <div class="col-sm-12 col-md-3 mb-3">
                <label class="form-label">Email Type <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <select class="form-select" name="email_type[]">
                        <option>Select Email Type...</option>
                        <option value="hajj">For Hajj</option>
                    </select>
                </div>
                <span class="text-danger"></span>
            </div>
            <div class="col-sm-12 col-md-6 mb-3">
                <label class="form-label">Email <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input type="text" name="email[]" class="form-control" placeholder="Enter Email Address">
                </div>
                <span class="text-danger"></span>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <label class="form-label">Preferred?</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-check"></i></span>
                    <select class="form-select" name="EmailPreferred[]">
                        <option value="true" selected="">Yes</option>
                        <option value="false">No</option>
                    </select>
                </div>
            </div>
            <hr>
        </div>
    `;
    emailsContainer.insertAdjacentHTML('beforeend', newEmail);
    emailIndex++;
}

function addLicense(event) {
    const licensesContainer = document.getElementById('licenses');
    const newLicense = `
        <div class="row mt-2" id="license_${licenseIndex}">
            <div class="col-sm-12 mb-2">
                <h5 class="float-start">Licenses</h5>
                <span class="mx-2 text-danger field-validation-valid" data-valmsg-for="LicenseNo" data-valmsg-replace="true"></span>
                <button class="btn btn-outline-danger float-end" type="button" onclick="removeField('license_${licenseIndex}')">Remove</button>
            </div>
            <div class="col-sm-12 col-md-4 mb-3">
                <label class="form-label">License Type <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <select class="form-select" name="LicenseTypeId[]">
                        <option>Select License Type...</option>
                        <option value="1">NTN</option>
                        <option value="2">HOAP</option>
                        <option value="3">MUNAZZIM</option>
                        <option value="4">DTS</option>
                        <option value="5">Enrollment No.</option>
                    </select>
                </div>
                <span class="text-danger"></span>
            </div>
            <div class="col-sm-12 col-md-8 mb-3">
                <label class="form-label">License # <span class="text-danger fw-bold">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input type="text" name="LicenseNo[]" class="form-control" placeholder="Enter License #...">
                </div>
                <span class="text-danger"></span>
            </div>
        </div>
    `;
    licensesContainer.insertAdjacentHTML('beforeend', newLicense);
    licenseIndex++;
}

function removeField(fieldId) {
    const field = document.getElementById(fieldId);
    if (field) {
        field.remove();
    }
}
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('a[data-bs-toggle="tab"]');
    const saveButton = document.querySelector('.save-btn');

    tabs.forEach(tab => {
        tab.addEventListener('shown.bs.tab', function (event) {
            // Show the button only when "Licence Details" tab is active
            if (event.target.getAttribute('href') === '#tab7') {
                saveButton.style.display = 'block';
            } else {
                saveButton.style.display = 'none';
            }
        });
    });
});
</script>

@endsection
