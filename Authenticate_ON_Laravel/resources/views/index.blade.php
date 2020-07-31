@extends('layouts.layout')
@section('content')

<body>
    <section id="product_authentication" class="product_authentication">
        <div id="navwrap">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
                <a class="navbar-brand smooth-scroll" href="javascript:void(0)" onclick="go_to_product_auth()">ON 100%
                    {{__('text.nav_1')}}</a>
                <ul class="navbar-nav " id="all_slide">
                    <li class="nav-item">
                        <a href="javascript:void(0)" onclick="go_to_auth_tips()"
                            class="smooth-scroll nav-link">{{__('text.a_tips')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll" href="javascript:void(0)"
                            onclick="go_to_retailer()"><span></span> {{__('text.a_retail')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll" href="javascript:void(0)" onclick="go_to_contact()">
                            <span></span> {{__('text.nav_cnt')}} </a>
                    </li>
                    <div class="btn-group" id="dfl" style="margin-top:10px; margin-left:7px">
                        <a id="dLabel" data-toggle="dropdown" href="">
                            <img src="img/{{$send_route_name}}.jpg">
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

                            <li class=""><a class="dropdown-item" href="/SG"><img src="img/Singapore.jpg"> Singapore</a>
                            </li>
                            <li class="dropdown-divider"></li>

                            <li class=""><a class="dropdown-item" href="/MY"><img src="img/Malaysia.jpg"> Malaysia</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/PH"><img src="img/Philippines.jpg"> Philippines</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Thailand.jpg">
                                    Thailand <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" tabindex="-1" href="/TH">ไทย</a></li>
                                    <li class="dropdown-divider"></li>

                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/TH.EN">
                                            English
                                        </a> </li>


                                </ul>

                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Vietnam.jpg">
                                    Vietnam <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/VN">Tiếng Việt</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/VN.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>

                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Indonesia.jpg">
                                    Indonesia <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/ID">Bahasa</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/ID.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Turkey.jpg">
                                    Turkey <i class='fas fa-caret-right'></i>
                                </a>


                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/TR">Türkçe</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/TR.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Egypt.jpg">
                                    Egypt <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/EG">عربى</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/EG.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img src="img/UAE.jpg">
                                    UAE <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/AE">عربى</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/AE.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Saudi Arabia.jpg">
                                    KSA <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/SA">عربى</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/SA.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><img
                                        src="img/Iraq.jpg">
                                    Iraq <i class='fas fa-caret-right'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" tabindex="-1" href="/IQ">عربى</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/IQ.EN">
                                            English
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
        </div>

        </nav>
        </div>

        <div class="auth_product  card testimonial-card">
            <h3 class="auth_intro" id="auth_intro">{{__('text.intro')}}</h3>
            <p class="auth_intro_sub" id="auth_intro_sub">{{__('text.in_2')}}</p>
            <form class="px-4 py-3" id="product_code_form" method="post" action="/">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                @csrf
                <div class="form-group">
                    <label for="product_code"></label>
                    <input type="text" name="product_code" class="form-control" id="code"
                        placeholder="{{__('text.product_code')}}" required maxlength="9">
                    <p class="help is-danger" id="code_error"></p>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" name="user_name" class="form-control" id="name"
                        placeholder="{{__('text.user_name_pcode')}}" required>
                    <p class="help is-danger" id="name_error"></p>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" name="user_email" class="form-control" id="email"
                        placeholder="{{__('text.user_email_pcode')}}" required>
                    <p class="help is-danger" id="email_error"></p>
                    <label id="already_email"></label>
                </div>
                <div class="form-check">
                    <div class="g-recaptcha" data-sitekey="6Le8e6gZAAAAAM7ap2K3RDNFs4jNZROpIijXjk2P" id="code_captcha"
                        data-callback="capctcha_verify"></div>
                    <label for="" id="cap1_error"></label>
                    <br></br>
                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="promo">
                    <input type="hidden" name="country" value="{{$send_route_name}}" id="country_check">
                    <label class="form-check-label" for="dropdownCheck">
                        <p class="promotext">{{__('text.promo_label')}}</p>
                    </label>
                </div>
                <button type="button" id="code_check_btn" class="btn " disabled>{{__('text.verify_btn')}}</button>
                <label id="server_response"></label>

            </form>
        </div>



        <div id="product_verify_response">
            <h2 id="product_verify_response_h2"></h2>

        </div>



        <div class="number" id="total_verified">
            <h3>{{__('text.verify_count')}}</h3>
            <label for="no">
                <h1>{{ $verified_count }}</h1>
            </label>
        </div>

    </section>


    <section class="auth_tips " id="auth_tips">
        <div class="tips ">

            <h3 class="ptips_header" id="ptips_header">{{__('text.ptips_header')}}</h3>
        </div>
        <div class="col-md-12">
            <div class="tips-item">
                <ul class="tips_ul">
                    <li class="tips_li"><span class="tips_order"><b>{{__('text.tip1')}}</b></span></li>
                    <li class="tips_li"><span class="tips_order"><b>{{__('text.tip2')}}</b></span></li>
                    <li class="tips_li"><span class="tips_order"><b>{{__('text.tip3')}}</b></span></li>
                    <li class="tips_li"><span class="tips_order"><b>{{__('text.tip4')}}</b></span></li>
                </ul>
            </div>
        </div>

        <div class="img1">
            <h5 class="img1text" style="margin-left:20px; color:#515A5A  ">{{__('text.img1_text')}}</h5>
            <img src="/img/img1.png" alt="1stimage">
        </div>
        <div class="embed">
            <h5 style="margin-left:65px; color:#515A5A" class="vdotext">{{__('text.vdo_text')}}</h5>
            <iframe style="width: 40%;height: 19.8rem;" src="https://www.youtube.com/embed/pjUd5A7vCYw?showinfo=0"
                allowfullscreen></iframe>
        </div>
        <div class="img2">
            <h5 style="margin-left:7px; color:#515A5A" class="img2text">{{__('text.img2_text')}}</h5>
            <img src="/img/img2.jpg" alt="2ndimage" id="img2"><button id="modal_online2"
                class="btn btn-secondary">{{__('text.buyonline')}}</button></img>
        </div>

    </section>


    <section class="retailer" id="retailer">
        <h3 class="auth_retailer_h3" id="auth_retailer_h3">{{__('text.auth_retailer_header')}}</h3>
        <p class="auth_retailer_p" id="auth_retailer_p">{{__('text.auth_retailer_2')}}</p>
        <div class="container_post">
            <form class="form-inline" id="postal_form">

                <meta name="csrf-token" content="{{ csrf_token() }}">
                @csrf
                <input type="text" class="form-control" id="postal" placeholder="{{__('text.postal')}}" name="postcode">
                <select id="radius" class="form-control">
                    <option value="All">{{__('text.all')}}</option>
                    <option value="Within 2 km">{{__('text.within')}} 2 km</option>
                    <option value="Within 4 km">{{__('text.within')}} 4 km</option>
                    <option value="Within 6 km">{{__('text.within')}} 6 km</option>
                    <option value="Within 8 km">{{__('text.within')}} 8 km</option>
                    <option value="Within 10 km">{{__('text.within')}} 10 km</option>
                </select>
                <input type="hidden" id="country_lat" value="{{$map_country_lat}}">
                <input type="hidden" id="country_long" value="{{$map_country_long}}">
                <button type="button" class="btn btn-primary" id="searchpostal"
                    name="2nd_form">{{__('text.search')}}</button>
                <p id="or">OR</p>
                <button id="modal_online" class="btn btn-secondary">{{__('text.buyonline')}}</button>



            </form>
            <p>{{$postal_input ?? ''}}</p>
            <li id="currentpostal" aria-hidden="true"><a href="#">{{__('text.currentpostal')}}</a><span><label
                        id="geo_err"></label></span></li>
            <input type="hidden" id="country_location_user" value="">
        </div>
        <div id="myModal" class="modal">
            <div id="modal-content">
                <div class="modal-header">
                    <span class="close" id="closemodal">&times;</span>
                    <h3 class="title_modal" id="title_modal">Online Store List</h3>
                </div>
                <div class="modal-body">
                    @foreach($online_stores as $o_store)
                    <h4 id="o_s_name">{{$o_store->name}}<span id="gap"><a href="{{$o_store->link}}"
                                class="btn btn-light" id="webstore" target="_blank"
                                rel="noopener noreferrer">{{__('text.Weblink')}}</a></span></h3>
                        <li class="dropdown-divider"></li>
                        @endforeach
                </div>

                <button type="button" class="btn btn-light" id="close_btn">Close</button>

            </div>

        </div>
        </div>


    </section>



    <section class="storemap">
        <div id="map"></div>
        <div class="pre-scrollable" id="shoplist">

            <ul class="list-group" id="shops">

                @foreach($storeinfo as $stores)
                <li class="dropdown-divider">
                <li class="list-group-item storedata" id="storename">
                    <button class="li_store_btn" onclick="MapLoader('{{$stores->c_id}}',1)">{{$stores->StoreName}}
                    </button>
                </li>
                <li class="list-group-item storedata" id="storeaddress">
                    <button class="li_store_btn" onclick="MapLoader('{{$stores->c_id}}',1)">{{$stores->Address}}
                    </button>
                    <span><label for=""> </label></span>
                    <span><label for="Distance" id="show_distance" class="dist_class">---</label></span></li>
                </li>
                <li class="list-group-item storedata" id="phnno"> <button class="li_store_btn"
                        onclick="MapLoader('{{$stores->c_id}}',1)">{{$stores->PhoneNo}}
                    </button><span><label for=""> </label></span>
                    <span><label for="Distance_error" id="dist_err" class="dist_err"></label></span></li>
                </li>
                <li class="list-group-item storedata" id="btn_li">
                    <button id="places_btn" class="btn btn-secondary places_btn"
                        onclick="MapLoader('{{$stores->c_id}}',2)">{{__('text.Directions_btn')}}</button>
                    <input type="hidden" name="stores_id" id="stores_id" value=""></input>
                </li>

                @endforeach
                </li>

            </ul>
        </div>

    </section>
    <section id="contact">

        <div id="contact_div">
            <form class="form_contact" id="contact_form" name="contact_form">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                @csrf
                <h2 class="contact_header">{{__('text.Contact_us_header')}}</h2>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="" class="contact_label">{{__('text.Select Category')}}</label>
                        <select id="category" class="form-control" name="category">
                            <option value="Authenticity">{{__('text.Authenticity')}}</option>
                            <option value="Store">{{__('text.Store')}}</option>
                            <option value="Other">{{__('text.Other')}}</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="contact_label">{{__('text.Full Name')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('text.Full Name_p')}}" id="name_cntct"
                            name="name_usr">
                        <label id="name_cnct_error"></label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="" class="contact_label">{{__('text.Your Mail')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('text.Your Mail_p')}}"
                            id="email_cntct" name="email_usr">
                        <label id="mail_error"></label>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="contact_label">{{__('text.Your Phone')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('text.Your Phone_p')}}" id="phn_cntct"
                            name="phn_usr">
                        <input type="hidden" name="country_contact" value="{{$send_route_name}}" id="country_contact">
                        <label id="phn_error"></label>
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"
                        class="contact_label_msg">{{__('text.Your Message')}}</label>
                    <textarea class="form-control" id="msg_area" name="msg_usr" rows="3" cols="100"></textarea>
                    <label id="msg_error"></label>
                </div>
                <div id="contactUScaptcha" class="g-recaptcha" data-theme="light"
                    data-sitekey="6Le8e6gZAAAAAM7ap2K3RDNFs4jNZROpIijXjk2P" data-callback="verify_cap"></div>
                <label for="" id="cap_error"></label>

                <button type="button" class="btn btn-primary" id="contact_send_btn" name="contact_btn"
                    disabled>{{__('text.Send_btn')}}</button>
                <label for="success" id="mail_success"></label>
            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        </div>
    </section>

    <footer>
        <div class="card" id="footer_card">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 ">
                        <h3>ON<br>© 2020
                            {{__('text.footer1')}}</h3></br>
                    </div>
                    <div class="col-sm-5 ">
                        <h3>{{__('text.footer2')}}</h3>
                        <a href="//facebook.com/OptimumNutrition{{$send_route_name}}" id="fblink" class="fa fa-facebook"
                            target="_blank" rel="noopener noreferrer"></a>
                        <a href="#" class="fa fa-instagram" id="instalink" target="_blank"
                            rel="noopener noreferrer"></a>
                        <a href="//twitter.com/Team_Optimum" class="fa fa-twitter" target="_blank"
                            rel="noopener noreferrer"></a>
                    </div>
                    <div class="col-sm-2">
                        <div class="go-top">
                            <a href="javascript:void(0)" onclick="go_to_product_auth()" class="smooth-scroll"><i
                                    class="fa fa-chevron-up fa-3x" aria-hidden="true"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </footer>
    <script>
    $(document).ready(function() {
        document.getElementById('code_check_btn').addEventListener('click', Product_Check)
    });
    $(".btn-group, .dropdown").hover(
        function() {
            $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
            $(this).addClass('open');
        },
        function() {
            $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
            $(this).removeClass('open');
        });

    function go_to_auth_tips() {
        $('html, body').animate({
            scrollTop: $("#auth_tips").offset().top - 100
        }, 300);
    }

    function go_to_product_auth() {
        $('html, body').animate({
            scrollTop: $("#product_authentication").offset().top
        }, 300);
    }

    function go_to_retailer() {
        $('html, body').animate({
            scrollTop: $("#retailer").offset().top - 20
        }, 300);
    }

    function go_to_contact() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top - 20
        }, 300);
    }


    code_form_verify(1);
    var check_all = 0;

    function capctcha_verify() {
        code_form_verify(2);
    }

    var url = window.location.href;
    slice_url = url.slice(-2);


    if (slice_url == 'TH' || slice_url == 'TR')
        $("#all_slide").css('marginLeft', 700);

    if (slice_url == 'TH' || slice_url == 'VN' || slice_url == 'ID' || slice_url == 'TR')
        $("#total_verified").css('marginTop', -110);

    if (slice_url == 'ID')
        $("#auth_retailer_p").css('marginLeft', 190);

    else if (slice_url == 'EG' || slice_url == 'AE' || slice_url == 'SA' || slice_url == 'IQ') {
        $("#total_verified").css('marginTop', -60);
        $("#auth_retailer_h3").css('fontSize', 40);
        $("#auth_retailer_p").css('fontSize', 25);
        $("#all_slide").css('fontSize', 20);
        $("#auth_intro").css('fontSize', 40);
        $("#auth_intro").css('marginRight', 10);
        $("#auth_intro").css('text-align', 'right');
        $("#auth_intro_sub").css('fontSize', 20);
        $("#auth_intro_sub").css('text-align', 'right');
        $("#auth_intro_sub").css('marginRight', 10);
        $("#ptips_header").css('fontSize', 37);
        $("#auth_retailer_h3").css('marginLeft', 250);
        $("#auth_retailer_p").css('marginLeft', 230);
        $(".promotext").css('marginRight', -42);
        $(".promotext").css('text-align', 'right');
        $(".contact_header").css('marginLeft', 350);
        $(".contact_header").css('fontSize', 37);
        $(".contact_label").css('text-align', 'right');
        $(".contact_label").css('float', 'right');
        $(".contact_label").css('fontSize', 15);
        $(".contact_label_msg").css('marginLeft', 750);
        $(".contact_label_msg").css('fontSize', 15);


        var element = document.querySelector('.tips_ul');
        element.classList.remove('tips_ul');
        element.classList.add('tips_ul_arabic');

        $('.tips_ul_arabic li').removeClass('tips_li');
        $('.tips_ul_arabic li').addClass('tips_li_arabic');

        $('.img1').css('padding-top', 130);
        $('.img1text, .img2text, .vdotext').css('font-size', 20);

        $('input[type=text],input[type=email],select,textarea').css('direction', 'RTL');
        $('label', 'p').css('text-align', 'right')
    }
    if (slice_url == 'VN')
        document.getElementById("all_slide").style.marginLeft = "500px";


    function code_form_verify(x) {


        var href = document.getElementById('country_check').value;
        var code = document.getElementById('code');
        var code_error = document.getElementById('code_error');
        var username = document.getElementById('name');
        var name_error = document.getElementById('name_error');
        var email = document.getElementById('email');
        var email_error = document.getElementById('email_error');


        code.addEventListener("change", function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var code_value = code.value.trim();
                var username_value = username.value.trim();
                var email_value = email.value.trim();

            } else {
                var code_value = code.value;
                var username_value = username.value;
                var email_value = email.value;
            }

            if (code_value == '') {
                check_all = 0;
                $('#code_check_btn').prop('onclick', null);
                if (slice_url == 'TH')
                    code_error.innerHTML = 'โปรดกรอกรหัสที่ถูกต้อง';
                else if (slice_url == 'VN')
                    code_error.innerHTML = 'Vui lòng nhập mã hợp lệ';
                else if (slice_url == 'ID')
                    code_error.innerHTML = 'SILAHKAN MASUKAN KODE YANG VAILD';
                else if (slice_url == 'TR')
                    code_error.innerHTML = 'Lütfen geçerli bir kod girin';
                else if (slice_url == 'EG' || slice_url == 'AE' || slice_url == 'SA' || slice_url == 'IQ') {
                    code_error.innerHTML = 'يرجى إدخال رمز فعّال';
                    $('#code_error').css('text-align', 'right');
                    $('#code_error').css('marginRight', 5);
                } else
                    code_error.innerHTML = 'This field is required';

            } else if (code_value.length > 0 && code_value.length != 9) {
                check_all = 0;
                $('#code_check_btn').prop('onclick', null);
                if (slice_url == 'TH')
                    code_error.innerHTML = 'โปรดกรอกรหัสที่ถูกต้อง';
                else if (slice_url == 'VN')
                    code_error.innerHTML = 'Vui lòng nhập mã hợp lệ';
                else if (slice_url == 'ID')
                    code_error.innerHTML = 'SILAHKAN MASUKAN KODE YANG VAILD';
                else if (slice_url == 'TR')
                    code_error.innerHTML = 'Lütfen geçerli bir kod girin';
                else if (slice_url == 'EG' || slice_url == 'AE' || slice_url == 'SA' || slice_url == 'IQ') {
                    code_error.innerHTML = 'يرجى إدخال رمز فعّال';
                    $('#code_error').css('text-align', 'right');
                    $('#code_error').css('marginRight', 5);
                } else
                    code_error.innerHTML = 'Please input a valid product code'
            } else if (code_value.length == 9) {
                code_error.innerHTML = '';
            }
            if (reg.test(email_value) == true && email_value != '' && username_value != '' && code_value
                .length == 9 && x == 2) {
                document.getElementById('code_check_btn').disabled = false;
                $('#total_verified').hide();
                check_all = 1;
                $('#code_check_btn').attr('onclick', 'Product_Check');
                $('#product_verify_response_h2').hide();
                $('#already_email').hide();
            }

        });


        username.addEventListener("change", function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var code_value = code.value.trim();
                var username_value = username.value.trim();
                var email_value = email.value.trim();

            } else {
                var code_value = code.value;
                var username_value = username.value;
                var email_value = email.value;
            }
            if (username_value == '') {
                check_all = 0;
                name_error.innerHTML = 'This field is required';
                $('#code_check_btn').prop('onclick', null);
            } else {
                name_error.innerHTML = '';
            }
            if (reg.test(email_value) == true && email_value != '' && username_value != '' && code_value
                .length == 9 && x == 2) {
                document.getElementById('code_check_btn').disabled = false;
                $('#total_verified').hide();
                check_all = 1;
                $('#code_check_btn').attr('onclick', 'Product_Check');
                $('#product_verify_response_h2').hide();
            }
        });
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        email.addEventListener("change", function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var code_value = code.value.trim();
                var username_value = username.value.trim();
                var email_value = email.value.trim();

            } else {
                var code_value = code.value;
                var username_value = username.value;
                var email_value = email.value;
            }
            if (email_value == '') {
                check_all = 0;
                email_error.innerHTML = 'This field is required';
                $('#code_check_btn').prop('onclick', null);
            } else if (reg.test(email_value) == false && email_value != '') {
                check_all = 0;
                email_error.innerHTML = 'Invalid Email';
                $('#code_check_btn').prop('onclick', null);

            } else if (reg.test(email_value) == true && email_value != '') {
                email_error.innerHTML = '';
            }
            if (reg.test(email_value) == true && email_value != '' && username_value != '' && code_value
                .length == 9 && x == 2) {
                document.getElementById('code_check_btn').disabled = false;
                $('#total_verified').hide();
                check_all = 1;
                $('#code_check_btn').attr('onclick', 'Product_Check');
                $('#product_verify_response_h2').hide();
            }
        });

        if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
            var code_value = code.value.trim();
            var username_value = username.value.trim();
            var email_value = email.value.trim();

        } else {
            var code_value = code.value;
            var username_value = username.value;
            var email_value = email.value;
        }

        if (reg.test(email_value) == true && email_value != '' && username_value != '' && code_value.length == 9 &&
            x == 2) {
            document.getElementById('code_check_btn').disabled = false;
            $('#total_verified').hide();
            check_all = 1;
            $('#code_check_btn').attr('onclick', 'Product_Check');
            $('#product_verify_response_h2').hide();
        }
    }
    var check_cap = 0;


    validate_form(1);


    function validate_form(getval) {

        var c = 0;
        var name_cntct = document.getElementById('name_cntct');
        var email_cntct = document.getElementById('email_cntct');
        var phn = document.getElementById('phn_cntct');
        var msg = document.getElementById('msg_area');
        var href = document.getElementById('country_check').value;

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        name_cntct.addEventListener('change', function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var name_cntct_val = name_cntct.value.trim();
                var email_cntct_value = email_cntct.value.trim();
                var phn_value = phn.value.trim();
                var msg_value = msg.value.trim();

            } else {
                var name_cntct_val = name_cntct.value;
                var email_cntct_value = email_cntct.value;
                var phn_value = phn.value;
                var msg_value = msg.value;
            }
            if (name_cntct_val == '') {
                document.getElementById('name_cnct_error').innerHTML = 'This field is required';
                c = 1;


            } else
                document.getElementById('name_cnct_error').innerHTML = '';
            if (reg.test(email_cntct_value) == true && email_cntct_value != '' && name_cntct_val != '' &&
                phn_value != '' && msg_value != '' && getval == 2) {
                document.getElementById('contact_send_btn').disabled = false;
                c = 0;
                $('#mail_success').show();
            }

        });



        email_cntct.addEventListener('change', function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var name_cntct_val = name_cntct.value.trim();
                var email_cntct_value = email_cntct.value.trim();
                var phn_value = phn.value.trim();
                var msg_value = msg.value.trim();

            } else {
                var name_cntct_val = name_cntct.value;
                var email_cntct_value = email_cntct.value;
                var phn_value = phn.value;
                var msg_value = msg.value;
            }
            if (email_cntct_value == '') {
                document.getElementById('mail_error').innerHTML = 'This field is required';
                c = 1;
            } else if (reg.test(email_cntct_value) == false && email_cntct_value != '') {
                document.getElementById('mail_error').innerHTML = 'Invalid Email';
                c = 1;
            } else
                document.getElementById('mail_error').innerHTML = '';
            if (reg.test(email_cntct_value) == true && email_cntct_value != '' && name_cntct_val != '' &&
                phn_value != '' && msg_value != '' && getval == 2) {
                document.getElementById('contact_send_btn').disabled = false;
                c = 0;
                $('#mail_success').show();
            }

        });

        phn.addEventListener('change', function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var name_cntct_val = name_cntct.value.trim();
                var email_cntct_value = email_cntct.value.trim();
                var phn_value = phn.value.trim();
                var msg_value = msg.value.trim();

            } else {
                var name_cntct_val = name_cntct.value;
                var email_cntct_value = email_cntct.value;
                var phn_value = phn.value;
                var msg_value = msg.value;
            }
            if (phn_value == '') {
                document.getElementById('phn_error').innerHTML = 'This field is required';
                c = 1;
            } else
                document.getElementById('phn_error').innerHTML = '';
            if (reg.test(email_cntct_value) == true && email_cntct_value != '' && name_cntct_val != '' &&
                phn_value != '' && msg_value != '' && getval == 2) {
                document.getElementById('contact_send_btn').disabled = false;
                c = 0;
                $('#mail_success').show();
            }
        });

        msg.addEventListener('change', function(e) {
            e.preventDefault();
            if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
                var name_cntct_val = name_cntct.value.trim();
                var email_cntct_value = email_cntct.value.trim();
                var phn_value = phn.value.trim();
                var msg_value = msg.value.trim();

            } else {
                var name_cntct_val = name_cntct.value;
                var email_cntct_value = email_cntct.value;
                var phn_value = phn.value;
                var msg_value = msg.value;
            }
            if (msg_value == '') {
                document.getElementById('msg_error').innerHTML = 'This field is required';
                c = 1;
            } else
                document.getElementById('msg_error').innerHTML = '';
            if (reg.test(email_cntct_value) == true && email_cntct_value != '' && name_cntct_val != '' &&
                phn_value != '' && msg.value != '' && getval == 2) {
                document.getElementById('contact_send_btn').disabled = false;
                c = 0;
                $('#mail_success').show();
            }
        });

        if (href == 'Egypt' || href == 'UAE' || href == 'Saudi Arabia' || href == 'Iraq') {
            var name_cntct_val = name_cntct.value.trim();
            var email_cntct_value = email_cntct.value.trim();
            var phn_value = phn.value.trim();
            var msg_value = msg.value.trim();

        } else {
            var name_cntct_val = name_cntct.value;
            var email_cntct_value = email_cntct.value;
            var phn_value = phn.value;
            var msg_value = msg.value;
        }
        if (reg.test(email_cntct_value) == true && email_cntct_value != '' && name_cntct_val != '' && phn_value !=
            '' && msg_value != '' && getval == 2) {
            document.getElementById('contact_send_btn').disabled = false;
            c = 0;
            $('#mail_success').hide();
        }


        $('#contact_send_btn').click(function(e) {
            e.preventDefault();
            var response1 = grecaptcha.getResponse(1);

            if (response1.length == 0) {
                $('#cap_error').html('Capctha must be validated');
                c = 1;
            } else
                $('#cap_error').html('');
            if (c == 0) {

                var token = $("input[name=_token]").val();

                $.ajax({
                    type: "POST",
                    url: '/mail',
                    data: $('#contact_form').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success: function(data) {

                        if (data.mail_success) {
                            $('#mail_success').show();
                            $('#mail_success').html(data.mail_success);
                            $('#mail_success').css('color', 'green');
                            $('#contact_form').trigger('reset');
                        }


                        setTimeout(function() {
                            grecaptcha.reset(1);
                            document.getElementById('contact_send_btn').disabled = true;
                        }, 500);

                    }
                });
            }



        });


    }


    function verify_cap() {
        validate_form(2);
    }



    function Product_Check() {
        var not_cap_error = 0;
        var response = grecaptcha.getResponse(0);

        if (response.length == 0) {
            check_all = 0;
            not_cap_error = 1;
            $('#cap1_error').html('Capctha must be validated');
        } else
            $('#cap1_error').html('');

        if (check_all == 1) {
            $.ajax({

                url: '/',
                method: 'post',
                data: $('#product_code_form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    document.getElementById('product_verify_response_h2').innerHTML = 'Wait..'
                },
                success: function(data) {

                    if (data.product_verify_info) {
                        $('#product_verify_response_h2').show();
                        $('#product_verify_response_h2').html(data.product_verify_info);

                        if (data.product_verify_info == 'PRODUCT VERIFICATION FAILED')
                            $('#product_verify_response_h2').css('color', 'red');
                        else
                            $('#product_verify_response_h2').css('color', 'green');

                    }
                    if (data.user_info) {
                        $('#already_email').show();
                        $('#already_email').html(data.user_info);
                        if (data.user_info == 'Email Already registered')
                            $('#already_email').css('color', '#FB8303');
                        else
                            $('#already_email').css('color', 'green');
                        setTimeout(function() {
                            $('#already_email').fadeOut('slow');
                        }, 2800);
                    }


                    setTimeout(function() {
                        grecaptcha.reset(0);
                        document.getElementById('code_check_btn').disabled = true;
                    }, 1000);
                },
                error: function(data, errorThrown) {
                    alert('request failed :' + errorThrown);
                }

            });

        } else if (check_all != 1 && not_cap_error == 0) {
            $('#product_verify_response_h2').html = 'Not all fields are valid'
        }

    }


    var lats = {!!json_encode($getlat -> toArray(), JSON_HEX_TAG) !!};
    var longs = {!!json_encode($getlong -> toArray(), JSON_HEX_TAG) !!};
    var store_name = {!!json_encode($storename -> toArray(), JSON_HEX_TAG) !!};
    var store_adr = {!!json_encode($storeadr -> toArray(), JSON_HEX_TAG) !!};
    var store_phn = {!!json_encode($storephn -> toArray(), JSON_HEX_TAG) !!};
    var gmarkers = [];

    function MapLoader(id, value) {

        var userLat, userLong;
        if (value == 2) {
            if (navigator.geolocation)
                navigator.geolocation.getCurrentPosition(showPosition, showError);
        }

        function showPosition(position) {
            userLat = position.coords.latitude;
            userLong = position.coords.longitude;
            if (value == 2)
                var distance = get_Driving_Distance(userLat, userLong, store_db_lat, store_db_long, check, id);
        }


        function showError(error) {
            var label_dist_err = document.getElementsByClassName('dist_err')[id - 1];
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    label_dist_err.innerHTML = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    label_dist_err.innerHTML = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    label_dist_err.innerHTML = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    label_dist_err.innerHTML = "An unknown error occurred."
                    break;
            }
        }
        id = id.substr(1);

        id = parseInt(id);

        var li_btns = document.getElementsByClassName('li_store_btn')[id - 1];
        li_btns.style.border = '0';

        var store_db_lat = lats[id - 1];
        var store_db_long = longs[id - 1];
        var name = store_name[id - 1];
        var storeaddress = store_adr[id - 1];
        var storephn = store_phn[id - 1];
        var check = 1;
        if (value == 1)
            Place_Store_On_Map(store_db_lat, store_db_long, name, storeaddress, storephn);


    }

    function get_Driving_Distance(post_lats, post_longs, stores_lat, stores_long, check, id) {
        var origin_post = new google.maps.LatLng(post_lats, post_longs);
        var destination_post = new google.maps.LatLng(stores_lat, stores_long);

        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);
        Remove_Markers();
        var myres;

        directionsService.route({
                origin: origin_post,
                destination: destination_post,
                travelMode: 'DRIVING'
            },
            function(response, status) {
                if (status === 'OK' && check == 1) {
                    directionsRenderer.setDirections(response);
                    myres = (response.routes[0].legs[0].distance.text);
                    var test = document.getElementsByClassName('dist_class');
                    var label_dist = document.getElementsByClassName('dist_class')[id - 1];
                    if (label_dist)
                        label_dist.innerHTML = myres;

                } else {
                    var label_dist_err = document.getElementsByClassName('dist_err')[id - 1];
                    label_dist_err.innerHTML = 'Directions request returned no results.';
                    Place_Store_Direction_Req_Fail(stores_lat, stores_long);
                }
            });


    }

    function Place_Store_Direction_Req_Fail(stores_lat, stores_long) {
        Set_Map_Region();
        //Remove_Markers();

        var store_latlong = new google.maps.LatLng(stores_lat, stores_long);
        var marker = new google.maps.Marker({
            position: store_latlong,
            animation: google.maps.Animation.DROP,
            map: map,


        });

        map.panTo(marker.position);
        map.setZoom(17);
        map.setCenter(marker.position);

        for (i = 0; i < lats.length; i++) {
            if (stores_lat == lats[i]) {
                s_name = store_name[i];
                storeaddress = store_adr[i];
                storephn = store_phn[i];
            }
        }

        var infowindow = new google.maps.InfoWindow({
            content: '<p>' + '<h5 id="isnm">' + s_name + '</h5>' + storeaddress + '<br></br>' + storephn +
                '</p>',
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);

        });

    }

    function Remove_Markers() {
        if (gmarkers) {

            for (i = 0; i < gmarkers.length; i++) {
                gmarkers[i].setMap(null);

            }

        }
    }


    function Place_Store_On_Map(store_db_lat, store_db_long, s_name, storeaddress, storephn) {

        Set_Map_Region();
        //Remove_Markers();

        var store_latlong = new google.maps.LatLng(store_db_lat, store_db_long);
        var marker = new google.maps.Marker({
            position: store_latlong,
            animation: google.maps.Animation.DROP,
            map: map,


        });

        map.panTo(marker.position); +
        map.setZoom(17);
        map.setCenter(marker.position);

        var infowindow = new google.maps.InfoWindow({
            content: '<p>' + '<h5 id="isnm">' + s_name + '</h5>' + storeaddress + '<br></br>' + storephn +
                '</p>',
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);

        });


    }

    function Set_Map_Region() {
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        var country_lat = document.getElementById('country_lat').value;
        var country_long = document.getElementById('country_long').value;
        var center_map = new google.maps.LatLng(country_lat, country_long);
        var href2 = document.getElementById('country_check').value;
        if (href2 == 'Malaysia')
            var zoom = 6;
        else
            var zoom = 10;
        map = new google.maps.Map(document.getElementById('map'), {
            center: center_map,
            zoom: zoom
        });
        directionsRenderer.setMap(map);

    }


    var map;

    function loadmap() {

        $('#currentpostal').click(function(e) {
            e.preventDefault();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    userLat = position.coords.latitude;
                    userLong = position.coords.longitude;

                    var geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(userLat, userLong);
                    var postcode;
                    geocoder.geocode({
                        'location': latlng
                    }, function(results, status) {
                        if (status == 'OK') {

                            var get_address = results[0].address_components;
                            for (i = 0; i < get_address.length; i++) {
                            if (get_address[i].types[0] == 'postal_code') 
                                 postcode = get_address[i].long_name;
                                
                        }

                        if(!postcode)
                          postcode = 1205;
                           
                            document.getElementById('postal').value = postcode;

                        } else {
                            $('#geo_err').show();
                            $('#geo_err').html('Geocode was not successful for the following reason: ' +status)
                            setTimeout(function() {
                                $('#geo_err').fadeOut('slow');
                            }, 2800);
                        }
                    });

                });
            }

        });
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();

        var flag = 0;

        var show_div_store = [];
        //var gmarkers = [];
        Set_Map_Region();

        $('#searchpostal').on('click', function(event) {
            //event.preventDefault();
            var radius = document.getElementById('radius');
            var selected_radius = radius.options[radius.selectedIndex].value;
            var postcode = document.getElementById('postal').value;
            var country = document.getElementById('country_check').value;
            if (country == 'Singapore')
                var adr_init = 'SG';
            else if (country == 'Malaysia')
                var adr_init = 'MY';
            else if (country == 'Philippines')
                var adr_init = 'PH'
            else if (country == 'Vietnam')
                var adr_init = 'VN'
            else if (country == 'Thailand')
                var adr_init = 'TH'
            else if (country == 'Indonesia')
                var adr_init = 'ID'
            var geocoder = new google.maps.Geocoder();

            var counter_for_stores = 0;
            var xza = 0;
            if (postcode == '' || selected_radius == 'All')
                ShowAllStores();
            else {
                flag = 1;
                Remove_Markers();

                var address = adr_init + ' ' + postcode;

                var request = {
                    address: address,
                    /* componentRestrictions: {
                         country: country
                     }*/
                }
                geocoder.geocode(request, function(results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {
                        var get_address = results[0].address_components;
                        for (i = 0; i < get_address.length; i++) {
                            if (get_address[i].types[0] == 'country') {
                                var cnty = get_address[i].long_name;
                                if (cnty == country)
                                    var correct_country = 1;
                                else
                                    var correct_country = 0;
                            }
                        }
                        var post_lat = results[0].geometry.location.lat();
                        var post_long = results[0].geometry.location.lng();
                        $('#shoplist').show();
                        if (correct_country == 1) {
                            for (j = 0; j < lats.length; j++) {

                                counter_for_stores = showSelectedOutside(post_lat, post_long,
                                    lats[j], longs[j], selected_radius, j, counter_for_stores);

                            }

                        } else {
                            ShowAllStores();
                            $('#geo_err').show();
                            $('#geo_err').html('Entered postcode doesnt belong to ' + country);
                            setTimeout(function() {
                                $('#geo_err').fadeOut('slow');
                            }, 2800);
                        }

                    } else {
                        ShowAllStores();
                        $('#geo_err').show();
                        $('#geo_err').html('Geocoding not found for the entered postcode');
                        setTimeout(function() {
                            $('#geo_err').fadeOut('slow');
                        }, 2800);


                    }

                });



            }

            if (xza == 1)
                ShowAllStores();

        });


        if (flag == 0 || postcode == '' || flag == 2 || selected_radius == 'All')
            ShowAllStores();

        var check_radius = 0;


        var check_for_no_store = 0;

        function Set_Map_By_Postcode(post_lats, post_longs) {
            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();
            var postal_latlongs = new google.maps.LatLng(post_lats, post_longs);
            map = new google.maps.Map(document.getElementById('map'), {
                center: postal_latlongs,
                zoom: 11
            });
            directionsRenderer.setMap(map);

        }


        function showSelectedOutside(post_lats, post_longs, stores_lat, stores_long, selected_radius, j,
            counter_for_stores) {
            var no_result_postcode = ''
            Remove_Markers();
            Set_Map_By_Postcode(post_lats, post_longs);

            var myradius;
            if (selected_radius == 'Within 10 km')
                myradius = 10.0;
            else if (selected_radius == 'Within 8 km')
                myradius = 8.0;
            else if (selected_radius == 'Within 6 km')
                myradius = 6.0;
            else if (selected_radius == 'Within 4 km')
                myradius = 4.0;
            else if (selected_radius == 'Within 2 km')
                myradius = 2.0;

            myradius = parseFloat(myradius);
            var distance;
            var origin_coords = new google.maps.LatLng(post_lats, post_longs);
            var destination_coords = new google.maps.LatLng(stores_lat, stores_long);
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [origin_coords],
                destinations: [destination_coords],
                travelMode: google.maps.TravelMode.DRIVING,
                avoidHighways: false,
                avoidTolls: false
            }, function(response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status !=
                    "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;

                    for (i = 0; i < distance.length; i++) {
                        if (distance[i] == ' ')
                            distance = distance.slice(0, i);
                    }

                    if (distance.includes(','))
                        distance = distance.replace(',', '');
                    distance = parseFloat(distance);




                    if (distance <= myradius) {


                        counter_for_stores += 1;

                        var y = (j + 1) * 5;


                        $('#shops > li').eq(y).show()
                        $('#shops > li').eq(y - 1).show()
                        $('#shops > li').eq(y - 2).show()
                        $('#shops > li').eq(y - 3).show()
                        $('#shops > li').eq(y - 4).show()



                        var Latlng = new google.maps.LatLng(stores_lat, stores_long);
                        var mymarker = new google.maps.Marker({
                            position: Latlng,
                            animation: google.maps.Animation.DROP,
                            map: map

                        });

                        map.setZoom(11);
                        gmarkers.push(mymarker);
                        addInfoWindow(mymarker, store_name[j], store_adr[j], store_phn[j]);

                    } else if (distance > myradius) {
                        var y = (j + 1) * 5;

                        $('#shops > li').eq(y).hide()
                        $('#shops > li').eq(y - 1).hide()
                        $('#shops > li').eq(y - 2).hide()
                        $('#shops > li').eq(y - 3).hide()
                        $('#shops > li').eq(y - 4).hide()


                    }


                } else {
                    var y = (j + 1) * 5;

                    $('#shops > li').eq(y).hide()
                    $('#shops > li').eq(y - 1).hide()
                    $('#shops > li').eq(y - 2).hide()
                    $('#shops > li').eq(y - 3).hide()
                    $('#shops > li').eq(y - 4).hide()


                }


            });

            return counter_for_stores;
        }

        function ShowAllStores() {
            Remove_Markers();
            Set_Map_Region();
            directionsRenderer.setMap(map);
            var get_country = document.getElementById('country_check').value;
            if (get_country == 'Malaysia' || get_country == 'Vietnam' || get_country == 'Indonesia')
                map.setZoom(7);
            else
                map.setZoom(10);
            for (i = 0; i < lats.length; i++) {

                var myLatlng = new google.maps.LatLng(lats[i], longs[i]);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    animation: google.maps.Animation.DROP,
                    map: map

                });
                addInfoWindow(marker, store_name[i], store_adr[i], store_phn[i]);


                gmarkers.push(marker);

                var y = (i + 1) * 5;

                $('#shops > li').eq(y).show()
                $('#shops > li').eq(y - 1).show()
                $('#shops > li').eq(y - 2).show()
                $('#shops > li').eq(y - 3).show()
                $('#shops > li').eq(y - 4).show()


            }




        }
        var lastWindow = null;

        function addInfoWindow(marker, store_name, store_adr, store_phn) {

            var infowindow = new google.maps.InfoWindow({
                content: '<p>' + '<h5 id="isnm">' + store_name + '</h5>' + store_adr + '<br></br>' + store_phn +
                    '</p>',
            });

            google.maps.event.addListener(marker, 'click', function() {
                if (lastWindow)
                    lastWindow.close();
                infowindow.open(map, this);
                lastWindow = infowindow;


            });



        }


        var modal = document.getElementById('myModal');
        $('#modal_online').click(function(e) {
            e.preventDefault();
            modal.style.display = 'block';
        })

        $('#modal_online2').click(function(e) {
            e.preventDefault();
            modal.style.display = 'block';
        })

        $('#closemodal').click(function(e) {
            modal.style.display = 'none';
        })
        $('#close_btn').click(function(e) {
            modal.style.display = 'none';
        })

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var href1 = document.getElementById('country_check').value;

        var Turl = window.location.href;
        var instalink = document.getElementById('instalink');
        var fblink = document.getElementById('fblink');
        var shoplistdiv = document.getElementById('shoplist');
        var contact_div = document.getElementById('contact');
        var footer_card = document.getElementById('footer_card');
        if (href1 == 'Singapore')
            instalink.href = '//www.instagram.com/optimumnutrition.sg/';
        else if (href1 == 'Malaysia')
            instalink.href = '//www.instagram.com/optimumnutrition.my/';
        else if (href1 == 'Philippines')
            instalink.href = '//www.instagram.com/optimumnutrition.ph/';
        else if (href1 == 'Vietnam')
            instalink.href = '//www.instagram.com/optimumnutrition.vn/';
        else if (href1 == 'Indonesia')
            instalink.href = '//www.instagram.com/optimumnutrition.id/';
        else if (href1 == 'Turkey') {
            if (Turl.includes('TR.EN'))
                $('#auth_retailer_p').css('marginLeft', 250);

            else {
                $('#auth_retailer_h3').css('marginLeft', 240);
                $('#auth_retailer_p').css('marginLeft', 230);
            }

            $('#retailer').css('position', 'relative');
            $('#retailer').css('marginTop', '2.5rem');
            $('#retailer').css('marginLeft', '37rem');
            $('#retailer').css('overflow', 'hidden');
            $('#contact').css('width', '100%')
            $('#footer_card').css('top', 1200);
            shoplistdiv.style.position = 'absolute';
            shoplistdiv.style.left = '10px';
            shoplistdiv.style.top = '8px';
            shoplistdiv.style.width = '1500px';

            $('#map').hide();
            $('#postal').hide();
            $('#radius').hide();
            $('#searchpostal').hide();
            $('#or').hide();
            $('.places_btn').hide();
            $('.li_store_btn').prop('onclick', null);
            $('.dist_class').hide();
            $('#currentpostal').hide();
            $('#modal_online').hide();
            $('#container_post').hide();
            $('footer').css('bottom', 0);



            contact_div.style.position = 'absolute';
            contact_div.style.top = '1870px';

            fblink.href = '/';
            instalink.href = '/';


        } else if (href1 == 'Egypt' || href1 == 'Saudi Arabia' || href1 == 'UAE' || href1 == 'Iraq') {

            fblink.href = '/';
            instalink.href = '/';
            $('#contact').css('marginTop', 50)
            $('#total_verified').css('marginTop', -153)
            $('#map').hide();
            $('#postal').hide();
            $('#radius').hide();
            $('#searchpostal').hide();
            $('#or').hide();
            $('#currentpostal').hide();
            $('#modal_online').hide();
            $('#container_post').hide();
            $('#shoplist').hide();

        }

    }
    </script>
    <script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=geometry&key=AIzaSyAgUOMCoukjDqixtQiiTQ_cdjdGWM6xT50&callback=loadmap">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
@endsection