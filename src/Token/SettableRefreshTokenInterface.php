<?php
namespace Sandbox\OAuth2\Token;

interface SettableRefreshTokenInterface
{
    /**
     * Sets or replaces the refresh token with the provided refresh token.
     *
     * @param string $refreshToken
     * @return void
     */
    public function setRefreshToken($refreshToken);
}
