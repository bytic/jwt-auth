<?php

namespace ByTIC\AuthJWT\Exception;

/**
 * Class JWTDecodeFailureException
 * @package ByTIC\AuthJWT\Exception
 */
class JWTDecodeFailureException extends JWTFailureException
{
    const INVALID_TOKEN = 'invalid_token';

    const UNVERIFIED_TOKEN = 'unverified_token';

    const EXPIRED_TOKEN = 'expired_token';
}
