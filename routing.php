<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('orderDefault'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('loginShow',    'LoginCtrl');
Utils::addRoute('login',        'LoginCtrl');
Utils::addRoute('goSignup',     'LoginCtrl');
Utils::addRoute('logout',       'LoginCtrl');
Utils::addRoute('orderShow',    'OrderCtrl');
Utils::addRoute('orderDefault', 'OrderCtrl');
Utils::addRoute('addProduct',   'OrderCtrl');
Utils::addRoute('signupShow',   'SignupCtrl');
Utils::addRoute('signup',       'SignupCtrl');
Utils::addRoute('cartShow',     'CartCtrl');
Utils::addRoute('order',        'CartCtrl');
Utils::addRoute('deleteProduct', 'CartCtrl');
Utils::addRoute('listShow',     'AdminCtrl');
Utils::addRoute('deleteUser',   'AdminCtrl');
Utils::addRoute('nextShow',     'AdminCtrl');
Utils::addRoute('panelShow',    'AdminCtrl');
Utils::addRoute('deleteOrder',  'AdminCtrl');
Utils::addRoute('confirmOrder', 'AdminCtrl');



