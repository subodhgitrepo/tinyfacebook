<?php

namespace App\Extensions\Facades;

use Illuminate\Support\Facades\Response;

class AjaxResponse extends Response
{
	public static function send($data, $message, $status, $error)
	{
		return parent::json([
			'error' => $error,
			'body' => $data,
			'message' => $message,
			'status' => $status,
		], $status)->setStatusCode($status);
		// exit();
	}
}
