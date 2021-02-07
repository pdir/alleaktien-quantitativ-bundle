<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Pdir\AlleAktienQuantitativBundle\Tests;

use Pdir\AlleAktienQuantitativBundle\PdirAlleAktienQuantitativBundle;
use PHPUnit\Framework\TestCase;

class PdirAlleAktienQuantitativBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new PdirAlleAktienQuantitativBundle();

        $this->assertInstanceOf('Pdir\AlleAktienQuantitativBundle\PdirAlleAktienQuantitativBundle', $bundle);
    }
}
