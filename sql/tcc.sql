create database tcc;
	use tcc;

	/*create table cliente(
		id int primary key auto_increment,
		nome varchar(65),
		tel varchar(13),
		email varchar(25),
		cpf varchar(14)
		);

	create table endereco(
		id int primary key auto_increment,
		rua varchar(65),
		bairro varchar(65)
		);

	create table usuario(
		id int primary key auto_increment,
		email varchar(65),
		senha varchar(65)
		);*/

	create table cad_dev(
		id int primary key auto_increment,
		nome varchar(65),
		tel varchar(13),
		numero varchar(15),
		rua varchar(45),
		bairro varchar(25)
	);
	
	create table pedidos(
		id int primary key auto_increment,
		tam varchar(85),
		tipo_pizza varchar(71),
		id_cad_dev int,
		foreign key(id_cad_dev) references cad_dev(id)
	);

	create table cardapio(
		id int primary key auto_increment,
		tipo varchar(69),
		tipo_pizza varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table sobremesa(
		id int primary key auto_increment,
		tipo_sobremesa varchar(69),
		sobremesa varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table especialidade(
		id int primary key auto_increment,
		tipo_especial varchar(69),
		espece varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table pastel(
		id int primary key auto_increment,
		espec varchar(71),
		quant int,
		tot int,
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);	

	create table batata(
		id int primary key auto_increment,
		tipo_batata varchar(69),
		batata varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table cad_combo(
		id int primary key auto_increment,
		nome varchar(65),
		tel varchar(13),
		bairro varchar(25),
		rua varchar(45),
		numero varchar(15)
	);

	create table combo_super(
		id int primary key auto_increment,
		tipo_combo varchar(85),
		tipo_pizza varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table combo_elite(
		id int primary key auto_increment,
		tipo_combo varchar(85),
		tipo_pizza varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table combo_top(
		id int primary key auto_increment,
		tipo_combo varchar(85),
		tipo_pizza varchar(71),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
		);

	create table promo(
		id int primary key auto_increment,
		tipo_promo varchar(71),
		promo varchar(69),
		id_cad_combo int,
		foreign key(id_cad_combo) references cad_combo(id)
	);

	create table commit(
		id int primary key auto_increment,
		comment varchar(75),
		star varchar(5)
	);	

	/*SHOW COLUMNS FROM [nome da tabela]; mostrar as colunas de uma tabela*/
	
	select c.nome, c.rua, c.bairro, p.tam, p.tipo_pizza from cad_dev c, pedidos p where p.id_cad_dev = c.id limit 1;

	select * from pedidos, cad_dev order by id DESC limit 1;

	select c.nome, c.rua, c.bairro, p.tam, p.tipo_pizza from cad_dev c, pedidos p order by c.id, p.id_cad_dev desc limit 1;

	select c.nome, c.rua, c.bairro, p.tipo_combo, p.tipo_pizza from cad_dev c, combo_super p order by c.id, p.id_cad_combo desc limit 1;

	select * from pedidos where id_cad_dev = '2'; /*seleciona tds as colunas da tabela onde o id e = 2*/

	/*order by id*/

	select a.nome, a.bairro, a.rua, a.numero, c.tipo_combo, c.tipo_pizza from cad_combo a, combo_super c where a.id = 1 and c.id_cad_combo = 1 order by c.id desc limit 1;
