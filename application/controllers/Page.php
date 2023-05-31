<?php

class Page extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'PesonaIndonesia',
		];

		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['meta'] = [
			'title' => 'About PesonaIndonesia',
		];

		$this->load->view('about', $data);
	}

}