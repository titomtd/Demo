<?php

/*
 * This file is part of the Monofony demo.
 *
 * (c) Monofony
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Command\Helper;

use App\Installer\Checker\CommandDirectoryChecker;
use Symfony\Component\Console\Output\OutputInterface;

class DirectoryChecker
{
    /** @var CommandDirectoryChecker */
    private $commandDirectoryChecker;

    public function __construct(CommandDirectoryChecker $commandDirectoryChecker)
    {
        $this->commandDirectoryChecker = $commandDirectoryChecker;
    }

    public function ensureDirectoryExistsAndIsWritable(string $directory, OutputInterface $output, string $commandName): void
    {
        $checker = $this->commandDirectoryChecker;
        $checker->setCommandName($commandName);

        $checker->ensureDirectoryExists($directory, $output);
        $checker->ensureDirectoryIsWritable($directory, $output);
    }
}
