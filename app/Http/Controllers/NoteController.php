<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function toggleStatus($name) {
        $active = Note::all()->where('being_pressed',1);
        foreach ($active as $e) {
            $e->being_pressed = 0;
            $e->save();
        }

        $note = Note::all()->where('name', $name)->first();
        $note->being_pressed = 1;
        $note->save();
        return view('welcome');
    }

    public function getNote(): object {
        $currentNote = Note::all()->where('being_pressed', 1)->first();

        return response()->json([
           'id' => $currentNote->id,
           'name' => $currentNote->name,
           'frequency' => $currentNote->frequency,
        ]);
    }

    public function createNote(): void {
        $note = new Note();
        $note->name = request('name');
        $note->frequency = request('frequency');
        $note->being_pressed = request('pressed');
        $note->save();
    }

    public static function seedNoot($name,$frequency): void {
        $note = new Note();
        $note->name = $name;
        $note->frequency = $frequency;
        $note->save();
    }
}
