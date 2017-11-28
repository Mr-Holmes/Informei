<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DayExpenses Controller
 *
 * @property \App\Model\Table\DayExpensesTable $DayExpenses
 *
 * @method \App\Model\Entity\DayExpense[] paginate($object = null, array $settings = [])
 */
class DayExpensesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Expenses']
        ];
        $dayExpenses = $this->paginate($this->DayExpenses);

        $this->set(compact('dayExpenses'));
        $this->set('_serialize', ['dayExpenses']);
    }

    /**
     * View method
     *
     * @param string|null $id Day Expense id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dayExpense = $this->DayExpenses->get($id, [
            'contain' => ['Expenses']
        ]);

        $this->set('dayExpense', $dayExpense);
        $this->set('_serialize', ['dayExpense']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dayExpense = $this->DayExpenses->newEntity();
        if ($this->request->is('post')) {
            $dayExpense = $this->DayExpenses->patchEntity($dayExpense, $this->request->getData());
            if ($this->DayExpenses->save($dayExpense)) {
                $this->Flash->success(__('The day expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The day expense could not be saved. Please, try again.'));
        }
        $expenses = $this->DayExpenses->Expenses->find('list', ['limit' => 200]);
        $this->set(compact('dayExpense', 'expenses'));
        $this->set('_serialize', ['dayExpense']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Day Expense id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dayExpense = $this->DayExpenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dayExpense = $this->DayExpenses->patchEntity($dayExpense, $this->request->getData());
            if ($this->DayExpenses->save($dayExpense)) {
                $this->Flash->success(__('The day expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The day expense could not be saved. Please, try again.'));
        }
        $expenses = $this->DayExpenses->Expenses->find('list', ['limit' => 200]);
        $this->set(compact('dayExpense', 'expenses'));
        $this->set('_serialize', ['dayExpense']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Day Expense id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dayExpense = $this->DayExpenses->get($id);
        if ($this->DayExpenses->delete($dayExpense)) {
            $this->Flash->success(__('The day expense has been deleted.'));
        } else {
            $this->Flash->error(__('The day expense could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
