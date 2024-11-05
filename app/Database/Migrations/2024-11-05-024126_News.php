<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => 'John Doe',
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['published', 'draft'],
                'default' => 'draft',
            ]
        ]);

        // Primary key
        $this->forge->addKey('id', true);

        //  Membuat tabel news
        $this->forge->createTable('news', true);
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
