<?php

/**
 * This file is part of Collision.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\Collision\Contracts;

use Whoops\Exception\Inspector;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This is the Collision writer interface.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
interface Writer
{
    /**
     * Writes the details of the exception on the console.
     *
     * @param \Whoops\Exception\Inspector $inspector
     */
    public function write(Inspector $inspector): void;

    /**
     * Sets the output.
     *
     * @param  \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return \NunoMaduro\Collision\Contracts\Writer
     */
    public function setOutput(OutputInterface $output): Writer;
}
