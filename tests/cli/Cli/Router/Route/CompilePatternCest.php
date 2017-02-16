<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Cli\Cli\Router\Route;

use CliTester;

class CompilePatternCest
{
    /**
     * Tests Phalcon\Cli\Router\Route :: compilePattern()
     *
     * @param CliTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cliRouterRouteCompilePattern(CliTester $I)
    {
        $I->wantToTest("Cli\Router\Route - compilePattern()");
        $I->skipTest("Need implementation");
    }
}