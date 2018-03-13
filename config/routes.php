<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 29.01.2018
 * Time: 15:09
 */
return array(
    'product/([0-9]+)' => 'product/views/$1',

    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog/search' => 'catalog/search',
    'catalog' => 'catalog/index',


    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',

    'cart/add/([0-9]+)/([0-9]+)' => 'card/add/$1/$2',
    'cart/remove/([0-9]+)' => 'card/remove/$1',
    'cart/removeAll' => 'card/removeAll',
    'cart/checkout' => 'card/checkout',
    'cart' => 'card/index',

    'order' => 'order/index',

    'registry' => 'user/register',
    'login' => 'user/login',
    'logout' => 'user/logout',

    'cabinet/order/([0-9]+)' => 'cabinet/order/$1',
    'cabinet' => 'cabinet/index',

    'aboutUs' => 'info/aboutUs',
    'posts' => 'info/posts',
    'contact' => 'info/contact',
    'callback' => 'info/callback',
    'subscription' => 'info/subscription',
    'requestcall' => 'info/requestcall',

    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',

    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',

    'admin/posts/create' => 'adminPosts/create',
    'admin/posts/update/([0-9]+)' => 'adminPosts/update/$1',
    'admin/posts/delete/([0-9]+)' => 'adminPosts/delete/$1',
    'admin/posts' => 'adminPosts/index',

    'admin/orders/show' => 'adminOrder/show',
    'admin/orders/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/orders/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/orders' => 'adminOrder/index',

    'admin/slider/delete/([0-9]+)' => 'adminka/sliderDelete/$1',
    'admin/slider' => 'adminka/slider',
    'admin/contact' => 'adminka/contact',

    'admin' => 'admin/index',

    '' => 'site/index',
);