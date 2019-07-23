<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CategorieController extends AppController
{
  public function index()
  {
     $this->set('categorie', $this->Categorie->find('all'));
 }
public function categorieadd() {
  $categorie = $this->Categorie->newEntity();
  ?>
  <script>
  console.log("PASSE 1");
  </script>
  <?php
  if ($this->request->is('post')) {
    ?>
    <script>
    console.log("PASSE 3");
    </script>
    <?php
      $categorie = $this->Categorie->patchEntity($categorie, $this->request->getData());
      // Hardcoding the user_id is temporary, and will be removed later
      // when we build authentication out.
      $categorie->id = 1;

      if ($this->Categorie->save($categorie)) {
          $this->Flash->success(__('Categorie créée avec succès.'));
          return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Impossible de créer la page.'));
  }
  else {
    ?>
    <script>
    console.log("PASSE 2");
    </script>
    <?php
  }
  $this->set('categorieadd', $categorie);
}
   public function categorielist() {
    $categories = TableRegistry::get('Categorie')->find();

    $categories = TableRegistry::getTableLocator()->get('Categorie')->find();
    $this->set('categorielist', $categories);
   }
}

  ?>