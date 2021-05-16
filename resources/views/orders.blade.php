@extends("layout")


@section("title") CANDLER-Мої замовлення @endsection
@section("content_part")
    <div class="main_part">
        <div class="content_m">
            <div class="navigator">
                <a class="navigation" href="http://localhost/Candler/public/"> >>Головна сторінка</a>
                <a class="navigation">>>Мій профіль</a>
                <a class="navigation" href="/Candler/public/orders">>>Мої замовлення</a>
            </div>
            <div class="main_cont">
                <div class="left_menu">
                    <div class="catalog">
                        <div id="title_cat">Мій кабінет</div>
                        <hr id="line">
                        <a class="text_cat">Мій профіль</a>
                        <a class="text_cat">Обране</a>
                        <a class="text_cat">Кошик</a>
                        <a class="text_cat">Повідомлення</a>
                        <a class="text_cat">мої замовлення</a>
                        <a class="text_cat">Вийти</a>
                    </div>
                    <div class="soc_ad">
                        <div id="title_ad">Шукайте нас в мережі </div>
                        <div class="icons">
                            <a>
                                <img src={{asset('Images/social/inst.svg')}} id="inst_icon" >
                            </a>
                            <a>
                                <img src={{asset('Images/social/facebook.svg')}} id="fb_icon" >
                            </a>
                            <a>
                                <img src={{asset('Images/social/youtube.svg')}} id="yt_icon" >
                            </a>
                            <a>
                                <img src={{asset('Images/social/telegram.svg')}} id="telegram_icon" >
                            </a>

                        </div>
                        <div class="back_">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <div class="bord">
                            <div class="bord_"> </div>

                        </div>

                    </div>
                </div>
                <div class="articls">
                    <div class="title_catalog">
                        <div class=" filter">
                            <div class="name_catal">Мій профіль</div>

                        </div>
                        <div><hr id="title_line"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
