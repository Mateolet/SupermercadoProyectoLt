




CREATE TABLE marcas(
	idMarca INT auto_increment,
    nomMarca VARCHAR(50),
    PRIMARY KEY (idMarca)



);


INSERT INTO marcas
VALUES
(default, "Knor"),(default, "Matarazzo"),(default, "Don Vicente"),(default, "Gallo"),(default, "Coca-Cola"),(default, "Levite");




	
Create table tipos(
idTipo INT auto_increment,
nomTip Varchar(50),
PRIMARY KEY (idTipo)

);


INSERT INTO tipos
VALUES (default, "Fideos"),(default, "Gaseosas"),(default, "Arroz"),(default, "Caldos" );



create table productos(
	idProducto int auto_increment,
    nomPrd varchar(50),
    precioPrd float,
    stockPrd int,
    idMarca int,
    idTipo int ,
    imgPrd varchar(50),
    unique key (idMarca, idTipo),
    foreign key (idMarca) REFERENCES marcas(idMarca),
    foreign key  (idTipo) REFERENCES tipos(idTipo),
    PRIMARY KEY (idProducto)
	
);




INSERT INTO productos
VALUES
(default, "Fideos Moñito", 230, 20, 2,1,"img1"  ),
(default, "Arroz doble carolina", 150, 10, 4,3,"img2"  ),
(default, "Coca-Cola", 450, 12, 5,2,"img3"   ),
(default, "Levite Pomelo", 125, 30, 6,2 ,"img4"  );



Create table usuarios(
idUsuario int auto_increment,
nomUsuario varchar(50),
apeUsuario varchar(50),
emailUsuario varchar(50),
primary key (idUsuario),
unique key (emailUsuario)


);


INSERT INTO usuarios
VALUES(default, "Mate", "Lette", "mateoletti@hotmail.com"),(default,"Let", "Lulo","matelulo@hot.com"),(default,"Mart","Riera","martiRiera@gmail.com");







alter table usuarios 
add passUsu varchar(20);




