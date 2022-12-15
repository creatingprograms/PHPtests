<?php
declare(strict_types=1);
require_once('GetSecretKeyInterface.php');
final class DB implements GetSecretKeyInterface
{
    final public function getSecretKey(): string
    {
        return "Storing the key in a DB";
    }
}
?>