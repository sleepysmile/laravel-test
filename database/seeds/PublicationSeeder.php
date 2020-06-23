<?php

use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Publication::class, 50)->create([
            'title' => Str::random(10),
            'text' => Str::random(80)
        ]);
    }
}
