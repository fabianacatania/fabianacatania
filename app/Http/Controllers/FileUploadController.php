<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        // Valida il file caricato
        $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Carica il file
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filePath = $file->store('documents', 'public');

            return back()->with('success', 'File uploaded successfully')->with('file', $filePath);
        }

        return back()->withErrors('No file selected or file upload failed.');
    }
}
