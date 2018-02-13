<?php

    set_include_path(get_include_path() . '/phpseclib');

    $phpseclib_path = '/Net/SSH2.php';
    include($phpseclib_path);
    $ssh = new Net_SSH2('ihub.mdc.gameloft.org');


    if (!$ssh->login('alejandro.chavez@gamelof.com', 'aksjhdnaskcj')) {
       echo  $error = 'Auth error / Wrong credentials';

    }

