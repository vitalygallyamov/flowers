<?php

class m130906_072516_phones_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('phones', array(
            'id' => 'pk',
            'phone' => "string NOT NULL COMMENT 'Телефон'",
            'name' => "string NOT NULL COMMENT 'Имя'",
            'status' => "TINYINT DEFAULT 1 COMMENT 'Статус'"
        ), 'ENGINE = MYISAM');
	}

	public function down()
	{
		$this->dropTable('phones'); 
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