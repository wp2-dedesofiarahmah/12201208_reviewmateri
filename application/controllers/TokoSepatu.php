<?php
class TokoSepatu extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('M_TokoSepatu');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->load->view('input_TokoSepatu');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli','required|min_length[5] |max_length[50]');
        $this->form_validation->set_rules('nohp', 'Nomor Hp','required|min_length[3]');
        if ($this->form_validation->run() != true){
            $this->load->view('input_TokoSepatu');
        }else{

        $data = [
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->M_TokoSepatu->proses($this->input->post('merk'))
        ];

        $this->load->view('output_TokoSepatu', $data);
        }
    }
}