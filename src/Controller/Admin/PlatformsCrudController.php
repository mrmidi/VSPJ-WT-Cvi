<?php

namespace App\Controller\Admin;

use App\Entity\Platforms;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PlatformsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Platforms::class;
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
