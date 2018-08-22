<?php

declare(strict_types = 1);
namespace Xutengx\Exception\Http;

use Xutengx\Exception\HttpException;

class GoneHttpException extends HttpException {

	public function __construct(string $message = null, int $code = 410, $previous = null) {
		parent::__construct($message, $code, $previous);
	}

}
