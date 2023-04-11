@php
    use App\Models\Category;
    $data = Category::all();
@endphp
<nav class="has_ae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e935e7c ae-bg-gallery-type-default"
    data-id="e935e7c" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-1e6965e hfe-nav-menu__align-right hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-submenu-animation-none hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
            data-id="1e6965e" data-element_type="widget"
            data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:28,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:32,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;8&quot;,&quot;right&quot;:&quot;8&quot;,&quot;bottom&quot;:&quot;8&quot;,&quot;left&quot;:&quot;8&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:120,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:32,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
            data-widget_type="navigation-menu.default">
            <div class="elementor-widget-container">
                <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__underline hfe-animation__grow"
                    data-layout="horizontal">
                    <div class="hfe-nav-menu__toggle elementor-clickable">
                        <div class="hfe-nav-menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 50 50" width="50px"
                                height="50px">
                                <path
                                    d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <nav class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow"
                        data-toggle-icon="&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;#000000&quot; viewBox=&quot;0 0 50 50&quot; width=&quot;50px&quot; height=&quot;50px&quot;&gt;&lt;path d=&quot;M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;"
                        data-close-icon="&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;#000000&quot; viewBox=&quot;0 0 50 50&quot; width=&quot;50px&quot; height=&quot;50px&quot;&gt;&lt;path d=&quot;M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;"
                        data-full-width="yes">
                        <ul id="menu-1-1e6965e" class="hfe-nav-menu">
                            <li id="menu-item-86"
                                class="menu-item menu-item-type-post_type menu-item-object-page parent {{ request()->is('a-propos') ? 'current-menu-ancestor' : '' }} hfe-creative-menu">
                                <a href="{{ route('about-us') }}" class="hfe-menu-item">{{ $data[0]->categorie_name }}
                                </a>
                            </li>
                            <li id="menu-item-6494"
                                class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('nos-services') ? 'current-menu-ancestor' : '' }} {{ request()->is('service/*') ? 'current-menu-ancestor' : '' }}   menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                <div class="hfe-has-submenu-container"><a href="{{ url('/') }}"
                                        class="hfe-menu-item">{{ $data[1]->categorie_name }} <span class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                class='fa'></i></span></a></div>
                                <ul class="sub-menu">
                                    <li id="menu-item-6493"
                                        class="menu-item menu-item-type-post_type menu-item-object-page stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="{{ route('services') }}" class="hfe-sub-menu-item">{{ $data[11]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-5705"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="{{ route('transformation-des-produits-it.service') }}"
                                            class="hfe-sub-menu-item">{{ $data[4]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-5707"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="{{ route('multi_speed_it.service') }}"
                                            class="hfe-sub-menu-item">{{ $data[5]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-5708"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="{{ route('technologie-innovation.service') }}"
                                            class="hfe-sub-menu-item">{{ $data[6]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-5710"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="{{ route('transformation-ux.service') }}"
                                            class="hfe-sub-menu-item">{{ $data[7]->categorie_name }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-4710"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                <div class="hfe-has-submenu-container"><a href="{{ url('/') }}"
                                        class="hfe-menu-item">{{ $data[10]->categorie_name }}<span class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                class='fa'></i></span></a></div>
                                <ul class="sub-menu">
                                    <li id="menu-item-4706"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a target="_blank"rel="noopener" href="https://bti-studio.com/"
                                            class="hfe-sub-menu-item">{{ $data[14]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-4705"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a target="_blank"rel="noopener" href="https://www.bti-lab.com/"
                                            class="hfe-sub-menu-item">{{ $data[15]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-4704"
                                        class="menu-item menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a target="_blank"rel="noopener" href="https://www.yellow-it.fr/"
                                            class="hfe-sub-menu-item">{{ $data[16]->categorie_name }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-78"
                                class="menu-item menu-item-type-post_type menu-item-object-page {{ request()->is('nous-rejoindre') ? 'current-menu-ancestor' : '' }}   page_item page-item-73 current_page_item parent hfe-creative-menu">
                                <a href="{{ route('join-us') }}" class="hfe-menu-item">{{ $data[2]->categorie_name }}</a>
                            </li>
                            <li id="menu-item-6495"
                                class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                <div class="hfe-has-submenu-container"><a class="hfe-menu-item">{{ $data[8]->categorie_name }}<span
                                            class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                class='fa'></i></span></a></div>
                                <ul class="sub-menu">
                                    <li id="menu-item-80"
                                        class="menu-item menu-item-type-post_type menu-item-object-page stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="{{ route('blog') }}" class="hfe-sub-menu-item">{{ $data[17]->categorie_name }}</a>
                                    </li>
                                    <li id="menu-item-79"
                                        class="menu-item menu-item-type-post_type menu-item-object-page stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                        <a href="#" class="hfe-sub-menu-item">{{ $data[18]->categorie_name }}</a>
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
<div class="has_ae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f9893f8 ae-bg-gallery-type-default"
    data-id="f9893f8" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-1b31f65 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button"
            data-id="1b31f65" data-element_type="widget" data-widget_type="button.default">
            <div class="elementor-widget-container">
                <div class="elementor-button-wrapper icon_align_right  ">
                    <a href="{{ route('contact') }}" class="elementor-button-link elementor-button elementor-size-xs"
                        role="button">
                        <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-icon elementor-align-icon-right">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    id="Calque_1" x="0px" y="0px" viewBox="0 0 21.5 24"
                                    style="enable-background:new 0 0 21.5 24;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #FFFFFF;
                                        }
                                    </style>
                                    <path id="ic_contact" class="st0"
                                        d="M10.8,24c5.8-0.1,10.8-7.4,10.8-13.2C21.5,4.8,16.7,0,10.8,0S0,4.8,0,10.8 c0,5.9,4.8,10.8,10.8,10.8c0,0,0,0,0,0c0,0.4,0,0.8,0,1.2L10.8,24z M15.7,9.9c0.8,0,1.4,0.6,1.4,1.4s-0.6,1.4-1.4,1.4 c-0.8,0-1.4-0.6-1.4-1.4c0-0.4,0.1-0.7,0.4-1C14.9,10,15.3,9.9,15.7,9.9z M5.9,12.7c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4 c0.8,0,1.4,0.6,1.4,1.4c0,0,0,0,0,0C7.3,12,6.7,12.7,5.9,12.7z M10.8,12.7c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4 c0.8,0,1.4,0.6,1.4,1.4C12.1,12,11.5,12.7,10.8,12.7L10.8,12.7z">
                                    </path>
                                </svg> </span>
                            <span class="elementor-button-text">{{ $data[3]->categorie_name }}</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
