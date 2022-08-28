<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function generate_captch() {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function submit_registration(Request $request) {
        $title = $request->input('title');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $website = $request->input('website');
        $PIC = $request->input('PIC');
        $startup_criteria = $request->input('startup_criteria');
        $product_title = $request->input('product_title');
        $product_age = $request->input('product_age');
        $active_customer = $request->input('active_customer');
        $industry_sector = $request->input('industry_sector');
        $product_operation_field = $request->input('product_operation_field');
        $other_production_operation_field = $request->input('other_production_operation_field');
        $proposal = $request->file('proposal');

        if ($proposal->getSize() > 10000000) {
            return redirect('/register');
        }

        $registration = new Registration();

        $registration->title = $title;
        $registration->email = $email;
        $registration->phone = $phone;
        $registration->address = $address;
        $registration->website = $website;
        $registration->PIC = $PIC;
        $registration->startup_criteria = $startup_criteria;
        $registration->product_title = $product_title;
        $registration->product_age = $product_age;
        $registration->active_customer = $active_customer;
        $registration->industry_sector = $industry_sector;
        $registration->product_operation_field = $product_operation_field;
        $registration->other_production_operation_field = $other_production_operation_field ?? '-';

        $registration->save();

        if ($proposal->isValid()) {
            $file_name = 'file-' . $registration->id . '.pdf';
            Storage::put('/proposals/' . $file_name, $proposal->path());
            $registration->proposal = '/proposals/' . $file_name;
            $registration->save();
        }

        $registration->save();

        return redirect('thanks');
    }
}
