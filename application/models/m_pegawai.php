<?php

class m_pegawai extends CI_Model{

    public function tambah_pegawai($nama, $ttl, $tgl, $email, $no_tlp,$pend_terakhir,$jk,$status_nikah,$jml_tanggugan)
    {
        $q = "insert into pegawai (nama_lengkap,tempat_lahir,tanggal_lahir,email,no_tlp,pendidikan_terakhir,jenis_kelamin,status_nikah,jumlah_tanggungan)
            values ('$nama','$ttl','$tgl','$email','$no_tlp','$pend_terakhir','$jk', '$status_nikah','$jml_tanggugan')";
        return $this->db->query($q);
    }

    public  function displayPegawai()
    {
        $query = "select * from pegawai";
        return $this->db->query($query);
    }

    public  function displayBagasi()
    {
        $query = "select * from pegawai";
        return $this->db->query($query);
    }


    public function proseseditm3($id, $kuota, $isi, $waktu, $harga, $status)
    {
        $data = array (

            'kuota' => $kuota,
            'isi' => $isi,
            'waktu' => $waktu,
            'harga' => $harga,
            'status' => $status
        );

        return $this->db->update('tb_kuota', $data, array('id' => $id));

    }

    public function editIm3($id)
    {
        $query = "select * from tb_kuota where id = $id";
        return $this->db->query($query);
    }

}


?>