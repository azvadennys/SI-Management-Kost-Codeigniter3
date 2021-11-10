<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_aksi extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') != 'login'){
            redirect (base_url('login'));
        }
        $this->load->model('m_data');
    }

    function get_detail_penghuni(){
        $id_penghuni = $this->input->post('id_penghuni');
        $penghuni = $this->m_data->detail_penghuni(array('id' => $id_penghuni))->row();
        echo json_encode($penghuni);
    }

    function aksi_edit_harga_kamar(){
        $no_kamar = $this->input->post('no_kamar');
        $harga = $this->input->post('harga');

        if ($this->m_data->update_harga($no_kamar, $harga) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui harga kamar no. '.$no_kamar.' menjadi Rp'.number_format($harga, 0, ',', '.').' per bulan")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-kamar'));
    }

    function aksi_tambah_penghuni(){
        $no_kamar       = $this->input->post('no_kamar');
        $nama           = $this->input->post('nama');
        $no_ktp         = $this->input->post('no_ktp');
        $alamat         = $this->input->post('alamat');
        $no             = $this->input->post('no');
        $tgl_masuk      = $this->input->post('tgl_masuk');
        $tgl_keluar     = $this->input->post('tgl_keluar');
        $biaya          = $this->input->post('biaya');

        $data = array(
            'no_kamar'      => $no_kamar,
            'nama'          => $nama,
            'no_ktp'        => $no_ktp,
            'alamat'        => $alamat,
            'no'            => $no,
            'tgl_masuk'     => $tgl_masuk,
            'tgl_keluar'    => $tgl_keluar,
            'biaya'         => $biaya,
            'status'        => 'Penghuni'
        );

        $kamar = $this->m_data->detail_kamar(array('no_kamar' => $no_kamar))->row();

        if ($kamar->jml_penghuni == '1'){
            $this->session->set_flashdata('pesan', 'toastr.warning("Kamar '.$no_kamar.' sudah terisi, silakan pilih kamar lain")');
        }
        else if ($this->m_data->insert_penghuni($data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah penghuni '.$nama.' pada kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-kamar'));
    }

    function aksi_tambah_kamar(){
        $no_kamar       = $this->input->post('no_kamar');
        $lantai           = $this->input->post('lantai');
        $harga         = $this->input->post('harga');

        $kamar_baru = array(
            'no_kamar'      => $no_kamar,
            'lantai'          => $lantai,
            'harga'        => $harga
        );

        if ($this->m_data->insert_kamar($kamar_baru) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah Nomor Kamar '.$no_kamar.' pada lantai '.$lantai.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Nomor kamar sudah ada")');
        }
        redirect (base_url('daftar-kamar'));
    }

    function aksi_edit_penghuni(){
        $id_penghuni    = $this->input->post('id_penghuni');
        $no_kamar       = $this->input->post('no_kamar');
        $nama           = $this->input->post('nama');
        $no_ktp         = $this->input->post('no_ktp');
        $alamat         = $this->input->post('alamat');
        $no             = $this->input->post('no');
        $tgl_masuk      = $this->input->post('tgl_masuk');
        $tgl_keluar     = $this->input->post('tgl_keluar');
        $biaya          = $this->input->post('biaya');

        $data = array(
            'no_kamar'      => $no_kamar,
            'nama'          => $nama,
            'no_ktp'        => $no_ktp,
            'alamat'        => $alamat,
            'no'            => $no,
            'tgl_masuk'     => $tgl_masuk,
            'tgl_keluar'    => $tgl_keluar,
            'biaya'         => $biaya,
            'status'        => 'Penghuni'
        );

        if ($this->m_data->update_penghuni($id_penghuni, $data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui data penghuni '.$nama.' pada kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-penghuni'));
    }

    function aksi_hapus_penghuni($id = null){

        if (!isset($id)) redirect (base_url('daftar-penghuni'));

        $penghuni = $this->m_data->detail_penghuni(array('id' => $id))->row();

        if (!$penghuni){
            show_404();
        }
        else {
            if ($this->m_data->delete_penghuni($id) == true){
                $no_kamar = $penghuni->no_kamar;

                if ($penghuni->status == 'Penghuni'){
                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus penghuni '.$penghuni->nama.' dari kamar '.$no_kamar.'")');
                }
                else {
                    $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
                }
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }

            if ($penghuni->status == 'Penghuni'){
                redirect (base_url('daftar-penghuni'));
            }
            else{
                redirect (base_url(''));
            }
        }
    }

    function aksi_tambah_pembayaran(){
        $id_penghuni    = $this->input->post('id_penghuni');
        $nama           = $this->input->post('nama');
        $no_kamar       = $this->input->post('no_kamar');
        $bayar          = $this->input->post('bayar');
        $tgl_bayar      = $this->input->post('tgl_bayar');
        $ket            = $this->input->post('ket');

        $data = array(
            'id_penghuni'   => $id_penghuni,
            'bayar'         => $bayar,
            'tgl_bayar'     => $tgl_bayar,
            'ket'           => $ket
        );

        if ($this->m_data->insert_pembayaran($data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah data pembayaran penghuni '.$nama.' pada kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('riwayat-pembayaran'));
    }

    function aksi_edit_pembayaran(){
        $id_pembayaran  = $this->input->post('id_pembayaran');
        $nama           = $this->input->post('nama');
        $no_kamar       = $this->input->post('no_kamar');
        $bayar          = $this->input->post('bayar');
        $tgl_bayar      = $this->input->post('tgl_bayar');
        $ket            = $this->input->post('ket');

        $data = array(
            'tgl_bayar' => $tgl_bayar,
            'bayar' => $bayar,
            'ket'   => $ket
        );

        if ($this->m_data->update_pembayaran($id_pembayaran, $data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui pembayaran tanggal '.$tgl_bayar.' dari penghuni '.$nama.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('riwayat-pembayaran'));
    }

    function aksi_hapus_pembayaran($id_pembayaran = null){

        if (!isset($id_pembayaran)) redirect (base_url('riwayat-pembayaran'));

        $pembayaran = $this->m_data->detail_pembayaran(array('id_pembayaran' => $id_pembayaran))->row();

        if (!$pembayaran){
            show_404();
        }
        else {
            if ($this->m_data->delete_pembayaran($id_pembayaran) == true){
                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus pembayaran tanggal '.$pembayaran->tgl_bayar.' dari penghuni '.$pembayaran->nama.'")');
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }
            redirect (base_url('riwayat-pembayaran'));
        }
    }

    function aksi_ubah_pass(){
        $username = $this->session->userdata('username');
        $password = $this->input->post('password');
        $password_baru = sha1($this->input->post('password_baru'));

        $this->load->model('m_login');
        $cek = $this->m_login->cek_login($username, $password);

        if ($cek->num_rows() > 0){
            if ($this->m_data->update_password($username, $password_baru) == true){
                $this->session->set_flashdata('pesan', 'berhasil_ubah_pass');
                redirect (base_url('login'));
            }
            else{
                echo 'Terjadi Kesalahan';
            }
        }
        else {
            $this->session->set_flashdata('pesan', 'gagal_ubah_pass');
            redirect (base_url('ubah-pass'));
        }
    }

    function aksi_tambah_user(){
         $nama           = $this->input->post('nama');
         $username       = $this->input->post('username');
         $password       = sha1($this->input->post('password'));

         $user_baru = array(
             'nama'           => $nama,
             'username'       => $username,
             'password'       => $password
         );

         if ($this->m_data->insert_user($user_baru) == true){
             $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah user '.$nama.' dengan username '.$username.'")');
             redirect (base_url('daftar-user'));
         }
         else {
             $this->session->set_flashdata('pesan', 'gagal_tambah_user');
             redirect (base_url('tambah-user'));
         }
     }

    
     function aksi_hapus_user($username = null){

         if (!isset($username)) redirect('daftar-user');

         $user = $this->m_data->data_user(array('username' => $username))->row();

         if (!$user){
             show_404();
         }
         else if ($user->username == 'admin'){
             $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
             redirect (base_url('daftar-user'));
         }
         else {
             if ($this->m_data->delete_user($username) == true){
                 $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus user '.$user->nama.' dengan username '.$user->username.'")');
             }
             else {
                 $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
             }
             redirect (base_url('daftar-user'));
         }
     }
}

