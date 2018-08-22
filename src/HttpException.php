<?php

declare(strict_types = 1);
namespace Xutengx\Exception;

use Exception;
use Xutengx\Core\Response;

class HttpException extends Exception {
	public function __construct($message = null, int $code = 400, $previous = null) {
		$msg = $message ?? obj(Response::class)->getMessageByHttpCode($code);
		parent::__construct($msg, $code, $previous);
	}

}
