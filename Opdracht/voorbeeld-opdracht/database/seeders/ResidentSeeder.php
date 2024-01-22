<?php
 
namespace Database\Seeders;
 
use App\Models\Resident;
use Illuminate\Database\Seeder;
 
class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $data =  [
            [
                'firstname' => 'Tom',
                'lastname' => 'Bakker',
                'residence' => '1',
            ],
            [
                'firstname' => 'Kim',
                'lastname' => 'Jansen',
                'residence' => '1',
            ],
            [
                'firstname' => 'Jan',
                'lastname' => 'Rietveld',
                'residence' => '2',
            ],
            [
                'firstname' => 'Anna',
                'lastname' => 'Wijngaard',
                'residence' => '0',
            ]   
        ];

        foreach ($data as $key => $value) {
            Resident::create($value);
        }
    }
}