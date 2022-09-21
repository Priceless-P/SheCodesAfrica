<?php

class Chats extends Controller
{
    	public function __construct(){
		$this->homeModel = $this->model('HomeModel');

	}
	public function index(){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		}
		else {
		$this->view('users/chats');
		}
	}
}