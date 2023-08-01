<?php

namespace App\Controller\Admin;

use App\Entity\Interets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InteretsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Interets::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
