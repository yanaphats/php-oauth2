<?php
namespace Sandbox\OAuth2\Grant;

class ClientCredentials extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'client_credentials';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [];
    }
}
