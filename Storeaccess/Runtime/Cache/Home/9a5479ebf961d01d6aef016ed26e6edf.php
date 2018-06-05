<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Storeaccess/public/css/bootstrap.css">
    <link rel="stylesheet" href="Storeaccess/public/css/content_style.css">
    <link rel="stylesheet" href="http://www.zhuandan.com/statics/css/zdb_base.css">
    <link rel="stylesheet" href="http://www.zhuandan.com/statics/css/buttons.css">
    <link rel="stylesheet" href="http://www.zhuandan.com/statics/css/zdb_main.css">
    <link rel="stylesheet" href="http://www.zhuandan.com/statics/css/zdb_icon.css">
    <link rel="stylesheet" href="http://www.zhuandan.com/statics/fonts-xin/iconfont.css">
    <link rel="stylesheet" href="http://cdn.staticfile.org/layer/2.3/skin/layer.css">
    <link rel="stylesheet" href="http://www.zhuandan.com/statics/js/zdb-tp/Prompt/Prompt.css">
    <title>网店接入（已接入）-转单宝</title>

</head>

<body class="zmain-body">
<!--头部-->
<div class="console-header clearfix" id="console-header">
    <div class="zdb-layout">
        <a class="logo" style="font-size: 14px; text-indent:60px; line-height: 50px; width: 100px; " href="/" target="_blank">首页</a>
        <ul class="nav">
            <li class="nav-item " >
                <a class="nav-item-link" href="/main" >
                    管理首页                        </a>
            </li><li class="nav-item " >
            <a class="nav-item-link" href="/Joinorder/lists" >
                接单管理                        </a>
        </li><li class="nav-item active" >
            <a class="nav-item-link" href="/Tporder/lists_wait_arrange" >
                网单管理                        </a>
        </li><li class="nav-item " >
            <a class="nav-item-link" href="/Dorder/dolist.html" >
                转单管理                        </a>
        </li><li class="nav-item " >
            <a class="nav-item-link" href="/Refund/lists.html" >
                售后                        </a>
        </li><li class="nav-item " >
            <a class="nav-item-link" href="/Financial/record.html" >
                财务                        </a>
        </li><li class="nav-item " >
            <a class="nav-item-link" href="/Shop/base_info.html" >
                账户                        </a>
        </li>
        </ul>

        <div class="other-nav">
            <a href="/help"><i class="fa fa-question-circle"></i> 帮助</a>
        </div>
        <!--<div class="msg-nav">-->
        <!--<a href="/message/sysnotice.html">消息-->
        <!--<span id="msgCount" class="count" style="display: none;"></span>-->
        <!--</a>-->
        <!--</div>-->

        <div class="ticket-nav">
            <a href="/ticket/lists.html">工单
                <span id="ticketCount" class="count" style="display: none;"></span>
            </a>
        </div>

        <div class="header-select user-info">
            <span class="username" id="username" title="袁晓文 From 雯葭测试店铺请勿下单">袁晓文</span>
            <ul class="select-items user-nav">
                <li><a href="http://www.zhuandan.com/dianpu_11405" target="_blank">店铺主页</a></li>
                <li><a href="/editmyloginpass">修改密码</a></li>
                <li><a href="/logout" id="logout">安全退出</a></li>
            </ul>
        </div>

        <div class="search search-active">
            <div class="bg"></div>
            <div class="content">
                <form id="header-search-form" action="/Tporder/lists_all" target="_blank">
                    <input type="text" id="header-search-input" name="q" class="input" style="width:132px;" placeholder="网单单号/收货人信息">

                    <input type="submit" class="button" id="header-search-button" value="">
                </form>
            </div>
        </div>

        <div class="pull-right" style="margin-top: 10px; margin-right: 10px;">
            <a style="background-color: #559cd4; color: #fff; padding: 5px 10px; font-size: 12px; line-height: 1.5; border-radius: 3px; display: inline-block;" href="/Dorder/dorder.html">立即发单</a>
        </div>
    </div>
