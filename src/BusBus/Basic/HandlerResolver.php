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

use Nax\BusBus\HandlerResolver as Resolver;
use Nax\BusBus\Command;

class HandlerResolver implements Resolver {
    public function getHandler(Command $command) {
        return str_replace('Command', 'Handler', get_class($command));
    }
}