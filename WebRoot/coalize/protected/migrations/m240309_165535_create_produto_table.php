<?php

class m240309_165535_create_produto_table extends CDbMigration
{
	public function up()
	{
		//Create table
		$this->createTable('tbl_produto', array(
			'id' => 'pk',
			'cliente_id' => 'int NOT NULL',			
			'nome' => 'varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL',
			'preco' => 'decimal(10,2) NOT NULL',
			'foto' => 'longblob',			
		));
		
		//Insert Data
		$this->insertMultiple('tbl_produto', array(
			['id'=>'1','cliente_id'=>'1','nome'=>'produto1','preco'=>'10.00','foto'=>''],
			['id'=>'2','cliente_id'=>'2','nome'=>'produto2','preco'=>'12.00','foto'=>''],
			['id'=>'3','cliente_id'=>'3','nome'=>'produto3','preco'=>'13.00','foto'=>''],
			['id'=>'4','cliente_id'=>'4','nome'=>'produto4','preco'=>'10.40','foto'=>''],
			['id'=>'5','cliente_id'=>'5','nome'=>'produto5','preco'=>'13.00','foto'=>''],
			['id'=>'6','cliente_id'=>'6','nome'=>'produto6','preco'=>'30.00','foto'=>''],
			['id'=>'7','cliente_id'=>'7','nome'=>'produto7','preco'=>'10.00','foto'=>''],
			['id'=>'8','cliente_id'=>'8','nome'=>'produto8','preco'=>'15.00','foto'=>''],
			['id'=>'9','cliente_id'=>'9','nome'=>'produto9','preco'=>'3.00','foto'=>''],
			['id'=>'10','cliente_id'=>'10','nome'=>'produto10','preco'=>'4.00','foto'=>''],
			['id'=>'11','cliente_id'=>'11','nome'=>'produto11','preco'=>'14.00','foto'=>''],
			['id'=>'12','cliente_id'=>'12','nome'=>'produto12','preco'=>'13.00','foto'=>''],
			['id'=>'13','cliente_id'=>'13','nome'=>'produto13','preco'=>'14.00','foto'=>''],
			['id'=>'14','cliente_id'=>'14','nome'=>'produto14','preco'=>'14.00','foto'=>''],
			['id'=>'15','cliente_id'=>'15','nome'=>'produto15','preco'=>'120.00','foto'=>''],
			['id'=>'16','cliente_id'=>'16','nome'=>'produto16','preco'=>'12.00','foto'=>''],
			['id'=>'17','cliente_id'=>'17','nome'=>'produto17','preco'=>'110.00','foto'=>''],
			['id'=>'18','cliente_id'=>'18','nome'=>'produto18','preco'=>'144.00','foto'=>''],
			['id'=>'19','cliente_id'=>'19','nome'=>'produto19','preco'=>'102.00','foto'=>''],
			['id'=>'20','cliente_id'=>'20','nome'=>'produto20','preco'=>'120.00','foto'=>''],
			['id'=>'21','cliente_id'=>'21','nome'=>'produto21','preco'=>'120.00','foto'=>''],
			['id'=>'22','cliente_id'=>'2','nome'=>'produto22','preco'=>'123.00','foto'=>''],
			['id'=>'23','cliente_id'=>'1','nome'=>'produto23','preco'=>'123.00','foto'=>''],
			['id'=>'24','cliente_id'=>'2','nome'=>'produto24','preco'=>'123.00','foto'=>''],
			['id'=>'25','cliente_id'=>'3','nome'=>'produto25','preco'=>'123.00','foto'=>''],
			['id'=>'26','cliente_id'=>'4','nome'=>'produto26','preco'=>'123.00','foto'=>''],
			['id'=>'27','cliente_id'=>'5','nome'=>'produto27','preco'=>'123.00','foto'=>''],
			['id'=>'28','cliente_id'=>'7','nome'=>'produto28','preco'=>'123.00','foto'=>''],
			['id'=>'29','cliente_id'=>'7','nome'=>'produto29','preco'=>'123.00','foto'=>''],
			['id'=>'30','cliente_id'=>'8','nome'=>'produto30','preco'=>'123.00','foto'=>''],
			['id'=>'31','cliente_id'=>'9','nome'=>'produto31','preco'=>'123.00','foto'=>''],
			['id'=>'32','cliente_id'=>'10','nome'=>'produto32','preco'=>'123.00','foto'=>''],
			['id'=>'33','cliente_id'=>'12','nome'=>'produto33','preco'=>'123.00','foto'=>'']
		));
	}

	public function down()
	{
		//Drop table
		$this->dropTable('tbl_produto');
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