<?php
namespace Sandbox\OAuth2\Grant;

class RefreshToken extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'refresh_token';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'refresh_token',
        ];
    }
}
