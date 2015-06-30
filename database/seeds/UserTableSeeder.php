<?php



class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    Login::create(array(
    	'name'     => 'Rakesh',
        'username' => 'Rakesh',
        'email'    => 'sharmarakesh395@gmail.com',
        'password' => Hash::make('mypass'),
    ));
  }
}