<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Graduate_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get graduate by id
     */
    function get_graduate($id)
    {
        return $this->db->get_where('graduates',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all graduates
     */
    function get_all_graduates()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('graduates')->result_array();
    }
        
    /*
     * function to add new graduate
     */
    function add_graduate($params)
    {
        $this->db->insert('graduates',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update graduate
     */
    function update_graduate($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('graduates',$params);
    }
    
    /*
     * function to delete graduate
     */
    function delete_graduate($id)
    {
        return $this->db->delete('graduates',array('id'=>$id));
    }
}
