<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Filepath\Sub_Value_Objects\File\Base_File\Enums;

use JWWS\WCA\Deps\JWWS\WPPF\Common\Security\Security;

// Security::stop_direct_access();

/**
 * File extensions.
 */
enum Ext: string {
    case PHP = 'php';

    case HTML = 'html';

    case JS = 'js';

    case CSS = 'css';
}
