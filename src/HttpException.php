<?php

declare(strict_types = 1);
namespace Xutengx\Exception;

use Exception;

class HttpException extends Exception {
	public function __construct($message = null, int $code = 400, $previous = null) {
		parent::__construct($message, $code, $previous);
	}

}
