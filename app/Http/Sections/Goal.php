<?php

namespace App\Http\Sections;

use AdminForm;
use AdminFormElement;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class Goal
 *
 * @property \App\Goal $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Goal extends Section implements Initializable
{
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-bullseye');
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
    protected $title = 'Наша цель';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $goals = \DB::table('goals')->first();
        if(isset($goals))
        {
            return $this->fireEdit($goals->id);
        }
        return $this->fireEdit(0);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = AdminForm::form()->setElements([
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::wysiwyg('description', 'Текст'),
        ]);
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