</div>

<div class="main-subnav man_menu_group" id="man_menu_group_2"  >
    <div class="zdb-layout">
        <a style="font-size: 12px"  href="/Joinorder/lists">接单管理<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Jiedanshezhi/setoptions">接单设置<i class="fa fa-caret-up"></i></a>            </div>
</div><div class="main-subnav man_menu_group" id="man_menu_group_3" style="display:block" >
    <div class="zdb-layout">
        <a style="font-size: 12px"  href="/Tporder/lists_wait_arrange">网单管理<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Sendwares/lists">商品管理<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px" class="active" href="/Appman/main.html">网店接入<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Tpstatistics/shopanalysis">统计分析<i class="fa fa-caret-up"></i></a>            </div>
</div><div class="main-subnav man_menu_group" id="man_menu_group_4"  >
    <div class="zdb-layout">
        <a style="font-size: 12px"  href="/Dorder/dolist.html">转出的订单<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Dorder/dorder.html">在线下单<i class="fa fa-caret-up"></i></a>            </div>
</div><div class="main-subnav man_menu_group" id="man_menu_group_5"  >
    <div class="zdb-layout">
        <a style="font-size: 12px"  href="/Refund/lists.html">我收到的<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Refund/iapply">我申请的<i class="fa fa-caret-up"></i></a>            </div>
</div><div class="main-subnav man_menu_group" id="man_menu_group_6"  >
    <div class="zdb-layout">
        <a style="font-size: 12px"  href="/Financial/record.html">交易记录<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Financial/withdraw.html">账户提现<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Financial/pay.html">账户充值<i class="fa fa-caret-up"></i></a>            </div>
</div><div class="main-subnav man_menu_group" id="man_menu_group_7"  >
    <div class="zdb-layout">
        <a style="font-size: 12px"  href="/Shop/base_info.html">基本信息<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Safe/main.html">安全设置<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Shop/staff.html">店员管理<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Shop/certification.html">店铺认证<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Shop/partners.html">合作管理<i class="fa fa-caret-up"></i></a><span class="sep">|</span>                    <a style="font-size: 12px"  href="/Shopserve/manage.html">服务设置<i class="fa fa-caret-up"></i></a>            </div>
</div>

<div class="announce">
    <i class="iconfont icon-notice"></i>
    <ul id="announce-list" class="content">
        <li></li>
    </ul>
    <div class="close">
        <a href="javascript:void(0);" class="close-board">不再提示</a>
    </div>
</div>

<div class="zdb-layout mt20">
    <ol class="breadcrumb site-guide">
        <li><a href="/main.html"><i class="fa fa-home"></i> 管理首页</a></li>
        <li><a href="/Tporder/arrangement">网单管理</a></li>
        <li class="active">网店接入</li>
        <a class="pull-right" href="/help/issue/list-SanFangDingDan.html" target="_blank"><span class="glyphicon glyphicon-question-sign" style="color:#3595CC;"></span> 网店接入指南</a>
    </ol>
</div>

