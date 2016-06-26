
CREATE PROCEDURE insert_by_id (IN paramname VARCHAR(20)) 
    BEGIN 
        INSERT INTO test VALUES (null, paramname); 
    END;

