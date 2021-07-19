create database tcc;
	use tcc;

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