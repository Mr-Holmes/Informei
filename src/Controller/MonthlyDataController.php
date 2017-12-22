<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MonthlyData Controller
 *
 * @property \App\Model\Table\MonthlyDataTable $MonthlyData
 *
 * @method \App\Model\Entity\MonthlyData[] paginate($object = null, array $settings = [])
 */
class MonthlyDataController extends AppController
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
        $monthlyData = $this->paginate($this->MonthlyData);

        $this->set(compact('monthlyData'));
        $this->set('_serialize', ['monthlyData']);
    }

    /**
     * View method
     *
     * @param string|null $id Monthly Data id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monthlyData = $this->MonthlyData->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('monthlyData', $monthlyData);
        $this->set('_serialize', ['monthlyData']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monthlyData = $this->MonthlyData->newEntity();
        if ($this->request->is('post')) {
            $monthlyData = $this->MonthlyData->patchEntity($monthlyData, $this->request->getData());
            if ($this->MonthlyData->save($monthlyData)) {
                $this->Flash->success(__('The monthly data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monthly data could not be saved. Please, try again.'));
        }
        $users = $this->MonthlyData->Users->find('list', ['limit' => 200]);
        $this->set(compact('monthlyData', 'users'));
        $this->set('_serialize', ['monthlyData']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Monthly Data id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monthlyData = $this->MonthlyData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monthlyData = $this->MonthlyData->patchEntity($monthlyData, $this->request->getData());
            if ($this->MonthlyData->save($monthlyData)) {
                $this->Flash->success(__('The monthly data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monthly data could not be saved. Please, try again.'));
        }
        $users = $this->MonthlyData->Users->find('list', ['limit' => 200]);
        $this->set(compact('monthlyData', 'users'));
        $this->set('_serialize', ['monthlyData']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Monthly Data id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monthlyData = $this->MonthlyData->get($id);
        if ($this->MonthlyData->delete($monthlyData)) {
            $this->Flash->success(__('The monthly data has been deleted.'));
        } else {
            $this->Flash->error(__('The monthly data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
