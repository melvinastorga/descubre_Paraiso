delimiter //

create procedure obtenerRutEuclides(
                           in clasificacionIn int,
                           out nombreSitio varchar(60), 
                           out descripcion  varchar(500), 
                           out latitudOut decimal(15, 14),
                           out longitudOut decimal(15, 14),
                           out precioOut varchar(40), 
                           out tipoTuristaOut varchar(40), 
                           out edadOut varchar(40), 
                           out ubicacionOut varchar(40), 
                           out tipoAtractivoOut varchar(40), 
                           out clasificacionOut varchar(40)
                           )

begin


Select nombreSitio into nombreSitioOut from Sitio where idS = idIn and clasificacion = clasificacionIn;
Select descripcion into descripcionOut from Sitio where idS = idIn and clasificacion = clasificacionIn;
Select latitud into latitudOut from Sitio where idS = idIn and clasificacion = clasificacionIn;
Select longitud into longitudOut from Sitio where idS = idIn and clasificacion = clasificacionIn;


Select precio, nombrePrecio into precioOut from Sitio, Precio  where idS = idIn and clasificacion = clasificacionIn and precio = idP;
Select tipoTurista, nombreTA into tipoTuristaOut from Sitio, TipoTurista where idS = idIn and clasificacion = clasificacionIn and tipoTurista = idTT;
Select edad, nombreEdad into edadOut from Sitio, Edad where idS = idIn and clasificacion = clasificacionIn and edad = idE;
Select ubicacion, nombreUbicacion into ubicacionOut from Sitio, Ubicacion where idS = idIn and clasificacion = clasificacionIn and ubicacion = idU;
Select tipoA, nombreTA into tipoAtractivoOut from Sitio, TipoAtractivo where idS = idIn and clasificacion = clasificacionIn and tipoA = idTA;
Select clasificacion, nombreClasificacion into clasificacionOut from Sitio, Clasificacion where idS = idIn and clasificacion = clasificacionIn and clasificacion = idC;


end //