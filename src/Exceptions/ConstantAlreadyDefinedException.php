<?php
declare(strict_types=1);

namespace Onepress\WPConfig\Exceptions;

/**
 * Class ConstantAlreadyDefinedException
 * This should be thrown when a user attempts to define() a constant that has already been defined
 * @package Onepress\Wpconfig
 */
class ConstantAlreadyDefinedException extends \RuntimeException
{

}
