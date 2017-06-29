<?php
namespace App\Controller;

use App\Controller\AppController;
//use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Categorys Controller
 *
 * @property \App\Model\Table\CategorysTable $Categorys
 */
class CategorysController extends AppController
{
     public function initialize()
    {
        parent::initialize();
        $this->categoryTable = TableRegistry::get('Categorys');
    }
    /**
     * [add description]
     */
    public function add(){
        $Category = $this->categoryTable->newEntity();
        if ($this->request->is(['post','put','patch'])) {
            $Category = $this->categoryTable->patchEntity($Category,$this->request->getData());
            if($this->categoryTable->save($Category)){
                $this->Flash->success(__('The cateogry has been succefully added.'));
                return $this->redirect(['action' => 'add']);
            }
       }
       $Categorys = $this->categoryTable->find('all')->hydrate(false)->toArray();
       $this->set(compact('data','data1','Category','Categorys'));
    }
    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id = null)
    {
        $Category = $this->categoryTable->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Category = $this->categoryTable->patchEntity($Category,$this->request->getData());
            if($this->categoryTable->save($Category)){
                $this->Flash->success(__('The cateogry has been updated succesfully.'));
            return $this->redirect(['action'=>'add']);
            }
        }
        $Categorys = $this->categoryTable->find('all')->hydrate(false)->toArray();
        $this->set(compact('data','data1','Category','Categorys'));
        $this->render('add');
    }
      /**
       * [view description]
       * @param  [type] $id [description]
       * @return [type]     [description]
       */
     public function view($id = null)
    {
       $category = $this->categoryTable->get($id);
        $this->set('category', $category);
        $this->set('_serialize', ['category']);
    }
     /**
      * [delete description]
      * @param  [type] $id [description]
      * @return [type]     [description]
      */
     public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->categoryTable->get($id);
          if($this->categoryTable->delete($category)){
            $this->Flash->success(__('The cateogry has been deleted.'));
        } else{
            $this->Flash->error(__('The cateogry could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'add']);
    }
}