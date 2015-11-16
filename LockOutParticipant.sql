DROP FUNCTION IF EXISTS lockOutParticipant;

delimiter //

CREATE FUNCTION lockOutParticipant (username INT)
  RETURNS INT
  DETERMINISTIC
  BEGIN
    DECLARE success INT DEFAULT 0;
    
    UPDATE USERS
      SET PHASE1=0,PHASE2=0,PHASE3=0,PHASE4=0,PHASEP=0
      WHERE USERID = username;
   
   SELECT ROW_COUNT() into success;
    
    return success;
    
  END;  //
  
delimiter ;
 
    

  
