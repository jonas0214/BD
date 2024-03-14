USE metro_cdmx;

INSERT INTO `lines_stations` (lines_id, station_id) VALUES
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

INSERT INTO `lines_station` (line_id, station_id)
    VALUES
    (
        (
            SELECT `lines`.`id`
            FROM `lines`
            WHERE `lines`.`name` = "Linea 1"
        ),
        (
            SELECT `stations`.`id`
            FROM `stations`
            WHERE `stations`.`name` = "Acatitla"
        )
    );

INSERT INTO `lines_station`(line_id, station_id) VALUES
    (
    (
        SELECT `lines`(`lines`.`id`)
        FROM `lines`
        WHERE `lines`.`name` = "Linea 3"
        
    ),
    (
        SElECT `stations`(`stations`.`id`)
        FROM `stations`
        WHERE `stations`.`name`= "Agricola Oriental"
    )
    );

INSERT INTO `lines_station`(line_id, station_id)
VALUES
    (
    (
        SELECT 'lines'('lines'.`id`)
        FROM `lines`
        WHERE `lines`.`name` = "linea 4"
    ),
    (
        SELECT `stations`(`statios`.`id`)
        FROM `stations`
        WHERE `stations`,`name`= ffff
    )
    )
