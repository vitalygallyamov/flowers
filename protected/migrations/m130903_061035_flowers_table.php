<?php

class m130903_061035_flowers_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('flowers', array(
            'id' => 'pk',
            'name' => "string NOT NULL COMMENT 'Название'",
        ), 'ENGINE = MYISAM');

        $this->createTable('catalog_flowers', array(
        	'catalog_id' => 'int NOT NULL',
        	'flower_id' => 'int NOT NULL',
        	'PRIMARY KEY (catalog_id, flower_id)'
        ), 'ENGINE = MYISAM');

        $this->addForeignKey('cf_fk1', 'catalog_flowers', 'catalog_id', 'catalog', 'id');
        $this->addForeignKey('cf_fk2', 'catalog_flowers', 'flower_id', 'flowers', 'id');
	}

	public function down()
	{
		$this->dropTable('flowers');
		$this->dropTable('catalog_flowers');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}