<?php
//获取请求页面
$page = empty(@$_GET['page']) ? 'index' : @$_GET['page'];

// 退出登录
if ($page == 'logout') {
    setcookie("token", '' , time()-1000);
    header('location:./?c='.$config['login']);
}

if( !CheckLogin() ){
    exit('<h3>鉴权失败</h3>');//鉴权失败
}

if(empty($page)){
    include_once('./templates/admin/index.php');
}else{
    include_once("./templates/admin/{$page}.php");
}



