<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function create()
    {
        return view('customers');
    }

    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
        
            echo "<h2>Form validated</h2>"; 
        //return view('customers.store');
       
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}

?>