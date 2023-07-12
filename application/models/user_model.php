<?php
class user_model extends CI_model{
    function create($fromarray){
        $this->db->insert("user",$fromarray);
    }
    function all(){
        return $user = $this->db->get('user')->result_array();
        // select * from user
    }
    function getuser($userid){
       //  $this->db->where('user_id',$userid)
       $this->db->where('user_id',$userid);
       return $user = $this->db->get('user')->row_array();
       //select * from user where user_id=?
    }
    function update_user($userid , $formarray){
        $this->db->where('user_id' ,$userid);  
        $this->db->update('user',$formarray); 
        //update user name=?  email =? where user_id=userid
    }
    function deleteuser($userid){
        $this->db->where('user_id',$userid);
        $this->db->delete('user');
    }
}
?>