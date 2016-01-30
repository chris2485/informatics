@extends('master')

@section('title')
    Home
@endsection

@section('content')

    <div class="kd_container" style="position: absolute">
        <div class="kd_bg_container">
            <div class="img" id="1" style="background-image:url('images/2.jpg')" >
                <img src="images/1.jpg" alt=""/>
                <div class="kd_black"></div>
                <div class="kd_main">
                    <h1>NOW ACCEPTING<br /><span>SENIOR HIGH SCHOOL</span><br />STUDENTS</h1>
                    <div style="clear: both"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div style="clear: both"></div>
                    <p><a href="#"><span>APPLY NOW!</span><img src="files/button_design.png"></a></p>
                </div>
            </div>
            <div class="img" id="2" style="background-image: url('images/2.jpg')">
                <div class="kd_black"></div>
                <div class="kd_main">
                    <h1>The <span>RIGHT</span> course for you is based on your <span>TYPE</span> of personality.</h1>
                    <div style="clear: both"></div>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div style="clear: both"></div>
                    <p><a href="#"><span>APPLY NOW!</span><img src="files/button_design.png"></a></p>
                </div>
            </div>
            <div class="img" id="3" style="background-image: url('files/3.jpg')">
                <div class="kd_black"></div>
                <div class="kd_main">
                    <h1>Your 1st Year and 2nd Year in BSIT is <span>FAST</span> and <span>DONE</span>.</h1>
                    <div style="clear: both"></div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div style="clear: both"></div>
                    <p><a href="#"><span>APPLY NOW!</span><img src="files/button_design.png"></a></p>
                </div>
            </div>
            <div class="kd_buttons">
                <div class="kd_content2">
                    <div id="b_1" class="selected" onclick="gotoImage(1)"></div>
                    <div id="b_2" onclick="gotoImage(2)"></div>
                    <div id="b_3" onclick="gotoImage(3)"></div>
                </div>
            </div>
            <div class="kd_arrow">
                <div onclick="next()"><img src="files/web_arrow.png" width="80"/></div>
            </div>
            <div class="kd_brain">
                <img src="files/brain.png" height="100"/>
            </div>
            <div class="kd_mobile_arrow">
                <div onclick="next()"><img src="files/arrow_mobile.png" width="80"/></div>
            </div>
        </div>
        <div class="kd_info_bar">
            <img class="kd_logo" src="files/informatics.png"/>
            <div class="kd_why_container">
                <h3><span><h6>WHY</h6></span>INFORMATICS?</h3>
                <p style="text-align: justify">Informatics Philippines is the leading International
                    provider of ICT training and education in the Philippines
                    since 1994. Informatics Philippines offers corporate productivity
                    business solutions higher education from undergraduate to postgraduate
                    degree completion.</p>
                <p style="text-align: right"><img src="files/button_design.png"/></p>
                <p class="kd_readmore"><a href="#">READ MORE</a></p>
            </div>
            <div class="kd_who_container">
                <h3><span><h6>WHO ARE</h6></span>INFORMATICS?</h3>
                <p style="text-align: justify">People who go to Informatics are SHS, BS, foreign-
                    exchange students, game designers, animators, mobile
                    and wed developers; people who train for office skills, call center TESDA.</p>
                <p style="text-align: right"><img src="files/button_design.png"/></p>
                <p class="kd_readmore"><a href="#">READ MORE</a></p>
            </div>
            <center><hr width="250"></center>
            <div class="kd_links">
                <center>
                    <img src="files/fb.png"/>
                    <img src="files/yt.png"/>
                    <img src="files/twt.png"/>
                </center>
            </div>
        </div>
        <div class="kd_mobile_info_bar">
            <img class="kd_logo" src="files/informatics.png" />
            <div class="kd_mobile_links">
                <img src="files/fb.png"/>
                <img src="files/yt.png"/>
                <img src="files/twt.png"/>
            </div>
            <div class="kd_mobile_info_links">
                <img src="files/question.png"/>
                <img src="files/exclamation.png"/>
            </div>
        </div>
        <div class="kd_nav_bar">
            <div class="kd_active">
                <center><img src="files/home.png"/></center>
                <p>HOME</p>
            </div>
            <div class="kd_inactive">
                <center><img src="files/courses.png"/></center>
                <p>COURSES</p>
            </div>
            <div class="kd_inactive">
                <center><img src="files/branch.png"/></center>
                <p>BRANCH</p>
            </div>
            <div class="kd_inactive">
                <center><img src="files/aboutus.png"/></center>
                <p>ABOUT</p>
            </div>
            <div class="kd_inactive">
                <center><img src="files/call.png"/></center>
                <p>CONTACT US</p>
            </div>
            <div class="kd_inactive">
                <center><img src="files/call.png"/></center>
                <p>i Life</p>
            </div>
        </div>
    </div>



@endsection

<script type="text/javascript">
    var fontSize = $('.kd_nav_bar').width() * .1;

    $('.kd_nav_bar .kd_active p').css({ 'font-size' : fontSize + 'px' });

    $(document).resize(function(){
        var fontSize = $('.kd_nav_bar').width() * .1;
        $('.kd_nav_bar .kd_active p').css({ 'font-size' : fontSize + 'px' });
    });

    sliderInt = 1;
    sliderNext = 2;

    $('.kd_container div#1').fadeIn('slow');
    startSlider();

    function gotoImage(num){
        window.clearInterval(loop);

        $('.kd_container div.img').fadeOut('slow');
        $('.kd_container div#' + num).fadeIn('slow');

        $('.kd_container .kd_buttons div.selected').removeClass('selected');
        $('.kd_container .kd_buttons div#b_' + num).addClass('selected');

        sliderInt = num;
        sliderNext = num + 1;

        startSlider();
    }

    $('.kd_container div.img').hover(
            function(){
                window.clearInterval(loop);
            },
            function(){
                startSlider();
            });

    function startSlider() {
        count = 3;

        loop = setInterval(function () {

            if (sliderNext > count) {
                sliderNext = 1;
                sliderInt = 1;
            }

            $('.kd_container div.img').fadeOut('fast');
            $('.kd_container div#' + sliderNext).fadeIn('slow');

            $('.kd_container .kd_buttons div.selected').removeClass('selected');
            $('.kd_container .kd_buttons div#b_' + sliderNext).addClass('selected');

            sliderInt = sliderNext;
            sliderNext++;

        }, 5000);
    }
    function next(){
        sliderInt = sliderNext;
        sliderNext++;
        showSlide(sliderInt);
    }

    function showSlide(id){
        window.clearInterval(loop);

        if(id > count){
            id=1;
        }else if(id<1){
            id=count;
        }
        $('.kd_container div.img').fadeOut('slow');
        $('.kd_container div#' + id).fadeIn('slow');

        $('.kd_container .kd_buttons div.selected').removeClass('selected');
        $('.kd_container .kd_buttons div#b_' + id).addClass('selected');

        sliderInt = id;
        sliderNext = id + 1;

        startSlider();
    }
</script>

