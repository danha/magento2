<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Magento\User\Test\Block\Backend;

use Mtf\Client\Element\Locator;
use Magento\Backend\Test\Block\Widget\Grid;

/**
 * Class UserGrid
 * Grid on System ->Permissions -> All Users page
 *
 */
class UserGrid extends Grid
{
    /**
     * Link to click on Email cell for user
     *
     * @var string
     */
    protected $editLink = 'td[data-column="email"]';

    /**
     * Filters Name for Permission User Grid
     *
     * @var array
     */
    protected $filters = array(
        'id' => array(
            'selector' => '#permissionsUserGrid_filter_user_id'
        ),
        'user_name' => array(
            'selector' => '#permissionsUserGrid_filter_username'
        ),
        'first_name' => array(
            'selector' => '#permissionsUserGrid_filter_firstname'
        ),
        'last_name' => array(
            'selector' => '#permissionsUserGrid_filter_lastname'
        ),
        'email' => array(
            'selector' => '#permissionsUserGrid_filter_email'
        ),
        'status' => array(
            'selector' => '#permissionsUserGrid_filter_is_active',
            'input' => 'select'
        )
    );

    /**
     * Initialize grid elements
     */
    protected function _init()
    {
        parent::_init();
    }
}
