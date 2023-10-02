<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Filepath\Sub_Value_Objects\Dir\Base_Dir\Subclasses\Full_Dir;

use JWWS\WCA\Deps\JWWS\WPPF\Common\Security\Security;
use JWWS\WCA\Deps\JWWS\WPPF\Filepath\Sub_Value_Objects\Dir\Base_Dir\Base_Dir;

// Security::stop_direct_access();

/**
 * Represents a the full parent directory.
 */
final class Full_Dir extends Base_Dir {
    protected static function levels(): int {
        return 0;
    }
}
