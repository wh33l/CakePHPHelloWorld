<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hworld Controller
 *
 * @property \App\Model\Table\HworldTable $Hworld
 *
 * @method \App\Model\Entity\Hworld[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HworldController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hworld = $this->paginate($this->Hworld);

        $this->set(compact('hworld'));
    }

    /**
     * View method
     *
     * @param string|null $id Hworld id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hworld = $this->Hworld->get($id, [
            'contain' => []
        ]);

        $this->set('hworld', $hworld);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hworld = $this->Hworld->newEntity();
        if ($this->request->is('post')) {
            $hworld = $this->Hworld->patchEntity($hworld, $this->request->getData());
            if ($this->Hworld->save($hworld)) {
                $this->Flash->success(__('The hworld has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hworld could not be saved. Please, try again.'));
        }
        $this->set(compact('hworld'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hworld id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hworld = $this->Hworld->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hworld = $this->Hworld->patchEntity($hworld, $this->request->getData());
            if ($this->Hworld->save($hworld)) {
                $this->Flash->success(__('The hworld has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hworld could not be saved. Please, try again.'));
        }
        $this->set(compact('hworld'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hworld id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hworld = $this->Hworld->get($id);
        if ($this->Hworld->delete($hworld)) {
            $this->Flash->success(__('The hworld has been deleted.'));
        } else {
            $this->Flash->error(__('The hworld could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
