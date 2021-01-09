<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class MenbersController extends Controller
{
    //

    public function index()
    {
        return view('menbers')
            ->with('contact_details', contact::all());
    }


    public function add()
    {
        return view('addmenbers');
    }
    public function AddMenber(Request $request)
    {
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->service = $request->service;
        $contact->description = $request->description;
        $contact->phone_number = $request->phone_number;
        $contact->save();
        return 'data saved';
    }

    public function edit($id)
    {

        return view('editmenber')
            ->with('contact', contact::find($id));
    }
    public function update(Request $request, $id)
    {

        $contact = contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->service = $request->service;
        $contact->description = $request->description;
        $contact->phone_number = $request->phone_number;
        $contact->save();
        // return 'data updated';
        return redirect()->back();
    }
    public function DeleteMenbers($id)
    {
        $contact = contact::find($id);
        $contact->delete();
        return 'menber deleted';
    }
}
