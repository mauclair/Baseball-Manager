<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Page extends Controller_Bm
{
	public function action_index()
	{
		$this->template->content = View::factory('home');	
	}
} 