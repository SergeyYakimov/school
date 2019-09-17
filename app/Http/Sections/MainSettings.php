<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class MainSettings
 *
 * @property \App\MainSettings $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class MainSettings extends Section implements Initializable
{
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-bank');
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
    protected $title = 'Основные настройки';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $main_settings = \DB::table('main_settings')->first();
        if(isset($main_settings))
        {
            return $this->fireEdit($main_settings->id);
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
        $form = \AdminForm::panel();

        $form->addHeader([
            \AdminFormElement::columns()
                ->addColumn([
                    \AdminFormElement::text('siteName', 'Заголовок сайта')->required(),
                ], 3)
                ->addColumn([
                    \AdminFormElement::text('phone', 'Номер телефона')->required(),
                ], 3)
                ->addColumn([
                    \AdminFormElement::text('email', 'email')->required(),
                ], 3)
                ->addColumn([
                    \AdminFormElement::text('address', 'Адрес')->required(),
                ], 3)
                ->addColumn([
                    \AdminFormElement::textarea('mapSRC', 'скрипт карты')->setHtmlAttribute('style','height:150px;')
                ], 12)
            ]);
        return $form;


                /*

                return \AdminForm::panel()->addBody(
            \AdminFormElement::text('siteTitle', 'Заголовок сайта')->required(),
            \AdminFormElement::text('phone', 'Номер телефона')->required(),
            \AdminFormElement::text('email', 'email')->required(),
            \AdminFormElement::text('address', 'Адрес')->required(),
            \AdminFormElement::textarea('mapSRC', 'скрипт карты')->setHtmlAttribute('style','height:150px;')
        );
        
            $table->text('siteName')->nullable();
            $table->text('phone');
            $table->text('email');
            $table->text('mapSRC');
            */



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
