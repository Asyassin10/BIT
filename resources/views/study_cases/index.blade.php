@extends('master')
@section('body')
    <style>
        article.elementor-portfolio-item {

            box-shadow: 3px 4px 10px #c1c1c1;
            border-radius: 8px;
            height: 300px;
            background-size: cover;
        }

        .elementor-portfolio-item__overlay {
            background-color: #FFFFFFD1;
            height: 100%;
        }
    </style>

    <body
        class="blog wp-custom-logo ehf-header ehf-footer ehf-template-consulting ehf-stylesheet-consulting-child site_layout_1  header_style_6 sticky_menu header_inverse mobile_grid_landscape vc_sidebar_page wpb-js-composer js-comp-ver-6.7.0 vc_responsive elementor-default elementor-template-full-width elementor-kit-8 elementor-page-5739">
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

            <div id="page" class="hfeed site">

                <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
                    <p class="main-title bhf-hidden" itemprop="headline"><a href="{{ route('home') }}"
                            title="BTI &#8211; Advisory" rel="home">BTI &#8211; Advisory</a></p>
                    <div data-elementor-type="wp-post" data-elementor-id="127" class="elementor elementor-127">
                        <header
                            class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-92c7c6e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                            data-id="92c7c6e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="has_ae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9e00ba4 ae-bg-gallery-type-default"
                                    data-id="9e00ba4" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-550c103 elementor-absolute elementor-widget__width-initial e-transform elementor-widget elementor-widget-site-logo"
                                            data-id="550c103" data-element_type="widget"
                                            data-settings="{&quot;align&quot;:&quot;left&quot;,&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:94,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scaleX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scaleX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scaleX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scaleY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scaleY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scaleY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            name="home_link" data-widget_type="site-logo.default">
                                            <div class="elementor-widget-container">
                                                <div class="hfe-site-logo">
                                                    <a data-elementor-open-lightbox="" class='elementor-clickable'
                                                        href="{{ route('home') }}" aria-label="home">
                                                        <div class="hfe-site-logo-set">
                                                            <div class="hfe-site-logo-container">
                                                                <picture>
                                                                    <source type="image/webp"
                                                                        srcset="{{ secure_asset('images/navbar/logo.webp') }}">
                                                                    <img class="hfe-site-logo-img elementor-animation- lazy"
                                                                        src="{{ secure_asset('images/navbar/logo.svg') }}"
                                                                        data-src="{{ secure_asset('images/navbar/logo.svg') }}"
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
                                @include('navbar')

                            </div>
                        </header>
                    </div>
                </header>

                <div id="main">
                    <div class="m-0 p-0">
                        <div data-elementor-type="archive" data-elementor-id="5739"
                            class="elementor elementor-5739 elementor-location-archive">
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-6b0a4ce8 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="6b0a4ce8" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-623525c7 ae-bg-gallery-type-default"
                                        data-id="623525c7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-565ae4d elementor-widget elementor-widget-heading"
                                                data-id="565ae4d" data-element_type="widget"
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
                                                    <h6 class="elementor-heading-title elementor-size-default">Nos études
                                                        de cas
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2ae593c0 elementor-widget elementor-widget-ae-post-title"
                                                data-id="2ae593c0" data-element_type="widget"
                                                data-widget_type="ae-post-title.default">
                                                <div class="elementor-widget-container">
                                                    <a href="{{route('disneyland_paris')}}">
                                                        <h1 itemprop="name"
                                                            class="ae-element-post-title ubuntu_font_family">Disneyland
                                                            Paris</h1>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2a42b6a2 elementor-widget elementor-widget-ae-post-content"
                                                data-id="2a42b6a2" data-element_type="widget"
                                                data-widget_type="ae-post-content.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ae-element-post-content">
                                                        Refonte et modernisation du SI Disneyland Paris. </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6c555022 elementor-widget elementor-widget-button"
                                                data-id="6c555022" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="#references-list"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-down"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Tous nos
                                                                    articles</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3fe6ac5c ae-bg-gallery-type-default"
                                        data-id="3fe6ac5c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-590c94d0 overlay-never elementor-widget elementor-widget-ae-post-image"
                                                data-id="590c94d0" data-element_type="widget"
                                                data-widget_type="ae-post-image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ae-element-post-image ae-element-post-image">
                                                        <div class="ae_thumb_wrapper">
                                                            <a href="#" title="Disneyland Paris">
                                                                <img width="683" height="685"
                                                                    src="{{ secure_asset('images/blogimage/Disneyland Paris.webp') }}"
                                                                    class="attachment-fifty-cover-683x685-cropped size-fifty-cover-683x685-cropped wp-post-image lazy"
                                                                    alt=""
                                                                    data-sizes="(max-width: 683px) 100vw, 683px" />
                                                                <div class="ae-post-overlay"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-2dcad01e elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="2dcad01e" data-element_type="section" id="references-list">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3007c648 ae-bg-gallery-type-default"
                                        data-id="3007c648" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-46bd9558 elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-portfolio"
                                                data-id="46bd9558" data-element_type="widget"
                                                data-settings="{&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;columns&quot;:&quot;3&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;item_ratio&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.66,&quot;sizes&quot;:[]},&quot;item_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                data-widget_type="portfolio.default">
                                                <div class="elementor-widget-container">

                                                    <div
                                                        class=" elementor-portfolio elementor-grid elementor-posts-container">
                                                        <article
                                                            style=" background-image: url('{{ secure_asset('images/blogimage/Disneyland Paris.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-8035 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('disneyland_paris') }}">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Disneyland Paris </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Elior Group.png') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-7961 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('elior_group') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Elior Group </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style=" background-image: url('{{ secure_asset('images/blogimage/Edenred.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-7754 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('edenred') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Edenred</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/RATP.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-25 post-2723 post type-post status-publish format-standard has-post-thumbnail hentry category-transformation-des-produits-it">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('ratp') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        RATP </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Entoria.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-2721 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('entoria') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Entoria </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Docaposte.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-26 elementor-filter-22 post-2715 post type-post status-publish format-standard has-post-thumbnail hentry category-multispeed-it category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('docaposte') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Docaposte </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Enedis.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-2713 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('enedis') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Enedis
                                                                    </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Randstad.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-28 post-2711 post type-post status-publish format-standard has-post-thumbnail hentry category-autres">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('randstad') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Randstad</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Servier.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-26 post-2698 post type-post status-publish format-standard has-post-thumbnail hentry category-multispeed-it">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('servier') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Servier </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Rousselet.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-26 elementor-filter-27 post-2693 post type-post status-publish format-standard has-post-thumbnail hentry category-multispeed-it category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('rousselet') }}">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Rousselet
                                                                    </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/Médiamétrie.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('Médiamétrie') }}">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Médiamétrie </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/total_marketing_french.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('total_marketing_france') }}">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Total Marketing France</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/federation_francaise_de_football.png') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('federation') }}">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        FFF</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ secure_asset('images/blogimage/OUI.SNCF.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link"
                                                                href="{{ route('ouisncf') }}">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        OUI.sncf</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-13af330b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="13af330b" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c31ae15 ae-bg-gallery-type-default"
                                        data-id="4c31ae15" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-18755e40 elementor-widget elementor-widget-heading"
                                                data-id="18755e40" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Nos
                                                        références</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-22d4fb31 elementor-widget elementor-widget-heading"
                                                data-id="22d4fb31" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Nous avons à
                                                        cœur de mettre nos expertises au service de la transformation
                                                        digitale des
                                                        entreprises.</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7fe7db76 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="7fe7db76" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="#"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Tous nos études de
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

                        </div>

                    </div>
                    <!--.container-->
                </div>
                <!--#main-->
            </div>
            <!--.content_wrapper-->
            @include('footer')

        </div><!-- #page -->
        <link rel='stylesheet' id='elementor-post-3493-css'
            href='../assets/cache/autoptimize/css/autoptimize_single_364b6e2e350ce9d1c310b1f2a4412e57.css@ver=1675955108.css'
            type='text/css' media='all' />

        <script type='text/javascript' id='ae-pro-js-js-extra'>
            /* <![CDATA[ */
            var aepro = {
                "ajaxurl": "https:\/\/bti-advisory.com\/wp-admin\/admin-ajax.php",
                "current_url": "https%3A%2F%2Fbti-advisory.com%2Fblog%2F",
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1065,
                    "xl": 1440,
                    "xxl": 1600
                },
                "plugin_url": "https:\/\/bti-advisory.com\/wp-content\/plugins\/anywhere-elementor-pro",
                "queried_page": [],
                "access_level": "2"
            };
            /* ]]> */
        </script>

        <script type='text/javascript' id='aep-build-js-extra'>
            /* <![CDATA[ */
            var aepro = {
                "ajaxurl": "https:\/\/bti-advisory.com\/wp-admin\/admin-ajax.php",
                "current_url": "https%3A%2F%2Fbti-advisory.com%2Fblog%2F",
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1065,
                    "xl": 1440,
                    "xxl": 1600
                },
                "plugin_url": "https:\/\/bti-advisory.com\/wp-content\/plugins\/anywhere-elementor-pro",
                "queried_page": [],
                "access_level": "2"
            };
            /* ]]> */
        </script>






        <script type='text/javascript' id='stm-hfe-js-extra'>
            /* <![CDATA[ */
            var consulting_ehf_position_127 = {
                "id": "127",
                "header_view": "",
                "header_position": "fixed"
            };
            var consulting_ehf_position_5739 = {
                "id": "5739",
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






        <script type='text/javascript' src='../wp-includes/js/dist/vendor/regenerator-runtime.min.js@ver=0.13.9'
            id='regenerator-runtime-js'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min.js@ver=3.15.0' id='wp-polyfill-js'>
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/hooks.min.js@ver=1e58c8c5a32b2e97491080c5b10dc71c'
            id='wp-hooks-js'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/i18n.min.js@ver=30fcecb428a0e8383d3776bcdd3a7834'
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
                    "id": 0,
                    "title": "Blog - BTI - Advisory",
                    "excerpt": ""
                }
            };
        </script>

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
        <script async src="{{ secure_asset('assets/cache/autoptimize/js/lazyload.min.js') }}"></script>
    </body>
@endsection