<div class="container-fluid">
        <div class="container">
            <!--淘宝天猫店铺接入-->
            <div class="api_list">
                    <header>
                        <ul>
                            <li><img src="Storeaccess/public/image/skycat.png" width="40" height="40" title=""/> </li>
                            <li><h3>天猫/淘宝店铺接入</h3></li>
                            <li>已接入网店<span style="color: #ff6600;">4</span>家</li>
                            <li><button class="btn">继续接入网店</button></li>
                            <li><a>天猫/淘宝网店接入指南</a></li>
                        </ul>
                    </header>
                    <article>
                        <ul>
                            <li class="head">
                                <ul>
                                    <li>网店名称</li>
                                    <li>更新时间</li>
                                    <li>授权到期时间</li>
                                    <li>导入总单量</li>
                                    <li>同步出库<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></li>
                                    <li>操作</li>
                                </ul>
                            </li>
                            <li class="content">
                                <ul>
                                    <li>相思递鲜花</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>582</li>
                                    <li>
                                        <div class="open1" onclick="onOff(this)">
                                            <div class="open2"></div>
                                        </div>
                                    </li>
                                    <li><a>授权更新</a></li>
                                </ul>
                            </li>
                            <li class="content">
                                <ul>
                                    <li>花好美花艺</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>995</li>
                                    <li>
                                        <div class="open1" onclick="onOff(this)">
                                            <div class="open2"></div>
                                        </div>
                                    </li>
                                    <li><a>授权更新</a></li>
                                </ul>
                            </li>
                            <li class="content">
                                <ul>
                                    <li>天蓝蓝艺馆</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>2588</li>
                                    <li>
                                        <div class="open1" onclick="onOff(this)">
                                            <div class="open2"></div>
                                        </div>
                                    </li>
                                    <li><a>授权更新</a></li>
                                </ul>
                            </li>
                            <li class="content">
                                <ul>
                                    <li>BurNing</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>2018-12-02 12:12:08</li>
                                    <li>3211</li>
                                    <li>
                                        <div class="open1" onclick="onOff(this)">
                                            <div class="open2"></div>
                                        </div>
                                    </li>
                                    <li><a>授权更新</a></li>
                                </ul>
                            </li>
                        </ul>
                    </article>
            </div>
            <!--京东店铺接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/JD.png" width="40" height="40" title=""/> </li>
                        <li><h3>京东店铺接入</h3></li>
                        <li>已接入网店<span style="color: #ff6600;">1</span>家</li>
                        <li><button class="btn">继续接入网店</button></li>
                        <li><a>京东网店接入指南</a></li>
                    </ul>
                </header>
                <article>
                    <ul>
                        <li class="head">
                            <ul>
                                <li>网店名称</li>
                                <li>更新时间</li>
                                <li>授权到期时间</li>
                                <li>导入总单量</li>
                                <li style="display: flex;justify-content: space-around">
                                    <div style="border-right: 1px solid #d0d0d0;width: 100%">入仓订单抓取<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></div>
                                    <div style="width: 100%">同步出库<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></div>
                                </li>
                                <li>操作</li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>相思递鲜花</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div class="open1" onclick="onOff(this)" style="left: 25%">
                                        <div class="open2"></div>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
            <!--饿了么网店接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/eleme.png" width="40" height="40" title=""/> </li>
                        <li><h3>天猫/淘宝店铺接入</h3></li>
                        <li>已接入网店<span style="color: #ff6600;">1</span>家</li>
                        <li><button class="btn">继续接入网店</button></li>
                        <li><a>饿了么网店接入指南</a></li>
                    </ul>
                </header>
                <article>
                    <ul>
                        <li class="head">
                            <ul>
                                <li>网店名称</li>
                                <li>更新时间</li>
                                <li>授权到期时间</li>
                                <li>导入总单量</li>
                                <li>自动接单<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></li>
                                <li>操作</li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>相思递鲜花</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div class="open1" onclick="onOff(this)">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                </article>
            </div>
            <!--美团外卖单店接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/meituan.png" width="40" height="40" title=""/> </li>
                        <li><h3>美团外卖<span style="color:#ff6600;font-size: 14px;font-weight: bold ">单店</span>接入</h3></li>
                        <li>已接入网店<span style="color: #ff6600;">1</span>家</li>
                        <li><button class="btn">继续接入网店</button></li>
                        <li><a>美团外卖网店接入指南</a></li>
                    </ul>
                </header>
                <article>
                    <ul>
                        <li class="head">
                            <ul>
                                <li>网店名称</li>
                                <li>更新时间</li>
                                <li>授权到期时间</li>
                                <li>导入总单量</li>
                                <li style="display: flex;justify-content: space-around">
                                    <div style="border-right: 1px solid #d0d0d0;width: 100%">推送地址</div>
                                    <div style="width: 100%">自动接单<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></div>
                                </li>
                                <li>操作</li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>相思递鲜花</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
            <!--美团外卖连锁店接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/meituan.png" width="40" height="40" title=""/> </li>
                        <li><h3>美团外卖<span style="color:#ff6600;font-size: 14px;font-weight: bold ">连锁店</span>接入</h3></li>
                        <li>已接入网店<span style="color: #ff6600;">1</span>家</li>
                        <li><button class="btn">继续接入网店</button></li>
                        <li><a>美团外卖网店接入指南</a></li>
                    </ul>
                </header>
                <article>
                    <ul>
                        <li class="head">
                            <ul>
                                <li>网店名称</li>
                                <li>更新时间</li>
                                <li>授权到期时间</li>
                                <li>导入总单量</li>
                                <li style="display: flex;justify-content: space-around">
                                    <div style="border-right: 1px solid #d0d0d0;width: 100%">推送地址</div>
                                    <div style="width: 100%">自动接单<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></div>
                                </li>
                                <li>操作</li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>相思递鲜花</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
            <!--京东到家网店接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/JDhome.png" width="40" height="40" title=""/> </li>
                        <li><h3>京东到家网店接入</h3></li>
                        <li>已接入网店<span style="color: #ff6600;">15</span>家</li>
                        <li><button class="btn">继续接入网店</button></li>
                        <li><a>京东到家网店接入指南</a></li>
                    </ul>
                </header>
                <article>
                    <ul>
                        <li class="head">
                            <ul>
                                <li>网店名称</li>
                                <li>更新时间</li>
                                <li>授权到期时间</li>
                                <li>导入总单量</li>
                                <li style="display: flex;justify-content: space-around">
                                    <div style="border-right: 1px solid #d0d0d0;width: 100%">推送地址</div>
                                    <div style="width: 100%">自动接单<span class="glyphicon glyphicon-question-sign" style="color: #1b9dd7;padding-left: 5px"></span></div>
                                </li>
                                <li>操作</li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>相思递鲜花</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>花好美花艺</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>天蓝蓝艺馆</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>BurNing</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                        <li class="content">
                            <ul>
                                <li>Gakki</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>2018-12-02 12:12:08</li>
                                <li>582</li>
                                <li>
                                    <div style="position:absolute;left: 16.5%">
                                        <a>推送地址</a>
                                    </div>
                                    <div class="open1" onclick="onOff(this)"style="left: 75%">
                                        <div class="open2"></div>
                                    </div>
                                </li>
                                <li><a>授权更新</a></li>
                            </ul>
                        </li>
                    </ul>
                </article>
                <div aria-label="Page navigation" class="pages">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--百度外卖网店接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/baidu.png" width="40" height="40" title=""/> </li>
                        <li><h3>百度外卖网店接入</h3></li>
                        <li style="margin-right: 0">百度外卖商家账号授权登录转单宝平台即可接入成功。</li>
                        <li><button class="btn">继续接入网店</button></li>
                        <li><a>百度外卖网店接入指南</a></li>
                    </ul>
                </header>
                <article style="padding: 20px 63px">
                    <p>创建应用申请获取“app_ID”和“APP_SECRET”。<a>进入百度外卖开放平台>></a></p>
                    <p>接入百度外卖连锁店，设置网店的接入信息并选择“<span style="color: #fe0000">测试配置</span>”。</p>
                    <p>进行接入店铺的API接口数据测试，并设置网店的信息类型为“<span style="color: #fe0000">上线配置</span>”。</p>
                </article>
            </div>
            <!--B2C独立网站API接入-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/app-api.png" width="40" height="40" title=""/> </li>
                        <li><h3>B2C独立网站API接入</h3></li>
                        <li style="margin-right: 0">独立B2C网站API接入转单宝。</li>
                        <li><button class="btn">继续接入网店</button></li>
                    </ul>
                </header>
                <article style="padding: 20px 63px">
                    <p>拥有独立B2C商城的转单宝用户，我们提供了快捷转单派发的API接口，可下载我们提供的开发文档根据里面的说明进行开发。</p>
                    <p><a>点击查看转单宝API开发者文档手册>></a></p>
                    <p>通过API接口可批量导入独立商城订单到转单宝平台，也可通过接口直接在自己的商城后台进行一键转单派发到转单宝平台。</p>
                    <p>如需技术支持请拨打客服热线：023-88159156    转单宝技术支持群：493048122</p>
                </article>
            </div>
            <!--Excel批量导入到网单-->
            <div class="api_list">
                <header>
                    <ul>
                        <li><img src="Storeaccess/public/image/app-Excel.png" width="40" height="40" title=""/> </li>
                        <li><h3>Excel批量导入到网单</h3></li>
                        <li style="margin-right: 0">下载平台提供的Excel导入网单示例，填充订单信息后即可批量导入订单到网单管理。</li>
                        <li style="float: right"><button class="btn">立即导入</button></li>
                    </ul>
                </header>
                <article style="padding: 20px 63px">
                    <p>请先下载平台提供的Excel导入网单示例。</p>
                    <p><a>点击下载Excel网单导入示例>></a></p>
                    <p>将订单信息填写完善到Excel导入示例中，再将已完善的Excel示例上传导入到网单即可完成。</p>
                </article>
            </div>
        </div>
    </div>

