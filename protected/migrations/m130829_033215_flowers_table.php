<?php

class m130829_033215_flowers_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('catalog', array(
            'id' => 'pk',
            'title' => "string NOT NULL COMMENT 'Название'",
            'price' => "int NOT NULL COMMENT 'Цена'",
            'discount_price' => "int COMMENT 'Цена со скидкой'",
            'gallery_id' => "int COMMENT 'Галлерея'",
            'desc' => "string COMMENT 'Описание'",
        ), 'ENGINE = MYISAM');
	}

	public function down()
	{
		$this->dropTable('catalog');
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