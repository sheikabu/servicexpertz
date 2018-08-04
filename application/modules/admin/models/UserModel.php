<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function get_user()
    {
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }

        $query = $this->db->get("user");       
        return $query->result();
    }

    public function insert_user()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'description'=> $this->input->post('description')      
        );
        return $this->db->insert('user', $data);
    }

    public function update_user($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('user',$data);
        }else{
            $this->db->where('vid',$id);
            return $this->db->update('user',$data);
        }        
    }

}
?>