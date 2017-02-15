<?php
/**
	* @file
	* Contains \Drupal\my_payroll\Form\EMPForm
*/
namespace Drupal\my_payroll\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
//use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/*
* Provides employee creation form
*/
class EMPForm extends FormBase {
	/*
	* (@inheritdoc)
	*/
	public function getFormId() {
		return 'my_payroll_emp_form';
	}
	
	/*
	* (@inheritdoc)
	*/
	public function buildForm(array $form, FormStateInterface $form_state) {
		/*$node = \Drupal::routeMatch()->getParameter('node');
		$nid = #node->nid->value;*/
		$form['name'] = array(
		'#title' => t('Emp Name'),
		'#type' => 'textfield',
		'#size' => '50',
		'#description' => t('Enter your Full Name here.'),
		'#required'=> TRUE,
		);
		$form['email'] = array(
		'#title' => t('E-mail'),
		'#type' => 'email',
		'#size' => '50',
		'#description' => t('Enter your E-mail here.'),
		'#required'=> TRUE,
		);
		$form['gender'] = array(
		'#title' => t('Gender'),
		'#type' => 'radios',
		'#default_value' => 1,
		'#options' => array('M' => t('Male'), 'F' => t('Female')),
		'#description' => t('Enter your Full Name here.'),
		'#required'=> TRUE,
		);
		$form['dob'] = array(
		'#title' => t('DOB'),
		'#type' => 'date',
		'#attributes' => array('type'=> 'date', 'min'=> '-75 years' ),
		'#date_date_format' => 'm/d/Y',
		'#description' => t('Enter your Date of Birth'),
		'#required'=> TRUE,
		);
		$form['salary'] = array(
		'#title' => t('Salary'),
		'#type' => 'number',
		'#size' => '7',
		'#description' => t('Enter your monthly salary in Dollars $'),
		'#required'=> TRUE,
		);
		$form['submit'] = array(
		'#value' => t('Save'),
		'#type' => 'submit',
		);
		return $form;
	}

	/*
	* (@inheritdoc)
	*/
	public function submitForm(array &$form, FormStateInterface $form_state){
		drupal_set_message(t(' Thanks for the submission.'));
	}
}