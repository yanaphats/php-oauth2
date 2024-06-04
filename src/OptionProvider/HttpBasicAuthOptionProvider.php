<?php
namespace Sandbox\OAuth2\OptionProvider;

use InvalidArgumentException;

class HttpBasicAuthOptionProvider extends PostAuthOptionProvider
{
    /**
     * @inheritdoc
     */
    public function getAccessTokenOptions($method, array $params)
    {
        if (empty($params['client_id']) || empty($params['client_secret'])) {
            throw new InvalidArgumentException('clientId and clientSecret are required for http basic auth');
        }

        $encodedCredentials = base64_encode(sprintf('%s:%s', $params['client_id'], $params['client_secret']));
        unset($params['client_id'], $params['client_secret']);

        $options = parent::getAccessTokenOptions($method, $params);
        $options['headers']['Authorization'] = 'Basic ' . $encodedCredentials;

        return $options;
    }
}
