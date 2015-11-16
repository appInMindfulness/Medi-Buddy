DROP FUNCTION IF EXISTS checkRole;

delimiter //

CREATE FUNCTION checkRole (username varchar(60))
  RETURNS INT
  DETERMINISTIC
  BEGIN
    DECLARE CurrentRole varchar(255);
    DECLARE canAccess INT DEFAULT 0;
    
    select ROLE into CurrentRole from LOGINS where USERID = username;
    
    IF Role = "ADMIN" THEN
      SET canAccess = 1; 
    END IF;
    
    return canAccess;
    
  END;  //
  
delimiter ;
 
    

  
