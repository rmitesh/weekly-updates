<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->set_page_title('Dashboard');

		$this->template->load( 'index', 'content', 'user/index', $this->data );
	}

}
