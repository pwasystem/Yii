<?php

class m240309_165535_create_cliente_table extends CDbMigration
{
	public function up()
	{
		//Create table
		$this->createTable('tbl_cliente', array(
			'id' => 'pk',
			'nome' => 'varchar(255)',
			'cpf' => 'varchar(14) NOT NULL',
			'cep' => 'varchar(10) NOT NULL' ,
			'logradouro' => 'varchar(255) NOT NULL' ,
			'numero' => 'char(10) NOT NULL' ,
			'cidade' => 'varchar(100) NOT NULL' ,
			'estado' => 'char(3) NOT NULL' ,
			'complemento' => 'varchar(255) DEFAULT NULL' ,
			'sexo' => 'enum("Masculino","Feminino","Outro") NOT NULL' ,
			'foto' => 'longblob'
		));
		
		//Insert data
		$this->insertMultiple('tbl_cliente', array(
			['id'=>'1','nome'=>'Cliente 1','cpf'=>'11111111111','cep'=>'14810000','logradouro'=>'logradouro1','numero'=>'111','cidade'=>'cidade1','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'2','nome'=>'Cliente 2','cpf'=>'22222222222','cep'=>'14820000','logradouro'=>'logradouro2','numero'=>'222','cidade'=>'cidade2','estado'=>'rj','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'3','nome'=>'Cliente 3','cpf'=>'33333333333','cep'=>'14830000','logradouro'=>'logradouro3','numero'=>'333','cidade'=>'cidade3','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'4','nome'=>'Cliente 4','cpf'=>'44444444444','cep'=>'14840000','logradouro'=>'logradouro4','numero'=>'444','cidade'=>'cidade4','estado'=>'pi','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'5','nome'=>'Cliente 5','cpf'=>'55555555555','cep'=>'14850000','logradouro'=>'logradouro5','numero'=>'555','cidade'=>'cidade5','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'6','nome'=>'Cliente 6','cpf'=>'66666666666','cep'=>'14860000','logradouro'=>'logradouro6','numero'=>'666','cidade'=>'cidade6','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'7','nome'=>'Cliente 7','cpf'=>'77777777777','cep'=>'14870000','logradouro'=>'logradouro7','numero'=>'777','cidade'=>'cidade7','estado'=>'rs','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'8','nome'=>'Cliente 8','cpf'=>'88888888888','cep'=>'14880000','logradouro'=>'logradouro8','numero'=>'888','cidade'=>'cidade8','estado'=>'mt','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'9','nome'=>'Cliente 9','cpf'=>'99999999999','cep'=>'14890000','logradouro'=>'logradouro9','numero'=>'999','cidade'=>'cidade9','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'10','nome'=>'Cliente 10','cpf'=>'10101010101','cep'=>'14811000','logradouro'=>'logradouro10','numero'=>'101','cidade'=>'cidade10','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'11','nome'=>'Cliente 11','cpf'=>'11111111112','cep'=>'14810000','logradouro'=>'logradouro1','numero'=>'111','cidade'=>'cidade1','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'12','nome'=>'Cliente 12','cpf'=>'121212121','cep'=>'14820000','logradouro'=>'logradouro2','numero'=>'222','cidade'=>'cidade2','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'13','nome'=>'Cliente 13','cpf'=>'13131313131','cep'=>'14830000','logradouro'=>'logradouro3','numero'=>'333','cidade'=>'cidade3','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'14','nome'=>'Cliente 14','cpf'=>'14141414141','cep'=>'14840000','logradouro'=>'logradouro4','numero'=>'444','cidade'=>'cidade4','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'15','nome'=>'Cliente 15','cpf'=>'15151515151','cep'=>'14850000','logradouro'=>'logradouro5','numero'=>'555','cidade'=>'cidade5','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'16','nome'=>'Cliente 16','cpf'=>'16161616161','cep'=>'14860000','logradouro'=>'logradouro6','numero'=>'666','cidade'=>'cidade6','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'17','nome'=>'Cliente 17','cpf'=>'17171717171','cep'=>'14870000','logradouro'=>'logradouro7','numero'=>'777','cidade'=>'cidade7','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'18','nome'=>'Cliente 18','cpf'=>'18181818181','cep'=>'14880000','logradouro'=>'logradouro8','numero'=>'888','cidade'=>'cidade8','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'19','nome'=>'Cliente 19','cpf'=>'19191919191','cep'=>'14890000','logradouro'=>'logradouro9','numero'=>'999','cidade'=>'cidade9','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'20','nome'=>'Cliente 20','cpf'=>'20202020202','cep'=>'14811000','logradouro'=>'logradouro10','numero'=>'101','cidade'=>'cidade10','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino'],
			['id'=>'21','nome'=>'Cliente 21','cpf'=>'21212121212','cep'=>'14811000','logradouro'=>'logradouro10','numero'=>'101','cidade'=>'cidade10','estado'=>'sp','complemento'=>'','foto'=>'','sexo'=>'Masculino']		
		));
	}

	public function down()
	{
		//Drop table
		$this->dropTable('tbl_cliente');
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