<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            'id'        => '',
            'nama'      => 'Khaeril Maswal Zaid',
            'username'  => 'muhammadkhaerilzaid@gmail.com',
            'password'  => '$2y$10$PAfDklHHAdaZ2hnwPWn5mumfHOzY8TD6Qp2GhETpAitCQ.ROEXT56',
            'member'    => 'PP.DEV-51',
            'foto'      => 'kmz.jpeg',
            'kategori'  => 'Devaloper'
        ];

        // Simple Queries
        //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('admin')->insert($data);

        //php spark db:seed Admin
    }
}
