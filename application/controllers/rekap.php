<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

	public function index()
	{

		$this->Msecurity->getsecurity();
		$isi['content']='rekap/rekap';
		$isi['sidebar']='sidebar/rekap_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pesanan JOIN tb_nota on tb_pesanan.kd_nota=tb_nota.no_nota where tanggal=''" );
		$this->load->view('home',$isi);
	}

	public function filter(){
		$tanggal=$this->input->post('tanggal');

		$isi['content']='rekap/rekap';
		$isi['sidebar']='sidebar/rekap_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pesanan JOIN tb_nota on tb_pesanan.kd_nota=tb_nota.no_nota 
		where tb_nota.tanggal='$tanggal'");
		$this->load->view('home',$isi);

	}

	public function export_excel(){
		$tanggal=$this->input->post('tanggal');

		$data['dt']=$this->db->query("SELECT * from tb_pesanan JOIN tb_nota on tb_pesanan.kd_nota=tb_nota.no_nota 
		where tb_nota.tanggal='$tanggal'")->result();

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$objPHPExcel = new PHPExcel();

		$objPHPExcel->getProperties()->setCreator("Bidang Komersial");
		$objPHPExcel->getProperties()->setLastModifiedBy("Bidang Komersial");
		$objPHPExcel->getProperties()->setTitle("Rekap KPSH Bulog Divre Bengkulu");
		$objPHPExcel->getProperties()->setsubject("");
		$objPHPExcel->getProperties()->setDescription("");

		
		
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A6:A7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B6:B7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C6:C7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D6:D7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E6:E7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F6:F7');
		//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G6:G7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('H6:H7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('I6:I7');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('M6:M7');


		$objPHPExcel->getActiveSheet()->getStyle('A6:M6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A6:M6')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A7:M7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A7:M7')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
		$objPHPExcel->getSheet(0)->getStyle('A6:M6')->getFill()
		->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
		$objPHPExcel->getSheet(0)->getStyle('A6:M6')->getFill()
		->getStartColor()->setRGB('c6e0b3');

		$objPHPExcel->getSheet(0)->getStyle('A7:M7')->getFill()
		->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
		$objPHPExcel->getSheet(0)->getStyle('A7:M7')->getFill()
		->getStartColor()->setRGB('c6e0b3');


		/*$objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(5.71);
		$objPHPExcel->getSheet(0)->getColumnDimension('B')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('I')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('J')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('K')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('L')->setAutoSize(true);
		$objPHPExcel->getSheet(0)->getColumnDimension('M')->setAutoSize(true);*/

		$objPHPExcel->getActiveSheet()->setcellValue('A6', 'NO');
		$objPHPExcel->getActiveSheet()->setcellValue('B6', 'NO DO');
		$objPHPExcel->getActiveSheet()->setcellValue('C6', 'TANGGAL DO');
		$objPHPExcel->getActiveSheet()->setcellValue('D6', 'ASAL');
		$objPHPExcel->getActiveSheet()->setcellValue('E6', 'KONSUMEN');
		$objPHPExcel->getActiveSheet()->setcellValue('F6', 'JENIS KOMODITI');
		$objPHPExcel->getActiveSheet()->setcellValue('G6', 'KUANTUM');
		$objPHPExcel->getActiveSheet()->setcellValue('H6', 'HARGA SATUAN');
		$objPHPExcel->getActiveSheet()->setcellValue('I6', 'JUMLAH');
		$objPHPExcel->getActiveSheet()->setcellValue('J7', 'TUNAI');
		$objPHPExcel->getActiveSheet()->setcellValue('K6', 'PEMBAYARAN');
		$objPHPExcel->getActiveSheet()->setcellValue('K7', 'TRANFER');
		$objPHPExcel->getActiveSheet()->setcellValue('L7', 'BON/COD');
		$objPHPExcel->getActiveSheet()->setcellValue('M6', 'TOTAL');
		$objPHPExcel->getActiveSheet()->setCellValue('F7', 'subjumlah');

		$baris=8;
		$x=1;

		foreach ($data['dt'] as $row) {
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris, $x);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris, $row->tanggal);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris, $row->kd_gdng);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris, $row->nm_mitra);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris, $row->id_barang);
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$baris, $row->kuantum);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$baris, $row->harga);
			$objPHPExcel->getActiveSheet()->setCellValue('I'.$baris, $row->jumlah);
			$objPHPExcel->getActiveSheet()->setCellValue('M'.$baris, $row->jumlah);

			$x++;
			$baris++;
			
		}

		

		$filename="Rekap KPSH Tanggal ". $tanggal.'.xlsx';

		$objPHPExcel->getProperties()->setTitle("Rekap KPSH Bulog Divre Bengkulu");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreedsheet.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
		$writer->save('php://output');

		exit;

		
	}

	public function ubah(){
		
	}
}
