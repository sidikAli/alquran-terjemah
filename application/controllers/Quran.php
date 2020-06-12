<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Quran_model', 'quran');
	}

	public function index()
	{
		$data['judul'] = "Alquran Indonesia";
		$data['surah'] = $this->quran->getAllSurah();
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
	}

	public function searchSurah()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('surat_indonesia', $keyword);
		$data['surah'] = $this->db->get('surah')->result_array();

		echo json_encode($data);
	}

	public function detail($surah)
	{
		$this->load->helper('number');
		$data['ayats'] = $this->quran->getAllAyat($surah);
		$data['bismillah'] = $this->quran->getBismillah();
		$data['judul'] = $data['ayats']['0']['surat_indonesia'];
		$this->load->view('templates/header', $data);
		$this->load->view('detail', $data);
		$this->load->view('templates/footer', $data);
	}

	public function terjemahan()
	{
		$this->load->helper('number');
		$this->load->helper('search');
		$this->load->library('form_validation');
		$keyword = $this->input->post('keyword');
		if ($keyword) {
			$data['ayats'] = $this->quran->getAyat($keyword);
		}
		
		$data['judul'] = "Cari terjemahan";
		$this->load->view('templates/header', $data);
		$this->load->view('terjemahan', $data);
		$this->load->view('templates/footer', $data);
	}
}