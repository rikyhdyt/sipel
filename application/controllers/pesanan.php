<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pesanan/form_pesan';
		$isi['sidebar']='sidebar/pesanan_aktif';
		$isi['dt']=$this->Mpesanan->pilihop();
		$isi['data1']=$this->Mpesanan->pilihsaluran();
		$isi['data2']=$this->Mpesanan->pilihgudang();
		$isi['data3']=$this->Mpesanan->pilihkomoditi();
		$isi['data4']=$this->Mpesanan->pilihharga();
		$isi['data']=$this->Mpesanan->getnota();
		$this->load->view('home',$isi);
	}

	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->Mpesanan->pilihmitra($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nm_mitra;
                echo json_encode($arr_result);
            }
        }
    }

	public function tambahnota(){

		$this->form_validation->set_rules('no_nota','NOTA','required|trim|is_unique[tb_nota.no_nota]',[
			'required'=>'No. Nota harus diisi',
			'is_unique'=> 'No. Nota telah digunakan'
			]);

			$this->form_validation->set_rules('plh_operator','OPERATOR','required|trim',[
			'required'=>'Nama kasir harus diisi',
			]);

			$this->form_validation->set_rules('plh_gudang','GUDANG','required|trim',[
			'required'=>'Tempat pengambilan harus diisi',
			]);

			$this->form_validation->set_rules('plh_saluran','SALURAN','required|trim',[
			'required'=>'Jenis saluran harus diisi',
			]);

			$this->form_validation->set_rules('mitra','MITRA','required|trim',[
			'required'=>'Nama mitra harus diisi',
			]);

		if ($this->form_validation->run()==false){
			$this->Msecurity->getsecurity();
			$isi['content']='pesanan/form_pesan';
			$isi['sidebar']='sidebar/pesanan_aktif';
			$isi['dt']=$this->Mpesanan->pilihop();
			$isi['data1']=$this->Mpesanan->pilihsaluran();
			$isi['data2']=$this->Mpesanan->pilihgudang();
			$isi['data3']=$this->Mpesanan->pilihkomoditi();
			$isi['data4']=$this->Mpesanan->pilihharga();
			$isi['data']=$this->Mpesanan->getnota();
			$this->load->view('home',$isi);
		}
		else{
		$no_nota=$this->input->post('no_nota');
		$tanggal=date('Y-m-d');
		$id_operator=$this->input->post('plh_operator');
		$id_saluran=$this->input->post('plh_saluran');
		$nm_mitra=$this->input->post('mitra');
		$kd_gedung=$this->input->post('plh_gudang');
		
		$data= array(
			'no_nota'=>$no_nota,
			'tanggal'=>$tanggal,
			'id_operator'=>$id_operator,
			'id_saluran'=>$id_saluran,
			'nm_mitra'=>$nm_mitra,
			'kd_gdng'=>$kd_gedung
			);
		$this->Mpesanan->add_nota($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-info alert-success" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 <i class="fa fa-info-circle"></i> Data nota berhasil ditambahkan
		 </div>');
		redirect('pesanan');}

	}
	public function add_to_cart(){
		
		$data=array(
			'id'=>$this->input->post('plh_komoditi'),
			'kd_nota'=>$this->input->post('no_nota'),
			'name'=>$this->input->post('plh_komoditi'),
			'qty'=>$this->input->post('kuantum'),
			'price'=>$this->input->post('plh_harga')
		);

		$this->cart->insert($data);
		$this->session->set_flashdata('info', '<div class="alert alert-info alert-success" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 <i class="fa fa-info-circle"></i> Komoditi berhasil ditambahkan
		 </div>');
		redirect('pesanan');
		
	}

	public function hapus($rowid)
	{
			$this->cart->remove($rowid);
		    $this->session->set_flashdata('info', '<div class="alert alert-info alert-danger" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 <i class="fa fa-info-circle"></i> Komoditi berhasil dihapus
		 </div>');
            redirect('pesanan');     
}
	public function simpan_pesanan(){
		
		$total=$this->input->post('total');

		foreach ($this->cart->contents() as $item) {
			$kd_nota=$item['kd_nota'];
			$kuantum=$item['qty'];
			$harga=$item['price'];
			$id_barang=$item['name'];
			$jumlah=$item['subtotal'];
			
			
			$data=array(
				'kd_nota' =>$kd_nota,
				'kuantum' =>$kuantum,
				'harga' =>$harga,
				'id_barang' =>$id_barang,
				'jumlah' =>$jumlah	
			);

		$this->Mpesanan->simpan_pesanan($total, $data, $kd_nota);
		$this->cart->destroy(); }

		$isi['cetak']=$this->db->query("select * from tb_nota join tb_saluran on tb_nota.id_saluran=tb_saluran.id_saluran 
			join tb_gudang on tb_nota.kd_gdng=tb_gudang.id_gdng 
			join tb_operator on tb_nota.id_operator=tb_operator.id_op
			where no_nota='$kd_nota'")->row();
		$isi['komoditi']=$this->db->query("select * from tb_pesanan join tb_komoditi on tb_pesanan.id_barang=tb_komoditi.id_komoditi where kd_nota='$kd_nota'");
		$this->load->view('pesanan/cetak_nota',$isi);
	}
	public function ubah($rowid)
  {
  	$data = array('rowid' => $rowid,
                   'qty' => $this->input->post('qty')           
               );
  	$this->cart->update($data);
  	$this->session->set_flashdata('notif','Kuantum komoditi telah diubah');
  	 redirect('pesanan');
  }
	
}
