<?php

class HomeController extends BaseController
{
    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    /**
     * homepage
     *
     * @return mixed
     */
    public function home()
    {
        return View::make('home')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@home'))
        );
    }

    /**
     * investInDiamonds page
     *
     * @return mixed
     */
    public function investInDiamonds()
    {
        return View::make('investInDiamonds')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@investInDiamonds'))
        );
    }

    /**
     * investInGold page
     *
     * @return mixed
     */
    public function investInGold()
    {
        return View::make('investInGold')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@investInGold'))
        );
    }

    /**
     * investInGermanProperty page
     *
     * @return mixed
     */
    public function investInGermanProperty()
    {
        return View::make('investInGermanProperty')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@investInGermanProperty'))
        );
    }

    /**
     * investInWaterRights page
     *
     * @return mixed
     */
    public function investInWaterRights()
    {
        return View::make('investInWaterRights')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@investInWaterRights'))
        );
    }

    /**
     * contactUs page
     *
     * @return mixed
     */
    public function contactUs()
    {
        return View::make('contactUs')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@contactUs'))
        );
    }

    /**
     * thanks page
     *
     * @return mixed
     */
    public function thanks()
    {
        return View::make('thanks')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@thanks'))
        );
    }

    /**
     * disclaimer page
     *
     * @return mixed
     */
    public function disclaimer()
    {
        return View::make('disclaimer')->nest(
            'nav',
            'includes.nav',
            array('page' => action('HomeController@disclaimer'))
        );
    }
}