<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head Start-->
<head>
    <pre> <?php print_r('$CurDir ='.Yii::app()->request->baseUrl); ?></pre>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Acalia Development | Free CSS Template | Csstemplatesmarket.com</title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/css/style.css" media="screen"/>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/js/jquery.core.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/js/jquery.superfish.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/js/jquery.jcarousel.pack.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/js/jquery.scripts.js"></script>
</head>
<!-- Head End -->

<!-- Body Start -->
<body>
<div id="wrap">
    <div class="top_corner"></div>
    <div id="main_container">

        <!--  BodyHead Start -->
        <div id="header">
            <div id="logo"><a href="index.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/logo.gif" alt="" title="" border="0"/></a></div>

            <a href="make-a-donation.html" class="make_donation"></a>

            <div id="menu">
                <ul>
                    <li><a class="current" href="index.html" title="">Home</a></li>
                    <li><a href="about.html" title="">About Company</a></li>
                    <li><a href="#" title="">Projects</a></li>
                    <li><a href="#" title="">Clients</a></li>
                    <li><a href="#" title="">Testimonials</a></li>
                    <li><a href="contact.html" title="">Contact</a></li>
                </ul>
            </div>


        </div>
        <!--  BodyHead End -->

        <!--  Middle Banner Start -->
        <div class="middle_banner">

            <div class="featured_slider">
                <!-- begin: sliding featured banner -->
                <div id="featured_border" class="jcarousel-container">
                    <div id="featured_wrapper" class="jcarousel-clip">
                        <ul id="featured_images" class="jcarousel-list">
                            <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/slider_photo.jpg" width="965" height="280" alt=""/></li>
                            <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/slider_photo2.jpg" width="965" height="280" alt=""/></li>
                            <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/slider_photo3.jpg" width="965" height="280" alt=""/></li>
                            <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/slider_photo2.jpg" width="965" height="280" alt=""/></li>
                        </ul>
                    </div>
                    <div id="featured_positioner_desc" class="jcarousel-container">
                        <div id="featured_wrapper_desc" class="jcarousel-clip">
                            <ul id="featured_desc" class="jcarousel-list">
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <ul id="featured_buttons" class="clear_fix">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                    </ul>
                </div>
                <!-- end: sliding featured banner -->
            </div>

        </div>
        <!--  Middle Banner End -->

        <!-- Center_Content START -->
        <div class="center_content">

            <div class="home_section_left">
                <?php print_r($this->newsData) ?>

                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/icon1.gif" alt="" title="" class="home_section_icon" border="0">

                <h2 class="home_title">新闻</h2>
                <div class="home_subtitle">标题</div>

                <div class="home_section_thumb">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/home_section_thumb1.jpg" alt="" title="" border="0">
                </div>
                <p>
                    <?php foreach ($this->newsData as $news): ?>
                    <span> <?php echo CHtml::link(CHtml::encode($news), array('/news'), array('target'=>'_blank')) ?> </span>
                        <br/><br/>
                    <?php endforeach; ?>

                    <?php foreach ($this->multiData as $item): ?>
                        <?php
//                        print_r($item['title'])
                        ?>
                        <h3><?php echo CHtml::link(CHtml::encode($item['title']), 'http://www.163.com') ?> </h3>
                        <span><?php echo CHtml::encode($item['content']) ?> </span>
                        <br><br>
                    <?php endforeach; ?>
                </p>
                <p>

                </p>
                <a href="" class="more"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/more.gif" alt="" title="" border="0"></a>
                <div class="clear"></div>
            </div>


            <div class="home_section_left">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/icon2.gif" alt="" title="" class="home_section_icon" border="0">

                <h2 class="home_title">Who we are</h2>
                <div class="home_subtitle">Tempor incididunt ut labore</div>

                <div class="home_section_thumb">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/home_section_thumb2.jpg" alt="" title="" border="0">
                </div>
                <p><span>Lorem ipsum dolor sit ame</span><br>
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                    <br> <br>
                    <span>Lorem ipsum dolor sit ame</span><br>
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
                <a href="" class="more"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/more.gif" alt="" title="" border="0"></a>
                <div class="clear"></div>
            </div>

            <div class="home_section_left">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/icon3.gif" alt="" title="" class="home_section_icon" border="0">

                <h2 class="home_title">Special services</h2>
                <div class="home_subtitle">Sed do eiusmod tempor</div>

                <div class="home_section_thumb">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/home_section_thumb3.jpg" alt="" title="" border="0">
                </div>
                <p><span>Lorem ipsum dolor sit ame</span><br>
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                    <br> <br>
                    <span>Lorem ipsum dolor sit ame</span><br>
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
                <a href="" class="more"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/more.gif" alt="" title="" border="0"></a>
                <div class="clear"></div>
            </div>

            <div class="left_block_wide">
                <h2>Latest Projects</h2>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/p1.jpg" alt="" title="" border="0" class="projects"/></a>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/p2.jpg" alt="" title="" border="0" class="projects"/></a>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/acalia/images/p3.jpg" alt="" title="" border="0" class="projects"/></a>
            </div>

            <div class="right_block">
                <h2>Newsletter Sign up</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit consequat.
                </p>
                <form id="newsletter">
                    <input type="text" name="" class="newsletter_input"/>
                    <input type="submit" name="" class="newsletter_submit" value="Sign up"/>
                </form>

            </div>


            <div class="clear"></div>
        </div>
        <!-- Center_Content END -->

        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>

        <!-- Footer START -->
        <div class="footer">
            <div class="copyright">Template by <a href="https://themefurnace.com/free-templates" rel="designer">ThemeFurnace</a>
            </div>

            <div class="footer_links">
                <a class="current" href="index.html" title="">Home</a>
                <a href="#" title="">About Company</a>
                <a href="#" title="">Projects</a>
                <a href="#" title="">Clients</a>
                <a href="#" title="">Testimonials</a>
                <a href="contact.html" title="">Contact</a>
            </div>
        </div>
        <!-- Footer END -->

    </div>
</div>
</body>

<!-- Body End-->
</html>
