<?php

namespace PayU\Alu;

/**
 * Class ApplePayToken
 * @package PayU\Alu
 */
class ApplePayToken
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
