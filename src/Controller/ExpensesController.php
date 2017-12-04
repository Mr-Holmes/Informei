<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Expenses Controller
 *
 * @property \App\Model\Table\ExpensesTable $Expenses
 *
 * @method \App\Model\Entity\Expense[] paginate($object = null, array $settings = [])
 */
class ExpensesController extends AppController
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
        $expenses = $this->paginate($this->Expenses);

        $this->set(compact('expenses'));
        $this->set('_serialize', ['expenses']);
    }

    /**
     * View method
     *
     * @param string|null $id Expense id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expense = $this->Expenses->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('expense', $expense);
        $this->set('_serialize', ['expense']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expense = $this->Expenses->newEntity();
        $username = $this->request->session()->read('Auth.User');
        $expense->user_id = $username['id']; 
        if ($this->request->is('post')) {
            $expense = $this->Expenses->patchEntity($expense, $this->request->getData());
            if ($this->Expenses->save($expense)) {
                $this->Flash->success(__('A despesa foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A despesa não pôde ser salva. Por favor,tente novamente!'));
        }
        $users = $this->Expenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('expense', 'users'));
        $this->set('_serialize', ['expense']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Expense id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expense = $this->Expenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expense = $this->Expenses->patchEntity($expense, $this->request->getData());
            if ($this->Expenses->save($expense)) {
                $this->Flash->success(__('A despesa foi salva'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A despesa não pôde ser salva. Por favor,tente novamente!'));
        }
        $users = $this->Expenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('expense', 'users'));
        $this->set('_serialize', ['expense']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Expense id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expense = $this->Expenses->get($id);
        if ($this->Expenses->delete($expense)) {
            $this->Flash->success(__('A despesa foi deletada!'));
        } else {
            $this->Flash->error(__('A despesa não pôde ser salva. Por favor,tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}