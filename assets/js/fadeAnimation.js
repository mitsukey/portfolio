export const fadeAnimation = () =>{
    $(function(){
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
    });
}