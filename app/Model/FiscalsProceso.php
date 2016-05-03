<?php
App::uses('AppModel', 'Model');
/**
 * FiscalsProceso Model
 *
 * @property Proceso $Proceso
 * @property Fiscal $Fiscal
 */
class FiscalsProceso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fiscal_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Proceso' => array(
			'className' => 'Proceso',
			'foreignKey' => 'proceso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fiscal' => array(
			'className' => 'Fiscal',
			'foreignKey' => 'fiscal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
