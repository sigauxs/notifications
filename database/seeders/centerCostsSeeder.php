<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CenterCost;

class centerCostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $center = new CenterCost();
        $center->name = "Operaciones Y Fidelización";
        $center->abbreviation = "N.N";
        $center->code = 01;
        $center->save();

        $center_1 = new CenterCost();
        $center_1->name = "Mercadeo";
        $center_1->abbreviation = "N.N";
        $center_1->code = 01;
        $center_1->save();

        $center_2 = new CenterCost();
        $center_2->name = "TSA";
        $center_2->abbreviation = "N.N";
        $center_2->code = 01;
        $center_2->save();

        $center_3 = new CenterCost();
        $center_3->name = "DRUMMOND LTD";
        $center_3->abbreviation = "N.N";
        $center_3->code = 01;
        $center_3->save();

        $center_4 = new CenterCost();
        $center_4->name = "Promigas";
        $center_4->abbreviation = "N.N";
        $center_4->code = 01;
        $center->save();

        $center_5 = new CenterCost();
        $center_5->name = "Administrativo";
        $center_5->abbreviation = "N.N";
        $center_5->code = 01;
        $center_5->save();

        $center_6 = new CenterCost();
        $center_6->name = "Gerencia";
        $center_6->abbreviation = "N.N";
        $center_6->code = 01;
        $center_6->save();

        $center_7 = new CenterCost();
        $center_7->name = "Desarrollo Organizacional";
        $center_7->abbreviation = "N.N";
        $center_7->code = 01;
        $center_7->save();



    }
}