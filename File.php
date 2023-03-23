<?php
declare(strict_types=1);
require_once('SetSecretKeyInterface.php');
/**
 * Class for storing the key in a file
 */
final class File implements SetSecretKeyInterface
{
 /**
  * @return string
  */
    final public function setSecretKey(): string
    {
        return "Storing the key in a file";
    }
}
?>