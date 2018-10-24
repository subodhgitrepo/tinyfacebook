<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Extensions\Facades\AjaxResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendSuccess($message, $data, $status)
	{
		return AjaxResponse::send($data, $message, $status, false);
    }
    
    public function sendError($message, $data, $status, $request = false)
	{
		return AjaxResponse::send($data, $message, $status, $request);
	}
}
