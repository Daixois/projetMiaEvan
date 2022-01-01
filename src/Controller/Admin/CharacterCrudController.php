<?php

namespace App\Controller\Admin;

use App\Entity\Character;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use JetBrains\PhpStorm\Immutable;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CharacterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Character::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
           
            AssociationField::new('theme')
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
