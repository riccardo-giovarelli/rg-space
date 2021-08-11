<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddRicUserToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'Riccardo Giovarelli',
                'email' => 'riccardo.giovarelli@gmail.com',
                'password' => '$2y$10$Kac.7mxfe1g5agm6USrNb.K.HNeNNPLmUq3xz2hfyS2y0.t6wUZXm',
                'role' => 'ric',
                'created_at' => '1982-05-24 17:00:00',
                'updated_at' => '1982-05-24 17:00:00'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('id', 1)->delete();
    }
}
