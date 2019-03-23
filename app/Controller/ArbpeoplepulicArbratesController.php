<?php
App::uses('AppController', 'Controller');
/**
 * ArbpeoplepulicArbrates Controller
 *
 * @property ArbpeoplepulicArbrate $ArbpeoplepulicArbrate
 * @property PaginatorComponent $Paginator
 */
class ArbpeoplepulicArbratesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	public  $helpers = array('Pdf');

/**
 * index method
 *
 * @return void
 */
	public function index($paginador=null) {
		$this->ArbpeoplepulicArbrate->recursive = 0;
		$this->set('arbpeoplepulicArbrates', $this->Paginator->paginate());

		if(!empty($this->request->params['named']['page'])){
			$this->Session->write('Arbpeoplepublic.page',$this->request->params['named']['page']);
			$this->request->params['named']['page'] = $this->Session->read('Arbpeoplepublic.page');
		}
		$this->set('paginador',$paginador);
		$elementos = array('ArbpeoplepulicArbrate.arbpeoplepublic_id'=>__('beneficiario', TRUE),'ArbpeoplepulicArbrate.arbrate_id'=>__('Tasa', TRUE));
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
								array('ArbpeoplepulicArbrate.status'=>'DE') :
								array('ArbpeoplepulicArbrate.status'=>'AC');

		$conditions = $conditions + $conditionsActivos;

		$this->paginate = array('limit' => 10,
								'page' => 1,
								'order' => array ('ArbpeoplepulicArbrate.creationdate' => 'asc'),
								'conditions' => $conditions,
								'recursive'=>1
								);

		$arbpeoplepulicArbrates=$this->paginate('ArbpeoplepulicArbrate');
		$this->set(compact('arbpeoplepulicArbrates'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArbpeoplepulicArbrate->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepulic arbrate'));
		}
		$options = array('conditions' => array('ArbpeoplepulicArbrate.' . $this->ArbpeoplepulicArbrate->primaryKey => $id));
		$this->set('arbpeoplepulicArbrate', $this->ArbpeoplepulicArbrate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArbpeoplepulicArbrate->create();
			if ($this->ArbpeoplepulicArbrate->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepulic arbrate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepulic arbrate could not be saved. Please, try again.'));
			}
		}
		$arbpeoplepublics = $this->ArbpeoplepulicArbrate->Arbpeoplepublic->find('list');
		$arbrates = $this->ArbpeoplepulicArbrate->Arbrate->find('list');
		$secpeople = $this->ArbpeoplepulicArbrate->Secperson->find('list');
		$this->set(compact('arbpeoplepublics', 'arbrates', 'secpeople'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArbpeoplepulicArbrate->exists($id)) {
			throw new NotFoundException(__('Invalid arbpeoplepulic arbrate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArbpeoplepulicArbrate->save($this->request->data)) {
				$this->Flash->success(__('The arbpeoplepulic arbrate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The arbpeoplepulic arbrate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArbpeoplepulicArbrate.' . $this->ArbpeoplepulicArbrate->primaryKey => $id));
			$this->request->data = $this->ArbpeoplepulicArbrate->find('first', $options);
		}
		$arbpeoplepublics = $this->ArbpeoplepulicArbrate->Arbpeoplepublic->find('list');
		$arbrates = $this->ArbpeoplepulicArbrate->Arbrate->find('list');
		$secpeople = $this->ArbpeoplepulicArbrate->Secperson->find('list');
		$this->set(compact('arbpeoplepublics', 'arbrates', 'secpeople'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArbpeoplepulicArbrate->id = $id;
		if (!$this->ArbpeoplepulicArbrate->exists()) {
			throw new NotFoundException(__('Invalid arbpeoplepulic arbrate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArbpeoplepulicArbrate->delete()) {
			$this->Flash->success(__('The arbpeoplepulic arbrate has been deleted.'));
		} else {
			$this->Flash->error(__('The arbpeoplepulic arbrate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function json_search() {
		$arbpeoplepublics = $this->request;
		if ($this->request->is('ajax')){
			$arbpeoplepublics = array('1'=>'gh');
			//$arbpeoplepublics = $this->ArbpeoplepulicArbrate->Arbpeoplepublic->find('list');
			$this->set(compact('arbpeoplepublics'));
			$this->render('add', 'ajax');
		}
		$this->set(compact('arbpeoplepublics'));
	}

	public function generate_report_cost($id = null) {
		$this->layout = 'content';
		if (!$this->ArbpeoplepulicArbrate->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}else{
			$mgs = 'Falta informaciÃ³n, verifique datos de  servicio y costo.';
			$this->set(compact('mgs'));
		}
	}

}
