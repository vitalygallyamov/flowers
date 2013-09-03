<?php

class m130903_085713_alter_orders extends CDbMigration
{
	public function up()
	{
		$this->addColumn('orders', 'pay_type', "TINYINT NOT NULL COMMENT 'Способ оплаты'");
	}

	public function down()
	{
		$this->dropColumn('orders', 'pay_type');
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