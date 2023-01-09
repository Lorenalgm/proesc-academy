<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $response = Http::withBasicAuth('a8d062dc80593f2e2ff421f542a4eadb', '')->post('https://app.proesc.com/api/v2/user_validate_data?unidades=1', $data);

        return $response->json();
    }
}
