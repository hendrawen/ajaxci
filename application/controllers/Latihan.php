<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_cari','pencarian');
	}

	public function index()
	{
		$this->load->view('views');
	}

	public function cari(){
		$data = $this->input->get('q',TRUE);

		$query = $this->pencarian->get_data($data);

		foreach ($query as $key) { ?>
		<br>
				<table>
					<caption>Data Siswa</caption>
					
					<tr><td>Nama</td><td>:</td><td><?php echo $key->nama;?></td></tr>
					<tr><td>Ayah</td><td>:</td><td><?php echo $key->ayah;?></td></tr>
					<tr><td>Ibu</td><td>:</td><td><?php echo $key->ibu;?></td></tr>
					<tr><td>Alamat</td><td>:</td><td><?php echo $key->alamat;?></td></tr>
				</table>
		<?php } 
	}
}
