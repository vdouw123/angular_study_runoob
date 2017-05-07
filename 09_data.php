<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/5/7
 * Time: 16:42
 */

$arr = array(
    'sites' => array(
        array(
            'Name' => '菜乌教程',
            'Url' => 'www.runoob.com',
            'Country' => 'China'
        ),
        array(
            'Name' => 'Google',
            'Url' => 'www.google.com',
            'Country' => 'USA'
        ),
        array(
            'Name' => 'facebook',
            'Url' => 'www.facebook.com',
            'Country' => 'USA'
        )
    )
);

echo json_encode($arr);