<?php

use Hichxm\SessionManager\SessionManager;
use PHPUnit\Framework\TestCase;

/**
 * Class sessionMangerTest
 */
class SessionManagerTest extends TestCase
{

    /**
     * @test
     */
    public function check_namespace_work()
    {
        $Session = new SessionManager();

        $this->assertTrue(true);
    }

}