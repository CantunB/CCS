<?php

use App\Pagos;
use Illuminate\Database\Seeder;

class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pagos::create(
            [
           'prestamo' => '1500',
           'pago' => '150'
            ]
       );
        Pagos::create(
            [
           'prestamo' => '2000',
           'pago' => '200'
            ]
       );
        Pagos::create(
            [
           'prestamo' => '2500',
           'pago' => '250'
            ]
       );
        Pagos::create(
            [
           'prestamo' => '3000',
           'pago' => '300'
            ]
       );
    }
}
