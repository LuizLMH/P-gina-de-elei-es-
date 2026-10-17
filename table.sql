create table candidato(
    idcandidato int Auto_increment primary key,
    nome varchar(100) not null,
    partido varchar(100) not null,
    cargo varchar(100) not null,
    numero int not null unique
)