<!--底部-->
<div class="bg-f3f3f3">
    <div class="zdb-layout">
        <div class="zdb-foot row  clearfix f12">
            <div class="col-md-6">
                <a href="http://www.zhuandan.com/intro/about_me.html" target="_blank">关于转单宝</a><a href="http://www.zhuandan.com/intro/shangwuhezuo.html" target="_blank">商务合作</a><a href="http://www.zhuandan.com/intro/LianXiWoMen.html" target="_blank">联系我们</a><a href="http://www.zhuandan.com/intro/ShiYongXieYi.html" target="_blank">使用协议</a><a href="http://www.zhuandan.com/intro/GuangGaoFuWu.html" target="_blank">广告服务</a>				<a href="/help.html" target="_blank">帮助中心</a>
                <a href="/support.html" target="_blank">意见反馈</a>
                <a href="/news.html" target="_blank">转单宝动态</a>
            </div>
            <div class="col-md-6 txt-fr">
                Copyright &copy; 2012-2018 Zhuandan.com 版权所有
                <span class="sep">|</span>
                <a href="http://www.miibeian.gov.cn" target="_blank">渝ICP备12002628号-7</a>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript" src="Storeaccess/public/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="Storeaccess/public/js/bootstrap.js"></script>
    <script>
        var openClose = false;
        var a = 1;
        console.log(openClose);
        function onOff (obj) {
            //console.log(1+'?');
            console.log(openClose);
            if(openClose==false){
                obj.firstElementChild.style.left='0';
                obj.style.backgroundColor='#b9b5b5';
                openClose=true;
            }else{
                obj.firstElementChild.style.left='20px';
                obj.style.backgroundColor='#1b9dd7';
                openClose=false;
            }
        }
        window.onload=function () {
            // var ajax = new XMLHttpRequest();
            // ajax.open('post','http://192.168.18.99/Storeaccess/');
            // ajax.send();
            // ajax.onreadystatechange = function () {
            //     if (ajax.readyState==4 &&ajax.status==200) {
            //         console.log(111);
            //     }
            // }
            $.ajax({
                url: 'http://tp.com/',
                data: {'id':2},
                type: 'GET',
                success: function (data) {
                    console.log(data);
                },
                error:function (err){	//失败回调函数
                    console.log(err);
                }
            });
        }
    </script>
</body>
</html>