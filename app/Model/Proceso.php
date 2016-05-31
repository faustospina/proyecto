<?php
App::uses('AppModel', 'Model');
/**
 * Proceso Model
 *
 * @property Acusado $Acusado
 * @property Fiscal $Fiscal
 * @property Juez $Juez
 */
class Proceso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombreVariacionDelito';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombreDelito' => array(
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
				'message' => 'el nombre del delito debería contener sólo letras'
				),
		
		),
		'nombreVariacionDelito' => array(
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
				'message' => 'el nombre de la variacion del delito debería contener sólo letras'
				),
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
		'normaltext' => array(
				'rule' => array('custom','/^[[:alpha:]](\s*[[:alpha:]]*)*$/i'),
				'message' => 'la descripcion debería contener sólo letras'
				),
		),
		'numeroRadicado' => array(
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
			  'between' => array(
                'rule' => array('lengthBetween', 21, 21),
                'message' => '21 digitos exactos'
            )
		),
		'numeroProceso' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
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
		),
		'estado' => array(
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
				'message' => 'el estado debería contener sólo letras'
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
		'Acusado' => array(
			'className' => 'Acusado',
			'foreignKey' => 'acusado_id',
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
		'Fiscal' => array(
			'className' => 'Fiscal',
			'joinTable' => 'fiscals_procesos',
			'foreignKey' => 'proceso_id',
			'associationForeignKey' => 'fiscal_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		
		),
		'Juez' => array(
			'className' => 'Juez',
			'joinTable' => 'juezs_procesos',
			'foreignKey' => 'proceso_id',
			'associationForeignKey' => 'juez_id',
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
