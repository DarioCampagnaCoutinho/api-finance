<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bills = [
            ['name' => 'Energia elétrica', 'bill_value' => 189.90, 'due_date' => '2026-07-10'],
            ['name' => 'Internet', 'bill_value' => 99.99, 'due_date' => '2026-07-15'],
            ['name' => 'Água', 'bill_value' => 74.50, 'due_date' => '2026-07-20'],
            ['name' => 'Aluguel', 'bill_value' => 1500.00, 'due_date' => '2026-07-05'],
        ];

        foreach ($bills as $bill) {
            Bill::firstOrCreate(['name' => $bill['name']], $bill);
        }
    }
}
