@php
    use App\Models\Category;
    $data = Category::all();
@endphp
@extends('master')
@section('body')

    <body
        class="home page-template-default page page-id-6988 wp-custom-logo ehf-header ehf-footer ehf-template-consulting ehf-stylesheet-consulting-child site_layout_1  header_style_6 sticky_menu header_inverse mobile_grid_landscape vc_sidebar_page wpb-js-composer js-comp-ver-6.7.0 vc_responsive elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-6988 elementor-page-6996">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 0.49803921568627" />
                        <feFuncG type="table" tableValues="0 0.49803921568627" />
                        <feFuncB type="table" tableValues="0 0.49803921568627" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 0.27843137254902" />
                        <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-midnight">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 0" />
                        <feFuncG type="table" tableValues="0 0.64705882352941" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.78039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.94901960784314" />
                        <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                        values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.098039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.66274509803922" />
                        <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg>
        <div id="wrapper">

            <e-page-transition preloader-type="image" preloader-image-url="assets/uploads/2022/01/Logo-1.svg"
                class="e-page-transition--entering" exclude="^https\:\/\/bti\-advisory\.com\/wp\-admin\/">
            </e-page-transition>
            <div id="page" class="hfeed site">

                <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
                    <p class="main-title bhf-hidden " itemprop="headline"><a href="{{ route('home') }}"
                            title="BTI &#8211; Advisory" rel="home">BTI &#8211; Advisory</a></p>
                    <div data-elementor-type="wp-post" data-elementor-id="20" class="elementor elementor-20">
                        <header
                            class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-2d817186 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                            data-id="2d817186" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="has_ae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44947618 ae-bg-gallery-type-default"
                                    data-id="44947618" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7739b742 elementor-absolute elementor-widget__width-initial elementor-widget elementor-widget-site-logo"
                                            data-id="7739b742" data-element_type="widget"
                                            data-settings="{&quot;align&quot;:&quot;left&quot;,&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:94,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="site-logo.default">
                                            <div class="elementor-widget-container">
                                                <div class="hfe-site-logo">
                                                    <a data-elementor-open-lightbox="" class='elementor-clickable'
                                                        href="{{ route('home') }}" aria-label="home">
                                                        <div class="hfe-site-logo-set">
                                                            <div class="hfe-site-logo-container">
                                                                <picture>
                                                                    <source type="image/webp"
                                                                        srcset="{{ asset('images/navbar/logo.webp') }}">
                                                                    <img class="hfe-site-logo-img elementor-animation- lazy"
                                                                        src="{{ asset('images/navbar/logo.svg') }}"
                                                                        data-src="{{ asset('images/navbar/logo.svg') }}"
                                                                        alt="">
                                                                </picture>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="has_ae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-79f36302 ae-bg-gallery-type-default"
                                    data-id="79f36302" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-46fc6f23 hfe-nav-menu__align-right hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-submenu-animation-none hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                                            data-id="46fc6f23" data-element_type="widget"
                                            data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:28,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:32,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;8&quot;,&quot;right&quot;:&quot;8&quot;,&quot;bottom&quot;:&quot;8&quot;,&quot;left&quot;:&quot;8&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:120,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:32,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="navigation-menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__underline hfe-animation__grow"
                                                    data-layout="horizontal">
                                                    {{-- <div class="hfe-nav-menu__toggle elementor-clickable">

                                                    </div> --}}
                                                    {{--  hfe-nav-menu-icon" --}}
                                                    <div class="elementor-clickable " id="three_slides_mobile_view_2"
                                                        style="color:white;text-align: right;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="white"
                                                            style="" style="color:white;" viewBox="0 0 50 50"
                                                            width="50px" id="three_slides_mobile_view_2_svg"
                                                            height="50px">
                                                            <path
                                                                d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <style>
                                                        #three_slides_mobile_view_2 {
                                                            display: none;
                                                        }

                                                        @media only screen and (max-width: 767px) {
                                                            #three_slides_mobile_view_2 {
                                                                display: block;
                                                            }

                                                        }
                                                    </style>
                                                    @include('Includes/navbar_mobile_view')
                                                    <nav class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow"
                                                        data-toggle-icon="&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;#000000&quot; viewBox=&quot;0 0 50 50&quot; width=&quot;50px&quot; height=&quot;50px&quot;&gt;&lt;path d=&quot;M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;"
                                                        data-close-icon="&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;#000000&quot; viewBox=&quot;0 0 50 50&quot; width=&quot;50px&quot; height=&quot;50px&quot;&gt;&lt;path d=&quot;M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;"
                                                        data-full-width="yes">
                                                        <ul id="menu-1-1e6965e" class="hfe-nav-menu">
                                                            <li id="menu-item-86"
                                                                class=" menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page   {{ request()->is('a-propos') ? 'menu_item_navbar' : '' }} {{ request()->is('a-propos') ? 'current-menu-ancestor' : 'parent' }} hfe-creative-menu">
                                                                <a href="{{ route('about-us') }}"
                                                                    class="hfe-menu-item">{{ $data[0]->categorie_name }}
                                                                </a>
                                                            </li>

                                                            <li id="menu-item-6494"
                                                                class="menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page   {{ request()->is('service/*') ? 'menu_item_navbar' : '' }}  {{ request()->is('service/*') ? 'current-menu-ancestor' : 'parent' }}  hfe-creative-menu">
                                                                <div class="hfe-has-submenu-container">
                                                                    <a {{-- href="" --}}
                                                                        class="hfe-menu-item">{{ $data[1]->categorie_name }}
                                                                        <span
                                                                            class="hfe-menu-toggle sub-arrow hfe-menu-child-0"><i
                                                                                class="fa"></i></span>
                                                                    </a>
                                                                </div>
                                                                <ul class="sub-menu dark_background m-0 p-0">
                                                                    <div class="d-flex m-0 p-0 "
                                                                        style="border-radius: 8px;webkit-box-shadow: 0 4px 10px -2px rgba(0, 0, 0, .1);
                                                                        box-shadow: 0 4px 10px -2px rgba(0, 0, 0, .1);"
                                                                        id="app_sub_menu">
                                                                        {{-- margin-top: -15px; --}}
                                                                        <div id="div_menu" class="dark_background">
                                                                            <li id="menu-item-6493"
                                                                                class=" menu-item app_menu_item_app menu-item-type-post_type menu-item-object-page stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                                <a href="{{ route('Construire_la_vision') }}"
                                                                                    class=" hfe-sub-menu-item  {{ Route::currentRouteName() === 'Construire_la_vision' ? 'content_menu_item_active' : '' }}">Construire
                                                                                    la vision<span
                                                                                        class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                                                            class='fas fa-chevron-right'></i></span></a>
                                                                            </li>
                                                                            <li id="menu-item-5705"
                                                                                class="menu-item app_menu_item_app  menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                                <a href="{{ route('Accompagner_la_mise_en_oeuvre') }}"
                                                                                    class="hfe-sub-menu-item
                                                                                {{ Route::currentRouteName() === 'Accompagner_la_mise_en_oeuvre' ? 'content_menu_item_active' : '' }}">Accompagner
                                                                                    la mise en
                                                                                    oeuvre<span
                                                                                        class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                                                            class='fas fa-chevron-right'></i></span></a>
                                                                            </li>
                                                                            <li id="menu-item-5707"
                                                                                class="menu-item app_menu_item_app menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                                <a href=""
                                                                                    class="hfe-sub-menu-item  {{ Route::currentRouteName() === 'expérience_utilisateur' || Route::currentRouteName() === 'Cloud' || Route::currentRouteName() === 'green_it' || Route::currentRouteName() === 'data_inteligence' ? 'content_menu_item_active' : '' }}">Nos
                                                                                    Centres d'Excellence<span
                                                                                        class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                                                            class='fas fa-chevron-right'></i></span></a>
                                                                            </li>
                                                                            <li
                                                                                class="menu-item app_menu_item_app menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                                <a href="{{ route('tout_nos_services') }}"
                                                                                    class="hfe-sub-menu-item  nos_service_href">
                                                                                    Tous Nos services</a>
                                                                            </li>
                                                                        </div>

                                                                        <div id="nav_slider_extra_content_0"
                                                                            class="dark_background">
                                                                            <li id="menu-item-6493" class="mt-2">
                                                                                <a class=" text_white"
                                                                                    href="{{ url('/service/construire-la-vision#co-construire-votre-stratégie-technologique') }}">Co-construire
                                                                                    votre stratégie technologique</a>
                                                                            </li>
                                                                            <li id="menu-item-6493" class="md-1">
                                                                                <a class="text_white"
                                                                                    href="{{ url('/service/construire-la-vision#architecture_header') }}">Architecture</a>
                                                                            </li>
                                                                        </div>
                                                                        <div id="nav_slider_extra_content_1"
                                                                            class="dark_background">
                                                                            <li id="menu-item-6493" class="mt-2">
                                                                                <a class="text_white"
                                                                                    href="{{ url('/service/accompagner-la-mise-en-oeuvre#pilotage') }}">Pilotage</a>
                                                                            </li>
                                                                            <li id="menu-item-6493" class="md-1">
                                                                                <a class="text_white"
                                                                                    href="{{ url('/service/accompagner-la-mise-en-oeuvre#réalisation') }}">Réalisation</a>
                                                                            </li>
                                                                        </div>
                                                                        <div id="nav_slider_extra_content_2"
                                                                            class="dark_background">
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-6">
                                                                                    <a class="text_white {{ request()->is('service/data-inteligence') || Route::currentRouteName() === 'data_inteligence' ? 'content_menu_item_active' : '' }}"
                                                                                        href="{{ route('data_inteligence') }}">Data
                                                                                        Intelligence</a>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <a class="text_white {{ request()->is('service/cloud') || Route::currentRouteName() === 'Cloud' ? 'content_menu_item_active' : '' }}"
                                                                                        href='{{ route('Cloud') }}'>Cloud
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <a class="text_white {{ request()->is('service/expérience-utilisateur') || Route::currentRouteName() === 'expérience_utilisateur' ? 'content_menu_item_active' : '' }}"
                                                                                        href="{{ route('expérience_utilisateur') }}">
                                                                                        Expérience
                                                                                        Utilisateur</a>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <a class="text_white {{ request()->is('service/green-it') || Route::currentRouteName() === 'green_it' ? 'content_menu_item_active' : '' }}"
                                                                                        href="{{ route('green_it') }}">
                                                                                        Green
                                                                                        IT
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </ul>

                                                            </li>
                                                            <li id="menu-item-4710"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                                <div class="hfe-has-submenu-container"><a
                                                                        {{-- href="{{ url('/') }}" --}}
                                                                        class="hfe-menu-item">{{ $data[10]->categorie_name }}<span
                                                                            class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                                                class='fa'></i></span></a></div>
                                                                <ul class="sub-menu">
                                                                    <li id="menu-item-4706"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a target="_blank"rel="noopener"
                                                                            href="https://bti-studio.com/"
                                                                            class="hfe-sub-menu-item">{{ $data[14]->categorie_name }}</a>
                                                                    </li>
                                                                    <li id="menu-item-4705"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a target="_blank"rel="noopener"
                                                                            href="https://www.bti-lab.com/"
                                                                            class="hfe-sub-menu-item">{{ $data[15]->categorie_name }}</a>
                                                                    </li>
                                                                    <li id="menu-item-4704"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a target="_blank"rel="noopener"
                                                                            href="https://www.yellow-it.fr/"
                                                                            class="hfe-sub-menu-item">{{ $data[16]->categorie_name }}</a>
                                                                    </li>

                                                                </ul>
                                                                <ul class="sub-menu">
                                                                    <li id="menu-item-4706"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a target="_blank"rel="noopener"
                                                                            href="https://bti-studio.com/"
                                                                            class="hfe-sub-menu-item">{{ $data[14]->categorie_name }}</a>
                                                                    </li>
                                                                    <li id="menu-item-4705"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a target="_blank"rel="noopener"
                                                                            href="https://www.bti-lab.com/"
                                                                            class="hfe-sub-menu-item">{{ $data[15]->categorie_name }}</a>
                                                                    </li>
                                                                    <li id="menu-item-4704"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a target="_blank"rel="noopener"
                                                                            href="https://www.yellow-it.fr/"
                                                                            class="hfe-sub-menu-item">{{ $data[16]->categorie_name }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li id="menu-item-78"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page {{ request()->is('nous-rejoindre') ? 'current-menu-ancestor' : '' }}  {{ request()->is('nous-rejoindre') ? 'menu_item_navbar' : '' }}  page_item page-item-73 current_page_item parent hfe-creative-menu">
                                                                <a href="{{ route('join-us') }}"
                                                                    class="hfe-menu-item">{{ $data[2]->categorie_name }}</a>
                                                            </li>
                                                            <li id="menu-item-6495"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                                <div class="hfe-has-submenu-container"><a
                                                                        class="hfe-menu-item">{{ $data[8]->categorie_name }}<span
                                                                            class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                                                class='fa'></i></span></a></div>
                                                                <ul class="sub-menu">
                                                                    <li id="menu-item-80"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a href="{{ route('blog') }}"
                                                                            class="hfe-sub-menu-item">{{ $data[17]->categorie_name }}</a>
                                                                    </li>
                                                                    <li id="menu-item-79"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                                        <a href="#"
                                                                            class="hfe-sub-menu-item">{{ $data[18]->categorie_name }}</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <div class="has_ae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-729dcfda ae-bg-gallery-type-default"
                                    data-id="729dcfda" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4ae0090a elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button"
                                            data-id="4ae0090a" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper   ">
                                                    <a href="{{ route('contact') }}"
                                                        class="elementor-button-link elementor-button elementor-size-xs"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.545"
                                                                    height="24" viewBox="0 0 21.545 24">
                                                                    <path id="ic_contact"
                                                                        d="M15.883,23.99c5.834-.132,10.773-7.36,10.773-13.225a10.773,10.773,0,1,0-10.772,10.77,7.137,7.137,0,0,1,0,1.233Zm4.879-14.1a1.375,1.375,0,1,1-.98.4,1.38,1.38,0,0,1,.98-.4Zm-9.745,2.757a1.38,1.38,0,1,1,1.37-1.361,1.38,1.38,0,0,1-1.37,1.361Zm4.852,0a1.38,1.38,0,1,1,1.392-1.377,1.394,1.394,0,0,1-1.392,1.38Z"
                                                                        transform="translate(-5.11 0.01)"
                                                                        fill="#1c1c1a" />
                                                                </svg>
                                                            </span>
                                                            <span
                                                                class="elementor-button-text">{{ $data[3]->categorie_name }}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
                </header>

                <div id="main">
                    <div class="container-fluid m-0 p-0">
                        <div data-elementor-type="single-page" data-elementor-id="6996"
                            class="elementor elementor-6996 elementor-location-single post-6988 page type-page status-publish has-post-thumbnail hentry">
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-731a00b2 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="731a00b2" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e3ef452 ae-bg-gallery-type-default"
                                        data-id="7e3ef452" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-49d8bfe9 elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="49d8bfe9" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.8.1 - 13-11-2022 */
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                            background-color: #818a91;
                                                            color: #fff
                                                        }

                                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                            color: #818a91;
                                                            border: 3px solid;
                                                            background-color: transparent
                                                        }

                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                            margin-top: 8px
                                                        }

                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                            width: 1em;
                                                            height: 1em
                                                        }

                                                        .elementor-widget-text-editor .elementor-drop-cap {
                                                            float: left;
                                                            text-align: center;
                                                            line-height: 1;
                                                            font-size: 50px
                                                        }

                                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                            display: inline-block
                                                        }
                                                    </style>
                                                    <style>
                                                        .elementor-6996 .elementor-element.elementor-element-731a00b2:not(.elementor-motion-effects-element-type-background),
                                                        .elementor-6996 .elementor-element.elementor-element-731a00b2>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                                                            background-color: var(--e-global-color-primary);
                                                            background-image: url("{{ asset('images/home/10029.webp') }}");
                                                            background-repeat: no-repeat;
                                                            background-size: cover
                                                        }
                                                    </style>
                                                    <p><span style="color: #e99b17;">B</span>​usiness​</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6f3996da elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="6f3996da" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;slideInLeft&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p style="text-align: left;"><span
                                                            style="color: #e99b17;">T</span>echnology
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="elementor-element elementor-element-245a550e elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="245a550e" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;slideInRight&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="color: #e99b17;">I</span>nnovation</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-67341e60 elementor-widget__width-initial e-transform elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                                                data-id="67341e60" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-80,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p class="mx-4 mx-lg-0 mx-md-0">{!! $articles[0]->article_text !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-3cbd9c40 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="3cbd9c40" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75232189 ae-bg-gallery-type-default"
                                        data-id="75232189" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bda4aff elementor-widget elementor-widget-theme-post-content"
                                                data-id="bda4aff" data-element_type="widget"
                                                data-widget_type="theme-post-content.default">
                                                <div class="">


                                                    <p class="mx-4 mx-lg-0 mx-md-0" id="paragraph_section">
                                                        {!! $articles[1]->article_text !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider d-flex mx-2 justify-content-center elementor-section elementor-top-section elementor-element elementor-element-5855c891 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="5855c891" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="   d-flex justify-content-start container elementor-column-gap-no">
                                    <div class="  has_ae_slider elementor-column elementor-col-70 m-0 p-0  elementor-top-column elementor-element elementor-element-698022b1 ae-bg-gallery-type-default"
                                        data-id="698022b1" data-element_type="column" style="width:100%;">
                                        <div class="elementor-widget-wrap m-0 p-0 w-100  elementor-element-populated">
                                            <div class="elementor-element elementor-element-324bc58c elementor-widget elementor-widget-heading"
                                                data-id="324bc58c" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.8.1 - 13-11-2022 */
                                                        .elementor-heading-title {
                                                            padding: 0;
                                                            margin: 0;
                                                            line-height: 1
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                            color: inherit;
                                                            font-size: inherit;
                                                            line-height: inherit
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                            font-size: 15px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                            font-size: 19px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                            font-size: 29px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                            font-size: 39px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                            font-size: 59px
                                                        }
                                                    </style>
                                                    <h6 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[2]->article_text !!}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element m-0 p-0   elementor-element-f9103c5 elementor-widget elementor-widget-heading"
                                                data-id="f9103c5" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[3]->article_text !!}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element  elementor-element-4490ec56 elementor-widget elementor-widget-text-editor"
                                                data-id="4490ec56" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container" style="width: 100%;">
                                                    <p>{!! $articles[4]->article_text !!}</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2ed07fb0 elementor-widget elementor-widget-button"
                                                data-id="2ed07fb0" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="{{ route('about-us') }}"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Nous découvrir</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="  has_ae_slider elementor-top-column elementor-column elementor-col-70 m-0 p-0  elementor-element elementor-element-660ad67c ae-bg-gallery-type-default"
                                        data-id="660ad67c" data-element_type="column">
                                        <div class="elementor-widget-wrap  m-0 p-0 w-100   elementor-element-populated">
                                            <div class="elementor-element elementor-element-76c25822 img-circle elementor-widget elementor-widget-image"
                                                data-id="76c25822" data-element_type="widget" style="float: right;"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.8.1 - 13-11-2022 */
                                                        /* .elementor-element{

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } */
                                                        .elementor-widget-image {
                                                            text-align: center
                                                        }

                                                        .elementor-widget-image a {
                                                            display: inline-block
                                                        }

                                                        .elementor-widget-image a img[src$=".svg"] {
                                                            width: 48px;
                                                            margin-left: 200px;
                                                            background: gold;
                                                        }

                                                        .elementor-widget-image img {
                                                            vertical-align: middle;
                                                            display: inline-block;
                                                            float: right;
                                                            width: 300px;

                                                        }

                                                        @media (max-width: 800px) {

                                                            .elementor-widget-image img {
                                                                vertical-align: middle;
                                                                display: inline-block;
                                                                float: left;
                                                                width: 80px;
                                                                height: 80px;


                                                            }
                                                        }
                                                    </style>

                                                    <picture>
                                                        <source type="image/webp"
                                                            srcset="{{ asset('images/home/10009.webp') }}">
                                                        <img width="800" height="447"
                                                            class="hfe-site-logo-img elementor-animation- lazy"
                                                            src="{{ asset('images/home/10009.png') }}"
                                                            data-src="{{ asset('images/home/10009.png') }}"
                                                            alt=""
                                                            class="attachment-bloc-image-447x447-cropped size-bloc-image-447x447-cropped lazy">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <style>
                                .accordion_container {
                                    /*   margin: 0px; */
                                    margin-left: 0% !important;
                                    width: 100%;
                                }

                                @media only screen and (min-width: 768px) {
                                    .accordion_container {
                                        /*   margin: 0px; */
                                        margin-left: 7% !important;
                                        width: 80%;
                                    }
                                }

                                /*margin-left: 7%;*/
                            </style>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-24fa6d8b elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="24fa6d8b" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class=" elementor-column-gap-no accordion_container d-block d-md-flex "
                                    {{-- style="margin: 0px;" --}}>
                                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7f449b9c ae-bg-gallery-type-default"
                                        data-id="7f449b9c" data-element_type="column">

                                        <div class=" elementor-widget-wrap elementor-element-populated mx-4 mx-lg-0 mx-md-0"
                                            id="nos_services_section_app">
                                            <div class=" elementor-element elementor-element-38f80f8b elementor-widget elementor-widget-heading"
                                                data-id="38f80f8b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[5]->article_text !!}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class=" elementor-element elementor-element-6e92e0fd elementor-widget elementor-widget-heading"
                                                data-id="6e92e0fd" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[6]->article_text !!}</h1>
                                                </div>
                                            </div>
                                            <div class="  elementor-element elementor-element-16efb198 elementor-align-left elementor-widget elementor-widget-button"
                                                data-id="16efb198" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="{{ route('tout_nos_services') }}"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Nos services</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4fb72d07 ae-bg-gallery-type-default"
                                        data-id="4fb72d07" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2fecf1e3 elementor-widget elementor-widget-image"
                                                data-id="2fecf1e3" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <picture>
                                                        <source type="image/webp"
                                                            srcset="{{ asset('images/home/10010.webp') }}">
                                                        <img style="height: 100%;width: 100%;"
                                                            class="attachment-accueil-nosservices-683x601-cropped size-accueil-nosservices-683x601-cropped lazy"
                                                            src="{{ asset('images/home/10010.png') }}"
                                                            data-src="{{ asset('images/home/10010.png') }}"
                                                            alt="">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-1dee9c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="1dee9c2" data-element_type="section">
                                <div class=" elementor-column-gap-no accordion_container" {{-- style="margin: 0px;" --}}>
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5c9ef2cb ae-bg-gallery-type-default"
                                        data-id="5c9ef2cb" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-44095b62 services-accordeon elementor-widget elementor-widget-ae-post-blocks-adv"
                                                data-id="44095b62" data-element_type="widget"
                                                data-settings="{&quot;accordion_accordion_state&quot;:&quot;open_specific&quot;}"
                                                data-widget_type="ae-post-blocks-adv.accordion">
                                                <div class="elementor-widget-container">
                                                    <div class="ae-outer-wrapper ae-height-100">


                                                        <div class="ae-post-collection elementor-accordion ae-accordion"
                                                            role="tablist" data-transition-speed="300">
                                                            <div class="ae-accordion-item">
                                                                <h6 id="ae-tab-title-38497224191" t_id="38497224191"
                                                                    class="ae-tab-title ae-post-blocks-adv-accordion ae-active"
                                                                    data-tab="1" role="tab"
                                                                    aria-controls="ae-tab-content-38497224191">
                                                                    <span class="ae-accordion-icon ae-accordion-icon-right"
                                                                        aria-hidden="true">
                                                                        <span class="ae-accordion-icon-closed"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="36" height="36"
                                                                                viewBox="0 0 36 36">
                                                                                <g id="ic_plus"
                                                                                    transform="translate(36) rotate(90)">
                                                                                    <circle id="Ellipse_139"
                                                                                        data-name="Ellipse 139"
                                                                                        cx="18" cy="18"
                                                                                        r="18" fill="#8f9295"
                                                                                        opacity="0.202"></circle>
                                                                                    <g id="Groupe_8335"
                                                                                        data-name="Groupe 8335"
                                                                                        transform="translate(9 9)">
                                                                                        <g id="Group"
                                                                                            transform="translate(1 1)">
                                                                                            <g id="Group-2"
                                                                                                data-name="Group"
                                                                                                transform="translate(7.494)">
                                                                                                <path id="Trac&#xE9;_124"
                                                                                                    data-name="Trac&#xE9; 124"
                                                                                                    d="M15.506,17A.52.52,0,0,1,15,16.467V1.533a.506.506,0,1,1,1.012,0V16.467A.52.52,0,0,1,15.506,17Z"
                                                                                                    transform="translate(-15 -1)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                            <g id="Group-3"
                                                                                                data-name="Group"
                                                                                                transform="translate(0 7.494)">
                                                                                                <path id="Trac&#xE9;_125"
                                                                                                    data-name="Trac&#xE9; 125"
                                                                                                    d="M16.467,16.012H1.533a.506.506,0,1,1,0-1.012H16.467a.506.506,0,1,1,0,1.012Z"
                                                                                                    transform="translate(-1 -15)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                        <span class="ae-accordion-icon-opened"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="36" height="36"
                                                                                viewBox="0 0 36 36">
                                                                                <g id="ic_moins"
                                                                                    transform="translate(36) rotate(90)">
                                                                                    <circle id="Ellipse_139"
                                                                                        data-name="Ellipse 139"
                                                                                        cx="18" cy="18"
                                                                                        r="18" fill="#8f9295"
                                                                                        opacity="0.202"></circle>
                                                                                    <g id="Groupe_8335"
                                                                                        data-name="Groupe 8335"
                                                                                        transform="translate(9 9)">
                                                                                        <g id="Group"
                                                                                            transform="translate(1 1)">
                                                                                            <g id="Group-2"
                                                                                                data-name="Group"
                                                                                                transform="translate(7.494)">
                                                                                                <path id="Trac&#xE9;_124"
                                                                                                    data-name="Trac&#xE9; 124"
                                                                                                    d="M15.506,17A.52.52,0,0,1,15,16.467V1.533a.506.506,0,1,1,1.012,0V16.467A.52.52,0,0,1,15.506,17Z"
                                                                                                    transform="translate(-15 -1)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                    </span>
                                                                    <a href="#">Construire la vision
                                                                    </a>
                                                                </h6>
                                                                <div id="ae-tab-content-38497224191" t_id="38497224191"
                                                                    class="elementor-clearfix ae-tab-content ae-post-blocks-adv-accordion ae-active"
                                                                    data-tab="1" role="tabpanel"
                                                                    aria-labelledby="ae-tab-title-38497224191">

                                                                    <article class="ae-post-item ae-post-item-44095b62">
                                                                        <div class="ae-post-item-inner">
                                                                            <div class="ae_data elementor elementor-5189">
                                                                                <div data-elementor-type="wp-post"
                                                                                    data-elementor-id="5189"
                                                                                    class="elementor elementor-5189">
                                                                                    <section
                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-54ec80ad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                        data-id="54ec80ad"
                                                                                        data-element_type="section"
                                                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                        <div
                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                            <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-19993f4f ae-bg-gallery-type-default"
                                                                                                data-id="19993f4f"
                                                                                                data-element_type="column">
                                                                                                <div
                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                    <div class="elementor-element elementor-element-6383991 elementor-widget__width-auto container-tag-acc ae-acf-repeater-layout-grid elementor-widget elementor-widget-ae-acf-repeater"
                                                                                                        data-id="6383991"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="ae-acf-repeater.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <div data-pid="5195"
                                                                                                                data-wid="6383991"
                                                                                                                class="ae-acf-repeater-widget-wrapper ae-masonry-">

                                                                                                                <div
                                                                                                                    class="ae-acf-repeater-wrapper">
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default"><a>Stratégie</a>
                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default"><a>Architecture</a>

                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-38e3f580 elementor-widget elementor-widget-text-editor"
                                                                                                        data-id="38e3f580"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="text-editor.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <p>Nous
                                                                                                                accompagnons
                                                                                                                nos clients
                                                                                                                pour
                                                                                                                développer
                                                                                                                une
                                                                                                                stratégie
                                                                                                                technologique
                                                                                                                claire,
                                                                                                                alignée sur
                                                                                                                leurs
                                                                                                                objectifs
                                                                                                                commerciaux
                                                                                                                et capable
                                                                                                                de faire
                                                                                                                face à la
                                                                                                                concurrence
                                                                                                                et aux
                                                                                                                contraintes
                                                                                                                réglementaires.

                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-76df9292 elementor-widget elementor-widget-button"
                                                                                                        data-id="76df9292"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="button.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <div
                                                                                                                class="elementor-button-wrapper icon_align_right  ">
                                                                                                                <a href="{{ route('Construire_la_vision') }}"
                                                                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                    role="button">
                                                                                                                    <span
                                                                                                                        class="elementor-button-content-wrapper">
                                                                                                                        <span
                                                                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                                                                            <i aria-hidden="true"
                                                                                                                                class="fas fa-arrow-right"></i>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                            class="elementor-button-text">Voir
                                                                                                                            le
                                                                                                                            service</span>
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-742ab9e6 ae-bg-gallery-type-default"
                                                                                                data-id="742ab9e6"
                                                                                                data-element_type="column">
                                                                                                <div
                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                    <div class="elementor-element elementor-element-1cb8d23d elementor-widget elementor-widget-image"
                                                                                                        data-id="1cb8d23d"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="image.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <picture>
                                                                                                                <source
                                                                                                                    type="image/webp"
                                                                                                                    srcset="{{ asset('images/webp/Construire-la-vision.webp') }}">
                                                                                                                <img style="height: 100%;width: 100%"
                                                                                                                    class="attachment-service-accordeon-538x368-cropped size-service-accordeon-538x368-cropped lazy"
                                                                                                                    src="{{ asset('images/webp/Construire-la-vision.webp') }}"
                                                                                                                    data-src="{{ asset('images/webp/Construire-la-vision.webp') }}"
                                                                                                                    alt="">
                                                                                                            </picture>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>

                                                                </div>
                                                            </div>

                                                            <div class="ae-accordion-item">
                                                                <h6 id="ae-tab-title-38497224192" t_id="38497224192"
                                                                    class="ae-tab-title ae-post-blocks-adv-accordion"
                                                                    data-tab="2" role="tab"
                                                                    aria-controls="ae-tab-content-38497224192">
                                                                    <span class="ae-accordion-icon ae-accordion-icon-right"
                                                                        aria-hidden="true">
                                                                        <span class="ae-accordion-icon-closed"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="36" height="36"
                                                                                viewBox="0 0 36 36">
                                                                                <g id="ic_plus"
                                                                                    transform="translate(36) rotate(90)">
                                                                                    <circle id="Ellipse_139"
                                                                                        data-name="Ellipse 139"
                                                                                        cx="18" cy="18"
                                                                                        r="18" fill="#8f9295"
                                                                                        opacity="0.202"></circle>
                                                                                    <g id="Groupe_8335"
                                                                                        data-name="Groupe 8335"
                                                                                        transform="translate(9 9)">
                                                                                        <g id="Group"
                                                                                            transform="translate(1 1)">
                                                                                            <g id="Group-2"
                                                                                                data-name="Group"
                                                                                                transform="translate(7.494)">
                                                                                                <path id="Trac&#xE9;_124"
                                                                                                    data-name="Trac&#xE9; 124"
                                                                                                    d="M15.506,17A.52.52,0,0,1,15,16.467V1.533a.506.506,0,1,1,1.012,0V16.467A.52.52,0,0,1,15.506,17Z"
                                                                                                    transform="translate(-15 -1)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                            <g id="Group-3"
                                                                                                data-name="Group"
                                                                                                transform="translate(0 7.494)">
                                                                                                <path id="Trac&#xE9;_125"
                                                                                                    data-name="Trac&#xE9; 125"
                                                                                                    d="M16.467,16.012H1.533a.506.506,0,1,1,0-1.012H16.467a.506.506,0,1,1,0,1.012Z"
                                                                                                    transform="translate(-1 -15)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                        <span class="ae-accordion-icon-opened"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="36" height="36"
                                                                                viewBox="0 0 36 36">
                                                                                <g id="ic_moins"
                                                                                    transform="translate(36) rotate(90)">
                                                                                    <circle id="Ellipse_139"
                                                                                        data-name="Ellipse 139"
                                                                                        cx="18" cy="18"
                                                                                        r="18" fill="#8f9295"
                                                                                        opacity="0.202"></circle>
                                                                                    <g id="Groupe_8335"
                                                                                        data-name="Groupe 8335"
                                                                                        transform="translate(9 9)">
                                                                                        <g id="Group"
                                                                                            transform="translate(1 1)">
                                                                                            <g id="Group-2"
                                                                                                data-name="Group"
                                                                                                transform="translate(7.494)">
                                                                                                <path id="Trac&#xE9;_124"
                                                                                                    data-name="Trac&#xE9; 124"
                                                                                                    d="M15.506,17A.52.52,0,0,1,15,16.467V1.533a.506.506,0,1,1,1.012,0V16.467A.52.52,0,0,1,15.506,17Z"
                                                                                                    transform="translate(-15 -1)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                    </span>
                                                                    <a href="#">Accompagner la mise en œuvre </a>
                                                                </h6>
                                                                <div id="ae-tab-content-38497224192" t_id="38497224192"
                                                                    class="elementor-clearfix ae-tab-content ae-post-blocks-adv-accordion"
                                                                    data-tab="2" role="tabpanel"
                                                                    aria-labelledby="ae-tab-title-38497224192">

                                                                    <article class="ae-post-item ae-post-item-44095b62">
                                                                        <div class="ae-post-item-inner">
                                                                            <div class="ae_data elementor elementor-5189">
                                                                                <div data-elementor-type="wp-post"
                                                                                    data-elementor-id="5189"
                                                                                    class="elementor elementor-5189">
                                                                                    <section
                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-54ec80ad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                        data-id="54ec80ad"
                                                                                        data-element_type="section"
                                                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                        <div
                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                            <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-19993f4f ae-bg-gallery-type-default"
                                                                                                data-id="19993f4f"
                                                                                                data-element_type="column">
                                                                                                <div
                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                    <div class="elementor-element elementor-element-6383991 elementor-widget__width-auto container-tag-acc ae-acf-repeater-layout-grid elementor-widget elementor-widget-ae-acf-repeater"
                                                                                                        data-id="6383991"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="ae-acf-repeater.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <div data-pid="5195"
                                                                                                                data-wid="6383991"
                                                                                                                class="ae-acf-repeater-widget-wrapper ae-masonry-">

                                                                                                                <div
                                                                                                                    class="ae-acf-repeater-wrapper">
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default"><a>Pilotage</a>
                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default"><a>Réalisation</a>

                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-38e3f580 elementor-widget elementor-widget-text-editor"
                                                                                                        data-id="38e3f580"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="text-editor.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <p>Que vous
                                                                                                                souhaitiez
                                                                                                                construire
                                                                                                                un nouveau
                                                                                                                produit ou
                                                                                                                transformer
                                                                                                                votre
                                                                                                                système
                                                                                                                d’information,
                                                                                                                nous avons
                                                                                                                les
                                                                                                                compétences
                                                                                                                pour
                                                                                                                coconstruire
                                                                                                                avec vous
                                                                                                                des produits
                                                                                                                performants,
                                                                                                                responsables
                                                                                                                et utiles,
                                                                                                                en nous
                                                                                                                concentrant
                                                                                                                sur les
                                                                                                                aspects
                                                                                                                techniques
                                                                                                                et non
                                                                                                                techniques.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-76df9292 elementor-widget elementor-widget-button"
                                                                                                        data-id="76df9292"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="button.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <div
                                                                                                                class="elementor-button-wrapper icon_align_right  ">
                                                                                                                <a href="{{ route('Accompagner_la_mise_en_oeuvre') }}"
                                                                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                    role="button">
                                                                                                                    <span
                                                                                                                        class="elementor-button-content-wrapper">
                                                                                                                        <span
                                                                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                                                                            <i aria-hidden="true"
                                                                                                                                class="fas fa-arrow-right"></i>
                                                                                                                        </span>
                                                                                                                        <span
                                                                                                                            class="elementor-button-text">Voir
                                                                                                                            le
                                                                                                                            service</span>
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-742ab9e6 ae-bg-gallery-type-default"
                                                                                                data-id="742ab9e6"
                                                                                                data-element_type="column">
                                                                                                <div
                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                    <div class="elementor-element elementor-element-1cb8d23d elementor-widget elementor-widget-image"
                                                                                                        data-id="1cb8d23d"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="image.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <picture>
                                                                                                                <source
                                                                                                                    type="image/webp"
                                                                                                                    srcset="{{ asset('images/webp/Accompagner-la-mise-en-oeuvre.webp') }}">
                                                                                                                <img style="height: 100%;width: 100%"
                                                                                                                    class="attachment-service-accordeon-538x368-cropped size-service-accordeon-538x368-cropped lazy"
                                                                                                                    src="{{ asset('images/webp/Accompagner-la-mise-en-oeuvre.webp') }}"
                                                                                                                    data-src="{{ asset('images/webp/Accompagner-la-mise-en-oeuvre.webp') }}"
                                                                                                                    alt="">
                                                                                                            </picture>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>

                                                                </div>
                                                            </div>

                                                            <div class="ae-accordion-item">
                                                                <h6 id="ae-tab-title-38497224193" t_id="38497224193"
                                                                    class="ae-tab-title ae-post-blocks-adv-accordion"
                                                                    data-tab="3" role="tab"
                                                                    aria-controls="ae-tab-content-38497224193">
                                                                    <span class="ae-accordion-icon ae-accordion-icon-right"
                                                                        aria-hidden="true">
                                                                        <span class="ae-accordion-icon-closed"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="36" height="36"
                                                                                viewBox="0 0 36 36">
                                                                                <g id="ic_plus"
                                                                                    transform="translate(36) rotate(90)">
                                                                                    <circle id="Ellipse_139"
                                                                                        data-name="Ellipse 139"
                                                                                        cx="18" cy="18"
                                                                                        r="18" fill="#8f9295"
                                                                                        opacity="0.202"></circle>
                                                                                    <g id="Groupe_8335"
                                                                                        data-name="Groupe 8335"
                                                                                        transform="translate(9 9)">
                                                                                        <g id="Group"
                                                                                            transform="translate(1 1)">
                                                                                            <g id="Group-2"
                                                                                                data-name="Group"
                                                                                                transform="translate(7.494)">
                                                                                                <path id="Trac&#xE9;_124"
                                                                                                    data-name="Trac&#xE9; 124"
                                                                                                    d="M15.506,17A.52.52,0,0,1,15,16.467V1.533a.506.506,0,1,1,1.012,0V16.467A.52.52,0,0,1,15.506,17Z"
                                                                                                    transform="translate(-15 -1)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                            <g id="Group-3"
                                                                                                data-name="Group"
                                                                                                transform="translate(0 7.494)">
                                                                                                <path id="Trac&#xE9;_125"
                                                                                                    data-name="Trac&#xE9; 125"
                                                                                                    d="M16.467,16.012H1.533a.506.506,0,1,1,0-1.012H16.467a.506.506,0,1,1,0,1.012Z"
                                                                                                    transform="translate(-1 -15)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                        <span class="ae-accordion-icon-opened"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="36" height="36"
                                                                                viewBox="0 0 36 36">
                                                                                <g id="ic_moins"
                                                                                    transform="translate(36) rotate(90)">
                                                                                    <circle id="Ellipse_139"
                                                                                        data-name="Ellipse 139"
                                                                                        cx="18" cy="18"
                                                                                        r="18" fill="#8f9295"
                                                                                        opacity="0.202"></circle>
                                                                                    <g id="Groupe_8335"
                                                                                        data-name="Groupe 8335"
                                                                                        transform="translate(9 9)">
                                                                                        <g id="Group"
                                                                                            transform="translate(1 1)">
                                                                                            <g id="Group-2"
                                                                                                data-name="Group"
                                                                                                transform="translate(7.494)">
                                                                                                <path id="Trac&#xE9;_124"
                                                                                                    data-name="Trac&#xE9; 124"
                                                                                                    d="M15.506,17A.52.52,0,0,1,15,16.467V1.533a.506.506,0,1,1,1.012,0V16.467A.52.52,0,0,1,15.506,17Z"
                                                                                                    transform="translate(-15 -1)"
                                                                                                    fill="#1c1c1a"
                                                                                                    stroke="#1c1c1a"
                                                                                                    stroke-width="1">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span>
                                                                    </span>
                                                                    <a href="#">Nos centres d’excellence </a>
                                                                </h6>
                                                                <div id="ae-tab-content-38497224193" t_id="38497224193"
                                                                    class="elementor-clearfix ae-tab-content ae-post-blocks-adv-accordion"
                                                                    data-tab="3" role="tabpanel"
                                                                    aria-labelledby="ae-tab-title-38497224193">

                                                                    <article class="ae-post-item ae-post-item-44095b62">
                                                                        <div class="ae-post-item-inner">
                                                                            <div class="ae_data elementor elementor-5189">
                                                                                <div data-elementor-type="wp-post"
                                                                                    data-elementor-id="5189"
                                                                                    class="elementor elementor-5189">
                                                                                    <section
                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-54ec80ad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                        data-id="54ec80ad"
                                                                                        data-element_type="section"
                                                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                        <div
                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                            <div style="width: 100%"
                                                                                                class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-19993f4f ae-bg-gallery-type-default"
                                                                                                data-id="19993f4f"
                                                                                                data-element_type="column">
                                                                                                <div
                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                    <div class="elementor-element elementor-element-6383991 elementor-widget__width-auto container-tag-acc ae-acf-repeater-layout-grid elementor-widget elementor-widget-ae-acf-repeater"
                                                                                                        data-id="6383991"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="ae-acf-repeater.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <div data-pid="5195"
                                                                                                                data-wid="6383991"
                                                                                                                class="ae-acf-repeater-widget-wrapper ae-masonry-">

                                                                                                                <div
                                                                                                                    class="ae-acf-repeater-wrapper">
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                                                                                <a
                                                                                                                                                                    href="{{ route('data_inteligence') }}">
                                                                                                                                                                    Data
                                                                                                                                                                    Intelligence
                                                                                                                                                                </a>
                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default"><a
                                                                                                                                                                    href="{{ route('Cloud') }}">Cloud</a>

                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default"><a
                                                                                                                                                                    href="{{ route('green_it') }}">Green
                                                                                                                                                                    IT</a>
                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ae-acf-repeater-item">
                                                                                                                        <div
                                                                                                                            class="ae-acf-repeater-inner">
                                                                                                                            <div
                                                                                                                                class="ae_data elementor elementor-4451">
                                                                                                                                <div data-elementor-type="wp-post"
                                                                                                                                    data-elementor-id="4451"
                                                                                                                                    class="elementor elementor-4451">
                                                                                                                                    <section
                                                                                                                                        class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-c46c6ea section-accordeon-tag elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                                                        data-id="c46c6ea"
                                                                                                                                        data-element_type="section">
                                                                                                                                        <div
                                                                                                                                            class="elementor-container elementor-column-gap-no">
                                                                                                                                            <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34ff96 colonne-accordeon-tag ae-bg-gallery-type-default"
                                                                                                                                                data-id="b34ff96"
                                                                                                                                                data-element_type="column">
                                                                                                                                                <div
                                                                                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                                    <div class="elementor-element elementor-element-99cfddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                                                        data-id="99cfddb"
                                                                                                                                                        data-element_type="widget"
                                                                                                                                                        data-widget_type="heading.default">
                                                                                                                                                        <div
                                                                                                                                                            class="elementor-widget-container">
                                                                                                                                                            <span
                                                                                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                                                                                <a
                                                                                                                                                                    href="{{ route('expérience_utilisateur') }}">Expérience
                                                                                                                                                                    utilisateur</a>

                                                                                                                                                            </span>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-38e3f580 elementor-widget elementor-widget-text-editor"
                                                                                                        data-id="38e3f580"
                                                                                                        data-element_type="widget"
                                                                                                        data-widget_type="text-editor.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <p>Nous mettons
                                                                                                                tout en
                                                                                                                œuvre pour
                                                                                                                offrir à nos
                                                                                                                clients des
                                                                                                                solutions
                                                                                                                technologiques
                                                                                                                d'exception,
                                                                                                                répondant
                                                                                                                précisément
                                                                                                                à leurs
                                                                                                                besoins
                                                                                                                uniques.
                                                                                                                Grâce à
                                                                                                                notre
                                                                                                                expertise
                                                                                                                dans quatre
                                                                                                                domaines
                                                                                                                clés, nous
                                                                                                                sommes en
                                                                                                                mesure de
                                                                                                                proposer des
                                                                                                                solutions de
                                                                                                                qualité
                                                                                                                supérieure,
                                                                                                                permettant
                                                                                                                ainsi à nos
                                                                                                                clients
                                                                                                                d'atteindre
                                                                                                                leurs
                                                                                                                objectifs
                                                                                                                avec succès.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end .ae-outer-wrapper -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-2d32c93b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="2d32c93b" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no"
                                    style="margin: 0px;margin-left: 7%;">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2d9ea87f ae-bg-gallery-type-default"
                                        data-id="2d9ea87f" data-element_type="column">
                                        <style>



                                        </style>
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated mx-4 mx-lg-0 mx-md-0">
                                            <div class="elementor-element elementor-element-128285f0 elementor-widget elementor-widget-heading"
                                                data-id="128285f0" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[27]->article_text !!}</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-13dc6efb elementor-widget elementor-widget-heading"
                                                data-id="13dc6efb" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[28]->article_text !!}</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6151fcfe elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="6151fcfe" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="#"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Toutes nos études de
                                                                    cas</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-26dd0676 elementor-section-full_width elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="26dd0676" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c44a836 ae-bg-gallery-type-default"
                                        data-id="2c44a836" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5caf354e slider-ref elementor-widget elementor-widget-ae-post-blocks-adv"
                                                data-id="5caf354e" data-element_type="widget"
                                                data-settings="{&quot;carousel_slide_per_view&quot;:1.6,&quot;carousel_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;carousel_slide_per_view_tablet&quot;:1,&quot;carousel_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_slide_per_view_mobile&quot;:1,&quot;carousel_slides_per_group&quot;:1,&quot;carousel_slides_per_group_tablet&quot;:1,&quot;carousel_slides_per_group_mobile&quot;:1,&quot;carousel_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}"
                                                data-widget_type="ae-post-blocks-adv.carousel">
                                                <div class="elementor-widget-container">
                                                    <div class="ae-swiper-outer-wrapper ae-carousel-yes"
                                                        data-swiper-settings="{&quot;speed&quot;:300,&quot;direction&quot;:&quot;horizontal&quot;,&quot;autoplay&quot;:false,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;autoHeight&quot;:false,&quot;spaceBetween&quot;:{&quot;default&quot;:5,&quot;tablet&quot;:30,&quot;mobile&quot;:10},&quot;slidesPerView&quot;:{&quot;default&quot;:1,&quot;tablet&quot;:1.6,&quot;mobile&quot;:1},&quot;slidesPerGroup&quot;:{&quot;default&quot;:1,&quot;tablet&quot;:1,&quot;mobile&quot;:1},&quot;clickable&quot;:&quot;yes&quot;,&quot;navigation&quot;:&quot;yes&quot;,&quot;scrollbar&quot;:&quot;yes&quot;}">

                                                        <div
                                                            class="ae-post-collection ae-swiper-container swiper-container">
                                                            <div
                                                                class="ae-post-widget-wrapper ae-swiper-wrapper swiper-wrapper">

                                                                <article
                                                                    class="ae-post-item ae-post-item-5caf354e ae-swiper-slide swiper-slide">
                                                                    <div
                                                                        class="ae-post-item-inner ae-swiper-slide-wrapper">
                                                                        <div class="ae_data elementor elementor-3493">
                                                                            <div data-elementor-type="wp-post"
                                                                                data-elementor-id="3493"
                                                                                class="elementor elementor-3493">
                                                                                <section
                                                                                    class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-82e7375 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                    data-id="82e7375"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4202038 ae-bg-gallery-type-default"
                                                                                            data-id="4202038"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-30a001d elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                                                                    data-id="30a001d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <picture>
                                                                                                            <source
                                                                                                                type="image/webp"
                                                                                                                srcset="{{ asset('images/home/10019.webp') }}">
                                                                                                            <img width="683"
                                                                                                                height="346"
                                                                                                                class="hfe-site-logo-img elementor-animation- lazy"
                                                                                                                src="{{ asset('images/home/10019.svg') }}"
                                                                                                                data-src="{{ asset('images/home/10019.svg') }}"
                                                                                                                class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                                alt="">
                                                                                                        </picture>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <section data-ae-url="#"
                                                                                                    class="has_ae_slider elementor-section elementor-inner-section elementor-element elementor-element-05aa56c reference-content-card elementor-section-content-middle ae-link-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                    data-id="05aa56c"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98ca8e2 ae-bg-gallery-type-default"
                                                                                                            data-id="98ca8e2"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-93c2f2b elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                                                                                    data-id="93c2f2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">

                                                                                                                        <picture>
                                                                                                                            <source
                                                                                                                                type="image/webp"
                                                                                                                                srcset="{{ asset('images/home/TotalEnergies_Logo_RGB.webp') }}">
                                                                                                                            <img width="118"
                                                                                                                                height="93"
                                                                                                                                class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                                src="{{ asset('images/home/TotalEnergies_Logo_RGB.png') }}"
                                                                                                                                data-src="{{ asset('images/home/TotalEnergies_Logo_RGB.png') }}"
                                                                                                                                alt="">
                                                                                                                        </picture>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae9ce94 ae-bg-gallery-type-default"
                                                                                                            data-id="ae9ce94"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-0333663 elementor-widget elementor-widget-heading"
                                                                                                                    data-id="0333663"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <h5
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Total
                                                                                                                            Marketing
                                                                                                                            France
                                                                                                                        </h5>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-fc918ed elementor-widget elementor-widget-heading"
                                                                                                                    data-id="fc918ed"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <p
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Accompagnement
                                                                                                                            dans
                                                                                                                            la
                                                                                                                            transformation
                                                                                                                            du
                                                                                                                            domaine
                                                                                                                            métier
                                                                                                                            certificat
                                                                                                                            d’économie
                                                                                                                            d’énergie
                                                                                                                            (CEE)
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-236ed2b elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                                                                                    data-id="236ed2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <span
                                                                                                                            class="elementor-heading-title elementor-size-default"><span>Architecture
                                                                                                                                Digitale</span></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-dbf4b4c elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                                                                                                    data-id="dbf4b4c"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper icon_align_left  ">
                                                                                                                            <a href="#"
                                                                                                                                aria-label="post"
                                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                                role="button">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                                                        <i aria-hidden="true"
                                                                                                                                            class="fas fa-arrow-right"></i>
                                                                                                                                    </span>
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text"></span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>


                                                                <article
                                                                    class="ae-post-item ae-post-item-5caf354e ae-swiper-slide swiper-slide">
                                                                    <div
                                                                        class="ae-post-item-inner ae-swiper-slide-wrapper">
                                                                        <div class="ae_data elementor elementor-3493">
                                                                            <div data-elementor-type="wp-post"
                                                                                data-elementor-id="3493"
                                                                                class="elementor elementor-3493">
                                                                                <section
                                                                                    class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-82e7375 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                    data-id="82e7375"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4202038 ae-bg-gallery-type-default"
                                                                                            data-id="4202038"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-30a001d elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                                                                    data-id="30a001d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <picture>
                                                                                                            <source
                                                                                                                type="image/webp"
                                                                                                                srcset="{{ asset('images/home/10021.webp') }}">
                                                                                                            <img width="683"
                                                                                                                height="346"
                                                                                                                class="hfe-site-logo-img elementor-animation- lazy"
                                                                                                                src="{{ asset('images/home/10021.svg') }}"
                                                                                                                data-src="{{ asset('images/home/10021.svg') }}"
                                                                                                                class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                                alt="">
                                                                                                        </picture>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section data-ae-url="#"
                                                                                                    class="has_ae_slider elementor-section elementor-inner-section elementor-element elementor-element-05aa56c reference-content-card elementor-section-content-middle ae-link-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                    data-id="05aa56c"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98ca8e2 ae-bg-gallery-type-default"
                                                                                                            data-id="98ca8e2"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-93c2f2b elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                                                                                    data-id="93c2f2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <picture>
                                                                                                                            <source
                                                                                                                                type="image/webp"
                                                                                                                                srcset="{{ asset('images/home/LOGO-Conseil-national-des-barreaux.webp') }}">
                                                                                                                            <img width="118"
                                                                                                                                height="93"
                                                                                                                                class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                                src="{{ asset('images/home/LOGO-Conseil-national-des-barreaux.png') }}"
                                                                                                                                data-src="{{ asset('images/home/LOGO-Conseil-national-des-barreaux.png') }}"
                                                                                                                                alt="">
                                                                                                                        </picture>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae9ce94 ae-bg-gallery-type-default"
                                                                                                            data-id="ae9ce94"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-0333663 elementor-widget elementor-widget-heading"
                                                                                                                    data-id="0333663"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <h5
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Conseil
                                                                                                                            National
                                                                                                                            des
                                                                                                                            Barreaux
                                                                                                                        </h5>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-fc918ed elementor-widget elementor-widget-heading"
                                                                                                                    data-id="fc918ed"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <p
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Accompagnement
                                                                                                                            dans
                                                                                                                            la
                                                                                                                            refonte
                                                                                                                            des
                                                                                                                            applications
                                                                                                                            web
                                                                                                                            et
                                                                                                                            mobiles
                                                                                                                            (back
                                                                                                                            office
                                                                                                                            et
                                                                                                                            front
                                                                                                                            office)
                                                                                                                            pour
                                                                                                                            les
                                                                                                                            avocats
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-236ed2b elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                                                                                    data-id="236ed2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <span
                                                                                                                            class="elementor-heading-title elementor-size-default"><span>Digital
                                                                                                                                Factory</span></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-dbf4b4c elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                                                                                                    data-id="dbf4b4c"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper icon_align_left  ">
                                                                                                                            <a href="#"
                                                                                                                                aria-label="post"
                                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                                role="button">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                                                        <i aria-hidden="true"
                                                                                                                                            class="fas fa-arrow-right"></i>
                                                                                                                                    </span>
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text"></span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>


                                                                <article
                                                                    class="ae-post-item ae-post-item-5caf354e ae-swiper-slide swiper-slide">
                                                                    <div
                                                                        class="ae-post-item-inner ae-swiper-slide-wrapper">
                                                                        <div class="ae_data elementor elementor-3493">
                                                                            <div data-elementor-type="wp-post"
                                                                                data-elementor-id="3493"
                                                                                class="elementor elementor-3493">
                                                                                <section
                                                                                    class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-82e7375 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                    data-id="82e7375"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4202038 ae-bg-gallery-type-default"
                                                                                            data-id="4202038"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-30a001d elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                                                                    data-id="30a001d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">

                                                                                                        <picture>
                                                                                                            <source
                                                                                                                type="image/webp"
                                                                                                                srcset="{{ asset('images/home/10023.webp') }}">
                                                                                                            <img width="683"
                                                                                                                height="346"
                                                                                                                class="hfe-site-logo-img elementor-animation- lazy"
                                                                                                                src="{{ asset('images/home/10023.svg') }}"
                                                                                                                data-src="{{ asset('images/home/10023.svg') }}"
                                                                                                                class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                                alt="">
                                                                                                        </picture>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section data-ae-url="#"
                                                                                                    class="has_ae_slider elementor-section elementor-inner-section elementor-element elementor-element-05aa56c reference-content-card elementor-section-content-middle ae-link-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                    data-id="05aa56c"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98ca8e2 ae-bg-gallery-type-default"
                                                                                                            data-id="98ca8e2"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-93c2f2b elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                                                                                    data-id="93c2f2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <picture>
                                                                                                                            <source
                                                                                                                                type="image/webp"
                                                                                                                                srcset="{{ asset('images/home/LOGO_ROUSSELET.webp') }}">
                                                                                                                            <img width="118"
                                                                                                                                height="93"
                                                                                                                                class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                                src="{{ asset('images/home/LOGO_ROUSSELET.png') }}"
                                                                                                                                data-src="{{ asset('images/home/LOGO_ROUSSELET.png') }}"
                                                                                                                                alt="">
                                                                                                                        </picture>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae9ce94 ae-bg-gallery-type-default"
                                                                                                            data-id="ae9ce94"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-0333663 elementor-widget elementor-widget-heading"
                                                                                                                    data-id="0333663"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <h5
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Rousselet
                                                                                                                        </h5>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-fc918ed elementor-widget elementor-widget-heading"
                                                                                                                    data-id="fc918ed"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <p
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Mise
                                                                                                                            en
                                                                                                                            place
                                                                                                                            et
                                                                                                                            animation
                                                                                                                            de
                                                                                                                            la
                                                                                                                            cellule
                                                                                                                            de
                                                                                                                            gouvernance
                                                                                                                            du
                                                                                                                            SI.
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-236ed2b elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                                                                                    data-id="236ed2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <span
                                                                                                                            class="elementor-heading-title elementor-size-default"><span>Architecture
                                                                                                                                Digitale</span></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-dbf4b4c elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                                                                                                    data-id="dbf4b4c"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper icon_align_left  ">
                                                                                                                            <a href="#"
                                                                                                                                aria-label="post"
                                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                                role="button">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                                                        <i aria-hidden="true"
                                                                                                                                            class="fas fa-arrow-right"></i>
                                                                                                                                    </span>
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text"></span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>


                                                                <article
                                                                    class="ae-post-item ae-post-item-5caf354e ae-swiper-slide swiper-slide">
                                                                    <div
                                                                        class="ae-post-item-inner ae-swiper-slide-wrapper">
                                                                        <div class="ae_data elementor elementor-3493">
                                                                            <div data-elementor-type="wp-post"
                                                                                data-elementor-id="3493"
                                                                                class="elementor elementor-3493">
                                                                                <section
                                                                                    class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-82e7375 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                    data-id="82e7375"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4202038 ae-bg-gallery-type-default"
                                                                                            data-id="4202038"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-30a001d elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                                                                    data-id="30a001d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <picture>
                                                                                                            <source
                                                                                                                type="image/webp"
                                                                                                                srcset="{{ asset('images/home/10015.webp') }}">
                                                                                                            <img width="683"
                                                                                                                height="346"
                                                                                                                class="hfe-site-logo-img elementor-animation- lazy"
                                                                                                                src="{{ asset('images/home/10015.svg') }}"
                                                                                                                data-src="{{ asset('images/home/10015.svg') }}"
                                                                                                                class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                                alt="">
                                                                                                        </picture>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section data-ae-url="#"
                                                                                                    class="has_ae_slider elementor-section elementor-inner-section elementor-element elementor-element-05aa56c reference-content-card elementor-section-content-middle ae-link-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                    data-id="05aa56c"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98ca8e2 ae-bg-gallery-type-default"
                                                                                                            data-id="98ca8e2"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-93c2f2b elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                                                                                    data-id="93c2f2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <picture>
                                                                                                                            <source
                                                                                                                                type="image/webp"
                                                                                                                                srcset="{{ asset('images/home/LOGO_ENEDIS.webp') }}">
                                                                                                                            <img width="118"
                                                                                                                                height="93"
                                                                                                                                class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                                src="{{ asset('images/home/LOGO_ENEDIS.png') }}"
                                                                                                                                data-src="{{ asset('images/home/LOGO_ENEDIS.png') }}"
                                                                                                                                alt="">
                                                                                                                        </picture>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae9ce94 ae-bg-gallery-type-default"
                                                                                                            data-id="ae9ce94"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-0333663 elementor-widget elementor-widget-heading"
                                                                                                                    data-id="0333663"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <h5
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Enedis
                                                                                                                        </h5>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-fc918ed elementor-widget elementor-widget-heading"
                                                                                                                    data-id="fc918ed"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <p
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Définition
                                                                                                                            de
                                                                                                                            la
                                                                                                                            stratégie
                                                                                                                            et
                                                                                                                            des
                                                                                                                            bonnes
                                                                                                                            pratiques
                                                                                                                            de
                                                                                                                            tests
                                                                                                                            de
                                                                                                                            la
                                                                                                                            plateforme
                                                                                                                            de
                                                                                                                            tests
                                                                                                                            automatisées.
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-236ed2b elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                                                                                    data-id="236ed2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <span
                                                                                                                            class="elementor-heading-title elementor-size-default"><span>Assistance
                                                                                                                                à
                                                                                                                                maîtrise
                                                                                                                                d'ouvrage
                                                                                                                                et
                                                                                                                                pilotage</span></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-dbf4b4c elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                                                                                                    data-id="dbf4b4c"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper icon_align_left  ">
                                                                                                                            <a href="#"
                                                                                                                                aria-label="post"
                                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                                role="button">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                                                        <i aria-hidden="true"
                                                                                                                                            class="fas fa-arrow-right"></i>
                                                                                                                                    </span>
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text"></span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>


                                                                <article
                                                                    class="ae-post-item ae-post-item-5caf354e ae-swiper-slide swiper-slide">
                                                                    <div
                                                                        class="ae-post-item-inner ae-swiper-slide-wrapper">
                                                                        <div class="ae_data elementor elementor-3493">
                                                                            <div data-elementor-type="wp-post"
                                                                                data-elementor-id="3493"
                                                                                class="elementor elementor-3493">
                                                                                <section
                                                                                    class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-82e7375 elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                    data-id="82e7375"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4202038 ae-bg-gallery-type-default"
                                                                                            data-id="4202038"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-30a001d elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                                                                    data-id="30a001d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <picture>
                                                                                                            <source
                                                                                                                type="image/webp"
                                                                                                                srcset="{{ asset('images/home/10017.webp') }}">
                                                                                                            <img width="683"
                                                                                                                height="346"
                                                                                                                class="hfe-site-logo-img elementor-animation- lazy"
                                                                                                                src="{{ asset('images/home/10017.svg') }}"
                                                                                                                data-src="{{ asset('images/home/10017.svg') }}"
                                                                                                                class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                                alt="">
                                                                                                        </picture>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section data-ae-url="#"
                                                                                                    class="has_ae_slider elementor-section elementor-inner-section elementor-element elementor-element-05aa56c reference-content-card elementor-section-content-middle ae-link-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                                                                                    data-id="05aa56c"
                                                                                                    data-element_type="section"
                                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98ca8e2 ae-bg-gallery-type-default"
                                                                                                            data-id="98ca8e2"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-93c2f2b elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                                                                                    data-id="93c2f2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <picture>
                                                                                                                            <source
                                                                                                                                type="image/webp"
                                                                                                                                srcset="{{ asset('images/home/Logo_Oui_sncf.webp') }}">
                                                                                                                            <img width="118"
                                                                                                                                height="93"
                                                                                                                                class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                                src="{{ asset('images/home/Logo_Oui_sncf.png') }}"
                                                                                                                                data-src="{{ asset('images/home/Logo_Oui_sncf.png') }}"
                                                                                                                                alt="">
                                                                                                                        </picture>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="has_ae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae9ce94 ae-bg-gallery-type-default"
                                                                                                            data-id="ae9ce94"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-0333663 elementor-widget elementor-widget-heading"
                                                                                                                    data-id="0333663"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <h5
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            OUI.sncf
                                                                                                                        </h5>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-fc918ed elementor-widget elementor-widget-heading"
                                                                                                                    data-id="fc918ed"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <p
                                                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                                                            Refonte
                                                                                                                            et
                                                                                                                            migration
                                                                                                                            de
                                                                                                                            l’application
                                                                                                                            OUI.SNCF
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-236ed2b elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                                                                                    data-id="236ed2b"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="heading.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <span
                                                                                                                            class="elementor-heading-title elementor-size-default"><span>Data
                                                                                                                                Intelligence</span></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-dbf4b4c elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                                                                                                    data-id="dbf4b4c"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper icon_align_left  ">
                                                                                                                            <a href="#"
                                                                                                                                aria-label="post"
                                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                                role="button">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                                                        <i aria-hidden="true"
                                                                                                                                            class="fas fa-arrow-right"></i>
                                                                                                                                    </span>
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text"></span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            </div>

                                                            <div class="ae-swiper-scrollbar swiper-scrollbar"></div>

                                                        </div> <!-- end collection -->
                                                        <div class="ae-swiper-button-prev swiper-button-prev">
                                                            <i aria-hidden="true" class="fas fa-arrow-circle-left"></i>
                                                        </div>
                                                        <div class="ae-swiper-button-next swiper-button-next">
                                                            <i aria-hidden="true" class="fas fa-arrow-circle-right"></i>
                                                        </div>
                                                    </div> <!-- end .ae-outer-wrapper -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-4408940d elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="4408940d" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2b9af37a ae-bg-gallery-type-default"
                                        data-id="2b9af37a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-528d3a0d animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="528d3a0d" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">{!! $articles[29]->article_text !!}%</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6cf4b191 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="6cf4b191" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:600}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[30]->article_text !!}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_ae_slider elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-12b44b3d ae-bg-gallery-type-default"
                                        data-id="12b44b3d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3093cff0 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="3093cff0" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">{!! $articles[31]->article_text !!}</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5f3b2582 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="5f3b2582" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:600}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[32]->article_text !!}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_ae_slider elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-67d1546 ae-bg-gallery-type-default"
                                        data-id="67d1546" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7540dd81 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="7540dd81" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">{!! $articles[33]->article_text !!}</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3602b316 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="3602b316" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:600}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[34]->article_text !!}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_ae_slider elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3d300fe3 ae-bg-gallery-type-default"
                                        data-id="3d300fe3" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-713feb2a animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="713feb2a" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[35]->article_text !!}</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2c05807b animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="2c05807b" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:600}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[36]->article_text !!}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-191eb4b2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="191eb4b2" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-201fec57 ae-bg-gallery-type-default"
                                        data-id="201fec57" data-element_type="column">

                                        <div
                                            class="elementor-widget-wrap elementor-element-populated mx-4 mx-lg-0 mx-md-0">
                                            <div class="elementor-element elementor-element-28ba64f6 elementor-widget elementor-widget-heading"
                                                data-id="28ba64f6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[37]->article_text !!}</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-105e5817 elementor-widget elementor-widget-heading"
                                                data-id="105e5817" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {!! $articles[38]->article_text !!}</h2>
                                                </div>
                                            </div>
                                            <style>
                                                @media only screen and (max-width: 767px) {
                                                    #welcomekit-embed {
                                                        margin: 0px;
                                                    }

                                                    .welcomekit-jobs-list {
                                                        width: 100%;
                                                    }
                                                }
                                            </style>
                                            <div class="elementor-element elementor-element-61a39c28 elementor-widget elementor-widget-html"
                                                data-id="61a39c28" data-element_type="widget"
                                                data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    {{-- <script src='https://www.welcomekit.co/assets/embed.js' type='text/javascript'></script> --}}
                                                    <script src="{{ asset('assets/cache/autoptimize/js/embeded.js') }}"></script>
                                                    <script type='text/javascript'>
                                                        welcomeKitReady(function() {
                                                            var wk = new WelcomeKitEmbed('d4Mb2Yr')
                                                            wk.group('job')
                                                            wk.display(["department", "officeCity", "contractType"])
                                                            wk.locale('fr')
                                                            wk.website('wttj_fr')
                                                            /*    wk.limit(3); */

                                                            var rd = wk.render()
                                                        })
                                                    </script>
                                                    <div id='welcomekit-embed'></div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2623c3e2 elementor-widget elementor-widget-button"
                                                data-id="2623c3e2" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="{{ route('join-us') }}"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Nos offres
                                                                    d'emploi</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-527dc633 ae-bg-gallery-type-default"
                                        data-id="527dc633" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-42d6b4c9 elementor-widget elementor-widget-image"
                                                data-id="42d6b4c9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">

                                                    <picture>
                                                        <source type="image/webp"
                                                            srcset="{{ asset('images/home/10025.webp') }}">
                                                        <img style="width: 100%;height:100%;" width="493"
                                                            height="632"
                                                            class="attachment-accueil-nousrejoindre-493x632-cropped size-accueil-nousrejoindre-493x632-cropped lazy"
                                                            src="{{ asset('images/home/10025.png') }}"
                                                            data-src="{{ asset('images/home/10025.png') }}"
                                                            alt="">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                    <!--.container-->
                </div>
                <!--#main-->
            </div>
            <!--.content_wrapper-->
            @include('footer_home')

        </div><!-- #page -->
        <link rel='stylesheet' id='elementor-post-5189-css'
            href='assets/cache/autoptimize/css/autoptimize_single_94e07ddcd6987391f98022c3058eae11.css@ver=1675955141.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-4451-css'
            href='assets/cache/autoptimize/css/autoptimize_single_d0fac9539d316c6349a95ab26544b3c1.css@ver=1675955142.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-3493-css'
            href='assets/cache/autoptimize/css/autoptimize_single_364b6e2e350ce9d1c310b1f2a4412e57.css@ver=1675955108.css'
            type='text/css' media='all' />

        <script type='text/javascript' id='ae-pro-js-js-extra'>
            /* <![CDATA[ */
            var aepro = {
                "ajaxurl": "https:\/\/bti-advisory.com\/wp-admin\/admin-ajax.php",
                "current_url": "https%3A%2F%2Fbti-advisory.com%2F",
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1065,
                    "xl": 1440,
                    "xxl": 1600
                },
                "plugin_url": "https:\/\/bti-advisory.com\/wp-content\/plugins\/anywhere-elementor-pro",
                "queried_page": {
                    "ID": 6988,
                    "page_type": "single"
                },
                "access_level": "2"
            };
            /* ]]> */
        </script>

        <script type='text/javascript' id='aep-build-js-extra'>
            /* <![CDATA[ */
            var aepro = {
                "ajaxurl": "https:\/\/bti-advisory.com\/wp-admin\/admin-ajax.php",
                "current_url": "https%3A%2F%2Fbti-advisory.com%2F",
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1065,
                    "xl": 1440,
                    "xxl": 1600
                },
                "plugin_url": "https:\/\/bti-advisory.com\/wp-content\/plugins\/anywhere-elementor-pro",
                "queried_page": {
                    "ID": 6988,
                    "page_type": "single"
                },
                "access_level": "2"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' id='stm-hfe-js-extra'>
            /* <![CDATA[ */
            var consulting_ehf_position_20 = {
                "id": "20",
                "header_view": "",
                "header_position": "fixed"
            };
            var consulting_ehf_position_6996 = {
                "id": "6996",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_6988 = {
                "id": "6988",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_5189 = {
                "id": "5189",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_5189 = {
                "id": "5189",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_5189 = {
                "id": "5189",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_5189 = {
                "id": "5189",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_4451 = {
                "id": "4451",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_3493 = {
                "id": "3493",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_3493 = {
                "id": "3493",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_3493 = {
                "id": "3493",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_3493 = {
                "id": "3493",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_3493 = {
                "id": "3493",
                "header_view": "",
                "header_position": ""
            };
            var consulting_ehf_position_141 = {
                "id": "141",
                "header_view": "",
                "header_position": "relative"
            };
            /* ]]> */
        </script>

        <script type='module' src='/assets/plugins/elementor-pro/assets/lib/instant-page/instant-page.min.js@ver=3.6.4'
		id='instant-page-js'></script>







        <script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.min.js@ver=0.13.9'
            id='regenerator-runtime-js'></script>
        <script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min.js@ver=3.15.0' id='wp-polyfill-js'>
        </script>
        <script type='text/javascript' src='wp-includes/js/dist/hooks.min.js@ver=1e58c8c5a32b2e97491080c5b10dc71c'
            id='wp-hooks-js'></script>
        <script type='text/javascript' src='wp-includes/js/dist/i18n.min.js@ver=30fcecb428a0e8383d3776bcdd3a7834'
            id='wp-i18n-js'></script>
        <script type='text/javascript' id='wp-i18n-js-after'>
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
        </script>
        <script type='text/javascript' id='elementor-pro-frontend-js-translations'>
            (function(domain, translations) {
                var localeData = translations.locale_data[domain] || translations.locale_data.messages;
                localeData[""].domain = domain;
                wp.i18n.setLocaleData(localeData, domain);
            })("elementor-pro", {
                "locale_data": {
                    "messages": {
                        "": {}
                    }
                }
            });
        </script>
        <script type='text/javascript' id='elementor-pro-frontend-js-before'>
            var ElementorProFrontendConfig = {
                "ajaxurl": "https:\/\/bti-advisory.com\/wp-admin\/admin-ajax.php",
                "nonce": "84ed784449",
                "urls": {
                    "assets": "https:\/\/bti-advisory.com\/wp-content\/plugins\/elementor-pro\/assets\/",
                    "rest": "https:\/\/bti-advisory.com\/wp-json\/"
                },
                "shareButtonsNetworks": {
                    "facebook": {
                        "title": "Facebook",
                        "has_counter": true
                    },
                    "twitter": {
                        "title": "Twitter"
                    },
                    "linkedin": {
                        "title": "LinkedIn",
                        "has_counter": true
                    },
                    "pinterest": {
                        "title": "Pinterest",
                        "has_counter": true
                    },
                    "reddit": {
                        "title": "Reddit",
                        "has_counter": true
                    },
                    "vk": {
                        "title": "VK",
                        "has_counter": true
                    },
                    "odnoklassniki": {
                        "title": "OK",
                        "has_counter": true
                    },
                    "tumblr": {
                        "title": "Tumblr"
                    },
                    "digg": {
                        "title": "Digg"
                    },
                    "skype": {
                        "title": "Skype"
                    },
                    "stumbleupon": {
                        "title": "StumbleUpon",
                        "has_counter": true
                    },
                    "mix": {
                        "title": "Mix"
                    },
                    "telegram": {
                        "title": "Telegram"
                    },
                    "pocket": {
                        "title": "Pocket",
                        "has_counter": true
                    },
                    "xing": {
                        "title": "XING",
                        "has_counter": true
                    },
                    "whatsapp": {
                        "title": "WhatsApp"
                    },
                    "email": {
                        "title": "Email"
                    },
                    "print": {
                        "title": "Print"
                    }
                },
                "facebook_sdk": {
                    "lang": "fr_FR",
                    "app_id": ""
                },
                "lottie": {
                    "defaultAnimationUrl": "https:\/\/bti-advisory.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
                }
            };
        </script>



        <script type='text/javascript' id='elementor-frontend-js-before'>
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Partager sur Facebook",
                    "shareOnTwitter": "Partager sur Twitter",
                    "pinIt": "L\u2019\u00e9pingler",
                    "download": "T\u00e9l\u00e9charger",
                    "downloadImage": "T\u00e9l\u00e9charger une image",
                    "fullscreen": "Plein \u00e9cran",
                    "zoom": "Zoom",
                    "share": "Partager",
                    "playVideo": "Lire la vid\u00e9o",
                    "previous": "Pr\u00e9c\u00e9dent",
                    "next": "Suivant",
                    "close": "Fermer"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1065,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Grand mobile",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablette",
                            "value": 1064,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Grande tablette",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Portable",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "\u00c9cran large",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.8.1",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "a11y_improvements": true,
                    "additional_custom_breakpoints": true,
                    "e_import_export": true,
                    "e_hidden_wordpress_widgets": true,
                    "theme_builder_v2": true,
                    "landing-pages": true,
                    "elements-color-picker": true,
                    "favorite-widgets": true,
                    "admin-top-bar": true,
                    "page-transitions": true,
                    "form-submissions": true,
                    "e_scroll_snap": true
                },
                "urls": {
                    "assets": "https:\/\/bti-advisory.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "viewport_tablet": 1064,
                    "body_background_background": "classic",
                    "viewport_mobile": 767,
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 6988,
                    "title": "BTI%20-%20Advisory%20-%20Cabinet%20de%20conseil%20en%20IT",
                    "excerpt": "",
                    "featuredImage": "https:\/\/bti-advisory.com\/wp-content\/uploads\/2022\/03\/nasa-Q1p7bh3SHj8-unsplash-1@2x-5.43.49-PM-1024x576.png"
                }
            };
        </script>


        <script defer src="/assets/cache/autoptimize/js/autoptimize_13519ff97c4216963eba09cbf7422028.js"></script>
        <script>
            window.w3tc_lazyload = 1, window.lazyLoadOptions = {
                elements_selector: ".lazy",
                callback_loaded: function(t) {
                    var e;
                    try {
                        e = new CustomEvent("w3tc_lazyload_loaded", {
                            detail: {
                                e: t
                            }
                        })
                    } catch (a) {
                        (e = document.createEvent("CustomEvent")).initCustomEvent("w3tc_lazyload_loaded", !1, !1, {
                            e: t
                        })
                    }
                    window.dispatchEvent(e)
                }
            }
        </script>
        <script async src="{{ asset('assets/cache/autoptimize/js/lazyload.min.js') }}"></script>
        <script src="{{ asset('assets/cache/autoptimize/js/navbar.js') }}"></script>


    </body>
@endsection
