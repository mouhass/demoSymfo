<?php


namespace App\Form\Type;


use App\Entity\Option;
use App\Entity\Property;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeImmutableToDateTimeTransformer;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
       $builder
           ->add('title',TextType::class, ['required'=>false])
           ->add('description', TextareaType::class,['required'=>false])
           ->add("surface",NumberType::class,['required'=>false])

           ->add('rooms', NumberType::class,['required'=>false])
           ->add('bedrooms',NumberType::class,['required'=>false])
           ->add('floor',NumberType::class,['required'=>false])
           ->add('price',NumberType::class,['required'=>false])
           ->add('city',TextType::class,['required'=>false])
           ->add('address',TextType::class,['required'=>false])
           ->add('postalCode', TextType::class,['required'=>false])
           ->add('sold',CheckboxType::class, array(
               'label'=>'Is solded?',
               'data'=>false,
               'attr' => array('checked' => 'checked', 'value' => '1')
           ))
            ->add('options', EntityType::class, ['class'=>Option::class,'choice_label'=>'name','multiple'=>true])

       ;
//           ->add('createdat',DateTimeType::class);

    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        parent::configureOptions($resolver);
//        $resolver->setDefaults([
//            'data_class'=>Property::class,
//            'translation_domain'=>'forms'
//        ]);
//    }

}