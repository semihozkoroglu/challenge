<?php

class m121007_163715_user extends CDbMigration
{
	public function up()
	{
	    $this->createTable('tbl_user', array(
            'id' => 'int',
            'name' => 'string NOT NULL',
            'email' => 'string',
            'number' => 'string'
        ));
  }

  public function down()
  {
    $this->dropTable('tbl_user');
  }

}
