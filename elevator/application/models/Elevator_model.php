<?php
class Elevator_model extends CI_Model {

    public function getrealtimeinfo($deviceid)
	{
		if ($deviceid === FALSE)
		{
			return;
		}

		$this->db->select_max('update_time');
		$query = $this->db->get('history_table_1');
		$data = $query->row_array();
		$query = $this->db->select('*')->from('history_table_1')
			->where('device_id', $deviceid)
			->where('update_time', $data['update_time'])
		->get();

		return $query->result_array();
	}
	
	public function set_news()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('news', $data);
	}
	
}