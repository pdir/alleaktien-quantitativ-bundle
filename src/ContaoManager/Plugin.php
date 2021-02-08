<?php

declare(strict_types=1);

/*
 * AlleAktien Quantitativ bundle for Contao Open Source CMS
 *
 * Copyright (c) 2021 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-alleaktien-quantitativ-bundle
 * @link       https://pdir.de/docs/de/contao/extensions/alleaktien-quantitativ/
 * @license    @license LGPL-3.0-or-later
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir\AlleAktienQuantitativBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Pdir\AlleAktienQuantitativBundle\PdirAlleAktienQuantitativBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(PdirAlleAktienQuantitativBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
