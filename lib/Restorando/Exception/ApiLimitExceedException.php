<?php

namespace Restorando\Exception;

/**
 * ApiLimitExceedException
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class ApiLimitExceedException extends RuntimeException
{
    public function __construct($limit = 5000, $code = 0, $previous = null)
    {
        parent::__construct('You have reached Restorando request limit! Actual limit is: '. $limit, $code, $previous);
    }
}
