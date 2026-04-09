<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('contacts.index'));

// Génère automatiquement toutes les routes CRUD :
// GET    /contacts           → index
// GET    /contacts/create    → create
// POST   /contacts           → store
// GET    /contacts/{id}/edit → edit
// PUT    /contacts/{id}      → update
// DELETE /contacts/{id}      → destroy
Route::resource('contacts', ContactController::class);