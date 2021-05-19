@extends("layout")


@section("title") CANDLER-База для свічок @endsection
@section("content_part")
    <div class="main_part">
        <div class="content_m">
            <div class="navigator">
                <a class="navigation" href="http://localhost/Candler/public/"> >>Головна сторінка</a>
                <a class="navigation" href="/Candler/public/catalog">>>База для січок</a>
            </div>
            <div class="main_cont">
                <div class="left_menu">
                    <div class="catalog">
                        <div id="title_cat">Категорії</div>
                        <hr id="line">
                        <a class="text_cat" href="/Candler/public/catalog">База для свічок</a>
                        <a class="text_cat">Гніт та тримачі </a>
                        <a class="text_cat">Ароматизатори</a>
                        <a class="text_cat">Барвники</a>
                        <a class="text_cat">Форми</a>
                        <a class="text_cat">Декор</a>
                        <a class="text_cat">Підсвічники</a>
                        <a class="text_cat">Готові набори</a>
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
                            <div class="name_catal">База для свічок</div>
                            <div class="filter">
                                <div id="sort">Сортувати:</div>
                                <div>
                                    <select class="text_select">
                                        <option> за рейтингом</option>
                                        <option> за популярністю</option>
                                        <option> за зростанням</option>
                                        <option> за спаданням</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div><hr id="title_line"></div>
                    </div>
                    <div class="item_list">

                        @foreach($stuffs = App\Models\Pages::find(1)->stuff as $stuff)
                            <div class="stuff">
                            <div class="buttons">
                                <img src="Images/item/like.svg" class="button_icon">
                                <img src="Images/harder/compare.svg" class="button_icon">
                            </div>
                            <div class="pict">
                                <img src="{{$stuff->img}}" class="img_stuff">
                            </div>
                            <a class="name_stuff" href="{{$stuff->link}}" id="link">
                                {{$stuff->name}}
                            </a>
                            <div >
                                <div class=" mark ">
                                    @for($i = 1; $i <= $stuff->stars; $i++)
                                        <span class="active"></span>
                                    @endfor

                                    @for($i = 1; $i <= 5 - $stuff->stars; $i++)
                                            <span></span>
                                        @endfor
                                </div>
                            </div>
                            <div class="price">
                                {{$stuff->min}} г - {{$stuff->price}} грн
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pages">
                        <div class="page_swipe">
                            <img src="Images/item/next_l.svg" class="swipe_icon">
                        </div>
                        <div class="page_button ">
                            <div class="text_page"> 1 </div>
                        </div>
                        <div class="page_swipe">
                            <img src="Images/item/next.svg" class="swipe_icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
