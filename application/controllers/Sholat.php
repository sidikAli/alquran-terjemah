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
		date_default_timezone_set('Asia/Jakarta');
		setlocale (LC_TIME, 'id_ID');

		$tahun = Date('Y');
		$bulan = Date('m');

		$idkota = $this->input->post('idkota');
		if ($idkota == "") {
			$idkota = "1219";
		}

		$data['bulanSekarang'] = $this->bulanIndo(date('m')) ." ". date('Y');
		
		$data['semuaJadwal'] = json_decode($this->curl->simple_get($this->api.$idkota.'/'.$tahun.'/'.$bulan));
		$data['semuaKota'] = json_decode($this->curl->simple_get($this->apiKota));
		$data['judul'] = "Jadwal Sholat " . ucwords(strtolower($data['semuaJadwal']->data->lokasi)) ;
		$this->load->view('templates/header', $data);
		$this->load->view('jadwal', $data);
		$this->load->view('templates/footer', $data);
	}

	function bulanIndo ($bulanInggris) {
		switch ($bulanInggris) {
		  case '1':
			return 'Januari';
		  case '2':
			return 'Februari';
		  case '3':
			return 'Maret';
		  case '4':
			return 'April';
		  case '5':
			return 'Mei';
		  case '6':
			return 'Juni';
		  case '7':
			return 'Juli';
		  case '8':
			return 'Agustus';
		  case '9':
			return 'September';
		  case '10':
			return 'Oktober';
		  case '11':
			return 'November';
		  case '12':
			return 'Desember';
		  default:
			return 'bulan tidak sesuai';
		}
	  }
}