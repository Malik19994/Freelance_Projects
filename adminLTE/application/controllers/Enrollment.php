<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Enrollment extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Enrollment_model');
    } 

    /*
     * Listing of enrollments
     */
    function index()
    {
        $data['enrollments'] = $this->Enrollment_model->get_all_enrollments();
        
        $data['_view'] = 'enrollment/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new enrollment
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('driverName','DriverName','required|max_length[255]');
		$this->form_validation->set_rules('driverlicense','Driverlicense','required|integer');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('graduate_date','Graduate Date','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'driverName' => $this->input->post('driverName'),
				'driverlicense' => $this->input->post('driverlicense'),
				'date' => $this->input->post('date'),
				'graduate_date' => $this->input->post('graduate_date'),
				'enrolled_on' => $this->input->post('enrolled_on'),
            );
            
            $enrollment_id = $this->Enrollment_model->add_enrollment($params);
            redirect('enrollment/index');
        }
        else
        {            
            $data['_view'] = 'enrollment/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a enrollment
     */
    function edit($id)
    {   
        // check if the enrollment exists before trying to edit it
        $data['enrollment'] = $this->Enrollment_model->get_enrollment($id);
        
        if(isset($data['enrollment']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('driverName','DriverName','required|max_length[255]');
			$this->form_validation->set_rules('driverlicense','Driverlicense','required|integer');
			$this->form_validation->set_rules('date','Date','required');
			$this->form_validation->set_rules('graduate_date','Graduate Date','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'driverName' => $this->input->post('driverName'),
					'driverlicense' => $this->input->post('driverlicense'),
					'date' => $this->input->post('date'),
					'graduate_date' => $this->input->post('graduate_date'),
					'enrolled_on' => $this->input->post('enrolled_on'),
                );

                $this->Enrollment_model->update_enrollment($id,$params);            
                redirect('enrollment/index');
            }
            else
            {
                $data['_view'] = 'enrollment/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The enrollment you are trying to edit does not exist.');
    } 

    /*
     * Deleting enrollment
     */
    function remove($id)
    {
        $enrollment = $this->Enrollment_model->get_enrollment($id);

        // check if the enrollment exists before trying to delete it
        if(isset($enrollment['id']))
        {
            $this->Enrollment_model->delete_enrollment($id);
            redirect('enrollment/index');
        }
        else
            show_error('The enrollment you are trying to delete does not exist.');
    }
    
}
