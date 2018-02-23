<?php


namespace Hichxm\SessionManager;
use SessionInterface;


/**
 * Class Session
 * @package Hichxm
 */
class SessionManager
{
    public $session;

    /**
     * SessionManager constructor.
     * @param SessionInterface $SessionInterface
     */
    public function __construct(SessionInterface $SessionInterface){
        $this->session = $SessionInterface;
    }

    /**
     * Stop current session.
     * @return void
     */
    public function stop()
    {
        $this->session->stop();
    }

    /**
     * Start session.
     * @return void
     */
    public function start()
    {
        $this->session->start();
    }

    /**
     * Get value of $key
     * @param string $key
     * @return string|array|int|boolean|null
     */
    public function get($key)
    {
        return $this->session->get($key);
    }

    /**
     * Set value of $key
     * @param string $key
     * @param string|array|int|boolean $value
     * @return void
     */
    public function set($key, $value)
    {
        $this->session->set($key, $value);
    }

    /**
     * Delete value of $key
     * @param string $key
     * @return void
     */
    public function unset($key)
    {
        $this->session->unset($key);
    }
}