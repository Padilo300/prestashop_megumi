<?php

/**
 * @since 1.5.0
 */
class RbsPaymentValidationModuleFrontController extends ModuleFrontController
{
	/** @var Rbspayment */
	public $module;
	/**
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
		$cart = $this->context->cart;
		if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active)
			Tools::redirect('index.php?controller=order&step=1');

		// Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
		$authorized = false;
		foreach (Module::getPaymentModules() as $module)
			if ($module['name'] == 'rbspayment')
			{
				$authorized = true;
				break;
			}
		if (!$authorized)
			die($this->module->l('This payment method is not available.', 'validation'));

		$customer = new Customer($cart->id_customer);
		if (!Validate::isLoadedObject($customer))
			Tools::redirect('index.php?controller=order&step=1');

		$currency = $this->context->currency;
		$total = (float)$cart->getOrderTotal(true, Cart::BOTH);
		$this->module->validateOrder($cart->id,
			Configuration::get('PS_RBS_STATE_DEFAULT'),
			$total, $this->module->displayName,
			null,
			null,
			(int)$currency->id, false, $customer->secure_key);

		Tools::redirect($this->module->getRedirectLink());
	}
}
