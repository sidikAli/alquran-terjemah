<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sholat extends CI_Controller
{

	public $api = "https://api.pray.zone/v2/times/this_month.json?city=";

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$kota = $this->input->post('kota');
		if ($kota == "") {
			$kota = "Bandung";
		}
		
		$data['jadwal'] = json_decode($this->curl->simple_get($this->api.$kota));
		$data['judul'] = "Jadwal Sholat " . $kota;
		$this->load->view('templates/header', $data);
		$this->load->view('jadwal', $data);
		$this->load->view('templates/footer', $data);
	}
}