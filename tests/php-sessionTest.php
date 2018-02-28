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
        $this->assertEquals($session->bridge->id(), session_id());
        $session->stop();

        /*
         * Session 2
         */
        $session = new SessionManager($session_method);
        $session->start();
        $this->assertEquals($session->bridge->id(), session_id());
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

    /**
     * @test
     */
    public function check_work_get_function()
    {
        $session_method = new PHP_SESSION_MANAGER();

        /*
         * Session 1
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_1", 1234);
        $this->assertEquals(1234, $session->get("session_1"));
        $session->stop();

        /*
         * Session 2
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_2", "test");
        $this->assertEquals("test", $session->get("session_2"));
        $session->stop();
    }

    /**
     * @test
     */
    public function check_work_unset_function()
    {
        $session_method = new PHP_SESSION_MANAGER();

        /*
         * Session 1
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_1", 1234);
        $session->unset("session_1");
        $this->assertTrue(!isset($_SESSION['session_1']));
        $session->stop();

        /*
         * Session 2
         */
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_2", "test");
        $session->unset("session_2");
        $this->assertTrue(!isset($_SESSION['session_2']));
        $session->stop();
    }

    /**
     * @test
     */
    public function check_work_param_in_session_constructor_function()
    {
        /*
         * Session 1
         */
        $session_method = new PHP_SESSION_MANAGER([
            "name" => "MyCookieName",
            "lifetime" => 5,
            "secure" => true,
            "domain" => "mywebsite.fr"
        ]);
        $session = new SessionManager($session_method);
        $session->start();
        $session->set("session_1", 1234);
        $this->assertEquals(1234, $session->get("session_1"));
        $this->assertTrue(session_get_cookie_params()['secure']);
        $this->assertEquals("MyCookieName", session_name());
        $this->assertEquals("mywebsite.fr", session_get_cookie_params()['domain']);
        $session->stop();

        /*
         * Session 2
         */
        $session_method2 = new PHP_SESSION_MANAGER([
            "name" => "MySecondCookieForMySecondSession",
            "lifetime" => 500,
            "secure" => true,
            "domain" => "myanotherwebsite.fr"
        ]);
        $session2 = new SessionManager($session_method2);
        $session2->start();
        $this->assertEquals("myanotherwebsite.fr", session_get_cookie_params()['domain']);
        $this->assertEquals(500, session_get_cookie_params()['lifetime']);
        $session2->stop();
    }
}