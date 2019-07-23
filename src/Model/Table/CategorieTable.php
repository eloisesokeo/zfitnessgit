<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategorieTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('label', "Il faut définir le label")
            ->notEmpty('image_url', 'Il faut définir une image');
    }

}
?>