<?php
namespace Sandbox\OAuth2\Provider\Exception;

class IdentityProviderException extends \Exception
{
    /**
     * @var mixed
     */
    protected $response;

    /**
     * @param string $message
     * @param int $code
     * @param mixed $response The response body
     */
    public function __construct($message, $code, $response)
    {
        $this->response = $response;

        parent::__construct($message, $code);
    }

    /**
     * Returns the exception's response body.
     *
     * @return mixed
     */
    public function getResponseBody()
    {
        return $this->response;
    }
}
