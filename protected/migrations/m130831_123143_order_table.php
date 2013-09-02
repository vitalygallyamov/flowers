<?php

class m130831_123143_order_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('orders', array(
            'id' => 'pk',
            'fio' => "string NOT NULL COMMENT 'ФИО'",
            'phone' => "string NOT NULL COMMENT 'Телефон'",
            'address' => "string NOT NULL COMMENT 'Адрес доставки'",
            'date_order' => "datetime NOT NULL COMMENT 'Дата и время доставки'",
            'msg' => "string COMMENT 'Комментарий'",
            'status' => "TINYINT COMMENT 'Статус'",
            'date_create' => "timestamp DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания заказа'",
        ), 'ENGINE = MYISAM');

        $this->createTable('catalog_orders', array(
        	'catalog_id' => 'int NOT NULL',
        	'order_id' => 'int NOT NULL',
        	'PRIMARY KEY (catalog_id, order_id)'
        ), 'ENGINE = MYISAM');

        $this->addForeignKey('co_fk1', 'catalog_orders', 'catalog_id', 'catalog', 'id');
        $this->addForeignKey('co_fk2', 'catalog_orders', 'order_id', 'orders', 'id');
	}

	public function down()
	{
		$this->dropTable('orders');
		$this->dropTable('catalog_orders');
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