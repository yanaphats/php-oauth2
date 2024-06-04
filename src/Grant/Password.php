<?php
namespace Sandbox\OAuth2\Grant;

class Password extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'password';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'username',
            'password',
        ];
    }
}
