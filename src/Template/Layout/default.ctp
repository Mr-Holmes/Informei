<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap.min.css')?>

    <?= $this->Html->script('http://code.jquery.com/jquery.min.js');?>

    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style type="text/css">
        .img{
            margin-bottom: 3px;
            margin-top-top: 90px;
            width: 70%;
        }
    </style>
</head>
<body>
    <?php  
    $user = $this->request->session()->read('Auth.User.username');
    $id = $this->request->session()->read('Auth.User.id') 
    ?>

    <nav class="navbar navbar-expand-lg navbar-expand-lg bg-lg">
        <div class="collapse navbar-collapse">
        </div>
        <div >
            <ul class="navbar-nav mr-auto">
                <?php if($user): ?>
                    <li><?=$this->Html->link(__('logout'),['controller' => 'users','action' => 'logout'])?></li>
                <?php endif; ?>
            </ul>
                
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
