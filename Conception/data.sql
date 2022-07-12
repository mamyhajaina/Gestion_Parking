create table admine(
    idadmine int PRIMARY key not null  AUTO_INCREMENT,
    nom VARCHAR(60),
    email varchar(60),
    mtps VARCHAR(60)
);

create table utilisateur(
    idutilisateur int PRIMARY key not null  AUTO_INCREMENT ,
    nom varchar(60),
    prenom varchar(90),
    email varchar(100),
    mtps varchar(50)
);


insert into admine(nom,email,mtps) values('Manou','manou@gmail.com','manou');

insert into utilisateur(nom,prenom,email,mtps) values ('Andria','Hajaina','hajaina@gmail.com','hajaina');
insert into utilisateur(nom,prenom,email,mtps) values ('Rakoto','Rija','rija@gmail.com','rija');

create table parking(
    idparking int PRIMARY key not null  AUTO_INCREMENT,
    nom VARCHAR(100),
    disponibilite boolean
);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",false);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",false);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",true);



create table tarifs(
    idtarif int PRIMARY key not null  AUTO_INCREMENT ,
    prix float,
    dure float,
    uniter varchar(20);
);