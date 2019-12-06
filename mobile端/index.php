<!DOCTYPE html>
<html>

<head>
    <title>亂世江山，誰主沉浮</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- 通过自有函数输出HTML头部信息 -->
    <meta name="keywords" content="卡牌遊戲,三國志,英雄,群英,隋唐演義,山海情緣,神話,封神,問情,戰國,軍團,角色扮演,RPG,天下,策略遊戲,七雄爭霸,逆轉三國,楚留香,笑傲江湖,亂世江湖,風雲,手機遊戲,MoreFun Game,MFG,魔方">
    <meta name="description" content="亂世江山，人才輩出；名將美人，不可勝數。《亂鬥英雄志》，立體卡牌特色玩法，引領全新遊戲體驗！">
    <link rel="shortcut icon" href="/mobile/images/ico.ico" type="image/x-icon" />
    <!-- <meta name="generator" content="Typecho 1.0/14.10.10">
    <meta name="template" content="pcAndMobile"> -->
    <script type="text/javascript" src="/mobile/js/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="/mobile/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/mobile/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/mobile/css/mobile-index.css">
    <link rel="stylesheet" type="text/css" href="/mobile/css/mobile.css">
    <!-- css兼容 -->
    <!-- <script type="text/javascript" src="https://app.talesofadventure.novelga.me/usr/themes/pcAndMobile//mobile/js/modernizr.custom.53451.js"></script> -->
    <style type="text/css">
        .animated {
            animation-duration: .6s;
            animation-fill-mode: both;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translate3d(3.5%, 0, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }
        .fadeInRight {
            animation-name: fadeInRight;
        }
        .flipInX {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            animation-name: flipInX;
        }
    </style>
</head>

<body>
<main>
    <div class="nav">
        <img class="gotonav" src="/mobile/images/detail.png" />
        <ul>
            <li><a href="/index.php/category/new/">
                    新聞公告
                    <img src="/mobile/images/underline.png" alt="">
                </a></li>
            <li>
                <a href="#gameContant" onclick="closeAll()">
                    遊戲特色
                    <img src="/mobile/images/underline.png" alt="">
                </a>
            </li>
            <li>
                <a href="/index.php/gl.html">
                    遊戲攻略
                    <img src="/mobile/images/underline.png" alt="">
                </a>
            </li>
            <li>
                <a href="#gamejewel" onclick="closeAll()">
                    寶石圖鑒
                    <img src="/mobile/images/underline.png" alt="">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/LDYXZ/">

                Facebook粉絲專頁
                <img src="/mobile/images/underline.png" alt="">
                </a>
            </li>
            <!-- <li class="showcode">
                官方WeChat群組
                <img src="/mobile/images/wechat.jpg" alt="" class="lineimg">
                <img src="/mobile/images/underline.png" alt="">
            </li>
            <li class="showcode">
                官方Line群組
                <img src="/mobile/images/line.jpg" alt="" class="lineimg">
                <img src="/mobile/images/underline.png" />
            </li> -->
        </ul>
    </div>
    <div class="mainpic">
        <div class="play"></div>
        <img class="showpic2" src="/mobile/images/logo.png" />
        <!-- 几个下载按钮 -->
        <a href="https://go.onelink.me/app/3839ca9d"><img class="ios" src="/mobile/images/ios.png" /></a>
        <a href="https://go.onelink.me/app/19326fb1"><img class="ggp" src="/mobile/images/GGP.png" /></a>
        <a href="https://cycdn.gamemorefun.com/LSGame/ldyxz.apk"><img class="andriod" src="/mobile/images/Andriod.png" /></a>
    </div>
    <div class="secoundbody">
        <img class="newtitle" src="/mobile/images/new.png" />
        <div class="swiper-container swiper-container1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="" src="/mobile/images/banner1.jpg" />
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- 新闻tab -->
        <div class="newwrap">
            <div id="newnav">
                <div data-id="newest" class="newese newdiv active">最新</div>
                <div data-id="notices" class="newdiv notice">新聞</div>
                <div data-id="strategy" class="newdiv psp">活動</div>
                <div data-id="actives" class="newdiv actives">公告</div>
                <div class="clear"></div>
            </div>
            <div id="sh">
                <div class="targetdom active" id="newest">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-new', 'pageSize=5&type=category','slug=new')->to($new); ?>
                        <?php if ($new->have()): ?>
                            <?php while($new->next()): ?>
                                <a style="text-decoration:none" href="<?php echo $new->permalink ?>">
                                     <li>
                                        <span class="ellipsis-one"><?php $new->title() ?></span>
                                        <span> <?php echo date('Y-m-d',$new->created); ?></span>
                                     </li>
                                 </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a class="gotomore" href="/index.php/category/new/"></a>
                    <div class="clear"></div>
                </div>
                <div class="targetdom" id="notices">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-news', 'pageSize=5&type=category','slug=news')->to($news); ?>
                        <?php if ($news->have()): ?>
                            <?php while($news->next()): ?>
                                <a style="text-decoration:none" href="<?php echo $news->permalink ?>">
                                     <li>
                                        <span class="ellipsis-one"><?php $news->title() ?></span>
                                        <span> <?php echo date('Y-m-d',$news->created); ?></span>
                                    </li>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                    <a class="gotomore" href="/index.php/category/news/"></a>
                    <div class="clear"></div>
                </div>
                <div class="targetdom" id="strategy">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-active', 'pageSize=5&type=category','slug=active')->to($active); ?>
                        <?php if ($active->have()): ?>

                            <?php while($active->next()): ?>
                            <a style="text-decoration:none" href="<?php echo $active->permalink ?>">
                                <li>
                                    <span class="ellipsis-one"><?php $active->title() ?></span>
                                    <span> <?php echo date('Y-m-d',$active->created); ?></span>
                                </li>
                             </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a class="gotomore" href="/index.php/category/active/"></a>
                    <div class="clear"></div>
                </div>
                <div class="targetdom" id="actives">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-notice', 'pageSize=5&type=category','slug=notice')->to($notice); ?>
                        <?php if ($notice->have()): ?>
                            <?php while($notice->next()): ?>
                        <a style="text-decoration:none" href="<?php echo $notice->permalink ?>">
                                 <li>
                                    <span class="ellipsis-one"><?php $notice->title() ?></span>
                                    <span> <?php echo date('Y-m-d',$notice->created); ?></span>
                                </li>
                        </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a class="gotomore" href="/index.php/category/notice/"></a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


    </div>
    <div class="threebody">
        <!-- 人物介绍   -->
        <img class="newtitle" src="/mobile/images/title3.png" style="top: 1.8rem" />
        <div class="centerbox">
            <div class="clear"></div>
            <div class="touchshow teach">
                <ul class="detail">
                    <a href="/index.php/archives/5/">
                        <li>遊戲介紹</li>
                    </a>
                    <a href="/index.php/archives/16/">
                        <li>新人技巧</li>
                    </a>
                    <a href="/index.php/archives/17/">
                        <li>新手入門</li>
                    </a>
                    <a href="/index.php/archives/18/">
                        <li>安裝說明</li>
                    </a>
                </ul>
            </div>
            <div class="touchshow system">
                <ul class="detail">
                    <a href="/index.php/archives/19/">
                        <li>武將陣容</li>
                    </a>
                    <a href="/index.php/archives/20/">
                        <li>好友系統</li>
                    </a>
                    <a href="/index.php/archives/21/">
                        <li>裝備系統</li>
                    </a>
                    <a href="/index.php/archives/24/">
                        <li>專屬武器</li>
                    </a>
                </ul>
            </div>
            <div class="touchshow playing">
                <ul class="detail">
                    <a href="/index.php/archives/25/">
                        <li>極限挑戰</li>
                    </a>
                    <a href="/index.php/archives/26/">
                        <li>皇陵探寶</li>
                    </a>
                    <a href="/index.php/archives/27/">
                        <li>競技場</li>
                    </a>
                    <a href="/index.php/archives/28/">
                        <li>演武場</li>
                    </a>
                </ul>
            </div>
            <div class="touchshow transcript">
                <ul class="detail">
                    <a href="/index.php/archives/29/">
                        <li>主線副本</li>
                    </a>
                    <a href="/index.php/archives/30/">
                        <li>精英副本</li>
                    </a>
                    <a href="/index.php/archives/31/">
                        <li>主將副本</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="clear"></div>

    </div>
    <div class="fourbody">
        <img class="newcharact newtitle" src="/mobile/images/title4.png" style="top: .2rem" />
        <div class="totalCh">
            <img src="/mobile/images/total.png" alt="" id="totalImg" />
            <div class="totalMan" data-id="total" onclick="changTotal('manCharacter',this)"></div>
            <div class="totalWomen" data-id="totalnv" onclick="changTotal('womenCharacter',this)"></div>
        </div>
        <div class="manCharacter totalItem active">
            <div class="charactPic" >
                <img class="charact_item" src="/mobile/images/1.png" />
                <img class="charact_item" src="/mobile/images/2.png" />
                <img class="charact_item" src="/mobile/images/3.png" />
                <img class="charact_item" src="/mobile/images/4.png" />
                <!--  <img class="charact_item" src="/mobile/images/5.png" />
                 <img class="charact_item" src="/mobile/images/6.png" />
                 <img class="charact_item" src="/mobile/images/7.png" />
                 <img class="charact_item" src="/mobile/images/8.png" /> -->
            </div>
            <div class="charactShark" >
                <div class="role" data-id="1" id="roleOne">
                    <img class="normalpic" src="/mobile/images/11.png" />
                    <img class="hovers" src="/mobile/images/111.png" />
                </div>
                <div class="role" data-id="2">
                    <img class="normalpic" src="/mobile/images/22.png" />
                    <img class="hovers" src="/mobile/images/222.png" />
                </div>
                <div class="role" data-id="3">
                    <img class="normalpic" src="/mobile/images/33.png" />
                    <img class="hovers" src="/mobile/images/333.png" />
                </div>
                <div class="role" data-id="4">
                    <img class="normalpic" src="/mobile/images/44.png" />
                    <img class="hovers" src="/mobile/images/444.png" />
                </div>
                <!--  <div class="role" data-id="5">
                     <img class="normalpic" src="/mobile/images/55.png" />
                     <img class="hovers" src="/mobile/images/555.png" />
                 </div>
                 <div class="role active" data-id="6">
                     <img class="normalpic" src="/mobile/images/66.png" />
                     <img class="hovers" src="/mobile/images/666.png" />
                 </div>
                 <div class="role active" data-id="7">
                     <img class="normalpic" src="/mobile/images/77.png" />
                     <img class="hovers" src="/mobile/images/777.png" />
                 </div>
                 <div class="role active" data-id="8">
                     <img class="normalpic" src="/mobile/images/88.png" />
                     <img class="hovers" src="/mobile/images/888.png" />
                 </div> -->
            </div>
        </div>
        <div class="womenCharacter totalItem">
            <div class="charactPicnv" >
                <img class="charact_item" src="/mobile/images/5.png" />
                <img class="charact_item" src="/mobile/images/6.png" />
                <img class="charact_item" src="/mobile/images/7.png" />
                <img class="charact_item" src="/mobile/images/8.png" />
            </div>
            <div class="charactShark" >
                <div class="rolenv" data-id="1" id="rolenvOne">
                    <img class="normalpic" src="/mobile/images/55.png" />
                    <img class="hovers" src="/mobile/images/555.png" />
                </div>
                <div class="rolenv active" data-id="2">
                    <img class="normalpic" src="/mobile/images/66.png" />
                    <img class="hovers" src="/mobile/images/666.png" />
                </div>
                <div class="rolenv active" data-id="3">
                    <img class="normalpic" src="/mobile/images/77.png" />
                    <img class="hovers" src="/mobile/images/777.png" />
                </div>
                <div class="rolenv active" data-id="4">
                    <img class="normalpic" src="/mobile/images/88.png" />
                    <img class="hovers" src="/mobile/images/888.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="fivebody" id="gameContant">
        <img class="newtitle" src="/mobile/images/title5.png" style="top: 1.5rem" />
        <div class="mover">
            <!-- Swiper -->
            <div class="swiper-container swiper-container4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(/mobile/images/300-1.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(/mobile/images/300-2.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(/mobile/images/300-3.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(/mobile/images/300-4.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(/mobile/images/300-5.jpg)"></div>
                </div>
                <!-- 如果需要分页器 -->
                <!-- <div class="swiper-pagination4">
                </div> -->
            </div>
        </div>
    </div>
    <div class="sixbody" id="gamejewel">
            <img class="newtitle" src="/mobile/images/jewel/title.png" style="top: .5rem" />
            <div class="jewelBody">
                   <img src="/mobile/images/jewel/jbg.png" alt="" class="jbg">
                   <div class="gold" data-id="goldred">
                       
                   </div>
                   <div class="wood" data-id="woodred">
                       
                   </div>
                   <div class="water" data-id="waterred">
                       
                   </div>
                   <div class="fire" data-id="firered">
                       
                   </div>
                   <div class="soil" data-id="soilred">
                       
                   </div>
                   <div class="phoenix" data-id="phoenixred">
                      
                   </div>
                   <div class="dragon" data-id="dragonred">
                       
                   </div>
               </div>
        </div>
        <!-- 全屏的弹窗 -->
        <section class="showalert hide">
            <section>
                <div class="aclose"><img src="/mobile/images/jewel/close.png"></div>
                <div class="mainM">
                <img src="/mobile/images/jewel/dragonshow.png" alt="" class="jewleContent">
                <img src="/mobile/images/jewel/line.png" alt="" class="lines">
                <div class="chooseJ">
                    <img class="goldJ boxJ activeJ" data-id="goldshow" data-j="1" src="/mobile/images/jewel/11.png" >
                    <img class="woodJ boxJ" data-id="woodshow" data-j="2" src="/mobile/images/jewel/2.png">
                    <img class="waterJ boxJ" data-id="watershow" data-j="3" src="/mobile/images/jewel/3.png">
                    <img class="fireJ boxJ" data-id="fireshow" data-j="4" src="/mobile/images/jewel/4.png">
                    <img class="soilJ boxJ" data-id="soilshow" data-j="5" src="/mobile/images/jewel/5.png">
                    <img class="dragonJ boxJ" data-id="dragonshow" data-j="6" src="/mobile/images/jewel/6.png">
                    <img class="phoenixJ boxJ" data-id="phoenixshow" data-j="7" src="/mobile/images/jewel/7.png" >
                    <div class="clear"></div>
                </div>
          </div>
            </section>
        </section>
    <!-- 全屏的视频 -->
    <section class="overlay videoSection hide">
        <section>
            <div class="close"><img src="/mobile/images/close.png"></div>
            <div>
                <video style="width: 100%" controls id="gamevideo">
                    <source src="/mobile/images/show.mp4" type="video/mp4">
                </video>
            </div>
        </section>
    </section>
    <div class="clear"></div>


    <footer>
        <div class="footer">
            <!-- <em></em> -->
            <img src="/mobile/images/footer.png" />
            <ul>
                <a target="_blank" href="http://www.gamemorefun.com/">
                    <li></li>
                </a>
                <a target="_blank" href="https://www.facebook.com/tdsgz/">
                    <li></li>
                </a>
                <a target="_blank" href="https://userterms.gamemorefun.com/">
                    <li></li>
                </a>
                <a target="_blank" href="https://privacypolicy.gamemorefun.com/">
                    <li></li>
                </a>
            </ul>
        </div>
    </footer>
</main>
<script type="text/javascript" src="/mobile/js/flexible.js"></script>
<script type="text/javascript" src="/mobile/js/jquery.min.js"></script>
<script src="/mobile/js/swiper.min.js"></script>
<script src="/mobile/js/mobile.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83675286-53"></script> -->
<script>


</script>
</body>

</html>