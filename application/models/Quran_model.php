<?php 

class Quran_model extends CI_Model
{
	
	public function getAllsurah()
	{
		return $this->db->get('surah')->result_array();
	}

	public function getSurah($keyword)
	{
		return $this->db->get_where('surah', $keyword)->result_array();
	}

	public function getBismillah()
	{
		return $this->db->get_where('quran_id', ["id" => 0])->row_array();
	}

	public function getAllAyat($id)
	{
		$query = "SELECT quran_id.*, surah.* FROM quran_id JOIN surah
					ON quran_id.suraId = surah.index WHERE quran_id.suraId = '$id'";
		return $this->db->query($query)->result_array();
	}

	public function getAyat($keyword)
	{
		$query = "SELECT quran_id.*, surah.* FROM quran_id JOIN surah
					ON quran_id.suraId = surah.index WHERE quran_id.indoText LIKE '%$keyword%'";
		$result =  $this->db->query($query)->result_array();

		if (!empty($result)) {
			return $result;
		} else {
			return false;
		}
		
	}

}

