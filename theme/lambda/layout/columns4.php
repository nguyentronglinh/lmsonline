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
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <?php require_once(dirname(__FILE__).'/includes/fonts.php'); ?>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<div id="wrapper">

    <?php require_once(dirname(__FILE__).'/includes/header.php'); ?>

    <div class="text-center" style="line-height:1em;">
        <img src="<?php echo $CFG->wwwroot;?>/theme/lambda/pix/bg/shadow.png" class="slidershadow" alt="">
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
            <section id="region-main" class="span8">
                    <article class="" >
                        <header class="coursename">
                            <h3><a class="" href="http://localhost/daotaotructuyen/course/view.php?id=2">Khóa học bồi dưỡng nghiệp vụ thu chi ngân sách</a><span class="badge el-badge">0%</span></h3>
                        </header>
                        <section class="row">
                            <div class="course-image col-sm-3">
                                <a class="" href="http://lms.hoctap.edu.vn/course/view.php?id=2"><img class="course-img" src="images/thumb.png"></a></div><div class="summary col-sm-9"><p>Hiện nay, việc tổ chức các lớp quản lý nhà nước dành cho đối tượng cán bộ, công chức là yêu cầu rất cấp bách đối với công tác cải cách hành chính.  [...]</p><a class="btn btn-primary btn-el-reg" href="http://lms.hoctap.edu.vn/course/view.php?id=2">Học ngay</a></div>
                        </section
                    </article>
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
                    <article class="coursebox" data-courseid="2">
                        <section>
                            <div class="coursename">
                                <a class="" href="http://localhost/daotaotructuyen/course/view.php?id=2">Khóa học bồi dưỡng nghiệp vụ thu chi ngân sách</a>
                            </div>
                            <div class="course-image">
                                <a class="" href="http://localhost/daotaotructuyen/course/view.php?id=2"><img class="course-img" src="images/thumb.png"></a>
                            </div>
                        </section>
                    </article>
                    <!---->
                    <article class="coursebox" data-courseid="3">
                        <section>
                            <div class="coursename">
                                <a class="" href="http://localhost/daotaotructuyen/course/view.php?id=3">Lớp bồi dưỡng Kiến thức quản lý nhà nước ngạch chuyên viên năm 2016</a>
                            </div>
                            <div class="course-image">
                                <a class="" href="http://localhost/daotaotructuyen/view.php?id=3"><img class="course-img" src="images/thumb.png"></a>
                            </div>
                        </section>
                    </article>
                    <!---->
                    <article class="coursebox" data-courseid="4">
                        <section>
                            <div class="coursename">
                                <a class="" href="http://localhost/daotaotructuyen/course/view.php?id=4">Khóa học kỹ năng mềm</a>
                            </div>
                            <div class="course-image">
                                <a class="" href="http://localhost/daotaotructuyen/course/view.php?id=4"><img class="course-img" src="images/thumb.png"></a>
                            </div>
                        </section>
                    </article>
                    <!---->
                    <div class="el-buttons"></div>
                </div>
            </div>
            <!--end 3-->
        </div>
        <!--end 2-->





        <a href="#top" class="back-to-top"><i class="fa fa-chevron-circle-up fa-3x"></i><p><?php print_string('backtotop', 'theme_lambda'); ?></p></a>

    </div>

    <footer id="page-footer" class="container-fluid">
        <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>


    <!--[if lte IE 9]>
    <script src="<?php echo $CFG->wwwroot;?>/theme/lambda/javascript/ie/iefix.js"></script>
    <![endif]-->


    <script>
        jQuery(document).ready(function ($) {
            $('.navbar .dropdown').hover(function() {
                $(this).addClass('extra-nav-class').find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
            }, function() {
                var na = $(this)
                na.find('.dropdown-menu').first().stop(true, true).delay(100).slideUp('fast', function(){ na.removeClass('extra-nav-class') })
            });

        });

        jQuery(document).ready(function() {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
        });
    </script>


</body>
</html>
