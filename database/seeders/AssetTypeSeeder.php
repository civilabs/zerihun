<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssetType;

class AssetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assets = [
            ['Fixed','Fixed asset.'],
            ['Movable','Movable asset.'],
        ];
        
        foreach ($assets as $key => $value) {
            $type = new AssetType();
            $type->name = $value[0];
            $type->description = $value[1];
            $type->save();
        }
    }
}
