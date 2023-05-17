<?php
class advertisements_Controller extends Controller{
    public function index($advertisements = 'advertisements'){
        $advertisements = $this->model($advertisements);
        $this->view('home/advertisementsView', $advertisements->getAlladvertisementsWhithUsers());
    }
}