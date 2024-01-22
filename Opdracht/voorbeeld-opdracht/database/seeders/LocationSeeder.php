<?php
 
namespace Database\Seeders;
 
use App\Models\Location;
use Illuminate\Database\Seeder;
 
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $data =  [
            [
                'id' => '1',
                'name' => 'Rotterdam',
            ],
            [
                'id' => '2',
                'name' => 'Amsterdam',
            ]  
        ];

        foreach ($data as $key => $value) {
            Location::create($value);
        }
    }
}