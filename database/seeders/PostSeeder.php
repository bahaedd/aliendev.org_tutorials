<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'First post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);
        
        Post::create([
            'title' => 'Second post',
            'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        Post::create([
            'title' => 'Third post',
            'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ]);
    
    }
}
