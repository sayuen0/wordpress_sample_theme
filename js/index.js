    $(function(){
        let $backToTop = $(".back-to-top");        //トップへ戻るボタン


        //スクロール時フェードイン
        $(window).scroll(function (){

            //トップへ戻る
            $backToTop.fadeIn(500);

            $('.fadein').each(function(){
                var elemPos = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > elemPos - windowHeight + 200){
                    $(this).addClass('scrollin');
                }
            });

        });

    //    トップへ戻るボタン
        $backToTop.on("click",function(){
            $("body, html").animate({scrollTop:0},800);
        })
    });
