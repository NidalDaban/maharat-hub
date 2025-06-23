<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'Arabic',
            'English',
            'Spanish',
            'French',
            'German',
            'Chinese',
            'Hindi',
            'Russian',
            'Portuguese',
            'Japanese',
            'Korean',
            'Turkish',
            'Italian',
            'Dutch',
            'Urdu',
            'Bengali',
            'Persian',
            'Malay',
            'Thai',
            'Swahili',
            'Vietnamese',
            'Greek',
            'Hebrew',
            'Polish',
            'Czech',
            'Romanian',
            'Hungarian',
            'Serbian',
            'Ukrainian',
            'Indonesian',
            'Norwegian',
            'Swedish',
            'Finnish',
            'Danish',
            'Filipino',
            'Pashto',
            'Somali',
            'Amharic',
            'Armenian',
            'Azerbaijani',
            'Basque',
            'Belarusian',
            'Catalan',
            'Estonian',
            'Georgian',
            'Hausa',
            'Igbo',
            'Irish',
            'Kazakh',
            'Kurdish',
            'Latvian',
            'Lithuanian',
            'Macedonian',
            'Maltese',
            'Mongolian',
            'Nepali',
            'Slovak',
            'Slovenian',
            'Tajik',
            'Tamil',
            'Telugu',
            'Tigrinya',
            'Yoruba',
            'Zulu',
        ];

        foreach ($languages as $language) {
            DB::table('languages')->insert([
                'name' => $language,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
