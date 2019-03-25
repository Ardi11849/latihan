<?php
Class Laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(250,7,'Sekolah',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(250,7,'Laporan Siswa',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(50,25,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,6,'NIS',1,0);
        $pdf->Cell(50,6,'Nama Murid',1,0);
        $pdf->Cell(50,6,'Kelas',1,0);
        $pdf->Cell(50,6,'Alamat',1,0);
        $pdf->Cell(50,6,'Wali',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->query("select murid.*, kelas.* from kelas, murid where kelas.Kode_kelas = murid.Kode_kelas")->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(50,6,$row->NIS,1,0);
            $pdf->Cell(50,6,$row->Nama,1,0);
            $pdf->Cell(50,6,$row->Kelas,1,0);
            $pdf->Cell(50,6,$row->Alamat,1,0); 
            $pdf->Cell(50,6,$row->Wali,1,1); 
        }
        $pdf->Output();
    }
    
    function guru(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(250,7,'Sekolah',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(250,7,'Laporan Guru',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(50,25,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'NIK',1,0);
        $pdf->Cell(40,6,'Nama Guru',1,0);
        $pdf->Cell(100,6,'Nama Matpel',1,0);
        $pdf->Cell(50,6,'Alamat',1,0);
        $pdf->Cell(50,6,'Tanggal Masuk',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->query('select guru.*, matpel.Nama_matpel from matpel, guru where guru.Kode_matpel = matpel.Kode_matpel')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(30,6,$row->NIK,1,0);
            $pdf->Cell(40,6,$row->Nama_g,1,0);
            $pdf->Cell(100,6,$row->Nama_matpel,1,0);
            $pdf->Cell(50,6,$row->Alamat,1,0); 
            $pdf->Cell(50,6,$row->Tgl_masuk,1,1);
        }
        $pdf->Output();
    }
    
    function nilai(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(250,7,'Sekolah',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(250,7,'Laporan Nilai',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(50,25,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'Nama Murid',1,0);
        $pdf->Cell(40,6,'Kelas',1,0);
        $pdf->Cell(70,6,'Nama Matpel',1,0);
        $pdf->Cell(40,6,'Nama Guru',1,0);
        $pdf->Cell(30,6,'Nilai Harian',1,0);
        $pdf->Cell(30,6,'Nilai Ulangan',1,0);
        $pdf->Cell(30,6,'Nilai Akhir',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->query("select kelas.Kelas, murid.Nama, guru.Nama_g, matpel.Nama_matpel, nilai.* from murid, matpel, guru, nilai, kelas where murid.Kode_kelas = kelas.Kode_kelas and murid.NIS = nilai.NIS and matpel.Kode_matpel = nilai.Kode_matpel and guru.NIK = nilai.NIK")->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(40,6,$row->Nama,1,0);
            $pdf->Cell(40,6,$row->Kelas,1,0);
            $pdf->Cell(70,6,$row->Nama_matpel,1,0);
            $pdf->Cell(40,6,$row->Nama_g,1,0);
            $pdf->Cell(30,6,$row->Nilai_h,1,0); 
            $pdf->Cell(30,6,$row->Nilai_u,1,0); 
            $pdf->Cell(30,6,$row->Nilai,1,1);
        }
        $pdf->Output();
    }

}