<?php

/*
 * This file is part of the BusBus project.
 *
 * (c) Ignacio Tolstoy <arkantos798@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nax\BusBus\Basic;

use Nax\BusBus\MessageBus;
use Nax\BusBus\HandlerResolver;
use Nax\BusBus\DependencyInjector;
use Nax\BusBus\Command;

/**
 * A basic command bus. Just executes a handler for the given command.
 */
class CommandBus implements MessageBus {
    private $container;
    private $handler_resolver;

    public function __construct(DependencyInjector $container, HandlerResolver $handler_resolver) {
        $this->container        = $container;
        $this->handler_resolver = $handler_resolver;
    }

    public function execute(Command $command) {
        return $this->getHandler($command)->handle($command);
    }

    private function getHandler(Command $command) {
        return $this->container->get($this->handler_resolver->getHandler($command));
    }
}