<?php
/**
 * 
 */
class Reports extends CI_Controller
{
   public function __construct()
    {
        parent::__construct();
        $this->load->model('reports_model');

        
    }
   //this displays the reports page
    public function report()
    {
        $this->load->view('pages/report');
    }

    //this submits the report forms
    public function submit($value='')
    {
        $reportID = $this->input->post('rid');
        $reportName = $this->input->post('rname');
        $reportDate = $this->input->post('rdate');
        $reportCreated = $this->input->post('createdby');

        $this->reports_model->details(array(
            $reportID,
            $reportName,
            $reportDate,
            $reportCreated
        ));
        echo "<div>Report sucessfully submited</div>";

    }
   
}