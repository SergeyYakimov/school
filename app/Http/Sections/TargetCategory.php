<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminDisplayFilter;
use AdminForm;
use AdminFormElement;
use App\Model\Country;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class TargetCategory
 *
 * @property \App\TargetCategory $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class TargetCategory extends Section implements Initializable
{
    
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-users');
    }
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Целевая аудитория";

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
         return \AdminDisplay::table()->setColumns([
            AdminColumn::link('title', 'Заголовок'),
        ])->paginate(10);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
       $form = AdminForm::panel()->addScript('custom-image', '/customjs/customimage.js', ['admin-default']);

        $form->setItems(
            AdminFormElement::columns()
            ->addColumn(function() {
                return [
                    AdminFormElement::text('title', 'Заголовок')->required(),
                    AdminFormElement::text('text', 'Описание')->required(),
                    
                ];
            })->addColumn(function() {
                return [
                    AdminFormElement::image('image', 'Изображение')->required(),
                ];
            })
        );

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
