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

create table parking(
    idparking int PRIMARY key not null  AUTO_INCREMENT,
    nom VARCHAR(100),
    disponibilite boolean
);


insert into admine(nom,email,mtps) values('Manou','manou@gmail.com','manou');

insert into utilisateur(nom,prenom,email,mtps) values ('Andria','Hajaina','hajaina@gmail.com','hajaina');
insert into utilisateur(nom,prenom,email,mtps) values ('Rakoto','Rija','rija@gmail.com','rija');

insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",false);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",false);
insert into parking(nom,disponibilite) values("Parking",true);
insert into parking(nom,disponibilite) values("Parking",true);


create table placement_p(
    idplacement_p int PRIMARY key not null  AUTO_INCREMENT,
    idparking int,
    idclient
);



create table tarifs(
    idtarif int PRIMARY key not null  AUTO_INCREMENT ,
    dure float,
    prix float,
    uniter varchar(20);
);


-- create table voiture(
--     idvoiture int PRIMARY key not null  AUTO_INCREMENT,
--     matriculation VARCHAR(20) not null,
--     marque VARCHAR(50),
--     idutilisateur int,
--     foreign key (idutilisateur) references utilisateur(idutilisateur)
-- );

-- insert into voiture(matriculation,marque,idutilisateur) values('9914 TBH','Merces',1);