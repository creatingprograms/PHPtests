<?php
//This is the executable file 
declare(strict_types=1);
require_once('Cloud.php');
require_once('DB.php');
require_once('File.php');
require_once('Redis.php');
final class Context
{
    private $namingStrategy;
    function __construct(GetSecretKeyInterface $strategy)
    {
        $this->namingStrategy = $strategy;
    }
    final function execute()
    {
        $result = $this->namingStrategy->getSecretKey();
        echo $result;
    }
}
$parameter = 2; // for example
switch ($parameter) {
    case 1:
        $context = new Context(new Cloud());
        break;
    case 2:
        $context = new Context(new DB());
        break;
    case 3:
        $context = new Context(new File());
        break;
    case 4:
        $context = new Context(new Redis());
        break;
    }
$context->execute();
?>