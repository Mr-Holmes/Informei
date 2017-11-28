<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DayProducts Controller
 *
 * @property \App\Model\Table\DayProductsTable $DayProducts
 *
 * @method \App\Model\Entity\DayProduct[] paginate($object = null, array $settings = [])
 */
class DayProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $dayProducts = $this->paginate($this->DayProducts);

        $this->set(compact('dayProducts'));
        $this->set('_serialize', ['dayProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Day Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dayProduct = $this->DayProducts->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('dayProduct', $dayProduct);
        $this->set('_serialize', ['dayProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dayProduct = $this->DayProducts->newEntity();
        if ($this->request->is('post')) {
            $dayProduct = $this->DayProducts->patchEntity($dayProduct, $this->request->getData());
            if ($this->DayProducts->save($dayProduct)) {
                $this->Flash->success(__('The day product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The day product could not be saved. Please, try again.'));
        }
        $products = $this->DayProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('dayProduct', 'products'));
        $this->set('_serialize', ['dayProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Day Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dayProduct = $this->DayProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dayProduct = $this->DayProducts->patchEntity($dayProduct, $this->request->getData());
            if ($this->DayProducts->save($dayProduct)) {
                $this->Flash->success(__('The day product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The day product could not be saved. Please, try again.'));
        }
        $products = $this->DayProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('dayProduct', 'products'));
        $this->set('_serialize', ['dayProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Day Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dayProduct = $this->DayProducts->get($id);
        if ($this->DayProducts->delete($dayProduct)) {
            $this->Flash->success(__('The day product has been deleted.'));
        } else {
            $this->Flash->error(__('The day product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
