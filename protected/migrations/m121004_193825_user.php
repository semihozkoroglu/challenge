<?php

class m121004_193825_user extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'email' => 'string',
						'number' => 'string'
        ));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
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
