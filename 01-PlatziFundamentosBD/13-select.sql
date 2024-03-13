USE metro_cmdx;
--Pra seleccionar todo
SELECT * FROM `lines`;

-- Para filtrar por columnas

SELECT id, name, color FROM `Lines`;

SELECT (2+2) AS resultado;

-- Calculando el promedo de año de los trenes

SELECT AVG(year) AS "promedio" FROM `trains` ;
SELECT AVG(year) AS "year_avg" FROM `trains` ;

-- Vamos a unir tablas con JOIN

SELECT 
`lines`.`name`,
`trains`.`serial_number`
FROM `lines`
INNER JOIN `trains` 
ON `lines`.`id` = `trains`.`line_id`;
