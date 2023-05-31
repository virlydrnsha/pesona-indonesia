<?php

class Destination extends CI_Controller 
{
	public function index()
	{
		// @TODO: get article from model
		$data['destinations'] = [
			[
				'title' => 'Foo',
				'content' => 'Ini artikel tentang foo',
			],
			[
				'title' => 'Bar',
				'content' => 'Ini artikel tentang Bar',
			],
		];

		if(count($data['destinations']) > 0){
			$this->load->view('destinations/list_wisata.php', $data);
		} else {
			$this->load->view('destinations/empty_wisata.php');
		}
	}

	public function show($slug = null)
	{
		// @TODO: get article from model
		$this->load->view('destinations/show_wisata.php');
	}
}