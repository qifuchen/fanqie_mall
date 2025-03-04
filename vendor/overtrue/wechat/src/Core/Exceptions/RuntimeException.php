<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * RuntimeException.php.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @see      https://github.com/overtrue
 * @see      http://overtrue.me
 */

namespace EasyWeChat\Core\Exceptions;

use EasyWeChat\Core\Exception;
use EasyWeChat\Support\Log;
/**
 * Class RuntimeException.
 */
class RuntimeException extends Exception
{
	public function __construct($msg){
		Log::debug($msg);
		showmessage($msg,'error','#','',false);
	}
}
