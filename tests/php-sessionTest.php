<?php

use Hichxm\SessionManager\Session\PHP_SESSION_MANAGER;
use Hichxm\SessionManager\SessionManager;

/**
 * Class phpSessionTest
 */
class phpSessionTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     * @throws Exception
     */
    public function test_session_return_info()
    {
        $session_method = new PHP_SESSION_MANAGER();

        /*
         * Session 1
         */
        $session = new SessionManager($session_method);
        $session->start();
        $this->assertEquals($session->session->id(), session_id());
        $session->stop();

        /*
         * Session 2
         */
        $session = new SessionManager($session_method);
        $session->start();
        $this->assertEquals($session->session->id(), session_id());
        $session->stop();

        $this->assertTrue(true);
    }

}