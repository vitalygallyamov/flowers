<?php

class m130829_084139_reviews_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('reviews', array(
            'id' => 'pk',
            'fio' => "string NOT NULL COMMENT 'ФИО'",
            'msg' => "text NOT NULL COMMENT 'Текст отзыва'",
            'link' => "string COMMENT 'Ссылка'",
            'img' => "string COMMENT 'Превью'",
        ), 'ENGINE = MYISAM');
	}

	public function down()
	{
		$this->dropTable('reviews');
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