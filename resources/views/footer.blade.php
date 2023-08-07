@php
    use App\Models\Article;
    $data = Article::where('categorie_id', 16)->get();
@endphp
<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
    <div class='footer-width-fixer'>
        <div data-elementor-type="wp-post" data-elementor-id="141" class="elementor elementor-141">
            <section
                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-1cc0273 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                data-id="1cc0273" data-element_type="section" id="footer_ecosysteme"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a19c940 ae-bg-gallery-type-default"
                        data-id="a19c940" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3372839 elementor-widget elementor-widget-heading"
                                data-id="3372839" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">
                                        {!! $data[16]->article_text !!}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-adde5c2 footer-logos ae-bg-gallery-type-default"
                        data-id="adde5c2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated d-flex">
                            <div style="margin-right: -37px;"
                                class="elementor-element elementor-element-029f0b8 elementor-widget elementor-widget-image"
                                data-id="029f0b8" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="https://www.bti-lab.com" target="_blank">
                                        <picture>
                                            <source type="image/webp" srcset="{{ secure_asset('images/footer/10026.webp') }}">
                                            <img class="elementor-animation-grow lazy"
                                                style="background-color: transparent;"
                                                src="{{ secure_asset('images/footer/10026.svg') }}"
                                                data-src="{{ secure_asset('images/footer/10026.svg') }}" alt="">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b0bec5b elementor-widget elementor-widget-image"
                                data-id="b0bec5b" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="https://bti-studio.com" target="_blank">
                                        <picture>
                                            <source type="image/webp" srcset="{{ secure_asset('images/footer/10027.webp') }}">
                                            <img class="elementor-animation-grow lazy"
                                                style="background-color: transparent;"
                                                src="{{ secure_asset('images/footer/10027.svg') }}"
                                                data-src="{{ secure_asset('images/footer/10027.svg') }}" alt="">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <div style="margin-left: 9px"
                                class="elementor-element elementor-element-3f0a4d3 elementor-widget elementor-widget-image"
                                data-id="3f0a4d3" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="https://www.yellow-it.fr" target="_blank">
                                        <picture>
                                            <source type="image/webp" srcset="{{ secure_asset('images/footer/10028.webp') }}">
                                            <img class=" elementor-animation-grow lazy"
                                                style="background-color: transparent;"
                                                src="{{ secure_asset('images/footer/10028.svg') }}"
                                                data-src="{{ secure_asset('images/footer/10028.svg') }}" alt="">
                                        </picture>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
            <section
                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-5d0c11e elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                data-id="5d0c11e" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-wide">
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-064eb58 ae-bg-gallery-type-default"
                        data-id="064eb58" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e23c21c elementor-widget elementor-widget-heading"
                                data-id="e23c21c" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">{!! $data[0]->article_text !!}
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4a23e70 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                data-id="4a23e70" data-element_type="widget"
                                data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="navigation-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                        data-layout="vertical">
                                        <div class="hfe-nav-menu__toggle elementor-clickable">
                                            <div class="hfe-nav-menu-icon">
                                            </div>
                                        </div>
                                        <nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                            data-toggle-icon="" data-close-icon="" data-full-width="">
                                            <ul id="menu-1-4a23e70" class="hfe-nav-menu">
                                                <li id="menu-item-362"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('about-us') }}" class="hfe-menu-item">
                                                        {!! $data[2]->article_text !!}
                                                    </a>
                                                </li>
                                                <li id="menu-item-361"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent parent hfe-creative-menu">
                                                    <a href="{{ route('blog') }}" class="hfe-menu-item">
                                                        {!! $data[3]->article_text !!}
                                                    </a>
                                                </li>
                                                <li id="menu-item-360"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('join-us') }}" class="hfe-menu-item">
                                                        {!! $data[4]->article_text !!}
                                                    </a>
                                                </li>
                                                <li id="menu-item-6151"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('contact') }}" class="hfe-menu-item">
                                                        {!! $data[5]->article_text !!}
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-532d179 ae-bg-gallery-type-default"
                        data-id="532d179" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d937ea1 elementor-widget elementor-widget-heading"
                                data-id="d937ea1" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">
                                        {!! $data[1]->article_text !!}
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-337e6fb hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                data-id="337e6fb" data-element_type="widget"
                                data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="navigation-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                        data-layout="vertical">
                                        <div class="hfe-nav-menu__toggle elementor-clickable">
                                            <div class="hfe-nav-menu-icon">
                                            </div>
                                        </div>
                                        <nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                            data-toggle-icon="" data-close-icon="" data-full-width="">
                                            <ul id="menu-1-337e6fb" class="hfe-nav-menu">
                                                <li id="menu-item-6166"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('Construire_la_vision') }}"
                                                        class="hfe-menu-item">
                                                        Construire la vision
                                                    </a>
                                                </li>
                                                <li id="menu-item-6167"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('Accompagner_la_mise_en_oeuvre') }}"
                                                        class="hfe-menu-item">
                                                        Accompagner la mise en œuvre
                                                    </a>
                                                </li>
                                                <li id="menu-item-6168"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('data_inteligence') }}" class="hfe-menu-item">
                                                        Data Intelligence
                                                    </a>
                                                </li>
                                                <li id="menu-item-6168"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('Cloud') }}" class="hfe-menu-item">
                                                        Cloud
                                                    </a>
                                                </li>
                                                <li id="menu-item-6168"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('expérience_utilisateur') }}"
                                                        class="hfe-menu-item">
                                                        Expérience Utilisateur
                                                    </a>
                                                </li>
                                                <li id="menu-item-6168"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('green_it') }}" class="hfe-menu-item">
                                                        Green IT
                                                    </a>
                                                </li>

                                                <li id="menu-item-6169"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                    <a href="{{ route('tout_nos_services') }}"
                                                        class="hfe-menu-item">Tous nos services </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-a3f2efe elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                data-id="a3f2efe" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4fa06d7 ae-bg-gallery-type-default"
                        data-id="4fa06d7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9b23dc5 elementor-view-default elementor-widget elementor-widget-icon"
                                data-id="9b23dc5" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <a class="elementor-icon"
                                            href="https://www.linkedin.com/company/bti---advisory/" target="_blank"
                                            aria-label="linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="ic_LinkedIN" width="32"
                                                height="32" viewBox="0 0 32 32">
                                                <path id="Combined-Shape"
                                                    d="M16,32A15.995,15.995,0,0,1,4.687,4.687,16,16,0,1,1,22.228,30.742,15.9,15.9,0,0,1,16,32Zm2.92-16.145c.838,0,1.837.427,1.837,2.463v5.828h3.626V17.9a5.3,5.3,0,0,0-1.193-3.707A3.927,3.927,0,0,0,20.209,13a3.747,3.747,0,0,0-2.175.621A4.063,4.063,0,0,0,16.941,14.8V13.252H13.314c.047,1.011,0,10.8,0,10.894h3.626V18.063a2.4,2.4,0,0,1,.119-.884,2.258,2.258,0,0,1,.653-.906A1.865,1.865,0,0,1,18.921,15.855Zm-11.239-2.6V24.147h3.626V13.252ZM9.518,8a1.888,1.888,0,1,0-.047,3.765h.023a2.116,2.116,0,0,0,1.5-.549,1.825,1.825,0,0,0,.551-1.334A1.881,1.881,0,0,0,9.518,8Z"
                                                    fill="#fff"></path>
                                            </svg> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5fc0d2b ae-bg-gallery-type-default"
                        data-id="5fc0d2b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-6a7a328 footer-link elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                data-id="6a7a328" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p><a class="footer-link"
                                            href="https://www.google.fr/maps/place/18+Rue+Drouot,+75009+Paris/@48.8735952,2.3386294,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e3ed72cc90b:0x11fc4579a67a3aaf!8m2!3d48.8735917!4d2.3408234">
                                            18 rue Drouot, 75009 Paris
                                        </a></p>
                                    <p><a class="footer-link" href="mailto:contact@bti-advisory.com">
                                            contact@bti-advisory.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_ae_slider elementor-section elementor-top-section elementor-element elementor-element-caf29d4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ae-bg-gallery-type-default"
                data-id="caf29d4" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aada253 ae-bg-gallery-type-default"
                        data-id="aada253" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ba723d9 elementor-widget elementor-widget-html"
                                data-id="ba723d9" data-element_type="widget" data-widget_type="html.default">
                                <div class="elementor-widget-container">
                                    <script>
                                        window.axeptioSettings = {
                                            clientId: "62b99dbb488ca46af41fdedc",
                                            cookiesVersion: "bti-advisory-fr_Cp",
                                        };

                                        (function(d, s) {
                                            var t = d.getElementsByTagName(s)[0],
                                                e = d.createElement(s);
                                            e.async = true;
                                            e.src = "//static.axept.io/sdk.js";
                                            t.parentNode.insertBefore(e, t);
                                        })(document, "script");
                                        document.getElementsByName("viewport")[0].setAttribute("content",
                                            "width=device-width, initial-scale=1, maximum-scale=5");

                                        function launchGA() {
                                            (function(i, s, o, g, r, a, m) {
                                                i['GoogleAnalyticsObject'] = r;
                                                i[r] = i[r] || function() {
                                                    (i[r].q = i[r].q || []).push(arguments)
                                                }, i[r].l = 1 * new Date();
                                                a = s.createElement(o),
                                                    m = s.getElementsByTagName(o)[0];
                                                a.async = 1;
                                                a.src = g;
                                                m.parentNode.insertBefore(a, m)
                                            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
                                            ga('create', 'UA-00000000-1', 'auto');
                                            ga('send', 'pageview');
                                        }

                                        void 0 === window._axcb && (window._axcb = []);
                                        window._axcb.push(function(axeptio) {
                                            axeptio.on("cookies:complete", function(choices) {
                                                if (choices.google_analytics) {
                                                    launchGA();
                                                }
                                            })
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c8be929 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                data-id="c8be929" data-element_type="widget"
                                data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:8,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="navigation-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                        data-layout="vertical">
                                        <div class="hfe-nav-menu__toggle elementor-clickable">
                                            <div class="hfe-nav-menu-icon">
                                            </div>
                                        </div>
                                        <nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                            data-toggle-icon="" data-close-icon="" data-full-width="">
                                            <ul id="menu-1-c8be929" class="hfe-nav-menu">
                                                <li id="menu-item-508"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('legal_notice') }}" class="hfe-menu-item">
                                                        {!! $data[14]->article_text !!}
                                                    </a>
                                                </li>
                                                <li id="menu-item-507"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('cgu') }}"
                                                        class="hfe-menu-item">{!! $data[15]->article_text !!}</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_ae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4f4cd25 ae-bg-gallery-type-default"
                        data-id="4f4cd25" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d702f16 elementor-widget elementor-widget-copyright"
                                data-id="d702f16" data-element_type="widget"
                                data-settings="{&quot;align&quot;:&quot;right&quot;,&quot;align_mobile&quot;:&quot;left&quot;}"
                                data-widget_type="copyright.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-copyright-wrapper">
                                        <span>
                                            {!! $data[13]->article_text !!}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</footer>
