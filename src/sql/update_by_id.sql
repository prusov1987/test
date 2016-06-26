
CREATE PROCEDURE update_by_id (IN paramid VARCHAR(20), paramname VARCHAR(20)) 
    BEGIN  
        update test set name=paramname 
    WHERE id=paramid;
    END;

