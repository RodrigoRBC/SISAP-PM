<?php
App::uses('AppController', 'Controller');
/**
 * Arbpeoplepublics Controller
 *
 * @property Arbpeoplepublic $Arbpeoplepublic
 * @property PaginatorComponent $Paginator
 */
class ArbpeoplepublicsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $helpers = array('PDF');

/**
 * index method
 *
 * @return void
 */
	public function index($paginador=null) {

		$this->Arbpeoplepublic->recursive = 0;
		$this->set('arbpeoplepublics', $this->Paginator->paginate());

		if(!empty($this->request->params['named']['page'])){
			$this->Session->write('Arbpeoplepublic.page',$this->request->params['named']['page']);
			$this->request->params['named']['page'] = $this->Session->read('Arbpeoplepublic.page');
		}

		$this->set('paginador',$paginador);

		$elementos = array(
			'Arbpeoplepublic.firstname'=>__('NOMBRES', true),
			'Arbpeoplepublic.appaterno'=>__('APELLIDO PATERNO', true),
			'Arbpeoplepublic.apmaterno'=>__('APELLIDO MATERNO', true)
		);

		$this->set('elementos',$elementos);
		if(!empty($this->params['named']['valor']) || !empty($this->params['named']['desactivo']))
		{
			$this->request->data['Buscar']['buscador'] = $this->params['named']['buscador'];
			$this->request->data['Buscar']['valor'] = $this->params['named']['valor'];
			$this->request->data['Buscar']['desactivo'] = $this->params['named']['desactivo'];
		}
		if(empty($this->request->data['Buscar']['buscador']))
			$this->request->data['Buscar']['valor'] = null;

		$valorDeBusqueda = isset($this->request->data['Buscar']['valor'])?trim($this->request->data['Buscar']['valor']):null;
		$conditions = !empty($valorDeBusqueda)?
						array($this->request->data['Buscar']['buscador'].' LIKE'=>'%'.trim($this->request->data['Buscar']['valor']).'%'):
						array();

		$conditionsActivos = (!empty($this->request->data['Buscar']['desactivo']) == 1) ?
								array('Arbpeoplepublic.status'=>'DE') :
								array('Arbpeoplepublic.status'=>'AC');

		$conditions = $conditions + $conditionsActivos;

		$this->paginate = array('limit' => 10,
								'page' => 1,
								'order' => array ('Arbpeoplepublic.creationdate' => 'asc'),
								'conditions' => $conditions,
								'recursive'=>1
								);

		$arbpeoplepublics=$this->paginate('Arbpeoplepublic');
		$this->set(compact('arbpeoplepublics'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Arbpeoplepublic->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepublic'));
		}
		$options = array('conditions' => array('Arbpeoplepublic.' . $this->Arbpeoplepublic->primaryKey => $id));
		$this->set('arbpeoplepublic', $this->Arbpeoplepublic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Arbpeoplepublic->create();
			if ($this->Arbpeoplepublic->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepublic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepublic could not be saved. Please, try again.'));
			}
		}
		$arbubigeos = $this->Arbpeoplepublic->Arbubigeo->find('list');
		$this->set(compact('arbubigeos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Arbpeoplepublic->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepublic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Arbpeoplepublic->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepublic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepublic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Arbpeoplepublic.' . $this->Arbpeoplepublic->primaryKey => $id));
			$this->request->data = $this->Arbpeoplepublic->find('first', $options);
		}
		$arbubigeos = $this->Arbpeoplepublic->Arbubigeo->find('list');
		$this->set(compact('arbubigeos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Arbpeoplepublic->id = $id;
		if (!$this->Arbpeoplepublic->exists()) {
			throw new NotFoundException(__('Invalid arbpeoplepublic'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Arbpeoplepublic->delete()) {
			$this->Flash->success(__('The arbpeoplepublic has been deleted.'));
		} else {
			$this->Flash->error(__('The arbpeoplepublic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function generate_payment_report($id = null) {
		$this->layout='pdf';
		if (!$this->Arbpeoplepublic->exists($id)) {
			throw new NotFoundException(__('Indentificador Inválido'));
		} else {
				$arbpeoplepublics = array();
				$arbpeoplepulicArbrates = array();
				$arbrates = array();
				$report_data = array();
				$arbpeoplepublic = $this->Arbpeoplepublic->find('first',
					array(
						'conditions' => array(
							'Arbpeoplepublic.'. $this->Arbpeoplepublic->primaryKey => $id),
						'fields' => array(
							'Arbpeoplepublic.id',
							'Arbpeoplepublic.dni',
							'Arbpeoplepublic.firstname',
							'Arbpeoplepublic.appaterno',
							'Arbpeoplepublic.apmaterno',
							'Arbpeoplepublic.arbubigeo_id',
							'Arbpeoplepublic.status'
						),
						'order' => 'Arbpeoplepublic.id asc',
						'recursive' => 0
						));
				$arbpeoplepublicId = $arbpeoplepublic['Arbpeoplepublic']['id'];
				$arbpeoplepulicArbrates = $this->Arbpeoplepublic->ArbpeoplepulicArbrate->find('all',
					array(
						'conditions' => array(
							'ArbpeoplepulicArbrate.arbpeoplepublic_id'=> $arbpeoplepublicId),
						'fields' => array(
							'ArbpeoplepulicArbrate.id',
							'ArbpeoplepulicArbrate.arbpeoplepublic_id',
							'ArbpeoplepulicArbrate.arbrate_id',
							'ArbpeoplepulicArbrate.fecha',
							'ArbpeoplepulicArbrate.period',
							'ArbpeoplepulicArbrate.description',
							'ArbpeoplepulicArbrate.creationdate',
							'ArbpeoplepulicArbrate.status',
							'Arbrate.id',
							'Arbrate.creationdate'
						),
						'order' => 'Arbrate.id asc',
						'recursive' => 0
						));

					$arbrates = $this->Arbpeoplepublic->ArbpeoplepulicArbrate->Arbrate->find('all', array(
							'conditions' => array('Arbrate.status'=> 'AC'),
							'fields' => array(
								'Arbrate.id',
								'Arbrate.creationdate'
							),
							'order' => 'Arbrate.id asc',
							'recursive' => 1
					));

					$existsdata = 0;
					foreach ($arbrates as $keyarbrate => $valuearbrate) {
						foreach ($arbpeoplepulicArbrates as $keyarbpeoplepulicArbrate => $valuearbpeoplepulicArbrate) {
							if ($valuearbpeoplepulicArbrate['ArbpeoplepulicArbrate']['arbrate_id'] == $valuearbrate['Arbrate']['id']) {
								$report_data[$keyarbrate] = $valuearbpeoplepulicArbrate;
								$existsdata = 1;
							}
						}
						if ($existsdata == 1) {
							$existsdata = 0;
						}else {
							$report_data[$keyarbrate] = array(
								'ArbpeoplepulicArbrate' => array(
									'id' => '',
									'arbpeoplepublic_id' => '',
									'arbrate_id' => '',
									'fecha' => '',
									'period' => '',
									'description' => 'NO PAGO',
									'creationdate' => '',
									'status' => ''
								),
								'Arbrate' => array(
									'id' => $valuearbrate['Arbrate']['id'],
									'creationdate' => $valuearbrate['Arbrate']['creationdate']
								)
							);
						}
					}

				$this->set(compact('arbpeoplepublic', 'arbpeoplepulicArbrates','arbrates', 'report_data'));
		}

		// $this->layout = 'content';
		// if (!$this->Period->exists($id)) {
		// 	throw new NotFoundException(__('Invalid service'));
		// }else{
		// 	$periods = array();
		// 	$acts = array();
		// 	$costs = array();
		// 	$attentions = array();
		//
		//
		//
		// 	$periods = $this->Period->find('all',
		// 		array(
		// 			'conditions' => array(
		// 				'Period.'. $this->Period->primaryKey => $id),
		// 			'fields' => array(
		// 				'Period.id',
		// 				'Period.start',
		// 				'Period.end',
		// 				'Period.time_status',
		// 				'Period.days',
		// 			),
		// 			'order' => 'Period.id asc',
		// 			'recursive' => 0
		// 			));
		// 	$periodId = $periods[0]['Period']['id'];
		// 	$acts = $this->Period->Act->find('all',
		// 		array(
		// 			'conditions' => array(
		// 				'Act.period_id'=> $periodId),
		// 			'fields' => array(
		// 				'Act.id',
		// 				'Act.period_id',
		// 				'Act.population_id',
		// 				'Act.future',
		// 				'Period.id',
		// 				'Population.id',
		// 				'Population.name',
		// 				'Population.code',
		// 				'Population.v_c_t'
		// 			),
		// 			'order' => 'Act.id asc',
		// 			'recursive' => 0
		// 			));
		//
		// 	$actsIds = array();
		// 	foreach ($acts as $key => $value) {
		// 		$actsIds[$key] = $value['Act']['id'];
		// 	}
		//
		// 	$costs = $this->Period->Act->Service->find('all',
		// 		array(
		// 			'joins' => array(
		// 				array(
		// 					'alias' => 'CostJoin',
		// 					'table' => 'costs',
		// 					'type' => 'INNER',
		// 					'conditions' => array(
		// 							'CostJoin.service_id = Service.id')
		// 							)
		// 				),
		// 			'conditions' => array(
		// 				'Service.act_id'=> array_values($actsIds)),
		// 			'fields' => array(
		// 				'Service.id',
		// 				'Service.act_id',
		// 				'Service.p_u_p_r',
		// 				'CostJoin.id',
		// 				'CostJoin.service_id',
		// 				'CostJoin.f_c_c_r',
		// 				'CostJoin.INPDP',
		// 				'CostJoin.INPAP'),
		// 			'order' => 'Service.act_id asc',
		// 			'recursive' => 0
		// 			));
		//
		// 	$serviceIds = array();
		// 	foreach ($costs as $key => $value) {
		// 		$serviceIds [$key] = $value['Service']['id'];
		// 	}
		//
		// 	$attentions = $this->Period->Act->Service->Attention->find('all',
		// 		array(
		// 			'conditions' => array(
		// 				'Attention.service_id'=> array_values($serviceIds)),
		// 			'fields' => array('sum(Attention.p_a) AS p_a_service'),
		// 			'group' => 'Attention.service_id',
		// 			'order' => 'Attention.service_id asc',
		// 			'recursive' => 0
		// 			));
		// 	$this->set(compact('periods', 'acts','costs','attentions'));
		// }
	}
}
