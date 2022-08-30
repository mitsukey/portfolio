$(function(){

    /* script_g-nav */
    $(".g-nav_button_wrapper").click(function(){
        $(this).toggleClass('active');
        $('.g-nav_wrapper').toggleClass('opened');
    });
    $('.g-nav_wrapper a').click(function(){
        $('g-nav_button_wrapper').removeClass('active');
        $('.g-nav_wrapper').removeClass('opened');
    });

    /* script_fadeAnimation */
    const fade_bottom = 100; // 画面下からどの位置でフェードさせるか(px)
    const fade_move = 25; // どのぐらい要素を動かすか(px)
    const fade_time = 800; // フェードの時間(ms)
    
    const FadeIn_action = (option,translateX = 0,translateY = 0,unit) => {
        if (option === "up" || option === "down"){
            if (option === "up") {
                // フェード前のcssを定義
                $(`.scroll-fade-${option}`).css({
                    opacity: 0,
                    transform: "translateY(" + fade_move + "px)",
                    transition: fade_time + "ms",
                });
            }else{
                // フェード前のcssを定義
                $(`.scroll-fade-${option}`).css({
                    opacity: 0,
                    transform: "translateY(" + -(fade_move) + "px)",
                    transition: fade_time + "ms",
                });
            }
            
            // スクロールまたはロードするたびに実行
            $(window).on("scroll load", function () {

                const scroll_top = $(this).scrollTop();
                const scroll_bottom = scroll_top + $(this).height();
                const fade_position = scroll_bottom - fade_bottom;

                $(`.scroll-fade-${option}`).each(function () {
                    const this_position = $(this).offset().top;
                    if (fade_position > this_position) {
                        $(this).css({
                            opacity: 1,
                            transform: "translateY(0)",
                        });
                    }
                });
            });
        }else if ( option === "left" || option === "right" ){
            if (option === "left") {
                // フェード前のcssを定義
                $(`.scroll-fade-${option}`).css({
                    opacity: 0,
                    transform: "translateX(" + fade_move + "px)",
                    transition: fade_time + "ms",
                });
            }else{
                // フェード前のcssを定義
                $(`.scroll-fade-${option}`).css({
                    opacity: 0,
                    transform: "translateX(" + -(fade_move) + "px)",
                    transition: fade_time + "ms",
                });
            }
            

            // スクロールまたはロードするたびに実行
            $(window).on("scroll load", function () {

                const scroll_top = $(this).scrollTop();
                const scroll_bottom = scroll_top + $(this).height();
                const fade_position = scroll_bottom - fade_bottom;

                $(`.scroll-fade-${option}`).each(function () {
                    const this_position = $(this).offset().top;
                    if (fade_position > this_position) {
                        $(this).css({
                            opacity: 1,
                            transform: "translateX(0)",
                        });
                    }
                });
            });
        }else if (option === "in"){

            // フェード前のcssを定義
            $(`.scroll-fade-${option}`).css({
                opacity: 0,
                transition: 500 + "ms",
            });
            // スクロールまたはロードするたびに実行
            $(window).on("scroll load", function () {

                const scroll_top = $(this).scrollTop();
                const scroll_bottom = scroll_top + $(this).height();
                const fade_position = scroll_bottom - fade_bottom;

                $(`.scroll-fade-${option}`).each(function () {
                    const this_position = $(this).offset().top;
                    if (fade_position > this_position) {
                        $(this).css({
                            opacity: 1,
                        });
                    }
                });
            });
            
        }else if (option === "custom"){
            // フェード前のcssを定義
            $(`.scroll-fade-${option}`).css({
                opacity: 0,
                transform: `translate(${translateX}${unit}, ${translateY}${unit})`,
                transition: fade_time + "ms",
            });

            // スクロールまたはロードするたびに実行
            $(window).on("scroll load", function () {

                const scroll_top = $(this).scrollTop();
                const scroll_bottom = scroll_top + $(this).height();
                const fade_position = scroll_bottom - fade_bottom;

                $(`.scroll-fade-${option}_${translateX}${unit}-${translateY}${unit}`).each(function () {
                    const this_position = $(this).offset().top;
                    if (fade_position > this_position) {
                        $(this).css({
                            opacity: 1,
                            transform: "translate(0, 0)",
                        });
                    }
                });
            });


        }
    }

    FadeIn_action("up");

    FadeIn_action("down");

    FadeIn_action("left");

    FadeIn_action("right");

    FadeIn_action("in");

    FadeIn_action("custom",25,25,"px");


    const parallaxFactor1 = 0.5;
    const windowHeight = $(window).height();
    const parallaxContent1 = $('.parallax-bg1');
    const parallaxNum1 = parallaxContent1.offset().top;
    const scrollYStart1 = parallaxNum1 - windowHeight;
    $(window).on('scroll', function () {
        const scrollY = $(this).scrollTop();
        if (scrollY > scrollYStart1) {
            parallaxContent1.css('background-position-y', (scrollY - parallaxNum1) * parallaxFactor1 + 'px');
        } 
    });
    console.log('parallax-bg1生成');

    const parallaxFactor2 = 0.5;
    const parallaxContent2 = $('.parallax-bg2');
    const parallaxNum2 = parallaxContent2.offset().top;
    const scrollYStart2 = parallaxNum2 - windowHeight;
    $(window).on('scroll', function () {
        const scrollY = $(this).scrollTop();
        if (scrollY > scrollYStart2) {
            parallaxContent2.css('background-position-y', (scrollY - parallaxNum2) * parallaxFactor2 + 'px');
        } 
    });
    console.log('parallax-bg2生成');

    const parallaxFactor3 = 0.5;
    let parallaxContent3 = $('.parallax-bg3');
    let parallaxNum3 = parallaxContent3.offset().top;
    let scrollYStart3 = parallaxNum3 - windowHeight;
    $(window).on('scroll', function () {
        const scrollY = $(this).scrollTop();
        if (scrollY > scrollYStart3) {
            parallaxContent3.css('background-position-y', (scrollY - parallaxNum3) * parallaxFactor3 + 'px');
        } 
    });
    console.log('parallax-bg3生成');
});