<?php

use Hichxm\SessionManager\Session\PHP_SESSION_MANAGER;
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
        $session_method = new PHP_SESSION_MANAGER();
        $session_define = new SessionManager($session_method);

        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function check_sessionInterface_work_with_SessionManager()
    {
        $session_method = new PHP_SESSION_MANAGER();
        $session_define = new SessionManager($session_method);

        $this->assertTrue(true);
    }

}