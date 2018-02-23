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
        // TODO: Implement stop() method.
    }

    /**
     * Start session.
     * @return void
     */
    public function start()
    {
        // TODO: Implement stop() method.
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