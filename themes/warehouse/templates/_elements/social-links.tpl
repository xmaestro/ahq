{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{block name='social_links'}
<ul class="social-links {if isset($class)}{$class}{/if}">
  {if isset($iqitTheme.sm_facebook) == 1 && $iqitTheme.sm_facebook != ''}<li class="facebook"><a href="{$iqitTheme.sm_facebook}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>{/if}
  {if isset($iqitTheme.sm_twitter) == 1 && $iqitTheme.sm_twitter != ''}<li class="twitter"><a href="{$iqitTheme.sm_twitter}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>{/if}
  {if isset($iqitTheme.sm_instagram) == 1 && $iqitTheme.sm_instagram != ''}<li class="instagram"><a href="{$iqitTheme.sm_instagram}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>{/if}
  {if isset($iqitTheme.sm_google) == 1 && $iqitTheme.sm_google != ''}<li class="google"><a href="{$iqitTheme.sm_google}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>{/if}
  {if isset($iqitTheme.sm_pinterest) == 1 && $iqitTheme.sm_pinterest != ''}<li class="pinterest"><a href="{$iqitTheme.sm_pinterest}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>{/if}
  {if isset($iqitTheme.sm_youtube) == 1 && $iqitTheme.sm_youtube != ''}<li class="youtube"><a href="{$iqitTheme.sm_youtube}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>{/if}
  {if isset($iqitTheme.sm_vimeo) == 1 && $iqitTheme.sm_vimeo != ''}<li class="vimeo"><a href="{$iqitTheme.sm_vimeo}"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>{/if}
</ul>
{/block}
