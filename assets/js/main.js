$(() => {
    var date = new Date();
    var year = date.getFullYear();
    console.log(year);
    document.getElementById('prava').innerHTML = "<small>Copyright &copy; TELCONTROL S.R.L. " + year + ". All Rights Reserved</small>";


    function navAnima() {
        var scrollPosition = $(window).scrollTop();
        if (scrollPosition >= 200) {
            $("nav").addClass('navbg');
        }
    }
    $(window).on('scroll', () => {
        navAnima();
    });
    var typed = $(".typed");
    var typed2 = $(".typed2");

    $(function() {
        typed.typed({
            strings: ["", "Welcome!<br>We are<br>Telcontrol.", "We<br>provide<br>controls!"],
            typeSpeed: 50,
            loop: true,
        });
        typed2.typed({
            strings: ["Welcome", "We are Telcontrol", "We provide controls!"],
            typeSpeed: 50,
            loop: true,
        });
    });

    // EFFECTS menu    --------------------------------------------------------------------
    $('.product-card').mouseover(function() {
        $("img", $(this)).css({ "transition": "all 0.6s", "padding": "0", "opacity": "1", "transform": "rotate(5deg)", "-ms-transform": "rotate(5deg)", "-webkit-transform": "rotate(5deg)" });
        $(this).addClass("myshadowsmall");

    });
    $('.product-card').mouseleave(function() {
        $("img", $(this)).css({
            "padding": "8px",
            "opacity": "0.67",
            "transform": "none",
            "-ms-transform": "none",
            "-webkit-transform": "none"
        });
        $(this).removeClass("myshadowsmall");
    });

    // if (!isNaN($('#adminovo').val())) {
    //     $('#show-for-admin').css("display", "none");
    // } else {
    //     $(".navbar h2").css("display", "none");
    // }


}); //document.ready