delimiter //

create procedure obtenerRutEuclides(
                           in idIn int,
						   out precioOut int,
						   out tipoTuristaOut int,
                           out edadOut int,
						   out ubicacionOut int,
                           out tipoAtractivoOut int, 
                           out clasificacionOut int
                           )

begin


Select precio into precioOut from Sitio where idS = idIn;
Select tipoTurista into tipoTuristaOut from Sitio where idS = idIn; 
Select edad into edadOut from Sitio where idS = idIn;	 
Select ubicacion into ubicacionOut from Sitio where idS = idIn;
Select tipoA into tipoAtractivoOut from Sitio where idS = idIn;
Select clasificacion into clasificacionOut from Sitio where idS = idIn;   

end //

--  in precioIn int,
-- 	in tipoTuristaIn int,
--  in edadIn int,
-- 	in ubicacionIn int,
--  in clasificacionIn int,