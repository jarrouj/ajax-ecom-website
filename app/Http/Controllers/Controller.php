<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Validation\Rule;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function yourMethod(Request $request)
    {
        $request->validate([
            'phone' => [
                'required',
                Rule::regex('/^961\d{7}$/') // Check if the phone number starts with 961 and has 7 digits after that
            ],
        ]);

    }

}
