<?php

namespace App\Controller\Admin;

use App\Entity\Perso;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
// use JetBrains\PhpStorm\Immutable;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PersoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Perso::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
           
            AssociationField::new('themes')
                ->setRequired(true),
            TextField::new('name'),
            TextField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('picture')
                ->setBasePath('/img')
                ->onlyOnIndex(),
            
        ];
    }

}
