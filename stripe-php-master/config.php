<?php
require('stripe-php-master/init.php');
$publishableKey = "pk_test_51Kw1W0SBSdU0kZPOZ8F5lcQTTjw4iTIapMqt10DwY0PXmUp4yhjl2pftNnOMbAkcyelhkIz0I55bOKPr7ixkX1Zz00z4Fk07Gy";
$secretKey = "sk_test_51Kw1W0SBSdU0kZPOiCn7LvRPhSCl8YVmop5WnUhA55miYXd3BcwFSCt9E06SjQVKz1p1u8cP3tC5nRNc8PgTRLqh00TGNLmuJX";
\Stripe\Stripe::setApiKey($secretKey);

?>