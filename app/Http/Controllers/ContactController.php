<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

    /** Afficher la liste des contacts */
    public function index() {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /** Formulaire d'ajout */
    public function create() {
        return view('contacts.create');
    }

    /** Enregistrer un nouveau contact */
    public function store(Request $request) {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:contacts',
            'phone' => 'required|string|max:20',
        ]);
        Contact::create($request->only('name', 'email', 'phone'));
        return redirect()->route('contacts.index');
    }

    /** Formulaire de modification */
    public function edit(Contact $contact) {
        return view('contacts.edit', compact('contact'));
    }

    /** Mettre à jour un contact */
    public function update(Request $request, Contact $contact) {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email,'.$contact->id,
            'phone' => 'required|string|max:20',
        ]);
        git 
        $contact->update($request->only('name', 'email', 'phone'));
        return redirect()->route('contacts.index')
                     ->with('success', 'Contact mis à jour !');
    }

    /** Supprimer un contact */
    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect()->route('contacts.index')
                     ->with('success', 'Contact supprimé !');
    }
}