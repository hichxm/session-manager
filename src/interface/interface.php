<?php

/**
 * Interface SessionInterface
 */
interface SessionInterface {

    /**
     * SessionInterface constructor.
     */
    public function __construct();

    /**
     * Get value of $key
     * @param string $key
     * @return string|array|int|boolean|null
     */
    public function get($key);

    /**
     * Set value of $key
     * @param string $key
     * @param string|array|int|boolean $value
     * @return void
     */
    public function set($key, $value);

    /**
     * Delete value of $key
     * @param string $key
     * @return void
     */
    public function unset($key);

}