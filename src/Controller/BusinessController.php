<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Business Controller
 *
 * @property \App\Model\Table\BusinessTable $Business
 *
 * @method \App\Model\Entity\Busines[] paginate($object = null, array $settings = [])
 */
class BusinessController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $business = $this->paginate($this->Business);

        $this->set(compact('business'));
        $this->set('_serialize', ['business']);
    }

    /**
     * View method
     *
     * @param string|null $id Busines id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('busines', $busines);
        $this->set('_serialize', ['busines']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busines = $this->Business->newEntity();
        if ($this->request->is('post')) {
            $busines = $this->Business->patchEntity($busines, $this->request->getData());
            if ($this->Business->save($busines)) {
                $this->Flash->success(__('The busines has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The busines could not be saved. Please, try again.'));
        }
        $users = $this->Business->Users->find('list', ['limit' => 200]);
        $this->set(compact('busines', 'users'));
        $this->set('_serialize', ['busines']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Busines id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busines = $this->Business->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $busines = $this->Business->patchEntity($busines, $this->request->getData());
            if ($this->Business->save($busines)) {
                $this->Flash->success(__('The busines has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The busines could not be saved. Please, try again.'));
        }
        $users = $this->Business->Users->find('list', ['limit' => 200]);
        $this->set(compact('busines', 'users'));
        $this->set('_serialize', ['busines']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Busines id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busines = $this->Business->get($id);
        if ($this->Business->delete($busines)) {
            $this->Flash->success(__('The busines has been deleted.'));
        } else {
            $this->Flash->error(__('The busines could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
