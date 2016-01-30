@extends('master')

<style>
    body{
        background-image: url("images/1.png");
    }
</style>

@section('content')

    <div class="">

        <span style="position: absolute; top:40vh; left: 25vw;">Logical: <a id="leftClicks"
                                                                            style="text-decoration: none;">0</a>%</span>
        <span style="position: absolute; top:40vh; right: 23vw;">Creative: <a id="rightClicks"
                                                                              style="text-decoration: none;">0</a>%</span>

        <img id="left-brain" src="images/PT/blue.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw;"/>
        <img id="left-brain1" src="images/PT/blue1.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain2" src="images/PT/blue2.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain3" src="images/PT/blue3.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain4" src="images/PT/blue4.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain5" src="images/PT/blue5.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain6" src="images/PT/blue6.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain7" src="images/PT/blue7.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain8" src="images/PT/blue8.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain9" src="images/PT/blue9.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>
        <img id="left-brain10" src="images/PT/blue10.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; left: 40vw; display:none;"/>


        <img id="right-brain" src="images/PT/pink.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw;"/>
        <img id="right-brain1" src="images/PT/pink1.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain2" src="images/PT/pink2.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain3" src="images/PT/pink3.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain4" src="images/PT/pink4.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain5" src="images/PT/pink5.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain6" src="images/PT/pink6.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain7" src="images/PT/pink7.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain8" src="images/PT/pink8.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain9" src="images/PT/pink9.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>
        <img id="right-brain10" src="images/PT/pink10.png" alt="" height="300" width="150"
             style="position: absolute; top:10vh; right: 37.9vw; display: none;"/>

        <div id="logical" class="row" style="position: absolute; top:50vh; left: 15vw; display: none;">
            <div id="" style="color:#000000; text-align: center; font-family: 'Courier New'; font-size: 20px; font-weight: bold;" style="">
                suggested courses:
                <br/>
                <br/>

                BSCS <br/>
                BSIT <br/>
                Computer Engineering

            </div>
        </div>

        <div id="creative" class="row" style="position: absolute; top:50vh; right: 15vw; display: none;">
        <div style="color:#000000; text-align: center; font-family: 'Courier New'; font-size: 20px; font-weight: bold;" style="">
            suggested courses:
            <br/>
            <br/>

            BSBA <br/>
            BSCS<br/>
            BSIT <br/>
            Marketing

        </div>
        </div>


        <div style="position: absolute; top:60vh; left: 35vw; text-align: center; font-weight: bold;" class="col-md-4">
            <label for="question" id="question">Do you have a good sense of time or do you find that you often lose track of
                time?</label>
        </div>

        <div style="position: absolute; top:60vh; left: 42vw;">
            <br/>

            <form action="">

                <br/>
                <br/>
                <input id="left" type="button" class="btn btn-primary" value="Yes"
                       style="width: 8vw; margin-right: 20px;" onclick="leftClick()"/>
                <input id="left-done" type="button" class="btn btn-primary disabled" value="Yes"
                       style="width: 8vw; margin-right: 20px; display: none;"/>

                <input id="right" type="button" class="btn btn-danger" value="No" style="width: 8vw;"
                       onclick="rightClick()"/>
                <input id="right-done" type="button" class="btn btn-danger disabled" value="Yes"
                       style="width: 8vw; margin-right: 20px; display: none;"/>
            </form>

            <div class="row">
                <div id="result" style="color:green; text-align: center; font-family: 'Courier New'; font-size: 20px; font-weight: bold; top:50vh; right: 15vw;">

                </div>
            </div>

        </div>


    </div>

@endsection

