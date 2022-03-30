<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan2 extends CI_Controller {

    public function index() {        
        $this->load->helper('url');
        $this->load->view('input_matakuliah.php');
    }

    public function cetak(){
        $kodeMataKuliah = $this->input->post('kode');
        $namaMataKuliah = $this->input->post('nama');
        $sksMataKuliah = $this->input->post('sks');
        

        if($sksMataKuliah== 1){
            $sksUnggulan = "SKS Reguler";
            $BobotNilai = "nilai dibawah 60";
            $Status= "Wajib Remedial";
        }else if ($sksMataKuliah== 2){
            $sksUnggulan = "SKS Reguler";
            $BobotNilai = "nilai 60 sd 74";
            $Status= "Tidak Remedial";
        }else if ($sksMataKuliah== 3){
                $sksUnggulan = "SKS Reguler";
                $BobotNilai = "nilai 75 sd 80";
                $Status= "Tidak Remedial";  
        }else if ($sksMataKuliah== 4){
                    $sksUnggulan = "Unggulan SKS";
                    $BobotNilai = "nilai 81 sd 100";
                    $Status= "Tidak Remedial";
        }

        //membuat object untuk parsing data ke view yg dituju
        $data = [
            'kode' => $kodeMataKuliah,
            'nama' => $namaMataKuliah,
            'sks' => $sksMataKuliah,
            'unggulan' => $sksUnggulan, 
            'bobotnilai' => $BobotNilai,
            'status' => $Status,
        ];

        //kirim ke view
        $this->load->view('output_matakuliah.html', $data);


    }

}