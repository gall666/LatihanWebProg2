<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Admin/login/login');
	}
    public function login()
    {
        $this->load->view('Admin/login/login');
    }
	public function autentikasi()
	{
		$username = $this->input->post('username', true);
		$password = sha1($this->input->post('password', true));

		$sql = $this->ModelAdmin->cekLoginAdmin(['username_pustakawan' => $username, 'passw_pustakawan' => $password]);
		$cekUser = $sql->row_array();

		if(!$cekUser){
			?>
			<script type="text/javascript">
			alert("Maaf Username Dan Password Tidak Sesuai!");
			document.location="<?php echo base_url('admin/login');?>";
			</script>
			<?php
		}
		else{
			$data = [
				'idpustakawan' => $cekUser['id_pustakawan'],
				'enid' => sha1($cekUser['id_pustakawan'])
			];
			$this -> session->set_userdata($data);
			?>
			<script type="text/javascript">
				alert("Selamat Datang <?php echo $cekUser['nama_pustakawan'];?>");
				document.location="<?php echo base_url('admin/dashboard');?>";
			</script>
			<?php
		}
	}	
	public function dashboard()
	{
		$this->load->view('Admin/login/index');
	}
}
