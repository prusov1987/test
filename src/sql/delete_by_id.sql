CREATE PROCEDURE delete_by_id (IN paramid VARCHAR(20)) 
    BEGIN 
        DELETE FROM test WHERE id=paramid; 
    END;

