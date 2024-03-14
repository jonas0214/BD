USE metro_cdmx;

SELECT
ST_Distance_Sphere(
    POINT(-99.14912224, 19.42729875),
    POINT(-99.13303971, 19.42543703)
) / 1000 AS distance;

--CONSTULTAS ANIDADAS

SELECT ST_Distance_Sphere(
    (
        SELECT `locations`.`location`
        FROM `locations`
        WHERE `locations`.`station_id` = 43
    ),
    (SELECT `locations`.`location`
        FROM `locations`
        WHERE `locations`.`station_id` = 125
    )

) / 1000 AS distance;




(
    (
    SELECT `lines`.`id` 
    FROM `lines`
    WHERE `lines`.`name`= "linea 9"
    ),
    (
    SELECT `stations`.`id`
    FROM `stations`
    WHERE `stations`.`name` = "Acapulco"
    )
);