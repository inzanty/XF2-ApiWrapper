<?php declare(strict_types=1);

/*
 * This file is part of the XFAW library.
 *
 * (c) Nazar Nosko <inzanty@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XFAW\User;

use XenforoApi;

/**
 * Class Auth
 * @package XFAW\User
 */
class Auth extends XenforoApi
{
    /**
     * @return string
     */
    public function getApiKey()
    {
        return parent::getApiKey();
    }

    /**
     * @return string
     */
    public function getApiUri()
    {
        return parent::getApiUri();
    }
}