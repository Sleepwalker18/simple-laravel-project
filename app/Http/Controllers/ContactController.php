<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contact = Contact::all();
      return $contact;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required'
      ]);

      $contact = new Contact([
        'first_name' => $request->get('first_name'),
        'last_name' => $request->get('last_name'),
        'email' => $request->get('email')
      ]);

      $contact->save();

      return response('User created', 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $contact = Contact::findOrFail($request->id);
      
      return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $contact = Contact::findOrFail($request->id);

      $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required'
      ]);

      $contact->first_name = $request->first_name;
      $contact->last_name = $request->last_name;
      $contact->email = $request->email;

      $contact->save();

      return response('User updated', 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $contact = Contact::destroy($request->id);

      return response('User deleted', 201);
    }
}
