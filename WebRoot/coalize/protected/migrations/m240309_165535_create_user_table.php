<?php

class m240309_165535_create_user_table extends CDbMigration
{
	public function up()
	{
		//Create table
		$this->createTable('tbl_user', array(
			'id' => 'pk',
			'username' => 'varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL',
			'password' => 'varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL',
			'email' => 'varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL',			
		));
		
		//Insert data
		$this->insertMultiple('tbl_user', array(
			['id'=>'1','username'=>'test1','password'=>'test1','email'=>'test1@example.com']
		));
	}

	public function down()
	{
		//Drop table
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