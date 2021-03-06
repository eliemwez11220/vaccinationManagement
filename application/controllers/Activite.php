<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Activite extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Activite_model');
    } 

    /*
     * Listing of activites
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('activite/index?');
        $config['total_rows'] = $this->Activite_model->get_all_activites_count();
        $this->pagination->initialize($config);

        $data['activites'] = $this->Activite_model->get_all_activites($params);
        
        $data['_view'] = 'activite/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new activite
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('date_debut','Date Debut','required');
		$this->form_validation->set_rules('date_fin','Date Fin','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'centre_relais' => $this->input->post('centre_relais'),
				'vaccin_sid' => $this->input->post('vaccin_sid'),
				'nom' => $this->input->post('nom'),
				'type_activite' => $this->input->post('type_activite'),
				'date_debut' => $this->input->post('date_debut'),
				'date_fin' => $this->input->post('date_fin'),
				'date_created' => $this->input->post('date_created'),
				'last_update' => $this->input->post('last_update'),
				'observation' => $this->input->post('observation'),
            );
            
            $activite_id = $this->Activite_model->add_activite($params);
            redirect('activite/index');
        }
        else
        {
			$this->load->model('Centre_model');
			$data['all_centres'] = $this->Centre_model->get_all_centres();

			$this->load->model('Vaccin_model');
			$data['all_vaccins'] = $this->Vaccin_model->get_all_vaccins();
            
            $data['_view'] = 'activite/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a activite
     */
    function edit($acti_id)
    {   
        // check if the activite exists before trying to edit it
        $data['activite'] = $this->Activite_model->get_activite($acti_id);
        
        if(isset($data['activite']['acti_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom','Nom','required');
			$this->form_validation->set_rules('date_debut','Date Debut','required');
			$this->form_validation->set_rules('date_fin','Date Fin','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'centre_relais' => $this->input->post('centre_relais'),
					'vaccin_sid' => $this->input->post('vaccin_sid'),
					'nom' => $this->input->post('nom'),
					'type_activite' => $this->input->post('type_activite'),
					'date_debut' => $this->input->post('date_debut'),
					'date_fin' => $this->input->post('date_fin'),
					'date_created' => $this->input->post('date_created'),
					'last_update' => $this->input->post('last_update'),
					'observation' => $this->input->post('observation'),
                );

                $this->Activite_model->update_activite($acti_id,$params);            
                redirect('activite/index');
            }
            else
            {
				$this->load->model('Centre_model');
				$data['all_centres'] = $this->Centre_model->get_all_centres();

				$this->load->model('Vaccin_model');
				$data['all_vaccins'] = $this->Vaccin_model->get_all_vaccins();

                $data['_view'] = 'activite/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The activite you are trying to edit does not exist.');
    } 

    /*
     * Deleting activite
     */
    function remove($acti_id)
    {
        $activite = $this->Activite_model->get_activite($acti_id);

        // check if the activite exists before trying to delete it
        if(isset($activite['acti_id']))
        {
            $this->Activite_model->delete_activite($acti_id);
            redirect('activite/index');
        }
        else
            show_error('The activite you are trying to delete does not exist.');
    }
    
}
