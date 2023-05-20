DELIMITER //

-- this procedure returns the username of the user with the id passed as parameter

CREATE PROCEDURE WelcomeProcedure(IN userid INT)
BEGIN
    SELECT U.username
    FROM user_credentials U
    WHERE U.userid = userid;
END //

DELIMITER ;