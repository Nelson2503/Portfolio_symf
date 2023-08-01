<?php

namespace App\Controller\Admin;

use App\Entity\CompetenceTech;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CompetenceTechCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CompetenceTech::class;
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
