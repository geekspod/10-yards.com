<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
         $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_customer');
    }

	public function index()
	{
		
		$header['setting'] = $this->Model_common->get_setting_data();
		$data['partner'] = $this->Model_customer->show();

		$this->load->view('admin/view_header',$header);
		$this->load->view('admin/view_customer',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		//echo "hhhhf";exit;
		$data['error'] = '';
		$data['success'] = '';
		$error = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_customer->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'user-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'  => $_POST['name'],
					'email' => $_POST['email'],
					'password'  => $_POST['password'],
					'confirm_password'  => $_POST['confirm_password'],
					'photo' => $final_name,
	
				);
				echo "<pre>";print_r($form_data);exit;
	            $this->Model_customer->add($form_data);

		        $data['success'] = 'User is added successfully!';
				redirect(base_url().'admin/customer');
		        unset($_POST['name']);
		    } 
		    else
		    {
		    	$data['error'] = $error;
		    }

            $this->load->view('admin/view_header');
			$this->load->view('admin/view_partner_add',$data);
			$this->load->view('admin/view_footer');
            
        } else {
            
            $this->load->view('admin/view_header');
			$this->load->view('admin/view_partner_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no partner in this id, then redirect
    	$tot = $this->Model_customer->partner_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/customer');
        	exit;
    	}
       	
       	$header['setting'] = $this->Model_common->get_setting_data();
		$data['error'] = '';
		$data['success'] = '';
		$error = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            

		    if($valid == 1) 
		    {
		    	$data['partner'] = $this->Model_customer->getData($id);
				if(empty($_POST['password']))
				{
					$form_data = array(
						'name' 	=> $_POST['name'],
					
						'email'	=> $_POST['email'],
						'status'	=> $_POST['status'],
						
		            );
				}else
				{
					$form_data = array(
						'name' 	=> $_POST['name'],
						'password' 	=> $_POST['password'],
						'email'	=> $_POST['email'],
						'status'	=> $_POST['status'],
		            );
				}
		    	
		    		//echo "<pre>";print_r($form_data);exit;
		            $this->Model_customer->update($id,$form_data);
				
				

				$data['success'] = 'Customer is updated successfully';
				redirect(base_url().'admin/customer');
		    }
		    else
		    {
		    	$data['error'] = $error;
		    }

		    $data['partner'] = $this->Model_customer->getData($id);
	       	$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_customer_edit',$data);
			$this->load->view('admin/view_footer');
           
		} else {
			$data['partner'] = $this->Model_customer->getData($id);
	       	$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_customer_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no partner in this id, then redirect
    	$tot = $this->Model_customer->partner_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/customer');
        	exit;
    	}

        

        $this->Model_customer->delete($id);
        redirect(base_url().'admin/customer');
    }

}