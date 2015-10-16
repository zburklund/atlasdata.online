<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nofun extends MX_Controller {

	function index() {
		echo '<h1>Woooo!</h1>';
	}

	function sayhello($firstname, $lastname) {
		echo "Hello. How do you do $firstname $lastname?";
	}
}