<script type="text/javascript">
    var right = 0;
    var left = 0;


    var questions = ["When someone proposes a new project, are you able to immediately see what might go wrong?",
        "Do you tend to prefer to multitask or do you tend to work on one project at a time?",
        "Is it easy for you to think up new ideas?",
        "Are you particularly good at spelling?",
        "Do you find it hard to get hooked into the story of a movie or novel?"
    ];

    function leftClick() {

        left += 10;
        document.getElementById("leftClicks").innerHTML = left;
        if (left == 10) {
            $("#left-brain").fadeOut(1000);
            $("#left-brain1").fadeIn(1000);
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 20) {
            $("#left-brain").hide();
            $("#left-brain1").fadeOut(1000);
            $("#left-brain2").fadeIn(1000);
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 30) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").fadeOut(1000);
            $("#left-brain3").fadeIn(1000);
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 40) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").fadeOut(1000);
            $("#left-brain4").fadeIn(1000);
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 50) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").fadeOut(1000);
            $("#left-brain5").fadeIn(1000);
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 60) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").fadeOut(1000);
            $("#left-brain6").fadeIn(1000);
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 70) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").fadeOut(1000);
            $("#left-brain7").fadeIn(1000);
            $("#left-brain8").hide();
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 80) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").fadeOut(1000);
            $("#left-brain8").fadeIn(1000);
            $("#left-brain9").hide();
            $("#left-brain10").hide();
        }

        if (left == 90) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").fadeOut(1000);
            $("#left-brain9").fadeIn(1000);
            $("#left-brain10").hide();
        }

        if (left == 100) {
            $("#left-brain").hide();
            $("#left-brain1").hide();
            $("#left-brain2").hide();
            $("#left-brain3").hide();
            $("#left-brain4").hide();
            $("#left-brain5").hide();
            $("#left-brain6").hide();
            $("#left-brain7").hide();
            $("#left-brain8").hide();
            $("#left-brain9").fadeOut(1000);
            $("#left-brain10").fadeIn(1000);
        }

        if (left + right == 100) {
            $("#left").hide();
            $("#right").hide();
            $("#left-done").show();
            $("#right-done").show();
        }

        if (right + left == 100) {
            if (left > right) {
                $('#result').html("Ikaw na Logical!");
                $("#logical").show();
            }
            if (left < right) {
                $('#result').html("Ikaw na Creative!");
                $("#creative").show();
            }
            if (right == left) {
                $('#result').html("Ikaw na Balanced!");
                $("#logical").show();
                $("#creative").show();
            }
        }

    }

    function rightClick() {
        right += 10;
        document.getElementById("rightClicks").innerHTML = right;

        if (right == 10) {
            $("#right-brain").fadeOut(1000);
            $("#right-brain1").fadeIn(1000);
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 20) {
            $("#right-brain").hide();
            $("#right-brain1").fadeOut(1000);
            $("#right-brain2").fadeIn(1000);
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 30) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").fadeOut(1000);
            $("#right-brain3").fadeIn(1000);
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 40) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").fadeOut(1000);
            $("#right-brain4").fadeIn(1000);
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 50) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").fadeOut(1000);
            $("#right-brain5").fadeIn(1000);
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 60) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").fadeOut(1000);
            $("#right-brain6").fadeIn(1000);
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 70) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").fadeOut(1000);
            $("#right-brain7").fadeIn(1000);
            $("#right-brain8").hide();
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 80) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").fadeOut(1000);
            $("#right-brain8").fadeIn(1000);
            $("#right-brain9").hide();
            $("#right-brain10").hide();
        }

        if (right == 90) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").fadeOut(1000);
            $("#right-brain9").fadeIn(1000);
            $("#right-brain10").hide();
        }

        if (right == 100) {
            $("#right-brain").hide();
            $("#right-brain1").hide();
            $("#right-brain2").hide();
            $("#right-brain3").hide();
            $("#right-brain4").hide();
            $("#right-brain5").hide();
            $("#right-brain6").hide();
            $("#right-brain7").hide();
            $("#right-brain8").hide();
            $("#right-brain9").fadeOut(1000);
            $("#right-brain10").fadeIn(1000);
        }

        if (left + right == 100) {
            $("#left").hide();
            $("#right").hide();
            $("#left-done").show();
            $("#right-done").show();
        }

        if(right + left == 100){
            if (left > right) {
                $('#result').html("Ikaw na Logical!");
                $("#logical").show();
            }
            if (left < right) {
                $('#result').html("Ikaw na Creative!");
                $("#creative").show();
            }
            if (right == left) {
                $('#result').html("Ikaw na Balanced!");
                $("#logical").show();
                $("#creative").show();
            }
        }

    }

</script>