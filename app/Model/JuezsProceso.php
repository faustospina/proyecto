<?php
App::uses('AppModel', 'Model');
/**
 * JuezsProceso Model
 *
 * @property Proceso $Proceso
 * @property Juez $Juez
 */
class JuezsProceso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'juez_id';


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
		'Juez' => array(
			'className' => 'Juez',
			'foreignKey' => 'juez_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
