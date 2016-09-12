<?php

use Illuminate\Database\Seeder;

class ContractsTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        $id = 4;
        while ($i < 5)
        {
            factory(\SMSSim\Models\Contract::class)->create([
                'client_id' => $id,
                'vendor_id' => random_int(2, 3),
                'status' => random_int(0, 1),
            ]);
            $id++;
            $i++;
        }
    }
}
