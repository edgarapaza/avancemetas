INSERT INTO reportes (idpersonal, idactividad, reporte, estado, obs) VALUES ('6', '8', '34', '1', 'obs');

-- Los reportes generales para el Administrador
SELECT idpersonal, idactividad, reporte, estado, obs, fecha FROM reportes ORDER BY idpersonal;

-- Reporte para Cada personal
SELECT idpersonal, idactividad, reporte, estado, obs, fecha FROM reportes WHERE idpersonal = 1;