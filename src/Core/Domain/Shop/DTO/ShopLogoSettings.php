<?php
/**
 * 2007-2019 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Core\Domain\Shop\DTO;

/**
 * Holds default settings for shop logos.
 */
class ShopLogoSettings
{
    const HEADER_LOGO_FILE_NAME = 'PS_LOGO';

    const MAIL_LOGO_FILE_NAME = 'PS_LOGO_MAIL';

    const INVOICE_LOGO_FILE_NAME = 'PS_LOGO_INVOICE';

    const FAVICON_FILE_NAME = 'PS_FAVICON';

    /**
     * @var array - a list of available image mime types
     */
    const AVAILABLE_LOGO_IMAGE_EXTENSIONS = ['gif', 'jpg', 'jpeg', 'jpe', 'png'];

    /**
     * @var string - a type used for icon images for shop logo
     */
    const AVAILABLE_ICON_IMAGE_EXTENSION = 'ico';

    /**
     * Gets the list of available extensions with dot attached to the front of the extension
     *
     * @return array
     */
    public function getLogoImageExtensionsWithDot()
    {
        $mimeTypes = [];
        foreach (self::AVAILABLE_LOGO_IMAGE_EXTENSIONS as $imageExtension) {
            $mimeTypes[] = '.' . $imageExtension;
        }

        return $mimeTypes;
    }

    /**
     * Gets icon image extension with dot attached to the front.
     *
     * @return string
     */
    public function getIconImageExtensionWithDot()
    {
        return '.' . self::AVAILABLE_ICON_IMAGE_EXTENSION;
    }
}