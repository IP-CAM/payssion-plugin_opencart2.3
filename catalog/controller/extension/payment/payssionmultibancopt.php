<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerExtensionPaymentPayssionMultibancopt extends ControllerExtensionPaymentPayssion {
	protected $pm_id = 'multibanco_pt';
}