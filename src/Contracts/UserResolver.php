<?php

namespace Ensi\LaravelAuditing\Contracts;

interface UserResolver
{
    /**
     * Resolve the User.
     *
     * @return mixed|null
     */
    public static function resolve();
}
