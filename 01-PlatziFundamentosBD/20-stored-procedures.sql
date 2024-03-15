USE metro_cdmx;

DELIMITER //
CREATE PROCEDURE calculate_distance_betwen_lines(
    IN station_one POINT,
    IN station_two POINT
)
BEGIN

    SELECT
    ST_Distance_Sphere(station_one, station_two) AS distances;

END //
DELIMITER ;