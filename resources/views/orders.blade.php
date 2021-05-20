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
                    <div class="catalog_o">
                        <div id="title_cat_o">Мій кабінет</div>
                        <hr id="line">
                        <a class="text_cat">Мій профіль</a>
                        <a class="text_cat">Обране</a>
                        <a class="text_cat">Кошик</a>
                        <a class="text_cat">Повідомлення</a>
                        <a class="text_cat">мої замовлення</a>
                        <a class="text_cat">Вийти</a>
                    </div>
                    <div class="soc_ad_o">
                        <div id="title_ad_o">Шукайте нас в мережі </div>
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
                        <div class="back_o">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                        </div>
                        <div class="bordo">
                            <div class="bord_o"> </div>

                        </div>

                    </div>
                </div>

                <div class="articls">
                    <div class="title_catalog">
                        <div class=" filter">
                            <div class="name_catal">Мої замовлення</div>

                        </div>
                        <div><hr id="title_line"></div>
                    </div>
                    <div class="order_list">
                        @foreach(\App\Models\users::find($id)->orders  as $order)
                            <div class="order_n">
                                <div class="num_order">
                            <span class="title_n">
                                № {{++$num}}
                            </span>
                                </div>
                                <div class="name_ordered">
                            <span class="value">
                                @foreach(\App\Models\Orders::find($order->id)->stuff as $stuff)
                                    {{$stuff->name}}
                                @endforeach
                            </span>
                                </div>
                                <div class="color">
                            <span class="title_n">
                                Колір:
                            </span>
                                    <span class="value">
                                {{$order->color}}
                            </span>
                                </div>
                                <div class="quality_ord">
                                    <span class="title_n">
                                        К-ть:
                                    </span>
                                    <span class="value">
                                        {{$order->quality}}
                                    </span>
                                </div>
                                <div class="cost_ord">
                                    <span class="title_n">
                                        Вартість:
                                    </span>
                                    <span class="value">
                                        {{$order->cost}} грн
                                    </span>
                                </div>
                                <div class="date_ord">
                                    <span class="title_n">
                                        Дата:
                                    </span>
                                    <span class="value">
                                        {{$order->date}}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
