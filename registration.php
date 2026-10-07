<?php
/**
 * Copyright © Labidi. All rights reserved.
 * See LICENSE for license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Labidi_CommerceAgent',
    __DIR__
);
