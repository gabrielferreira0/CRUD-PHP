create table Users(
id serial primary key not null,
username varchar (50),
senha varchar (50),
email varchar (50),
cpf varchar (50),
nascimento date,	
cidade varchar (50)
);

insert into Users (username,senha,email,cpf,nascimento,cidade) values('Gabriel','GabrielSenha','gabriel@email.com','057.177.221-15','1998-11-12','Brasilia-DF');
select * from Users;
