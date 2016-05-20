<?php namespace Dtkahl\PHPMailerHelper;

class PHPMailerHelper
{

    private $_mailer;

    /**
     * PHPMailerHelper constructor.
     */
    public function __construct()
    {
        $this->_mailer = new \PHPMailer();
    }

    /**
     * @param \Closure $call
     * @return $this
     */
    public function configure(\Closure $call)
    {
        $call($this->_mailer);
        return $this;
    }

    /**
     * @return \PHPMailer
     */
    public function newMail()
    {
        return clone $this->_mailer;
    }

}