<?php 
class Signup extends CI_Controller{
    
    public function index(){
        $this->load->view('layouts/app', ['view'=>'pages/signup_view', 'page_title'=>'LeadEngine | Signup']);
    }
    public function pricing(){
        if(!$this->session->userdata('first_name')){
            return redirect(base_url().'signup');
        }
        $this->load->view('layouts/app', ['view'=>'pages/pricing_view', 'page_title'=>'LeadEngine | Pricing']);
    }
    public function validate(){
        
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim');
        $this->form_validation->set_rules('number', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|trim');
        $this->form_validation->set_rules('billing_address', 'Billing Address', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required|trim');

        if($this->form_validation->run()){

            $this->session->set_userdata('first_name', $this->input->post('first_name'));
            $this->session->set_userdata('last_name', $this->input->post('last_name'));
            $this->session->set_userdata('email', $this->input->post('email'));
            $this->session->set_userdata('number', $this->input->post('number'));
            $this->session->set_userdata('company_name', $this->input->post('company_name'));
            $this->session->set_userdata('billing_address', $this->input->post('billing_address'));
            $this->session->set_userdata('city', $this->input->post('city'));
            $this->session->set_userdata('state', $this->input->post('state'));
            $this->session->set_userdata('zipcode', $this->input->post('zipcode'));

            return redirect(base_url().'signup/pricing');

            
        }else{
            $this->session->set_flashdata('first_name', $this->input->post('first_name'));
            $this->session->set_flashdata('last_name', $this->input->post('last_name'));
            $this->session->set_flashdata('email', $this->input->post('email'));
            $this->session->set_flashdata('number', $this->input->post('number'));
            $this->session->set_flashdata('company_name', $this->input->post('company_name'));
            $this->session->set_flashdata('billing_address', $this->input->post('billing_address'));
            $this->session->set_flashdata('city', $this->input->post('city'));
            $this->session->set_flashdata('state', $this->input->post('state'));
            $this->session->set_flashdata('zipcode', $this->input->post('zipcode'));
            $this->session->set_flashdata('failed', validation_errors());

            return redirect(base_url().'signup');

        }
    }
    public function sendMail(){

        $config = [
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.googlemail.com',
            'smtp_port'=> 465,
            'smtp_user'=>'laggy80@gmail.com',
            'smtp_pass'=>'freecodecamp2',
            'mailtype'=>'html',
            'charset'=>'iso-8859-10',
            'wordwrap'=>true
        ];

        $this->load->library('email', $config);
        $this->email->from('laggy80@gmail.com');

        $this->email->to('LE.kevin.sutton@gmail.com'); // Change this to LE.kevin.sutton@gmail.com

        $this->email->subject('A user has signed up: '.$this->session->userdata('email'));
        $this->email->message("
            <html>
                <img style='width:100%' align='center' src='http://leadengine.live/assets/images/wide_logo.png'>
                <br><br><br><br>
                <h1 style='text-align:center'>Good Day, Daniel. A new User has signed up:<br>{$this->session->userdata('email')}</h1>
                <hr>
                <p style='font-size:17px'>First Name: <strong><u>{$this->session->userdata('first_name')}</u></strong></p>
                <p style='font-size:17px'>Last Name: <strong><u>{$this->session->userdata('last_name')}</u></strong></p>
                <p style='font-size:17px'>Email Address: <strong><u>{$this->session->userdata('email')}</u></strong></p>
                <p style='font-size:17px'>Phone Number: <strong><u>{$this->session->userdata('number')}</u></strong></p>
                <p style='font-size:17px'>Company Name: <strong><u>{$this->session->userdata('company_name')}</u></strong></p>
                <p style='font-size:17px'>Billing Address: <strong><u>{$this->session->userdata('billing_address')}</u></strong></p>
                <p style='font-size:17px'>City: <strong><u>{$this->session->userdata('city')}</u></strong></p>
                <p style='font-size:17px'>State: <strong><u>{$this->session->userdata('state')}</u></strong></p>
                <p style='font-size:17px'>Zip Code: <strong><u>{$this->session->userdata('zipcode')}</u></strong></p>
                <hr>
                <p>Please do not reply.</p>
            </html>
        ");

        $this->email->set_newline("\r\n");
        $this->email->send();
        return redirect(base_url().'signup/success');

    }

    public function success(){
        
        $this->load->view('layouts/app', ['page_title'=>'LeadEngine | Success!', 'view'=>'pages/success_view']);
        
    }

}