<?php

declare(strict_types=1);

/*
 * This file is part of the "feed_generator" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\FeedGenerator\Contract;

use Brotkrueml\FeedGenerator\Format\TextFormat;

/**
 * @api
 */
interface TextInterface
{
    public function getText(): string;

    public function getFormat(): TextFormat;
}
