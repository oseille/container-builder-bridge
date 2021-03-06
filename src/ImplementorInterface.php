<?php

declare(strict_types=1);

/**
 * @package Oseille\ContainerBuilderBridge
 * @link    https://github.com/oseille/container-builder-bridge for the canonical source repository
 * @license https://github.com/oseille/container-builder-bridge/blob/master/LICENSE MIT
 */

namespace Oseille\ContainerBuilderBridge;

use Psr\Container\ContainerInterface;

/**
 *The interface for all PSR-11 container builder implementation classes.
 */
interface ImplementorInterface
{
    /**
     * Builds and returns the PSR-11 container.
     *
     * @return \Psr\Container\ContainerInterface
     */
    public function build(): ContainerInterface;

    /**
     * Add definitions to the container.
     *
     * @param array<int,array> $definitions,... The definitions.
     * @throws \InvalidArgumentException if $id is not valid
     * @return \Oseille\ContainerBuilderBridge\ImplementorInterface
     */
    public function addDefinitions(...$definitions): ImplementorInterface;
}
