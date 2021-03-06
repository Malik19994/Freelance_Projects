<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
		$this->form_validation->set_rules('fname','Fname','required|max_length[255]');
		$this->form_validation->set_rules('lname','Lname','required|max_length[255]');
		$this->form_validation->set_rules('phone','Phone','required|integer');
		$this->form_validation->set_rules('age','Age','required|integer');
		$this->form_validation->set_rules('enrollment_id','Enrollment Id','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'graduated' => $this->input->post('graduated'),
				'email' => $this->input->post('email'),
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'phone' => $this->input->post('phone'),
				'added_on' => $this->input->post('added_on'),
				'age' => $this->input->post('age'),
				'enrollment_id' => $this->input->post('enrollment_id'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($id);
        
        if(isset($data['user']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
			$this->form_validation->set_rules('fname','Fname','required|max_length[255]');
			$this->form_validation->set_rules('lname','Lname','required|max_length[255]');
			$this->form_validation->set_rules('phone','Phone','required|integer');
			$this->form_validation->set_rules('age','Age','required|integer');
			$this->form_validation->set_rules('enrollment_id','Enrollment Id','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'graduated' => $this->input->post('graduated'),
					'email' => $this->input->post('email'),
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'phone' => $this->input->post('phone'),
					'added_on' => $this->input->post('added_on'),
					'age' => $this->input->post('age'),
					'enrollment_id' => $this->input->post('enrollment_id'),
                );

                $this->User_model->update_user($id,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($id);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
