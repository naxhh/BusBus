<?php

/*
 * This file is part of the BusBus project.
 *
 * (c) Ignacio Tolstoy <arkantos798@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nax\BusBus;

interface Handler {
    public function handle(Command $command);
}