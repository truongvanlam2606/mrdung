<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name'] = $request->query('name');
        $data['email'] = $request->query('email');
        $data['content'] =  $request->query('content');

        $entity = Contact::create($data);
        if ($entity)
            return response()->json(['status' => true]);

        return response()->json(['status' => false]);
    }
}
