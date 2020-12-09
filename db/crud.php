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
        //not working code correct
       
            //code...
            public function editAttendee($id,$fname,$lname,$dob,$email,$contact,$speciality){
                try {
                $sql="UPDATE `attendee` SET `firstname`= :fname,`lastname`=
                :lname,`dateofbirth`= :dob,`emailaddress`= :email,`contactnumber`= :contact,
                `speciality_id`= :speciality  WHERE attendee_id = :id";
                
                $stmt=$this->db->prepare($sql);
                //binding all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':speciality',$speciality);
    
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
        

        //Get Attendees Function 
        public function getAttendees(){
            try {
                //code...
                $sql="SELECT * FROM `attendee` INNER JOIN specialities  ON attendee.speciality_id = specialities.speciality_id";
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

        //get attendeeDetails function
        public function getAttendeeDetails($id){

            try {
                //code...
                //assign data from database to variable $sql
                $sql="SELECT * FROM attendee INNER JOIN churchposition  ON attendee.churchposition_id = churchposition.churchposition_id WHERE attendee_id = :id";
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

           
        }//end of get Specialities function



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
        
        


        
        
    }//end of crud class



?>