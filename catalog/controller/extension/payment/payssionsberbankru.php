<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerExtensionPaymentPayssionSberbankru extends ControllerExtensionPaymentPayssion {
	protected $pm_id = 'sberbank_ru';
}