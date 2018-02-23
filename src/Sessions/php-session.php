<?php

namespace Hichxm\SessionManager\Session;
use SessionInterface;

/**
 * Class PHP_SESSION_MANAGER
 */
class PHP_SESSION_MANAGER implements SessionInterface {

    /**
     * SessionInterface constructor.
     */
    public function __construct()
    {
    }

    /**
     * Stop current session.
     * @return void
     */
    public function stop()
    {
        if (!empty(session_id())) {
            session_destroy();
        }
    }

    /**
     * Start session.
     * @return void
     */
    public function start()
    {
        if (empty(session_id())) {
            session_start();
        }
    }

    /**
     * @return string
     */
    public function id()
    {
        return session_id();
    }

    /**
     * Get value of $key
     * @param string $key
     * @return string|array|int|boolean|null
     */
    public function get($key)
    {
        // TODO: Implement get() method.
    }

    /**
     * Set value of $key
     * @param string $key
     * @param string|array|int|boolean $value
     * @return void
     */
    public function set($key, $value)
    {
        // TODO: Implement set() method.
    }

    /**
     * Delete value of $key
     * @param string $key
     * @return void
     */
    public function unset($key)
    {
        // TODO: Implement unset() method.
    }
}