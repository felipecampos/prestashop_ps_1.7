<?php

/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
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
 * @category  PaymentModule
 * @package   Module
 * @author    F.C. Sistemas Digitais <camposfelipe025@gmail.com>
 * @copyright 2017 F.C. Sistemas Digitais
 * @license   http://opensource.org/licenses/afl-3.0.php
 *            Academic Free License (AFL 3.0)
 * @link      https://github.com/felipecampos/prestashop_ps_1.7.git
 * International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}


/**
 * Class PS_Pagseguro
 *
 * @category PaymentModule
 * @package  Module
 * @author   F.C. Sistemas Digitais <camposfelipe025@gmail.com>
 * @license  http://opensource.org/licenses/afl-3.0.php
 *           Academic Free License (AFL 3.0)
 * @link     https://github.com/felipecampos/prestashop_ps_1.7.git
 */
class PS_Pagseguro extends PaymentModule {


	 /**
     * This method constructor.
     */
    public function __construct() {

        
		$this->name = 'ps_pagseguro';
		$this->tab = 'payments_gateways';
		$this->version = '1.0.0';
		$this->author = 'F.C. Sistemas Digitais';

		$this->controllers = array('validation');

		$this->currencies = true;
		$this->is_eu_compatible = 1;
		$this->need_instance = 1;

		$this->currencies_mode = 'checkbox';
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('PagSeguro');

		$this->description = $this->l('PagSeguro Payment Module');

		$this->confirmUninstall = $this->l('Are you sure about removing these details?');

		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

    }


    public function install(){
    	return parent::install();
    }


    public function uninstall(){
    	return parent::uninstall();
    }
}