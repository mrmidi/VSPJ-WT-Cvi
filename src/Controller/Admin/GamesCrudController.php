<?php

namespace App\Controller\Admin;

use App\Entity\Games;
use App\Entity\Platforms;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class GamesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Games::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        // return [
        //     //IdField::new('id'),
        //     TextField::new('name'),
        //     TextEditorField::new('description'),
        //     AssociationField::new('platform'),
        //     Field::new('year'),
        //     Field::new('metascore')
        // ];
        yield TextField::new('name');
        yield TextEditorField::new('description');
        yield AssociationField::new('platform');
        yield Field::new('year');
        yield Field::new('metascore');
        //yield AssociationField::new('...')->setCrudController(SomeCrudController::class);
    }
    
}
