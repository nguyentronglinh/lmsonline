<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Parent theme: Bootstrapbase by Bas Brands
 * Built on: Essential by Julian Ridden
 *
 * @package   theme_lambda
 * @copyright 2014 redPIthemes
 *
 */

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>"/>
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <?php require_once(dirname(__FILE__) . '/includes/fonts.php'); ?>

    <!--    <link rel="stylesheet" href="/theme/lambda/style/all.css" type="text/css">-->
    <!--    <link rel="stylesheet" href="/theme/lambda/style/css.css" type="text/css">-->
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<div id="wrapper">

    <?php require_once(dirname(__FILE__) . '/includes/header.php'); ?>

    <div class="text-center" style="line-height:1em;">
        <img src="<?php echo $CFG->wwwroot; ?>/theme/lambda/pix/bg/shadow.png" class="slidershadow" alt="">
    </div>

    <div id="page" class="container-fluid">

        <?php if (isloggedin() and !isguestuser()) { ?>
            <header id="page-header" class="clearfix">
                <div id="page-navbar" class="clearfix">
                    <div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
                    <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
                </div>
            </header>
        <?php } ?>


        <div id="page-content" class="row-fluid">
            <?php
            //                echo $OUTPUT->course_content_header();
            ?>
            <div class="hidden">
                <?php
                echo $OUTPUT->main_content();
                //                echo $OUTPUT->course_content_footer();
                ?>
            </div>
            <section id="region-main" class="span6">
                <link rel="stylesheet" href="/theme/lambda/style/bhxh.css">
                <!--add-->
                <div class="el-profile-block clearfix" style="background-color: #ececec; padding-left: 10px;">
                    <div class="col-sm-7 col-md-7 el-profile-info">
                        <label class="profile-info-username" for="" style="font-size: 25px;">Quản trị Thành viên</label>
                        <a class="profile-info-link" href="/user/profile.php?id=2&amp;returnto=profile" style="font-size: 18px;">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Chỉnh sửa thông tin cá nhân</a>
                    </div>
                    <div class="col-sm-5 col-md-5 el-certificate">
                        <img class="certificate-img" src="/theme/lambda/pix/certificate_icon.png">
                        <div class="certificate-info">
                            <p>
                                <strong>Thông tin chung</strong>
                                <br> Chưa có khóa học hoàn thành
                            </p>
                        </div>

                    </div>
                </div>
                <div style="height: 20px;"></div>
                <ul id="enroltabs" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a id="0" role="tab" data-toggle="tab" aria-controls="tab-content-1" aria-expanded="true" href="#tab-content-1">Chương trình học</a>
                    </li>
                    <li role="presentation" class="">
                        <a id="1" role="tab" data-toggle="tab" aria-controls="tab-content-2" aria-expanded="false" href="#tab-content-2">Khóa học đã hoàn thành</a>
                    </li>
                </ul>
                <!---->
                <div role="tabpanel" id="tab-content-1" class="tab-pane fade active in" aria-labelledby="0-tab">
                    <?php
                    $enrolls = theme_lambda_get_new_enroll();

                    foreach ($enrolls as $e) {
                        ?>
                        <article class="" data-courseid="<?php echo $e['id'] ?>" id="tab-content-1">
                            <div class="coursename">
                                <h3><a class="" href="<?php echo $e['url'] ?>"><?php echo $e['name'] ?></a><span class="badge el-badge">0%</span></h3>
                            </div>
                            <section class="row">
                                <div class="course-image col-sm-3" style="width: 25%;">
                                    <a class="" href="<?php echo $e['url'] ?>">
                                        <img class="course-img" src="<?php echo $e['image'] ?>" width="100px;">
                                    </a>
                                </div>
                                <div class="summary col-sm-9" style=" ">
                                    <p><?php echo $e['summary'] ?></p>
                                    <a class="btn btn-primary btn-el-reg" href="<?php echo $e['url'] ?>">Học ngay</a>
                                </div>
                            </section
                        </article>
                        <?php
                    }
                    ?>
                </div>
                <div role="tabpanel" id="tab-content-2" class="tab-pane fade " aria-labelledby="1-tab">Bạn chưa hoàn thành khóa học nào</div>


            </section>
            <!--end 1-->
            <!--2-->
            <div class="span4 right-block pull-right">
                <div class="coursesearchbox">
                    <div for="" class="searchbox-title">Tìm kiếm khoá học</div>
                    <div class="searchbox-input">
                        <input type="text" id="" size="" name="search" value="">
                        <input type="submit" class="search-btn" value="Tìm kiếm">
                    </div>
                </div>

                <!--3-->
                <div class="right-block col-sm-3">
                    <div class="el-sidebar">
                        <h3 class="el-sidebar-heading">Khóa học đề xuất</h3>
                        <?php
                        $recommended_list = theme_lamba_get_recommended_courses();
                        foreach ($recommended_list as $recommended) {
                            ?>
                            <article class="" data-courseid="<?php echo $recommended['id']; ?>">
                                <section>
                                    <div class="coursename">
                                        <a class="" href="<?php echo $recommended['url']; ?>"><?php echo $recommended['name']; ?></a>
                                    </div>
                                    <div class="course-image">
                                        <a class="" href="<?php echo $recommended['url']; ?>">
                                            <img class="course-img" src="<?php echo $recommended['image']; ?>" width="120px; ">
                                        </a>
                                    </div>
                                </section>
                            </article>

                            <?php
                        }
                        ?>

                        <!---->
                        <div class="el-buttons"></div>
                    </div>
                </div>
                <!--end 3-->
            </div>
            <!--end 2-->


            <a href="#top" class="back-to-top"><i class="fa fa-chevron-circle-up fa-3x"></i>
                <p><?php print_string('backtotop', 'theme_lambda'); ?></p></a>

        </div>

        <footer id="page-footer" class="container-fluid">
            <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
        </footer>

        <?php echo $OUTPUT->standard_end_of_body_html() ?>


        <!--[if lte IE 9]>
        <script src="<?php echo $CFG->wwwroot;?>/theme/lambda/javascript/ie/iefix.js"></script>
        <![endif]-->


        <script>
            jQuery(document).ready(function ($) {
                $('.navbar .dropdown').hover(function () {
                    $(this).addClass('extra-nav-class').find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
                }, function () {
                    var na = $(this)
                    na.find('.dropdown-menu').first().stop(true, true).delay(100).slideUp('fast', function () {
                        na.removeClass('extra-nav-class')
                    })
                });

            });

            jQuery(document).ready(function () {
                var offset = 220;
                var duration = 500;
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.back-to-top').fadeIn(duration);
                    } else {
                        jQuery('.back-to-top').fadeOut(duration);
                    }
                });

                jQuery('.back-to-top').click(function (event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })
            });
        </script>


    </div>
</div>
</body>
</html>
