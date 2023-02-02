create table persona(
    nome varchar(20) not null,
    cognome varchar(20) not null,
    eta int,
    cf varchar(16) primary key
);

create table terapia(
    cod int primary key AUTO_INCREMENT,
    datain date not null,
    dataout date not null,
    cod_p varchar(16) not null,
    descrizione varchar(100),
    foreign key (cod_p) references persona(cf)
);

delete from persona;

insert into persona values('Laura','Bianchi',22,'larbia34l34o789o');
insert into persona values('Anna','Rossi',22,'annross34l56j765h');
insert into persona values('Lorenzo','Verdi',22,'lorver23k45j623m');

select * from persona;
