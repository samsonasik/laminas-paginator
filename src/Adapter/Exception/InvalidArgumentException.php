<?php

/**
 * @see       https://github.com/laminas/laminas-paginator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-paginator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-paginator/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Paginator\Adapter\Exception;

use Laminas\Paginator\Exception;

/**
 * @category   Laminas
 * @package    Laminas\Paginator\Adapter
 * @subpackage Exception
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements
    ExceptionInterface
{}
