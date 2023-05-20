DELIMITER //

-- this procedure returns the transport id where the weight of product was higher than the specified weight in tons

CREATE PROCEDURE GetTransportHigherThan(IN weightInTons INT)
BEGIN
    SELECT T.transportid
    FROM Transports T
    JOIN Product P ON T.pid = P.pid
    WHERE P.weight > weightInTons;
END //

DELIMITER ;