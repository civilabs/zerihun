<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['Contract Document','Contract document.'],
            ['Bid Document','Bid document.'],
            ['Other','Other documents.'],
        ];

        foreach ($types as $key => $value) {
            $type = new DocumentType();
            $type->name = $value[0];
            $type->description = $value[1];
            $type->save();
        }
    }
}
