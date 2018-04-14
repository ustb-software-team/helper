<?php
/**
 * 移动端根页面
 *
 * Created by PhpStorm.
 * User: agant
 * Date: 2018/4/12
 * Time: 20:45
 */ ?>


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>my-webpack-simple-demo</title> {{--TODO: 需要移动部分的标题--}}
    <link rel="stylesheet" href="{{ asset('mobile/css/app.scss') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app"></div> {{--根组件注册位置--}}
<script src="{{ asset('mobile/js/app.js') }}"></script>
</body>
</html>
