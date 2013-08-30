<?php

class m130830_061830_category_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('category', array(
            'id' => 'pk',
            'name' => "string NOT NULL COMMENT 'Название категории'",
        ), 'ENGINE = MYISAM');

        $this->createTable('catalog_category', array(
        	'catalog_id' => 'int NOT NULL',
        	'category_id' => 'int NOT NULL',
        	'PRIMARY KEY (catalog_id, category_id)'
        ), 'ENGINE = MYISAM');

        $this->addForeignKey('cc_fk1', 'catalog_category', 'catalog_id', 'catalog', 'id');
        $this->addForeignKey('cc_fk2', 'catalog_category', 'category_id', 'category', 'id');
	}

	public function down()
	{
		$this->dropTable('category');
		$this->dropTable('catalog_category');
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