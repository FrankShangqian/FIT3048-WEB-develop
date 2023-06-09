<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Inspections', 'Apartments'],
        ];
        $images = $this->paginate($this->Images);
        $this->set(compact('images'));
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['Inspections', 'Apartments'],
        ]);

        $this->set(compact('image'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $image = $this->Images->newEmptyEntity();
        if ($this->request->is('post')) {
            $formData = $this->request->getData();
            // process the file
            $image_file = $this->request->getData('image_photo');
            unset($formData['image_photo']);
            $image = $this->Images->patchEntity($image, $formData);;
            if (!$image->getErrors()) {
                $name = $image_file->getClientFilename();
                $targetPath = WWW_ROOT . 'img' . DS . $name;
                if ($name) {
                    $image_file->moveTo($targetPath);
                    $image->image_photo = $name;
                }
                if ($this->Images->save($image)) {
                    $this->Flash->success(__('The inspection image has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The inspection image could not be saved. Please, try again.'));
        }
        $inspections = $this->Images->Inspections->find('list', ['limit' => 200])->all();
        $apartments = $this->Images->Apartments->find('list', ['limit' => 200])->all();
        $this->set(compact('image', 'inspections', 'apartments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $inspections = $this->Images->Inspections->find('list', ['limit' => 200])->all();
        $apartments = $this->Images->Apartments->find('list', ['limit' => 200])->all();
        $this->set(compact('image', 'inspections', 'apartments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
