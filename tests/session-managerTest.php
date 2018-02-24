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

    /**
     * @test
     */
    public function check_session_manager_work_with_array_access()
    {
        $session_method = new PHP_SESSION_MANAGER();
        $session = new SessionManager($session_method);
        $session->start();

        $session['username'] = "MySuperUsername";
        $session['age'] = 75;
        $session['info'] = [
            "city" => "Paris",
            "code" => "75000",
            "refcode" => "33"
        ];

        $this->assertEquals("MySuperUsername", $session->get("username"));
        $this->assertEquals("Paris", $session->get("info")['city']);
        $this->assertEquals(75, $session->get("age"));

        $session->stop();

    }

    /**
     * @test
     */
    public function check_session_manager_work_with_array_access_and_unset_method()
    {
        $session_method = new PHP_SESSION_MANAGER();
        $session = new SessionManager($session_method);
        $session->start();

        $session['username'] = "MySuperUsername";
        $session['age'] = 75;
        $session['info'] = [
            "city" => "Paris",
            "code" => "75000",
            "refcode" => "33"
        ];

        $this->assertEquals("MySuperUsername", $session->get("username"));

        unset($session['username']);
        unset($session['info']);

        $this->assertNull($session->get("username"));
        $this->assertNull($session->get("info"));

        $session->stop();

    }

    /**
     * @test
     */
    public function check_session_manager_work_with_array_access_and_exist_method()
    {
        $session_method = new PHP_SESSION_MANAGER();
        $session = new SessionManager($session_method);
        $session->start();

        $session['username'] = "MySuperUsername";
        $session['age'] = 75;
        $session['info'] = [
            "city" => "Paris",
            "code" => "75000",
            "refcode" => "33"
        ];

        $this->assertEquals("MySuperUsername", $session->get("username"));

        $this->assertTrue(isset($session['username']));
        $this->assertTrue(isset($session['age']));

        $session->stop();

    }

}