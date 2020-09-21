<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Parsedown;

class DevnotesController extends Controller
{
    public function index($fichier = null)
    {
        $Parsedown = new Parsedown();
        $notes = glob('devnotes/*');

        $note = file_get_contents("devnotes/0 Description.md");
        if ($fichier) {
            $note = file_get_contents("devnotes/$fichier");
        }
        $note = $Parsedown->text($note);
        return view('1 Devnotes.index', compact('notes', 'note'));
    }
}
