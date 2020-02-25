<?php
namespace Shahidkarimi\Bizsms\Library;

class Bizsms
{
    protected $username;
    protected $pasword;

    protected $masking;

    protected $url = "http://localhost";
    protected $debug = false;

    public function __construct($config)
    {
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->masking = $config['masking'];
        $this->debug = $config['debug'];
    }

    public function debug()
    {
        echo "Username: {$this->username}";
        echo "\nPassword: {$this->password}";
        echo "\nMasking: {$this->masking}";
        echo "\nDebug: {$this->debug}";
    }

    public function send($mobileNumber, $body)
    {
        echo "Sending...";
    }
}
