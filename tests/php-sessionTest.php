<?php

use Hichxm\SessionManager\Session\PHP_SESSION_MANAGER;
use Hichxm\SessionManager\SessionManager;

/**
 * Class phpSessionTest
 */
class phpSessionTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
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

    /**
     * @test
     */
    public function check_work_set_function()
    {
        $session_method = new PHP_SESSION_MANAGER();

        /*
         * Session 1
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_1", 1234);
        $this->assertEquals(1234, $_SESSION['session_1']);
        $session->stop();

        /*
         * Session 2
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_2", "test");
        $this->assertEquals("test", $_SESSION['session_2']);
        $session->stop();
    }
}