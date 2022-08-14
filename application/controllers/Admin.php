<?php if (!defined('BASEPATH')) exit('No direct script access allowed');




class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');                    //Load library for session
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    /**default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('admin_login') != 1) redirect(base_url() . 'login', 'refresh');
        if ($this->session->userdata('admin_login') == 1) redirect(base_url() . 'admin/dashboard', 'refresh');
    }
    /************* / default functin, redirects to login page if no admin logged in yet***/

    /*Admin dashboard code to redirect to admin page if successfull login** */
    function dashboard()
    {
        if ($this->session->userdata('admin_login') != 1) redirect(base_url(), 'refresh');
        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    /******************* / Admin dashboard code to redirect to admin page if successfull login** */


    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1) redirect(base_url(), 'refresh');
        if ($param1 == 'update') {


            $data['name']   =   $this->input->post('name');
            $data['email']  =   $this->input->post('email');

            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' . $this->session->userdata('admin_id') . 'jpg');
            $this->session->set_flashdata('flash_message', get_phrase('Info Updated'));
            redirect(base_url() . 'admin/manage_profile', 'refresh');
        }

        if ($param1 == 'change_password') {

            $data['new_password']           =   sha1($this->input->post('new_password'));
            $data['confirm_new_password']   =   sha1($this->input->post('confirm_new_password'));


            if ($data['new_password'] == $data['confirm_new_password']) {

                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array('password' => $data['new_password']));
                $this->session->set_flashdata('flash_message', get_phrase('Password Changed'));
            } else {
                $this->session->set_flashdata('error_message', get_phrase('Type the same password'));
            }

            redirect(base_url() . 'admin/manage_profile', 'refresh');
        }



        $page_data['page_name']     = 'manage_profile';
        $page_data['page_title']    = get_phrase('Manage Profile');
        $page_data['edit_profile']  = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('admin_id')))->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function enquiry_category($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $page_data['category']  =   $this->input->post('category');
            $page_data['purpose']   =   $this->input->post('purpose');
            $page_data['whom']      =   $this->input->post('whom');

            $this->db->insert('enquiry_category', $page_data);
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url() . 'admin/enquiry_category', 'refresh');
        }

        if ($param1 == 'update') {

            $page_data['category']  =   $this->input->post('category');
            $page_data['purpose']   =   $this->input->post('purpose');
            $page_data['whom']      =   $this->input->post('whom');

            $this->db->where('enquiry_category_id', $param2);
            $this->db->update('enquiry_category', $page_data);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/enquiry_category', 'refresh');
        }

        if ($param1 == 'delete') {

            $this->db->where('enquiry_category_id', $param2);
            $this->db->delete('enquiry_category');
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/enquiry_category', 'refresh');
        }

        $page_data['page_name']     = 'enquiry_category';
        $page_data['page_title']    = get_phrase('Manage Category');
        $page_data['enquiry_category']  = $this->db->get('enquiry_category')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function list_enquiry($param1 = '', $param2 = '', $param3 = '')
    {


        if ($param1 == 'delete') {

            $this->db->where('enquiry_id', $param2);
            $this->db->delete('enquiry');
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/list_enquiry', 'refresh');
        }

        $page_data['page_name']     = 'list_enquiry';
        $page_data['page_title']    = get_phrase('All Enquiries');
        $page_data['select_enquiry']  = $this->db->get('enquiry')->result_array();
        $this->load->view('backend/index', $page_data);
    }



    function club($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $page_data['club_name']  =   $this->input->post('club_name');
            $page_data['desc']   =   $this->input->post('desc');
            $page_data['date']      =   $this->input->post('date');

            $this->db->insert('club', $page_data);
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url() . 'admin/club', 'refresh');
        }

        if ($param1 == 'update') {

            $page_data['club_name']  =   $this->input->post('club_name');
            $page_data['desc']   =   $this->input->post('desc');
            $page_data['date']      =   $this->input->post('date');

            $this->db->where('club_id', $param2);
            $this->db->update('club', $page_data);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/club', 'refresh');
        }


        if ($param1 == 'delete') {

            $this->db->where('club_id', $param2);
            $this->db->delete('club');
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/club', 'refresh');
        }


        $page_data['page_name']     = 'club';
        $page_data['page_title']    = get_phrase('Manage Club');
        $page_data['select_club']  = $this->db->get('club')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    function circular($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $this->crud_model->insert_circular();
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/circular', 'refresh');
        }


        if ($param1 == 'update') {

            $this->crud_model->update_circular($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/circular', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->crud_model->delete_circular($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/circular', 'refresh');
        }


        $page_data['page_name']         = 'circular';
        $page_data['page_title']        = get_phrase('Manage Circular');
        $page_data['select_circular']   = $this->db->get('circular')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function parent($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $this->crud_model->insert_parent();
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/parent', 'refresh');
        }


        if ($param1 == 'update') {

            $this->crud_model->update_parent($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/parent', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->crud_model->delete_parent($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/parent', 'refresh');
        }


        $page_data['page_name']         = 'parent';
        $page_data['page_title']        = get_phrase('Manage Parent');
        $page_data['select_parent']   = $this->db->get('parent')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function librarian($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {
            $this->crud_model->insert_librarian();
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/librarian', 'refresh');
        }


        if ($param1 == 'update') {

            $this->crud_model->update_librarian($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/librarian', 'refresh');
        }

        if ($param1 == 'delete') {

            $this->crud_model->delete_librarian($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/librarian', 'refresh');
        }

        $page_data['page_name']         = 'librarian';
        $page_data['page_title']        = get_phrase('Manage Librarian');
        $page_data['select_librarian']   = $this->db->get('librarian')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function accountant($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $this->crud_model->insert_accountant();

            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/accountant', 'refresh');
        }


        if ($param1 == 'update') {

            $this->crud_model->update_accountant($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/accountant', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->crud_model->delete_accountant($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/accountant', 'refresh');
        }

        $page_data['page_name']         = 'accountant';
        $page_data['page_title']        = get_phrase('Manage Accountant');
        $page_data['select_accountant']   = $this->db->get('accountant')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function hostel($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $this->crud_model->insert_hostel();

            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/hostel', 'refresh');
        }


        if ($param1 == 'update') {

            $this->crud_model->update_hostel($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/hostel', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->crud_model->delete_hostel($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/hostel', 'refresh');
        }

        $page_data['page_name']         = 'hostel';
        $page_data['page_title']        = get_phrase('Manage Hostel');
        $page_data['select_hostel']     = $this->db->get('hostel')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function hrm($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $this->crud_model->insert_hrm();

            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/hrm', 'refresh');
        }


        if ($param1 == 'update') {

            $this->crud_model->update_hrm($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/hrm', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->crud_model->delete_hrm($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/hrm', 'refresh');
        }

        $page_data['page_name']         = 'hrm';
        $page_data['page_title']        = get_phrase('Manage HRM');
        $page_data['select_hrm']        = $this->db->get('hrm')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    function alumni($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {

            $this->alumni_model->insert_alumni();

            $this->session->set_flashdata('flash_message', get_phrase('Data successfully saved'));
            redirect(base_url() . 'admin/alumni', 'refresh');
        }


        if ($param1 == 'update') {

            $this->alumni_model->update_alumni($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully updated'));
            redirect(base_url() . 'admin/alumni', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->alumni_model->delete_alumni($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data successfully deleted'));
            redirect(base_url() . 'admin/alumni', 'refresh');
        }

        $page_data['page_name']         = 'alumni';
        $page_data['page_title']        = get_phrase('Manage Alumni');
        $page_data['select_alumni']        = $this->db->get('alumni')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    function teacher($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {
            $this->teacher_model->insetTeacherFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url() . 'admin/teacher', 'refresh');
        }

        if ($param1 == 'update') {
            $this->teacher_model->updateTeacherFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/teacher', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->teacher_model->deleteTeacherFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/teacher', 'refresh');
        }

        $page_data['page_name']     = 'teacher';
        $page_data['page_title']    = get_phrase('Manage Teacher');
        $page_data['select_teacher']  = $this->db->get('teacher')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    function get_designation($department_id = null)
    {

        $designation = $this->db->get_where('designation', array('department_id' => $department_id))->result_array();
        foreach ($designation as $key => $row)
            echo '<option value="' . $row['designation_id'] . '">' . $row['name'] . '</option>';
    }


    /***********  The function manages vacancy   ***********************/
    function vacancy($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {
            $this->vacancy_model->insetVacancyFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url() . 'admin/vacancy', 'refresh');
        }

        if ($param1 == 'update') {
            $this->vacancy_model->updateVacancyFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/vacancy', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->vacancy_model->deleteVacancyFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/vacancy', 'refresh');
        }

        $page_data['page_name']     = 'vacancy';
        $page_data['page_title']    = get_phrase('Manage Vacancy');
        $page_data['select_vacancy']  = $this->db->get('vacancy')->result_array();
        $this->load->view('backend/index', $page_data);
    }


    /***********  The function manages job applicant   ***********************/
    function application($param1 = 'applied', $param2 = '', $param3 = '')
    {

        if ($param1 == 'insert') {
            $this->application_model->insertApplicantFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url() . 'admin/application', 'refresh');
        }

        if ($param1 == 'update') {
            $this->application_model->updateApplicantFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/application', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->application_model->deleteApplicantFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/application', 'refresh');
        }

        if ($param1 != 'applied' && $param1 != 'on_review' && $param1 != 'interviewed' && $param1 != 'offered' && $param1 != 'hired' && $param1 != 'declined')
            $param1 = 'applied';



        $page_data['status']        = $param1;
        $page_data['page_name']     = 'application';
        $page_data['page_title']    = get_phrase('Job Applicant');
        $this->load->view('backend/index', $page_data);
    }


    /***********  The function manages Leave  ***********************/
    function leave($param1 = null, $param2 = null, $param3 = null)
    {

        if ($param1 == 'update') {
            $this->leave_model->updateLeaveFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/leave', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->leave_model->deleteLeaveFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/leave', 'refresh');
        }


        $page_data['page_name']     = 'leave';
        $page_data['page_title']    = get_phrase('Manage Leave');
        $this->load->view('backend/index', $page_data);
    }


    /***********  The function manages Awards  ***********************/
    function award($param1 = null, $param2 = null, $param3 = null)
    {


        if ($param1 == 'create') {
            $this->award_model->createAwardFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/award', 'refresh');
        }

        if ($param1 == 'update') {
            $this->award_model->updateAwardFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/award', 'refresh');
        }


        if ($param1 == 'delete') {
            $this->award_model->deleteAwardFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/award', 'refresh');
        }

        $page_data['page_name']     = 'award';
        $page_data['page_title']    = get_phrase('Manage Award');
        $this->load->view('backend/index', $page_data);
    }


    /***********  The function manages Class Information  ***********************/
      function classes ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->class_model->createClassFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url(). 'admin/classes', 'refresh');
        }

        if($param1 == 'update'){
            $this->class_model->updateClassFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url(). 'admin/classes', 'refresh');
        }


        if($param1 == 'delete'){
            $this->class_model->deleteClassFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url(). 'admin/classes', 'refresh');
    
        }

        $page_data['page_name']     = 'class';
        $page_data['page_title']    = get_phrase('Manage Class');
        $this->load->view('backend/index', $page_data);

    }
}
