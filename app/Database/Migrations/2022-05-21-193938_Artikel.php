<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
            ],
            'yposting'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '4',
            ],
            'time'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '10',
            ],
            'slag'          => [
                'type'          => 'VARCHAR',
                'constraint'    => '200',
            ],
            'judul'         => [
                'type'          => 'VARCHAR',
                'constraint'    => '200',
            ],
            'srcimg'        => [
                'type'          => 'INT',
                'constraint'    => '1',
            ],
            'picture'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '200',
            ],
            'oleh'          => [
                'type'          => 'VARCHAR',
                'constraint'    => '150',
            ],
            'kategori'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
            'level'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '2',
            ],
            'artikel'          => [
                'type'          => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('artikel');
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
