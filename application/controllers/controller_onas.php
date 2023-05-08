<?php

class Controller_onas extends Controller
{
	
	function action_index()
	{
		$this->view->generate('onas_view.php', 'template_view.php');
	}

}