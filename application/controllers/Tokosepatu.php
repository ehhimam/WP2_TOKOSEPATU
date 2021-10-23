<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tokosepatu extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-from-tokosepatu');
    }

    public function save()
    {
        $data['nama'] = $this->input->post('nama');
        $data['nohp'] = $this->input->post('nohp');
        $data['merek'] = $this->input->post('merek');
        $data['size'] = $this->input->post('size');

        if ($this->input->post('merek') == 'Nike') {
            $data['harga'] = 375000;
        } elseif ($this->input->post('merek') == 'Adidas') {
            $data['harga'] = 300000;
        } elseif ($this->input->post('merek') == 'Kickers') {
            $data['harga'] = 250000;
        } elseif ($this->input->post('merek') == 'Eiger') {
            $data['harga'] = 275000;
        } elseif ($this->input->post('merek') == 'Bucherri') {
            $data['harga'] = 400000;
        }

        $this->load->view('view-data-tokosepatu', $data);
    }
}
