<!DOCTYPE html>
<html lang="uk">
<head>
    <title>@yield("title")</title>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "{{ asset("css/styles.css") }}" type="text/css">
    <link rel = "stylesheet" href = "{{ asset("css/catalog_style.css") }}" type="text/css">
    <link rel = "stylesheet" href="{{ asset("css/item_style.css") }}" type="text/css">
    <link rel = "stylesheet" href="{{ asset("css/orders.css") }}" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
</head>
<body>
<div id="all">

    <div class = "header">
        <div class = "content">
            <div class="img_logo"> <img src="Images/harder/logotype.svg"  alt="logo" id="logo_"></div>
            <div class="cont">
                <div class = "info_block">
                    <div class = "text1">Гаряча лінія +380636564530</div>
                    <div class = "text1">Час роботи з 10:00 до 18:00</div>
                    <div class = "text1">candler@gmail.com</div>
                </div>
                <div class="flex-container">
                    <div class="logo">
                        <div class="burger_menu">
                            <img src="Images/harder/square.svg" class="burger_menu">
                        </div>
                        <div class = "slogan">
                            <div class="text_sl1"> CANDLER</div>
                            <div class = "text_sl2"> Все для створення свічок</div>
                        </div>
                    </div>
                    <div class="search">
                        <div class="search_text">Я шукаю...</div>
                        <div class="button">
                            <div class="button_text">
                                Знайти
                            </div>
                        </div>
                    </div>
                    <div class="tools">
                        <div class="account ">
                            <ul class="first_lvl">
                                <li>
                                    <img src="Images/harder/user.svg" class="account_icon" >
                                    @if(isset($_COOKIE['user']))
                                    <ul class="second_lvl">
                                        <li id="welcome">
                                             <span>Вітаю, {{$name = DB::table('users')->where('login', $_COOKIE['login'])->value('name')}}</span>
                                        </li>
                                        <li class="text_account">
                                            Мій профіль
                                        </li>
                                        <li class="text_account">
                                            Обране
                                        </li>
                                        <li class="text_account">
                                            <a href="/Candler/public/orders">Замовлення</a>
                                        </li>
                                        <li class="text_account">
                                            Кошик
                                        </li>
                                        <li class="text_account">
                                            Повідомлення
                                        </li>
                                        <li class="text_account">
                                            <a>Вийти</a>
                                        </li>
                                    </ul>
                                    @else
                                    <ul class="second_lvl">
                                        <li class="text_account">
                                            <div class="wraped">
                                                <button onclick="show('block')" class="enter_bttn">Вхід</button>
                                                <div onclick="show('none')" id="gray"></div>

                                            </div>
                                        </li>
                                    </ul>
                                    @endif
                                </li>
                            </ul>

                        </div>
                        <div class="comprison">
                            <img src="Images/harder/compare.svg" class="copare_icon">
                        </div>
                        <div class="cart">
                            <img src="Images/harder/cart.svg" class="cart_icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="authorisation" >
            <form action="http://localhost/Candler/public/" method="post">
                @csrf
                <img id="close_img" class="close" src="Images/Icon/close.svg" alt=""  onclick="show('none')">
                <div class = "slogan" id="auth_logo">
                    <div class="text_sl1"> CANDLER</div>
                    <div class = "text_sl2"> Все для створення свічок</div>
                </div>
                <div class="text1" id="text_auth"> Авторизація</div>

                <input type="text" name="nickname" placeholder="Введіть нікнейм" class="field1">
                <input type="password" name="password" placeholder="Введіть пароль" class="field2">

                <button type="submit" name="enter" class="auth_bttn">ВВІЙТИ</button>
            </form>

        </div>

        <script>
            function show(state)
            {
                document.getElementById('authorisation').style.display = state;
                document.getElementById('gray').style.display = state;
            }
        </script>
    </div>
    @yield("content_part")
    <div class="footer">
        <div class="content_f">
            <div class="about">
                <div class="title_f">Про магазин</div>
                <div class="text_f">Про нас</div>
                <div class="text_f">Блог</div>
                <div class="text_f">Відгуки</div>
                <div class="text_f">Контакти</div>
            </div>
            <div class="inf">
                <div class="title_f">Інформація</div>
                <div class="text_f">Доставка</div>
                <div class="text_f">Оплата</div>
                <div class="text_f">Обмін та повернення <br> товару</div>
            </div>
            <div class="social">
                <div class="title_f">Ми в мережі</div>
                <div class="text_f">
                    <div class="number">
                        <img src={{asset('Images/social/inst.svg')}} class="inst_icon">
                        <div>Instagram</div>
                    </div>
                </div>
                <div class="text_f">
                    <div class="number">
                        <img src={{asset('Images/social/facebook.svg')}} class="facebook_icon">
                        <div>Facebook</div>
                    </div>
                </div>
                <div class="text_f">
                    <div class="number">
                        <img src={{asset('Images/social/youtube.svg')}} class="youtube_icon">
                        <div>YouTube</div>
                    </div>
                </div>
                <div class="text_f">
                    <div class="number">
                        <img src={{asset('Images/social/telegram.svg')}} class="telegram_icon">
                        <div>Telegram</div>
                    </div>
                </div>
            </div>
            <div class="contat">
                <div class="title_f">Контакти</div>
                <div class="text_f">
                    <div class="number indent">
                        <img src={{asset('Images/Icon/phone.svg')}} class="phone_icon">
                        <div>+380636564530</div>
                    </div>
                </div>
                <div class="text_f indent">Пн-Сб <br>10:00 - 18:00 </div>
                <div class="text_f indent">candler@gmail.com</div>
                <div class="text_f">Наша адреса:<br>м. Черкаси вул. Зелена 17/2</div>
            </div>

            <div id="mobile">
                <div class="div_mobile">
                    <a class="text_mob">Про нас</a>
                </div>
                <div class="div_mobile">
                    <a class="text_mob">Інформація</a>
                </div>
                <div class="div_mobile">
                    <a class="text_mob">Ми в мережі</a>
                </div>
                <div class="contact_mobile">
                    <div class="con_title_mobile">КОНТАКТИ</div>
                    <div class="cont_inf">
                        <div>
                            <div class="phone_mobile indent">
                                <img src="../../public/Images/Icon/phone.svg" class="phone_icon">
                                <div class="tel_mob">+380636564530</div>
                            </div>
                            <div class="phone_mobile indent">
                                <img src="../../public/Images/Icon/phone.svg" class="phone_icon">
                                <div>+380676453549</div>
                            </div>
                        </div>
                        <div class="graphic">
                            Пн - Сб<br>10:00 - 18:00

                        </div>
                        <div>

                        </div>
                        <div></div>
                    </div>
                    <div class="con_title_mobile">НАША АДРЕСА</div>
                    <div class="ridht-left">м.Черкаси вул.Зелена 17/2</div>
                    <div class="bottom">@CANDLER 2015 - 2021 Наповнюйте свій дім теплом з нами </div>
                </div>
            </div>


        </div>
    </div>
</div>
</body>

</html>
