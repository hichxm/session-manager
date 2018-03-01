<?php

namespace Hichxm\SessionManager\Session;

use SessionInterface;

/**
 * Class PHP_SESSION_MANAGER
 */
class PHP_SESSION_MANAGER implements SessionInterface {

    /**
     * SessionInterface constructor.
     * @param array $options
     */
    public function __construct($options = [])
    {
        $default_cookie_option = session_get_cookie_params();
        $default_option = [
            "name" => session_name(),
            "lifetime" => $default_cookie_option['lifetime'],
            "path" => $default_cookie_option['path'],
            "domain" => $default_cookie_option['domain'],
            "secure" => $default_cookie_option['secure'],
            "httponly" => $default_cookie_option['httponly']
        ];
        $options = array_merge($default_option, $options);

        session_name($options['name']);
        session_set_cookie_params(
            $options["lifetime"],
            $options['path'],
            $options['domain'],
            $options["secure"],
            $options['httponly']
        );
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
     * Return current session id.
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
        return $_SESSION[$key] ?? null;
    }

    /**
     * Set value of $key
     * @param string $key
     * @param string|array|int|boolean $value
     * @return void
     */
    public function set($key, $value)
    {
        if (!empty($this->id())) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Delete value of $key
     * @param string $key
     * @return void
     */
    public function unset($key)
    {
        if (!empty($this->id())) {
            unset($_SESSION[$key]);
        }
    }

}