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
                                                    <a href="#">
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
                                                                    src="{{ asset('images/blogimage/Disneyland Paris.webp') }}"
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
                                                            style=" background-image: url('{{ asset('images/blogimage/Disneyland Paris.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-8035 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link" href="#">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Disneyland Paris </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Elior Group.png') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-7961 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Elior Group </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style=" background-image: url('{{ asset('images/blogimage/Edenred.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-7754 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Edenred</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/RATP.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-25 post-2723 post type-post status-publish format-standard has-post-thumbnail hentry category-transformation-des-produits-it">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        RATP </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Entoria.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-2721 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Entoria </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Docaposte.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-26 elementor-filter-22 post-2715 post type-post status-publish format-standard has-post-thumbnail hentry category-multispeed-it category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Docaposte </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Enedis.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 post-2713 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Enedis
                                                                    </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Randstad.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-28 post-2711 post type-post status-publish format-standard has-post-thumbnail hentry category-autres">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Randstad</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Servier.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-26 post-2698 post type-post status-publish format-standard has-post-thumbnail hentry category-multispeed-it">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Servier </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Rousselet.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-26 elementor-filter-27 post-2693 post type-post status-publish format-standard has-post-thumbnail hentry category-multispeed-it category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link" href="#">
                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Rousselet
                                                                    </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Médiamétrie.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link" href="#">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Médiamétrie </h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/total_marketing_french.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link" href="#">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        Total Marketing France</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/Fédération Française de Football.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link" href="#">

                                                                <div class="elementor-portfolio-item__overlay">
                                                                    <h3 class="elementor-portfolio-item__title">
                                                                        FFF</h3>
                                                                </div>
                                                            </a>
                                                        </article>
                                                        <article
                                                            style="background-image: url('{{ asset('images/blogimage/OUI.SNCF.webp') }}');"
                                                            class="elementor-portfolio-item elementor-post elementor-filter-22 elementor-filter-27 post-2750 post type-post status-publish format-standard has-post-thumbnail hentry category-technologie-innovation category-transformation-ux">
                                                            <a class="elementor-post__thumbnail__link" href="#">

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
                            {{--                             <section
                                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-6114887f elementor-section-full_width elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                                data-id="6114887f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_ae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36e7747c ae-bg-gallery-type-default"
                                        data-id="36e7747c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-697cdbf0 slider-ref elementor-widget elementor-widget-ae-post-blocks-adv"
                                                data-id="697cdbf0" data-element_type="widget"
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
                                                                    class="ae-post-item ae-post-item-697cdbf0 ae-swiper-slide swiper-slide">
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
                                                                                                        <style>
                                                                                                            /*! elementor - v3.8.1 - 13-11-2022 */
                                                                                                            .elementor-widget-image {
                                                                                                                text-align: center
                                                                                                            }

                                                                                                            .elementor-widget-image a {
                                                                                                                display: inline-block
                                                                                                            }

                                                                                                            .elementor-widget-image a img[src$=".svg"] {
                                                                                                                width: 48px
                                                                                                            }

                                                                                                            .elementor-widget-image img {
                                                                                                                vertical-align: middle;
                                                                                                                display: inline-block
                                                                                                            }
                                                                                                        </style> <img
                                                                                                            width="819"
                                                                                                            height="346"
                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20819%20346'%3E%3C/svg%3E"
                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/AdobeStock_92129373-819x346.jpeg"
                                                                                                            class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                            alt="" />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section
                                                                                                    data-ae-url="https://bti-advisory.com/references/fff/"
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
                                                                                                                        <img width="118"
                                                                                                                            height="127"
                                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20118%20127'%3E%3C/svg%3E"
                                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/1200px-Logo_Federation_Francaise_Football_2018.svg-e1645107523647-118x127.png"
                                                                                                                            class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                            alt=""
                                                                                                                            data-srcset="https://bti-advisory.com/wp-content/uploads/2022/02/1200px-Logo_Federation_Francaise_Football_2018.svg-e1645107523647-118x127.png 118w, https://bti-advisory.com/wp-content/uploads/2022/02/1200px-Logo_Federation_Francaise_Football_2018.svg-e1645107523647-279x300.png 279w, https://bti-advisory.com/wp-content/uploads/2022/02/1200px-Logo_Federation_Francaise_Football_2018.svg-e1645107523647-495x527.png 495w, https://bti-advisory.com/wp-content/uploads/2022/02/1200px-Logo_Federation_Francaise_Football_2018.svg-e1645107523647.png 500w"
                                                                                                                            data-sizes="(max-width: 118px) 100vw, 118px" />
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
                                                                                                                            FFF
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
                                                                                                                            Sortie
                                                                                                                            des
                                                                                                                            Ligues
                                                                                                                            &amp;
                                                                                                                            Districts
                                                                                                                            du
                                                                                                                            réseau
                                                                                                                            MPLS
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
                                                                                                                                Workplace</span></span>
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
                                                                                                                            <a href="https://bti-advisory.com/references/fff/"
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
                                                                    class="ae-post-item ae-post-item-697cdbf0 ae-swiper-slide swiper-slide">
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
                                                                                                        <img width="819"
                                                                                                            height="346"
                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20819%20346'%3E%3C/svg%3E"
                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/BTI-x-ENEDIS-scaled-1-819x346.jpeg"
                                                                                                            class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                            alt="" />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section
                                                                                                    data-ae-url="https://bti-advisory.com/references/enedis-2/"
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
                                                                                                                        <img width="118"
                                                                                                                            height="44"
                                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20118%2044'%3E%3C/svg%3E"
                                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-ENEDIS-118x44.png"
                                                                                                                            class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                            alt=""
                                                                                                                            data-srcset="https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-ENEDIS-118x44.png 118w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-ENEDIS-300x112.png 300w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-ENEDIS-358x137.png 358w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-ENEDIS.png 367w"
                                                                                                                            data-sizes="(max-width: 118px) 100vw, 118px" />
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
                                                                    class="ae-post-item ae-post-item-697cdbf0 ae-swiper-slide swiper-slide">
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
                                                                                                        <img width="819"
                                                                                                            height="346"
                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20819%20346'%3E%3C/svg%3E"
                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/BTI-x-DISNEYLAND-PARIS-scaled-1-819x346.jpeg"
                                                                                                            class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                            alt="Castle of Sleeping Beauty at Disneyland Paris August 28, 2019, Paris, France." />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section
                                                                                                    data-ae-url="https://bti-advisory.com/references/disneyland-paris/"
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
                                                                                                                        <img width="118"
                                                                                                                            height="34"
                                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20118%2034'%3E%3C/svg%3E"
                                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-118x34.png"
                                                                                                                            class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                            alt=""
                                                                                                                            data-srcset="https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-118x34.png 118w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-300x85.png 300w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-1024x291.png 1024w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-768x218.png 768w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-1536x436.png 1536w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-2048x582.png 2048w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DISNEYLAND-PARIS-900x256.png 900w"
                                                                                                                            data-sizes="(max-width: 118px) 100vw, 118px" />
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
                                                                                                                            Disneyland
                                                                                                                            Paris
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
                                                                                                                            modernisation
                                                                                                                            du
                                                                                                                            SI
                                                                                                                            Disneyland
                                                                                                                            Paris.
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
                                                                                                                            <a href="https://bti-advisory.com/references/disneyland-paris/"
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
                                                                    class="ae-post-item ae-post-item-697cdbf0 ae-swiper-slide swiper-slide">
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
                                                                                                        <img width="819"
                                                                                                            height="346"
                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20819%20346'%3E%3C/svg%3E"
                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/BTI-x-DOCAPOSTE-819x346.jpg"
                                                                                                            class="attachment-reference-cover-819x346-cropped size-reference-cover-819x346-cropped lazy"
                                                                                                            alt="" />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <section
                                                                                                    data-ae-url="https://bti-advisory.com/references/docaposte/"
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
                                                                                                                        <img width="118"
                                                                                                                            height="40"
                                                                                                                            data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20118%2040'%3E%3C/svg%3E"
                                                                                                                            src="https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-118x40.png"
                                                                                                                            class="attachment-slider-logo-118w-cropped size-slider-logo-118w-cropped lazy"
                                                                                                                            alt=""
                                                                                                                            data-srcset="https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-118x40.png 118w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-300x100.png 300w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-1024x343.png 1024w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-768x257.png 768w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-1536x514.png 1536w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-2048x686.png 2048w, https://bti-advisory.com/wp-content/uploads/2022/02/LOGO-DOCAPOSTE-900x301.png 900w"
                                                                                                                            data-sizes="(max-width: 118px) 100vw, 118px" />
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
                                                                                                                            Docaposte
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
                                                                                                                            du
                                                                                                                            SI
                                                                                                                            Digiposte
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
                                                                                                                            <a href="https://bti-advisory.com/references/docaposte/"
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
                            </section> --}}
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
        <script async src="{{ asset('assets/cache/autoptimize/js/lazyload.min.js') }}"></script>
    </body>
@endsection
