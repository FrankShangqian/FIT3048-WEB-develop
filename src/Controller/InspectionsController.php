<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Inspections Controller
 *
 * @property \App\Model\Table\InspectionsTable $Inspections
 * @method \App\Model\Entity\Inspection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InspectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Apartments'],
        ];
        $inspections = $this->paginate($this->Inspections);

        $this->set(compact('inspections'));
    }

    /**
     * View method
     *
     * @param string|null $id Inspection id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inspection = $this->Inspections->get($id, [
            'contain' => ['Users', 'Apartments'],
        ]);

        $this->set(compact('inspection'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inspection = $this->Inspections->newEmptyEntity();
        if ($this->request->is('post')) {
            $inspection = $this->Inspections->patchEntity($inspection, $this->request->getData());
            if ($this->Inspections->save($inspection)) {
                $this->Flash->success(__('The inspection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inspection could not be saved. Please, try again.'));
        }
        $users = $this->Inspections->Users->find('list', ['limit' => 200])->all();
        $apartments = $this->Inspections->Apartments->find('list', ['limit' => 200])->all();
        $this->set(compact('inspection', 'users', 'apartments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inspection id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inspection = $this->Inspections->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inspection = $this->Inspections->patchEntity($inspection, $this->request->getData());
            if ($this->Inspections->save($inspection)) {
                $this->Flash->success(__('The inspection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inspection could not be saved. Please, try again.'));
        }
        $users = $this->Inspections->Users->find('list', ['limit' => 200])->all();
        $apartments = $this->Inspections->Apartments->find('list', ['limit' => 200])->all();
        $this->set(compact('inspection', 'users', 'apartments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inspection id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inspection = $this->Inspections->get($id);
        if ($this->Inspections->delete($inspection)) {
            $this->Flash->success(__('The inspection has been deleted.'));
        } else {
            $this->Flash->error(__('The inspection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
