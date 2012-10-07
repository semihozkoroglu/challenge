<?php

class m121007_084747_info extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_info', array(
            'id' => 'int',
            'username' => 'string',
            'about' => 'string',
            'locale' => 'string',
            'gender' => 'string',
        ));		
	}

	public function down()
	{
		$this->dropTable('tbl_info');
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
