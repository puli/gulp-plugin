<?php

/*
 * This file is part of the puli/gulp-plugin package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Puli\GulpPlugin;

use Puli\Manager\Api\Event\PuliEvents;
use Puli\Manager\Api\Puli;
use Puli\Manager\Api\PuliPlugin;

/**
 * Integrates Puli with the Gulp frontend workflow tool.
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class GulpPlugin implements PuliPlugin
{
    /**
     * {@inheritdoc}
     */
    public function activate(Puli $puli)
    {
        $dispatcher = $puli->getEventDispatcher();

        // Add event listeners that generate the JSON file here
        $dispatcher->addListener(PuliEvents::XXX, array($this, 'handleXxx'));
    }
}
