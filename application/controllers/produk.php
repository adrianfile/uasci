<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_produk');
    }

    public function index(){

        $data['judul']="Tampil Data yang ada";
        $data['tampil']=$this->m_produk->tampil()->result();
        $this->load->view('produk/index', $data, FALSE);
    }

    public function input(){
        $this->load->view('produk/input');

    }

    public function save(){
        $id=$this->input->post('id');
        $kode_produk=$this->input->post('kode_produk');
        $nama_produk=$this->input->post('nama_produk');
        $harga=$this->input->post('harga');
        $stok=$this->input->post('stok');

        $data=array(
            'id'=>$id,
            'kode_produk'=>$kode_produk,
            'nama_produk'=>$nama_produk,
            'harga'=>$harga,
            'stok' =>$stok
        );

        $this->m_produk->save($data);
        redirect('produk','refresh');
    }

    public function edit(){
        $id=$this->uri->segment(3);
        $data['edit']=$this->m_produk->getid($id)->row_array();
        $this->load->view('produk/edit', $data, FALSE);
    }

    public function update(){
        $id=$this->input->post('id');
        $kode_produk=$this->input->post('kode_produk');

        $data=array(
            'kode_produk'=>$kode_produk 
        );

        $this->m_produk->update($data,$id);
        redirect('produk','refresh');

    }

    public function delete(){
        $id=$this->uri->segment(3);
        $this->db->where('id',$id);
        $this->db->delete('produk');
        redirect('produk','refresh');
    }
}