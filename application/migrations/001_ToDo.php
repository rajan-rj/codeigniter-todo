<?php

class Migration_ToDo extends CI_Migration {
    public function up() {
    
        $this->dbforge->add_field(array(
                'id' => array(
                        'type' => 'INT',
                        'constraint' => 10,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                ),
                'title' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ),
                'status' => array(
                        'type' => 'ENUM("pending","completed")',
                        'default' => 'pending',
                ),
                'description' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                ),
                'created' => array(
                        'type' => 'TIMESTAMP',
                        'default' => NULL,
                ),
                'modified' => array(
                        'type' => 'TIMESTAMP',
                        'default' => NULL,
                ),
        ));
    
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('todo');
        
    }
}
