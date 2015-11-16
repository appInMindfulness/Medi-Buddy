DROP FUNCTION IF EXISTS checkPrivileges;

delimiter //

CREATE FUNCTION checkPrivileges (username INT)
  RETURNS INT
  DETERMINISTIC
  BEGIN
    DECLARE P1,P2,P3,P4,PP INT;
    DECLARE canAccess INT DEFAULT 0;
    
    select PHASE1,PHASE2,PHASE3,PHASE4,PHASEP into P1,P2,P3,P4,PP from USERS where USERID = username;
    
    IF P1 = 1 THEN
      SET canAccess = canAccess + 1; 
    END IF;
    IF P2 = 1 THEN
      SET canAccess = canAccess + 1; 
    END IF;  
    IF P3 = 1 THEN
      SET canAccess = canAccess + 1; 
    END IF;
    IF P4 = 1 THEN
      SET canAccess = canAccess + 1;
    END IF;
    IF PP = 1 THEN
      SET canAccess = canAccess + 1;
    END IF;  
    
    return canAccess;
    
  END;  //
  
delimiter ;
 
    

  
