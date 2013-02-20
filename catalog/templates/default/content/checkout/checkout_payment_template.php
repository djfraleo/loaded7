<?php
/**  
*  $Id: checkout_payment_template.php v1.0 2013-01-01 datazen $
*
*  LoadedCommerce, Innovative eCommerce Solutions
*  http://www.loadedcommerce.com
*
*  Copyright (c) 2013 Loaded Commerce, LLC
*
*  @author     Loaded Commerce Team
*  @copyright  (c) 2013 Loaded Commerce Team
*  @license    http://loadedcommerce.com/license.html
*/


// cart ID
echo $lC_ShoppingCart->getCartID();

// shipping address
echo "<pre>";
print_r($lC_ShoppingCart->getShippingAddress());
echo "</pre>";

// grand total
echo $lC_Currencies->format($lC_ShoppingCart->getTotal());

?>
<!--content/checkout/checkout_payment_template.php start-->
<div id="checkout_payment_template_details" class="full_page">
[[FORM INSERT]]
</div>
<div style="clear:both;"></div>
<!--content/checkout/checkout_payment_template.php end-->