<?php

declare(strict_types = 1);
namespace Xutengx\Exception\Http;

use Xutengx\Exception\HttpException;

class UnauthorizedHttpException extends HttpException {

	public function __construct(string $message = null, int $code = 401, $previous = null) {
		parent::__construct($message, $code, $previous);
	}

}
