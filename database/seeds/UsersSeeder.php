<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat role member
        $karyawanRole = new Role();
        $karyawanRole->name = "karyawan";
        $karyawanRole->display_name = "karyawan";
        $karyawanRole->save();


        //membuat sample admin
        $admin= new user();
        $admin->name = 'Admin Koperasi Sekolah';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);


        
        //membuat sample karyawan
        $karyawan = new user();
        $karyawan->name = 'karyawan';
        $karyawan->email = 'karyawan@gmail.com';
        $karyawan->password = bcrypt('rahasia');
        $karyawan->save();
        $karyawan->attachRole($karyawanRole);

        

    }
}
