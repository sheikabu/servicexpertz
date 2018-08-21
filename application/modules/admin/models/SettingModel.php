<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class SettingModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
 
	public function getesetting($st_id) {
      $this->db->where('st_id', $st_id);
      $query = $this->db->get('settings');
      return $query->row();
      }

 public function updatesetting($st_id,$setting_array) {
 		$this->db->where('st_id', $st_id);
    $this->db->update('settings', $setting_array);
		return true;
   } 
}
?>