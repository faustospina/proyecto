<?php
App::uses('AppModel', 'Model');
/**
 * Juez Model
 *
 * @property Audiencia $Audiencia
 * @property Proceso $Proceso
 */
class Juez extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
			'normaltext' => array(
				'rule' => array('custom','/^[[:alpha:]](\s*[[:alpha:]]*)*$/i'),
				'message' => 'El nombre debería contener sólo letras'
				)
		),
		'apellidos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'normaltext' => array(
				'rule' => array('custom','/^[[:alpha:]](\s*[[:alpha:]]*)*$/i'),
				'message' => 'los apellidos debería contener sólo letras'
				)
		),
		'codigoRepresentativo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' =>array(
				'rule' => array('isUnique'),
				'message' => 'ya se encuentra en la base de datos',
				
				),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'solo se aceptan digitos',
				)
		),
		'descripcion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Audiencia' => array(
			'className' => 'Audiencia',
			'foreignKey' => 'audiencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Proceso' => array(
			'className' => 'Proceso',
			'joinTable' => 'juezs_procesos',
			'foreignKey' => 'juez_id',
			'associationForeignKey' => 'proceso_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
