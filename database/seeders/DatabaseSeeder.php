<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EmailTemplateTableSeeder::class,
            SmsTemplateTableSeeder::class,
            TaxTableSeeder::class,
            ProdSettingsTableSeeder::class,
            ProdBranchTableSeeder::class,
            ProdCashRegisterTableSeeder::class,
            PaymentMethodsTableSeeder::class,
            InvoiceTemplateTableSeeder::class,
            AdjustStockTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
