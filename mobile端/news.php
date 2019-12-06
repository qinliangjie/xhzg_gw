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
    <link rel="stylesheet" type="text/css" href="/mobile/css/mobilenew.css">
    <!-- css兼容 -->
    <!-- <script type="text/javascript" src="https://app.talesofadventure.novelga.me/usr/themes/pcAndMobile//mobile/js/modernizr.custom.53451.js"></script> -->
    <style type="text/css">
        .animated {
            animation-duration: 1s;
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
    <a href="javascript:history.back(-1)"><img class="gotonav" src="/mobile/images/comback.png" /></a>

    <div class="secoundbody">
        <img class="newtitle" src="/mobile/images/titlenew.png" />
        <!-- 新闻tab -->
        <div class="newwrap">
            <div id="newnav">
                <div data-id="newest" class="newese active">最新</div>
                <div data-id="news" class="news">新聞</div>
                <div data-id="strategy" class="psp">活動</div>
                <div data-id="notices" class="notice">公告</div>
                <div class="clear"></div>
            </div>
            <div id="sh">
                <div class="targetdom active" id="newest">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-new', 'pageSize=5&type=category','slug=new')->to($new); ?>
                        <?php if ($new->have()): ?>
                        <?php while($new->next()): ?>

                        <a href="<?php echo $new->permalink ?>">
                            <li>
                                <span class="ellipsis-one"><?php $new->title() ?></span>
                                <span class="ellipsis-two"><?php $new->description() ?></span>
                                <span><?php echo date('Y-m-d',$new->created); ?></span>
                            </li>
                        </a>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="targetdom" id="news">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-news', 'pageSize=5&type=category','slug=news')->to($news); ?>
                        <?php if ($news->have()): ?>
                            <?php while($news->next()): ?>

                                <a href="<?php echo $news->permalink ?>">
                                    <li>
                                        <span class="ellipsis-one"><?php $news->title() ?></span>
                                        <span class="ellipsis-two"><?php $news->description() ?></span>
                                        <span><?php echo date('Y-m-d',$news->created); ?></span>
                                    </li>
                                </a>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="targetdom" id="notices">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-active', 'pageSize=5&type=category','slug=active')->to($active); ?>
                        <?php if ($active->have()): ?>
                            <?php while($active->next()): ?>

                                <a href="<?php echo $active->permalink ?>">
                                    <li>
                                        <span class="ellipsis-one"><?php $active->title() ?></span>
                                        <span class="ellipsis-two"><?php $active->description() ?></span>
                                        <span><?php echo date('Y-m-d',$active->created); ?></span>
                                    </li>
                                </a>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="targetdom" id="strategy">
                    <ul>
                        <?php $this->widget('Widget_Archive@category-notice', 'pageSize=5&type=category','slug=notice')->to($notice); ?>
                        <?php if ($notice->have()): ?>
                            <?php while($notice->next()): ?>

                                <a href="<?php echo $notice->permalink ?>">
                                    <li>
                                        <span class="ellipsis-one"><?php $notice->title() ?></span>
                                        <span class="ellipsis-two"><?php $notice->description() ?></span>
                                        <span><?php echo date('Y-m-d',$notice->created); ?></span>
                                    </li>
                                </a>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>

</main>
<script type="text/javascript" src="/mobile/js/flexible.js"></script>
<script type="text/javascript" src="/mobile/js/jquery.min.js"></script>
<script src="/mobile/js/swiper.min.js"></script>
<script src="/mobile/js/mobilenew.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83675286-53"></script> -->
<script>


</script>
</body>

</html>