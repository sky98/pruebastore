<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tokenRequest;

class LoginController extends Controller
{
    public function token(tokenRequest $request){

    	// Retrieve the validated input data...
    	$validated = $request->validated();

    	$user=User::where('email', $validated->email)->first();

	    if (! $user || ! Hash::check($validated->password, $user->password)) {
	        throw ValidationException::withMessages([
	            'email' => ['The provided credentials are incorrect.'],
	        ]);
	    }

	    return $user->createToken($validated->device_name)->plainTextToken;
    }
}
