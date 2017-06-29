# test
category app

Create crud using table registery
Create the global object instance for table registery

$this->categoryTable = TableRegistry::get('Categorys');


In category add time using table registery instance through added the category newentity 
and for fill data  added the patch entity.
$Category = $this->categoryTable->newEntity();
For cake 3.4 
use $this->request->getData();
$Category = $this->categoryTable->patchEntity($Category,$this->request->getData());

For cake 3.3
use $this->request->data();
$Category = $this->categoryTable->patchEntity($Category,$this->request->data());

For use getting id
$category = $this->categoryTable->get($id);

For listing using hydrate
$Categorys = $this->categoryTable->find('all')->hydrate(false)->toArray();




