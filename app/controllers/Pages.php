<?php 
	class Pages extends Controller {
		public function __construct(){
			
		}

		public function index(){
			$data = [
			  	'title' => 'welcome index'
			];

			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'welcome about'
			];

			$this->view('pages/about', $data);
		}
	}