<?php

interface logger {
    public function log(string $msg);
}

class Application {
    private $logger;

    public function getLogger(): Logger {
        return $this->logger;
    }

    public function setLogger(Logger $logger) : self {
        $this->logger = $logger;

        return $this;
    }
}

$app = new Application();
$app->setLogger( new class implements Logger {

    public function log(string $msg)
    {
        echo "$msg\n";
    }
});

var_dump($app->getLogger());