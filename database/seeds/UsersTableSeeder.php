<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user=User::create([
        'username'=>'Emad',
        'phone'=>'01094119654',
        'email'=>'admin@admin.com',
        'email_verified_at'=>Carbon::now(),
        'password'=>bcrypt('admin'),
      ]);


    }
}
