<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{


    public function index()
    {
        echo "Hello perkenalkan saya Akbar Ibrahim";
    }
    public function hello_2010020007()
    {
        $this->load->model('hello_model');
        $data = $this->hello_model->hello_2010020007();
        echo $data;
    }
    public function hello_view()
    {
        $this->load->view('hello_view');
    }
    public function hello_mvc()
    {
        $this->load->model('hello_model');
        $data['mvc'] = $this->hello_model->hello_mvc();
        $data['nama'] = 'Akbar Ibrahim';
        $data['npm'] = '2010020007';

        $this->load->view('hello_view', $data);
    }
}
