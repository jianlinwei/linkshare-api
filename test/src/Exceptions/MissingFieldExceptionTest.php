<?php

namespace Linkshare\Test\Exceptions;

use Linkshare\Exceptions\MissingFieldException;
use PHPUnit_Framework_TestCase;

class MissingFieldExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testCreateNewExceptionWithEmptyField()
    {
        $exception = new MissingFieldException('');
        $this->assertEquals(MissingFieldException::MISSING_FIELDS.' ', $exception->getMessage());
    }
}
