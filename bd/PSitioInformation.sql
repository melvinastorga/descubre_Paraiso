delimiter //

create procedure PExtractInfo(
                           in idIn int,
                           out nombreSitioOut varchar(60), 
                           out descripcionOut  varchar(500), 
                           out latitudOut decimal(20, 18), 
                           out longitudOut decimal(20, 18), 
                           out precioOut varchar(40), 
                           out tipoTuristaOut varchar(40), 
                           out edadOut varchar(40), 
                           out ubicacionOut varchar(40), 
                           out tipoAtractivoOut varchar(40), 
                           out clasificacionOut varchar(40), 
						   out urlOut varchar(500)
                           )

begin


Select nombreSitio into nombreSitioOut from Sitio where idS = idIn; 
Select descripcion into descripcionOut from Sitio where idS = idIn;
Select latitud into latitudOut from Sitio where idS = idIn ;
Select longitud into longitudOut from Sitio where idS = idIn;
Select url into urlOut from Sitio where idS = idIn;


Select nombrePrecio into precioOut from Sitio, Precio  where idS = idIn and precio = idP;
Select nombreTT into tipoTuristaOut from Sitio, TipoTurista where idS = idIn and tipoTurista = idTT;
Select rangoEdad into edadOut from Sitio, Edad where idS = idIn and edad = idE;
Select nombreUbicacion into ubicacionOut from Sitio, Ubicacion where idS = idIn and ubicacion = idU;
Select nombreTA into tipoAtractivoOut from Sitio, TipoAtractivo where idS = idIn and tipoA = idTA;
Select nombreClasificacion into clasificacionOut from Sitio, Clasificacion where idS = idIn and clasificacion = idC;


end //

use proyecto
alter table sitio add column url varchar(500)

CALL PExtractInfo(16, @a,@b,@c,@d,@e,@f,@g,@h,@i,@j,@k);

Select nombrePrecio  from Sitio, Precio  where idS = 16 and precio = idP;

Select idS from Sitio where clasificacion = 2 ORDER BY RAND() LIMIT 5;