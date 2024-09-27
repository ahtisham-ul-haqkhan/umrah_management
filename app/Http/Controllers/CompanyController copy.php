<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\CompanyLicense;
use App\Models\CompanyEmail;
use App\Models\CompanyContact;

class CompanyController extends Controller
{
    public function show()
    {
        $companies = Company::get();
        return view('admin.company.show', compact('companies'));
    }

    public function create()
    {
        return view('admin.company.create');
    }

    public function store(Request $request)
    {
        try {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_code' => 'required|string|max:255',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'company_stamp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'address_type.*' => 'required|in:1,2', // Validation for address type, assuming it's a dropdown with values 1 and 2
            'address.*' => 'required|string|max:255', // Validation for addresses
            'contact.*' => 'required|string|max:255', // Validation for addresses
            'contact_type.*' => 'required|string|max:255', // Validation for addresses
        ]);


            $companies = new Company();
            $companies->company_name = $request->company_name;
            $companies->company_code = $request->company_code;

            if($request->hasFile('company_logo')) {
                $companyLogo = $request->file('company_logo');
                $fileName = time().'.'.$companyLogo->getClientOriginalExtension();
                $companyLogo->move(public_path('assets/images/company/company_logo'), $fileName);
                $companies->company_logo = $fileName;
            }

            if($request->hasFile('company_stamp')) {
                $companyStamp = $request->file('company_stamp');
                $fileName = time().'.'.$companyStamp->getClientOriginalExtension();
                $companyStamp->move(public_path('assets/images/company/company_stamp'), $fileName);
                $companies->company_stamp = $fileName;
            }

            $companies->save();


            foreach ($request->Address as $key => $address) {
                $address = new CompanyAddress();
                $address->company_id = $companies->id;
                $address->address = $address;
                $address->save();
            }

            return redirect()->route('company.show')->with('success', 'Company Created successfully');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Company Created Not successfully');
        }
    }

}
