<div id="fb-root"></div>
<script type="text/javascript" language="javaScript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1847000818914467";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="tab-pane active" id="overview">
    <div class="tecabox">
        <div class="tecabox-heading">
            <div class="icon bg-pink"><i class="fa fa-star"></i></div>
            <h4>Information</h4>
        </div>
        <div class="tecabox-body">
            <div class="course-external">
                <div class="course-info">
                    <div class="span4">
                        <div class="course-external">
                            <img class="course-avatar" src="<?php echo getCourseSummaryFile($course) ?>" alt="">
                        </div>
                    </div>
                    <div class="span8">
                        <h1><?php echo $course->fullname ?></h1>
                        <div class="span4 nomargin">
                            <div>Duration: 1:40</div>
                            <div>Created Date: <?php echo date("d-m-Y", $course->timecreated) ?></div>
                            <div>Enrolled: 149</div>
                            <div>View: 1500</div>
                            <div>Like: 1400</div>
                            <div class="shareaction">
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                            </div>
                            <?php
                            echo $OUTPUT->blocks('c-ov-like', 'span4 block-remove');
                            ?>
                        </div>
                        <?php echo $OUTPUT->blocks('c-ov-rate', 'span8 block-remove'); ?>
                    </div>
                </div>
                <div class="course-summary">
                    <h3>Summary</h3>
                    <div>
                        <?php echo $course->summary ?>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="margintop-box">
        <?php echo $OUTPUT->blocks('c-ov-left', 'span6'); ?>
        <?php echo $OUTPUT->blocks('c-ov-right', 'span6'); ?>
    </div>
    <div class="margintop-box">
        <h4 class="teca-title">Highlight</h4>
        <div class="teca-courses course4item">
            <div class="container-fluid">
                <?php foreach ($highlight as $coursehl) {
                    $courseurl = new moodle_url('/course/view.php', array('id' => $coursehl->id));
                    $o = (object)array(
                        'name' => $coursehl->fullname,
                        'summary' => $coursehl->summary,
                        'image' => getCourseSummaryFile($coursehl),
                        'url' => $courseurl
                    );
                    ?>
                    <div class="course-item span3">
                        <div class="avatar">
                            <img src="<?php echo $o->image ?>" alt="Picture">
                        </div>
                        <div class="title"><a href="<?php echo $o->url ?>"><?php echo $o->name ?></a></div>
                        <div class="summary">
                            <?php echo $o->summary ?>
                        </div>
                        <div class="ctr">
                            <div class="pull-left"><a href=""><i class="fa fa-eye"></i>120</a></div>
                            <div class="pull-right"><a href=""><i class="fa fa-heart"></i>120</a></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="margintop-box">
        <h4 class="teca-title">Social Comment</h4>
        <div class="tecabox">
            <div class="fb-comments" data-href="http://<?php echo $_SERVER['SERVER_NAME'] . "/course/view.php?id=" . $course->id ?>" data-numposts="5"></div>
        </div>
    </div>
</div>