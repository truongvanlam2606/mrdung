<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data['user_name'] = $request->query('user_name');
        $data['number_phone'] = $request->query('number_phone');
        $entity = Account::create($data);
        if ($entity)
            return response()->json(['status' => true]);

        return response()->json(['status' => false]);
    }
}
