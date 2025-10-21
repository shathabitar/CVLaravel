<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contact = Contact::first();
        //   $tag1 = Tag::create(['name' => 'Support']);
        //   $tag2 = Tag::create(['name' => 'Sales']);
          
        //   $contact->tags()->attach([$tag1->id, $tag2->id]);

        Tag::factory()->count(5)->create();
    }
}
