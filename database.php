<?php 

include 'config.php';



?>

<?php

 /**
 * 
 */
 class Database{

 	public $host     = DB_HOST;
 	public $user     = DB_USER;
 	public $password = DB_PASS;
 	public $dbname   = DB_NAME;

 	public $link;
 	public $error;

 	Public function __construct(){
        $this->ConnectDB();

 	}
 	public function ConnectDB(){
 		$this->link = new mysqli($this->host, $this->user, $this->password, $this->dbname);
 		if (!$this->link) {
 		  echo "Connection Fail".$this->link->connect_error;
 			return false;
 		}else{       
     //echo "Database is connected";     	
 		}
 		

 	}
     
  public function insert($query){
    $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
    if ($insert_row){  
        return false;
    }

  }

  public function select($query){
    $select_row = $this->link->query($query)  or die($this->link->error.__LINE__);
    if ($select_row->num_rows>0) {
        return $select_row;
    }
     else{

      return false;
    }
  }

  public function getuserData($query){
    $select_userdata = $this->link->query($query)  or die($this->link->error.__LINE__);
    if ( $select_userdata->num_rows>0) {

        return  $select_userdata;
    }
    else{

      return false;
    }
  } 
  
  //Delete user
   public function delete($query){
  $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
  if($delete_row){
    return $delete_row;
  } else {
    return false;
  }
  }
  

  public function DeleteUser($userid){

        $query = "DELETE FROM users WHERE id =$userid";
        $deletedata = $this->delete($query);

        if($deletedata){

           $msg ="<span class='success'>User Delete successfully </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>User Not Deleted </span>";
           return $msg;
        }
      }


  public function DeleteQuestion($userid){

        $query = "DELETE FROM question WHERE questionid =$userid";
        $deletedata = $this->delete($query);

        if($deletedata){

           $msg ="<span class='success'>Question Delete successfully </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>Question Not Deleted </span>";
           return $msg;
        }
      }


      public function DeleteQuerse($userid){

        $query = "DELETE FROM courses WHERE courseid =$userid";
        $deletedata = $this->delete($query);

        if($deletedata){

           $msg ="<span class='success'>Course Delete successfully </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>Course Not Deleted </span>";
           return $msg;
        }
      }

      public function DeleteDepartment($userid){

        $query = "DELETE FROM department WHERE id =$userid";
        $deletedata = $this->delete($query);

        if($deletedata){

           $msg ="<span class='success'>Course Delete successfully </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>Course Not Deleted </span>";
           return $msg;
        }
      }

// disable user 
    public function update($query){
  $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
  if($update_row){
    return $update_row;
  } else {
    return false;
  }
  }    

       public function updateUserData($uid,$userdata){

           $name = $userdata['name'];
           $email = $userdata['email'];

        $query = "UPDATE users
        SET
        username ='$name'
        email    ='$email'
        WHERE id ='$uid'";
        $updated_row = $this->update($query);
        if($updated_row){

           $msg ="<span class='success'>User disabled </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>User Not disabled </span>";
           return $msg;
        }
       

      }
        public function DisableUser($userid){

        $query = "UPDATE users
        SET
        status ='2'
        WHERE id ='$userid' ";
        $updated_row = $this->update($query);
        if($updated_row){

           $msg ="<span class='success'>User disabled </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>User Not disabled </span>";
           return $msg;
        }
       

      }
    // enable user 
      public function EnableUser($userid){

         $query = "UPDATE users 
         SET 
         status = 1
         WHERE id ='$userid'";
         $updated_row = $this->update($query);

          if($updated_row){

           $msg ="<span class='success'>User Enabled </span>";
           return $msg;
           
        }else{

           $msg ="<span class='error'>User Not Enabled </span>";
           return $msg;
        }
       


      }

 	
 }

?>