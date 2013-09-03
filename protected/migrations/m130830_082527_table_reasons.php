<?php

class m130830_082527_table_reasons extends CDbMigration
{
	public function up()
	{
		$this->createTable('reasons', array(
            'id' => 'pk',
            'name' => "string NOT NULL COMMENT 'Название повода'",
        ), 'ENGINE = MYISAM');

        $this->createTable('catalog_reasons', array(
        	'catalog_id' => 'int NOT NULL',
        	'reason_id' => 'int NOT NULL',
        	'PRIMARY KEY (catalog_id, reason_id)'
        ), 'ENGINE = MYISAM');

        $this->addForeignKey('cc_fk1', 'catalog_reasons', 'catalog_id', 'catalog', 'id');
        $this->addForeignKey('cc_fk2', 'catalog_reasons', 'reason_id', 'reasons', 'id');
	}

	public function down()
	{
		$this->dropTable('reasons');
		$this->dropTable('catalog_reasons');
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