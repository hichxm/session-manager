<?php

use Hichxm\SessionManager\Session\PHP_SESSION_MANAGER;
use Hichxm\SessionManager\SessionManager;

class stupidTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     * @throws Exception
     */
    public function test_start_return_info()
    {
        $session_method = new PHP_SESSION_MANAGER();

        /*
         * Session 1
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->stop();

        /*
         * Session 2
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->stop();

        $this->assertTrue(true);
    }

}