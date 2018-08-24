<?php

declare(strict_types = 1);
namespace Xutengx\Exception;

use Exception;

/**
 * 此异常类抛出的异常, 可以将消息展示给用户, 进行友好的响应
 * Class MessageException
 * @package Xutengx\Exception
 */
class MessageException extends Exception {
	public function __construct($message = '', int $code = 500, $previous = null) {
		parent::__construct($message, $code, $previous);
	}
}
