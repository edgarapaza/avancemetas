CREATE TABLE asignacionPersonal(
idasignacion int not null auto_increment,
idoficina int not null,
idarea int,
idcargo int,
idpersonal int,
fecInicioCargo date,
fecFinCargo date,
documento varchar(100),
fecCreate datetime,
fecUpdtae datetime,
PRIMARY KEY(idasignacion)
);