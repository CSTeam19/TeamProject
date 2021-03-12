<?php
class Products extends CI_Controller{
  public function index(){
      $data['id'] = "001"
      $data['main_content'] = 'products1'
      $this->load->view('layouts/main' ,$data)
  }

}
