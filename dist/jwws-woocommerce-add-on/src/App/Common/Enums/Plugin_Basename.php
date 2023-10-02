<?php declare(strict_types=1);

namespace JWWS\WCA\App\Common\Enums;

enum Plugin_Basename: string {
    case WOOCOMMERCE = 'woocommerce/woocommerce.php';
    case YITH_COST_OF_GOODS = 'yith-cost-of-goods-for-woocommerce-premium/init.php';
}
