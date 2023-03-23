<?php
//This is the executable file 
declare(strict_types=1);
require_once('Cloud.php');
require_once('DB.php');
require_once('File.php');
require_once('Redis.php');
/**
 * Execution class depending on the context
 */
final class Context
{
     /**
     * @var object
     */
    private object $namingStrategy;
    /**
     * @param SetSecretKeyInterface $strategy
     */
    function __construct(SetSecretKeyInterface $strategy)
    {
        $this->namingStrategy = $strategy;
    }
    /**
     * @return void
     */
    final function execute(): void
    {
        $result = $this->namingStrategy->setSecretKey();
        echo $result;
    }
}
$parameter = 4; // for example
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