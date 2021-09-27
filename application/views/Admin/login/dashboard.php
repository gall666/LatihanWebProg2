<?php
$id = $this->session->userdata('idpustakawan');
$enkrip = $this->session->userdata('enid');

if($id=="" or $enkrip!=sha1($id)){
    ?>
    <script type="text/javascript">
        alert("Session Habis. Silahkan Login!");
        document.location="<?php echo base_url('admin/login');?>";
    </script>
    <?php
}
else{
    $sqlUser = $this->ModelAdmin->getwhere(['id_pustakawan' => $id]);
    $dtUser = $sqlUser->row_array();
    ?>
    <b>Ini Dashboard :</b><br /> <br />
    Nama User = <?php echo $dtUser['nama_pustakawan'];?>
<?php } ?>