<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Signature\Algorithm;

class ES384 extends ECDSA
{
    /**
     * @return string
     */
    protected function getHashAlgorithm(): string
    {
        return 'sha384';
    }

    /**
     * @return int
     */
    protected function getSignaturePartLength(): int
    {
        return 96;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'ES384';
    }
}
