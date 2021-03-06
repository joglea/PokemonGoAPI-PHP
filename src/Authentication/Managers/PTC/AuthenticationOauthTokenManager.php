<?php

/**
 * @author DrDelay <info@vi0lation.de>
 */

namespace NicklasW\PkmGoApi\Authentication\Managers\PTC;

use NicklasW\PkmGoApi\Authentication\AccessToken;
use NicklasW\PkmGoApi\Authentication\Factory\Factory;
use NicklasW\PkmGoApi\Authentication\Manager;

class AuthenticationOauthTokenManager extends Manager
{
    /**
     * AuthenticationOauthTokenManager constructor.
     *
     * @param AccessToken $token
     */
    public function __construct(AccessToken $token)
    {
        $this->setAccessToken($token);
    }

    public function getAccessToken()
    {
        $this->dispatchEvent(static::EVENT_ACCESS_TOKEN, $this->accessToken);

        return $this->accessToken;
    }

    public function getIdentifier()
    {
        return Factory::PROVIDER_PTC;
    }
}
