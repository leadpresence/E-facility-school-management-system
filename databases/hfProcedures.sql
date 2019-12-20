use hf_school_network;
 # “As a parent, I should be able to ...”

# 1 Sign up by providing my name (first name and last name),
# contact email, mobile number(s), address, home phone number, a unique username and password.
CREATE PROCEDURE Register_Parent(parent_password VARCHAR(50),parent_first_name VARCHAR(50),parent_last_name VARCHAR(50),parent_mobile_number int(20))
  BEGIN
    INSERT INTO Parents(parent_password,parent_first_name,parent_last_name,parent_mobile_number)
     VALUES (parent_password,parent_first_name,parent_last_name,parent_mobile_number);
  END 
  DELIMITER ; 