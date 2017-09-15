<?php

class Pegawai extends CI_Controller{

    public function inputKaryawan()
    {
        $this->load->view('inputPegawai');
    }

    public function ngulang()
    {
        $this->load->view('perulangan');
    }


    public function tambahKaryawan()
    {
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $tgl = $this->input->post('tgl');
        $email = $this->input->post('email');
        $no_tlp = $this->input->post('no_tlp');
        $pend_terakhir = $this->input->post('pend_terakhir');
        $jk = $this->input->post('jk');
        $status_nikah = $this->input->post('status_nikah');
        $jml_tanggugan = $this->input->post('jml_tanggungan');

        $q = $this->m_pegawai->tambah_pegawai($nama,$ttl,$tgl,$email,$no_tlp,$pend_terakhir,$jk,$status_nikah,$jml_tanggugan);
        redirect("Pegawai/inputKaryawan");


    }

    public function dataPegawai()
    {
        $data['tampilPegawai'] = $this->m_pegawai->displayPegawai();
        $this->load->view('dataPegawai', $data);
    }

    public function dataBagasi()
    {
        $data['tampilBagasi'] = $this->m_pegawai->displayBagasi();
        $this->load->view('dataBagasi', $data);
    }

    public function editpegawai($id)
    {
        $data['tampilbyid'] = $this->m_pegawai->editPegawai($id);
        $this->load->view('editIm3', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');
        $kuota = $this->input->post('kuota_edit');
        $isi = $this->input->post('isi_edit');
        $waktu = $this->input->post('waktu_edit');
        $harga = $this->input->post('harga_edit');
        $status = $this->input->post('status_edit');

        $simpan = $this->Provider->proseseditm3($id, $kuota, $isi ,$waktu ,$harga ,$status);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            redirect("Kuota/kuotaIm3juga");
        }
    }



}

?>