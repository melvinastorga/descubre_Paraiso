-- use proyecto ;

Create table TipoAtractivo (
idTA int auto_increment primary key, 
nombreTA varchar(40)
);

Create table Edad(
idE int auto_increment primary key, 
rangoEdad varchar(40)
);

Create table Precio(
idP int auto_increment primary key, 
nombrePrecio varchar(40)
);

Create table TipoTurista(
idTT int auto_increment primary key, 
nombreTT varchar(40)
);

Create table Ubicacion (
idU int auto_increment primary key, 
nombreUbicacion varchar(40)
);

Create table Clasificacion(
idC int auto_increment primary key, 
nombreClasificacion varchar(40)
);

Create table Sitio(
idS int auto_increment primary key, 
nombreSitio varchar(60),
descripcion varchar(500), 
latitud decimal(20, 18), 
longitud decimal(20, 18), 
tipoA int,
edad int,
precio int, 
tipoTurista int, 
ubicacion int, 
clasificacion int,  
url varchar(500),
foreign key (tipoA) references TipoAtractivo(idTA), 
foreign key (edad) references Edad(idE), 
foreign key (precio) references Precio(idP), 
foreign key (tipoTurista) references TipoTurista(idTT), 
foreign key (ubicacion) references Ubicacion(idU), 
foreign key (clasificacion) references Clasificacion(idC)
);



