<?php

declare(strict_types = 1);
namespace Xutengx\Exception\Http;

use Xutengx\Exception\HttpException;

class ServerErrorHttpException extends HttpException {

	public function __construct(string $message = null, int $code = 500, $previous = null) {
		parent::__construct($message, $code, $previous);
	}

}
