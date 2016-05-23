<?php

namespace App\Http;


class Flash {

	public function create($title, $message, $state, $type = 'flash_message')
	{

		session()->flash($type,[
				'title' => $title,
				'message' => $message,
				'state' => $state,
			]);

	}

	public function success($title, $message)
	{
		return $this->create($title, $message, 'success');
	}

	public function info($title, $message)
	{
		return $this->create($title, $message, 'info');
	}

	public function error($title, $message)
	{
		return $this->create($title, $message, 'error');
	}

	public function persistent($title, $message, $state = 'success')
	{
		return $this->create($title, $message, $state, 'flash_message_persistent');
	}


}