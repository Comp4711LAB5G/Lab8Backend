<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
        public function _construct(){
            parent::_construct();
            $this->load->model('menu');
            $this->data['pagetitle'] = 'Diner(server)';
        }

	public function index()
	{
            $this->data['title'] = 'Diner(server)';
            $this->data['content'] = 'welcome';
            $this->render();
	}

}
