USE agenda;

create table usuarios (
id integer auto_increment primary key,
usuario varchar(30) not null,
senha varchar(256) not null,
email varchar(30),
data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
);

create table contatos (
id_contato integer auto_increment primary key,
contato varchar(30) not null,
telefone varchar(20),
email varchar(50),
id_usuario integer,
FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

drop table usuarios;

