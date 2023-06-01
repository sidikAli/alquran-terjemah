<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sholat extends CI_Controller
{

	public $api = "https://api.myquran.com/v1/sholat/jadwal/";
	public $apiKota = 'https://api.myquran.com/v1/sholat/kota/semua';

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$tahun = Date('Y');
		$bulan = Date('m');

		$idkota = $this->input->post('idkota');
		if ($idkota == "") {
			$idkota = "1219";
		}
		
		$data['semuaJadwal'] = json_decode($this->curl->simple_get($this->api.$idkota.'/'.$tahun.'/'.$bulan));
		$data['semuaKota'] = json_decode($this->curl->simple_get($this->apiKota));
		$data['judul'] = "Jadwal Sholat " . $data['semuaJadwal']->data->lokasi;
		$this->load->view('templates/header', $data);
		$this->load->view('jadwal', $data);
		$this->load->view('templates/footer', $data);
	}
}