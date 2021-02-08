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

namespace Pdir\AlleAktienQuantitativBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @Hook("replaceInsertTags")
 */
class AlleAktienQuantitativInsertTagListener
{
    public const TAG = 'aaq';

    public function __invoke(string $tag)
    {
        $chunks = explode('::', $tag);

        if (self::TAG !== $chunks[0]) {
            return false;
        }

        if (!$chunks[1]) {
            return false;
        }

        if (!$chunks[2]) {
            $chunks[2] = 'QuoteChart';
        }

        $isin = $chunks[1];
        $chart = $chunks[2];

        // render html output
	    $html = <<<HTML
<div class='aaq-source' style='text-align: right;font-size:initial;color:rgb(160, 174, 192);'>
  Quelle: <a style='color: rgb(160, 174, 192); text-decoration: underline;' href='https://www.alleaktien.de/quantitativ/$isin'
    target='_blank' rel='noopener' title='AlleAktien Quantitativ: historische Aktien-Kennzahlen, Aktien finden, Aktienanalysen, Beste Aktien'>
    AlleAktien Quantitativ
  </a>
</div>
<iframe class='aaq-chart aaq-isin-$isin aaq-chart-$chart'
  frameborder='0'
  scrolling='no'
  width='800'
  height='400'
  src='https://www.alleaktien.de/quantitativ/chart-api/$isin/$chart'></iframe>";
HTML;

	    return "<div class='aaq-plugin' style='width:inherit;margin:auto'>" . $html . "</div>";
    }
}
