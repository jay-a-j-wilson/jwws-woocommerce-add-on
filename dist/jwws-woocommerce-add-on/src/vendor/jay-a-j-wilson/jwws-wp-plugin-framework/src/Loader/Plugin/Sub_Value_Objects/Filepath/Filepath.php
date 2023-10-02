<?php
/**
 * @license proprietary?
 *
 * Modified by __root__ on 02-October-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

namespace JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Sub_Value_Objects\Filepath;

use JWWS\WCA\Deps\JWWS\WPPF\Common\Security\Security;
use JWWS\WCA\Deps\JWWS\WPPF\Common\Value_Object\Base_Value_Object\Base_Value_Object;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Sub_Value_Objects\Basename\Basename;
use JWWS\WCA\Deps\JWWS\WPPF\Loader\Plugin\Sub_Value_Objects\Dir\Dir;

// Security::stop_direct_access();

/**
 * Represents a plugin's filepath.
 */
final class Filepath extends Base_Value_Object {
    /**
     * @param string $basename example plugin-folder/plugin-file.php
     */
    public static function of(string $basename): self {
        return new self(
            value: Dir::create() . Basename::of(basename: $basename),
        );
    }
}
