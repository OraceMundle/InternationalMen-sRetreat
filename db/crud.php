<!-- crud file (create read update delete)-->
<?php
    class crud
    
    {
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db=$conn;
        }
        
        //insert function
        public function insertAttendee($fname,$lname,$dob,$homeAddress,$email,$contact,$firsttimeattend,
        $churchposition,$churchname,$country,$yearsofservice,$paymentoption,$destination){

            try {
                //define sql statement to be executed
                $sql="INSERT INTO attendee(firstname, lastname, dateofbirth, homeaddress, emailaddress, contactnumber, firsttimeattend, churchposition_id, churchname, country_id,
                yearsofservice, paymentoption, avatar_path ) VALUES (:firstname, :lastname, :dob, :homeaddress, 
                :email, :contact, :firsttimeattend, :churchposition_id, :churchname, :country_id, :yearsofservice,
                :paymentoption, :avatar_path)";
                //prepare the sql ststement for execution 
                $stmt=$this->db->prepare($sql);
                //binding all placeholders to the actual values
                $stmt->bindparam(':firstname',$fname);
                $stmt->bindparam(':lastname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':homeaddress',$homeAddress);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':firsttimeattend',$firsttimeattend);
                $stmt->bindparam(':churchposition_id',$churchposition);
                $stmt->bindparam(':churchname',$churchname);
                $stmt->bindparam(':country_id',$country);
                $stmt->bindparam(':yearsofservice',$yearsofservice);
                $stmt->bindparam(':paymentoption',$paymentoption);
                $stmt->bindparam(':avatar_path',$destination);

                //execute statement
                $stmt->execute();
                return true;


            } catch (PDOException $e) {
                //throw $e;
                echo $e->getMessage();
                return false;
              
            }        
        }
        //end of insert function


        //editAttendee function
        //To be completed with other variables
       
            //code...
            public function editAttendee($id,$fname,$lname,$dob,$homeAddress,$email,$contact,$firsttimeattend,
            $churchposition,$churchname,$country,$yearsofservice,$paymentoption){
                try {
                $sql="UPDATE `attendee` SET `firstname`=:firstname,`lastname`=:lastname,`dateofbirth`=:dateofbirth,`homeaddress`=:homeaddress,`emailaddress`=:email,`contactnumber`=:contact, 
                `firsttimeattend`=:firsttimeattend,`churchposition_id`=:churchposition_id,`churchname`=:churchname,`country_id`=:country_id,
                `yearsofservice`=:yearsofservice,`paymentoption`=:paymentoption  WHERE attendee_id=:id";
                
                $stmt=$this->db->prepare($sql);
                //binding all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':firstname',$fname);
                $stmt->bindparam(':firstname',$fname);
                $stmt->bindparam(':lastname',$lname);
                $stmt->bindparam(':dateofbirth',$dob);
                $stmt->bindparam(':homeaddress',$homeAddress);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':firsttimeattend',$firsttimeattend);
                $stmt->bindparam(':churchposition_id',$churchposition);
                $stmt->bindparam(':churchname',$churchname);
                $stmt->bindparam(':country_id',$country);
                $stmt->bindparam(':yearsofservice',$yearsofservice);
                $stmt->bindparam(':paymentoption',$paymentoption);
                
              
   
                //execute statement
                $stmt->execute();
                return true;
        
            } 
         catch (PDOException $e) {
            //throw $th;
            echo $e->getMessage();
            return false;
        }
            
    }//end of editAttendee function
        

        //Get Attendees Function (edit)
        //delete unnecesssay code
        public function getAttendees(){
            try {
                //code...
                $sql="SELECT * FROM `attendee` 
                JOIN churchposition  ON attendee.churchposition_id = churchposition.churchposition_id 
                JOIN country  ON attendee.country_id = country.country_id";
                //$sql = "SELECT * FROM `attendee`";
                //$sql = "SELECT * FROM `attendee` a inner join specialities s on a.speciality_id = s.speciality_id";
                $result=$this->db->query($sql);
                return $result;

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }
      

        }//end of Get Attendees function

        //get attendeeDetails function (edit)
        public function getAttendeeDetails($id){

            try {
                //code...
                //assign data from database to variable $sql
                $sql="SELECT * FROM attendee 
                JOIN churchposition  ON attendee.churchposition_id = churchposition.churchposition_id
                JOIN country  ON attendee.country_id = country.country_id
                WHERE attendee_id = :id";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result=$stmt->fetch();
                return $result;


            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }
        
        }//end of get attendeeDetails function


        //get Church Position function
        public function getChurchPosition(){

            try {
                //code...
                $sql="SELECT * FROM `churchposition`";
                $result=$this->db->query($sql);
                return $result;
    

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }

           
        }//end of get Church Position function


        //get Church Position function by ID
        public function getChurchPositionById($id){

            try {
                //code...
                $sql="SELECT * FROM `churchposition` WHERE churchposition_id = :id";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result=$stmt->fetch();
                return $result;
    

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

           
        }//end of get Church Position function


        //get Country function
        public function getCountry(){

            try {
                //code...
                $sql="SELECT * FROM `country`";
                $result=$this->db->query($sql);
                return $result;
    

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }

           
        }//end of get Country function

        //get Country function by ID
        public function getCountryById($id){

            try {
                //code...
                $sql="SELECT * FROM `country` WHERE country_id = :id";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result=$stmt->fetch();
                return $result;
    

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

           
        }//end of get Country by ID function


        //delete Attendee function
        public function deleteAttendee($id){
            try {
                //code...
                $sql="DELETE FROM `attendee` WHERE attendee_id = :id";

                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }



        }//end of delete Attendee function
        
        


         //get attendee function by firstname and lastname
         public function getAttendee($firstname, $lastname){
            try {
                //code...
                //assign data from database to variable $sql
                $sql = "SELECT * FROM attendee WHERE firstname = :firstname AND lastname = :lastname ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':firstname', $firstname);
                $stmt->bindparam(':lastname', $lastname);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }

        }//end of get user function




        
        
    }//end of crud class



?>