<?php
class user extends CI_controller{
    function index(){
        // load the model user model
        $this->load->model('user_model');
        // now call the function 'ALL' present in user_model
        $user =$this->user_model->all();
        // initilize an array
        $data= array();
        $data['user']=$user;
        // if we want to redirect from this to list page then.....
        $this->load->view('list', $data);
    }

        function create (){
        $this->load->model('user_model');
        /* form validation is autoloaded 
        in application/config/autoload so we can use it's predefined function
        */
        $this->form_validation->set_rules('name','NAME','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');
        if($this->form_validation->run()==false){
            $this->load->view('create');
            //reload the page
        } else {
            $formarray = array();
        // save the user info (record) in database.... for that make a array
        $formarray['name']=$this->input->post('name');
        $formarray['email']=$this->input->post('email');
        $formarray['created_at']=date('y-m-d');
        $this->user_model-> create($formarray);
        $this->session->set_flashdata('success','record added successfully');
        redirect(base_url().'index.php/user/index');
        }
    }

          
    
    // this is controller deals with model to fetch data 
        function edit($userid){      
                // var_dump($id);die();
        $this->load->model('user_model');
        $user = $this->user_model->getuser($userid);
        $data=array();
        $data['user']= $user; 
        $this->load->view('edit', $data);          
        $this->form_validation->set_rules('name','NAME','required');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');
        if( $this->form_validation->run()== false){
       
         
        }else{
        //update user record

        $formarray = array();
        $formarray['name'] =$this->input->post('name');
        $formarray['email'] =$this->input->post('email');
        $this->user_model->update_user($userid ,$formarray);
        $this->session->set_flashdata('success','record updated succefully');
        redirect(base_url().'index.php/user/index');
        }
        //mistake
        // redirect(base_url().'index.php/user/edit/');    
    }
          function delete($userid){
            // var_dump($userid);die();
            $this->load->model('user_model');
           $user= $this->user_model->getuser($userid);
              //var_dump($user);die();     
            if(empty($user)){
                $this->session->set_flashdata('failure','record not found in database');
                redirect(base_url().'index.php/user/index');
            } 
            else{
            $this->user_model->deleteuser($userid);
            $this->session->set_flashdata('success','record deleted successfully');
                redirect(base_url().'index.php/user/index');
            }
          }      

        }





 



    


?>