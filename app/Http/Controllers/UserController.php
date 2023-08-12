<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create_user(Request $request) {
        //dd($request);

        if (isset($request['image'])) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $form_fields['image'] = $imageName;
        }
    }
}
