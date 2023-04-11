<?php

namespace Tang\App\FirstException;
class FirstException extends \Exception implements \JsonSerializable
{
    public function __construct(
         string $message = "",
         int $code = 0,
         \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function jsonSerialize()
    {
        return [
            'error' => [
                'message' => $this->getMessage(),
                'code' => $this->getCode(),
                'file'=>$this->getFile()
            ],
        ];
    }
}
