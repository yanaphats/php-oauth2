<?php

namespace Sandbox\OAuth2\OptionProvider;

use Sandbox\OAuth2\Provider\AbstractProvider;
use Sandbox\OAuth2\Tool\QueryBuilderTrait;

/**
 * Provide options for access token
 */
class PostAuthOptionProvider implements OptionProviderInterface
{
    use QueryBuilderTrait;

    /**
     * @inheritdoc
     */
    public function getAccessTokenOptions($method, array $params)
    {
        $options = ['headers' => ['content-type' => 'application/x-www-form-urlencoded']];

        if ($method === AbstractProvider::METHOD_POST) {
            $options['body'] = $this->getAccessTokenBody($params);
        }

        return $options;
    }

    /**
     * Returns the request body for requesting an access token.
     *
     * @param  array $params
     * @return string
     */
    protected function getAccessTokenBody(array $params)
    {
        return $this->buildQueryString($params);
    }
}
