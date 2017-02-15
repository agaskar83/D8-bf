<?php
/*
	* @file
	* Contains \Drupal\my_payroll\Controller\EmpController
*/
	namespace Drupal\my_payroll\Controller;
	use Drupal\Core\Controller\ControllerBase;
	class EmpController extends ControllerBase {
		public function content() {
			return array(
				'#type'=> 'markup',
				'#markup'=> t('This is Employee Payroll Dashboard'),
			);
		}
	}