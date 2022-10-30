<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\NoteController;
use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        NoteController::seedNoot(
            $name = "C5",
            $frequency = 523.25,
        );

        NoteController::seedNoot(
            $name = "CS5",
            $frequency = 554.37,
        );

        NoteController::seedNoot(
            $name = "D5",
            $frequency = 587.33,
        );

        NoteController::seedNoot(
            $name = "DS5",
            $frequency = 622.25,
        );

        NoteController::seedNoot(
            $name = "E5",
            $frequency = 659.25,
        );

        NoteController::seedNoot(
            $name = "F5",
            $frequency = 698.46,
        );

        NoteController::seedNoot(
            $name = "FS5",
            $frequency = 739.99,
        );

        NoteController::seedNoot(
            $name = "G5",
            $frequency = 783.99,
        );

        NoteController::seedNoot(
            $name = "GS5",
            $frequency = 830.61,
        );

        NoteController::seedNoot(
            $name = "A5",
            $frequency = 880.00,
        );

        NoteController::seedNoot(
            $name = "AS5",
            $frequency = 932.33,
        );

        NoteController::seedNoot(
            $name = "B5",
            $frequency = 987.77,
        );
    }
}
