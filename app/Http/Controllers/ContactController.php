<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderByDesc('id')->get();
        return view('contacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'direction' => 'required|string|max:255',
        ]);

        // Creamos
        Contact::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'direction' => $request->input('direction'),
        ]);

        // Traemos todos los contactos
        $contacts = Contact::orderByDesc('id')->get();

        // Retornamos vista con datos
        return view('contacts', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        return view('show', compact('contact'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        // dd($contact);
        return view('create', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        // Eliminar el contacto
        $contact = Contact::findOrFail($contact->id); // Reemplaza $contactId con el ID correcto
        $contact->delete();

        // Traemos todos los contactos
        $contacts = Contact::orderByDesc('id')->get();

        // Redirigir a la lista de contactos
        return redirect()->route('contact.index');

    }
}
