<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\CompanyLicense;
use App\Models\CompanyEmail;
use App\Models\CompanyContact;
use Illuminate\Support\Facades\DB;

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
            DB::beginTransaction();

            $companies = new Company();
            $companies->company_name = $request->company_name;
            $companies->company_code = $request->company_code;

            if ($request->hasFile('company_logo')) {
                $companyLogo = $request->file('company_logo');
                $fileName = time() . '.' . $companyLogo->getClientOriginalExtension();
                $companyLogo->move(public_path('assets/images/company/company_logo'), $fileName);
                $companies->company_logo = $fileName;
            }

            if ($request->hasFile('company_stamp')) {
                $companyStamp = $request->file('company_stamp');
                $fileName = time() . '.' . $companyStamp->getClientOriginalExtension();
                $companyStamp->move(public_path('assets/images/company/company_stamp'), $fileName);
                $companies->company_stamp = $fileName;
            }

            $companies->save();


            $addresses = $request->input('address', []);
            $address_types = $request->input('address_type', []);
            $address_preferences = $request->input('address_prefered', []);

            foreach ($addresses as $index => $addr) {
                $companyAddress = new CompanyAddress();
                $companyAddress->company_id = $companies->id;
                $companyAddress->address = $addr;
                $companyAddress->address_type = $address_types[$index] ?? null;
                $companyAddress->address_prefered = $address_preferences[$index] ?? null;
                $companyAddress->save();
            }
            $contact_types = $request->input('contact_type', []);
            $contacts = $request->input('contact', []);
            $contact_prefereds = $request->input('contact_prefered', []);

            foreach($contacts as $index => $cont) {
                $companyContact = new CompanyContact();
                $companyContact->company_id = $companies->id;
                $companyContact->contact_type = $cont;
                $companyContact->contact = $contacts[$index] ?? null;
                $companyContact->contact_prefered = $contact_prefereds[$index] ?? null;
                $companyContact->save();
                }

            $emails = $request->input('email');
            $emailtypes = $request->input('email_type');
            $emailprefereds = $request->input('emailprefered');
            foreach($emails as $index => $email) {
                $emails = new CompanyEmail();
                $emails->company_id = $companies->id;
                $emails->email = $email[$index];
                $emails->email_type = $emailtypes[$index];
                $emails->email_prefered = $emailprefereds[$index];
                $emails->save();
            }
         $licence_types = $request->input('license_type', []);
        $licences = $request->input('license', []);

        foreach ($licences as $index => $licence) {
            $newLicence = new CompanyLicense();
            $newLicence->company_id = $companies->id;
            $newLicence->license_type = $licence_types[$index];
            $newLicence->license = $licence;
            $newLicence->license_no = 7575;
            $newLicence->save();
        }

            DB::commit();
            return redirect()->route('company.show')->with('success', 'Company Created successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Company not created: ' . $e->getMessage());
        }
    }


}
