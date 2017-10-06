{*
* 2017 IQIT-COMMERCE.COM
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement
*
* @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
* @copyright 2017 IQIT-COMMERCE.COM
* @license   Commercial license (You can not resell or redistribute this software.)
*
*}

<div id="iqitpopup">
<div class="iqitpopup-close">
<div class="iqit-close-checkbox">
<span class="custom-checkbox">
    <input  type="checkbox" name="iqitpopup-checkbox" id="iqitpopup-checkbox" />
    <span><i class="fa fa-check checkbox-checked"></i></span>
	<label for="iqitpopup-checkbox">{l s='Do not show again.' mod='iqitpopup'}</label>
</span>

</div>
<div class="iqit-close-popup"><span class="cross" title="{l s='Close window' mod='iqitpopup'}"></span></div>
</div>


<div class="iqitpopup-content">{$txt nofilter}</div>
{if $newsletter}
<div class="iqitpopup-newsletter-form">
	<div class="row">
	<div class="col-xs-12">
	<form action="{$urls.pages.index}" method="post" class="form-inline">
			<div >
				<input class="inputNew form-control grey newsletter-input" type="text" name="email" size="18" placeholder="{l s='Enter your e-mail' mod='iqitpopup'}" value="" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-medium iqit-btn-newsletter">
                    <span>{l s='Subscribe' mod='iqitpopup'}</span>
                </button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
	</div>		</div></div>
	{/if}
</div> <!-- #layer_cart -->
<div id="iqitpopup-overlay"></div>
