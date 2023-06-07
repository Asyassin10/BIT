@php
    use App\Models\Category;
    $redis_data = json_decode(Redis::get('client_navbar'));
    if ($redis_data) {
        $data = $redis_data;
    } else {
        $data = Category::all();
        Redis::set('client_navbar', json_encode($data));
    }
    
@endphp
<div style="background: white;z-index: 999;" class="m-0 p-0" id="halaloya_navbar_overlay">
    {{-- <h1>
        sdcjscndsdc
    </h1> --}}


    <hr class="border border-secondary " id="mobile_view_hr">

    <div class="d-flex">
        <div id="svg_mobile_container" class="w-50">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73"
                height="73" viewBox="0 0 73 73">
                <image id="Image_15" data-name="Image 15" width="73" height="73"
                    xlink:href="data:image/png;base64,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" />
            </svg>
        </div>
        <div id="close_svg_container" class="w-50" onclick="HideNavbarMobileViewContainer()">
            <svg xmlns="http://www.w3.org/2000/svg" id="close_svg" width="19.828" height="19.828"
                viewBox="0 0 19.828 19.828">
                <g id="Groupe_15" data-name="Groupe 15" transform="translate(-334.459 -21.586)">
                    <line id="Ligne_35" data-name="Ligne 35" x2="17" y2="17"
                        transform="translate(335.874 23)" fill="none" stroke="#707070" stroke-linecap="round"
                        stroke-width="2" />
                    <line id="Ligne_36" data-name="Ligne 36" y1="17" x2="17"
                        transform="translate(335.874 23)" fill="none" stroke="#707070" stroke-linecap="round"
                        stroke-width="2" />
                </g>
            </svg>

        </div>
    </div>

    <div id="mobile_view_service_second_level_dynamic_container" class="d-none" onclick="">
        <div class="d-flex align-items-center mb-2" onclick="ShowRootLevelServiceNavigations()">
            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 7%;margin-right: 2%;" width="9.667"
                height="17.334" viewBox="0 0 9.667 17.334">
                <path id="Tracé_59" data-name="Tracé 59" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                    transform="translate(-220.277 -7333.718) rotate(90)" fill="none" stroke="#000"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
            <p class="mt-3" id="mobile_view_service_second_level_dynamic_container_title">

            </p>
        </div>
        <a class="d-flex align-items-center mb-3 d-none"
            href="{{ url('/service/construire-la-vision#construire-votre-stratégie-technologique') }}"
            id="construire_la_vision__construire_votre_stratégie_technologique">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title "
                    id="construire_la_vision__construire_votre_stratégie_technologique_title">
                    construire votre stratégie technologique


                </h2>
            </div>

        </a>
        <a class="d-flex align-items-center mb-3 d-none" id="construire_la_vision__architecture"
            href="{{ url('/service/construire-la-vision#architecture.') }}">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title " id="construire_la_vision__architecture_title">
                    Architecture
                </h2>
            </div>

        </a>
        <a class="d-flex align-items-center mb-3 d-none" id="accompagner_la_mise_en_oeuvre__Pilotage"
            href="{{ url('/service/accompagner-la-mise-en-oeuvre#pilotage.') }}">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title " id="accompagner_la_mise_en_oeuvre__Pilotage_title">
                    Pilotage
                </h2>
            </div>

        </a>
        <a class="d-flex align-items-center mb-3 d-none" id="accompagner_la_mise_en_oeuvre__Réalisation"
            href="{{ url('/service/accompagner-la-mise-en-oeuvre#réalisation.') }}">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title " id="accompagner_la_mise_en_oeuvre__Réalisation_title">
                    Réalisation
                </h2>
            </div>

        </a>
        <div class="d-flex align-items-center mb-3 d-none" id="cloud">
            <a class="w-75 d-flex align-items-center" href='{{ route('Cloud') }}'>
                <h2
                    class="mobile_view_navigation_title {{ request()->is('service/cloud') || Route::currentRouteName() === 'Cloud' ? 'color_gold' : '' }}">
                    Cloud
                </h2>
            </a>
            {{-- <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div> --}}
        </div>
        <a class="d-flex align-items-center mb-3 d-none" id="data_inteligence" href='{{ route('data_inteligence') }}'>
            <div class="w-75 d-flex align-items-center">
                <h2
                    class="mobile_view_navigation_title {{ request()->is('service/data-inteligence') || Route::currentRouteName() === 'data_inteligence' ? 'color_gold' : '' }}">
                    Data Intelligence
                </h2>
            </div>
            {{-- <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div> --}}
        </a>
        <a class="d-flex align-items-center mb-3 d-none" id="experiance_utilisateur"
            href='{{ route('expérience_utilisateur') }}'>
            <div class="w-75 d-flex align-items-center">
                <h2
                    class="mobile_view_navigation_title {{ request()->is('service/expérience-utilisateur') || Route::currentRouteName() === 'expérience_utilisateur' ? 'color_gold' : '' }}">
                    Expérience Utilisateur
                </h2>
            </div>
            {{-- <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div> --}}
        </a>
        <a class="d-flex align-items-center mb-3 d-none" id="green_it" href='{{ route('green_it') }}'>
            <div class="w-75 d-flex align-items-center">
                <h2
                    class="mobile_view_navigation_title {{ request()->is('service/green-it') || Route::currentRouteName() === 'green_it' ? 'color_gold' : '' }}">
                    Green IT
                </h2>
            </div>
            {{-- <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div> --}}
        </a>
    </div>
    <div id="mobile_view_main_content_2" class="d-none">
        <div class="d-flex align-items-center mb-3" onclick="ShowRootLevelNavigation()">
            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 7%;margin-right: 2%;" width="9.667"
                height="17.334" viewBox="0 0 9.667 17.334">
                <path id="Tracé_59" data-name="Tracé 59" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                    transform="translate(-220.277 -7333.718) rotate(90)" fill="none" stroke="#000"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
            <p class="mt-3">
                Nos services
            </p>
        </div>
        <div class="d-flex align-items-center mb-3"
            onclick="ShowServicesSecondLevelLevel('Construire la vision',['construire_la_vision__construire_votre_stratégie_technologique','construire_la_vision__architecture'])">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Construire la vision
                </h2>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div>
        </div>
        <div class="d-flex align-items-center mb-3"
            onclick="ShowServicesSecondLevelLevel('Accompagner la mise en Oeuvre',['accompagner_la_mise_en_oeuvre__Pilotage','accompagner_la_mise_en_oeuvre__Réalisation'])">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Accompagner la mise en
                    Oeuvre
                </h2>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div>
        </div>
        <div class="d-flex align-items-center mb-3"
            onclick="ShowServicesSecondLevelLevel('Nos centres d’excellence',['green_it','experiance_utilisateur','data_inteligence','cloud'])">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Nos centres d’excellence
                </h2>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div>
        </div>
    </div>
    <div id="mobile_view_main_content" class="d-none">

        <a class="d-flex align-items-center mb-3" href="{{ route('about-us') }}">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    A propos
                </h2>
            </div>
            {{-- <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div> --}}
        </a>
        <div class="d-flex align-items-center mb-3" onclick="ShowServicesTopLevel()">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Nos services
                </h2>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div>
        </div>
        <div class="d-flex align-items-center mb-3">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Notre écosystème
                </h2>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div>
        </div>
        <a class="d-flex align-items-center mb-3" href="{{ route('join-us') }}">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Nous rejoindre
                </h2>
            </div>
            {{--  <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div> --}}
        </a>
        <div class="d-flex align-items-center mb-4">
            <div class="w-75 d-flex align-items-center">
                <h2 class="mobile_view_navigation_title">
                    Blog
                </h2>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-end " style="padding-right: 10%;">
                <br>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="9.667" height="17.334" viewBox="0 0 9.667 17.334">
                    <path id="Tracé_60" data-name="Tracé 60" d="M7335.132-228.53l7.253,7.253,7.253-7.253"
                        transform="translate(229.944 7351.052) rotate(-90)" fill="none" stroke="#000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>

            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center " style="margin-top: 68%;">

        <button class="btn bg-black p-3">
            Contactez-nous
        </button>
    </div>

</div>
{{-- d-md-block --}}
<nav class="has_ae_slider   elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e935e7c ae-bg-gallery-type-default"
    data-id="e935e7c" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-1e6965e hfe-nav-menu__align-right hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-submenu-animation-none hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
            data-id="1e6965e" data-element_type="widget"
            data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:28,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:32,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;8&quot;,&quot;right&quot;:&quot;8&quot;,&quot;bottom&quot;:&quot;8&quot;,&quot;left&quot;:&quot;8&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:120,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:32,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
            data-widget_type="navigation-menu.default">
            <div class="elementor-widget-container">
                <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__underline hfe-animation__grow"
                    data-layout="horizontal">
                    {{-- hfe-nav-menu__toggle  --}}
                    {{--  hfe-nav-menu-icon --}}
                    {{-- <div class="hfe-nav-menu__toggle elementor-clickable">
                        <div class="hfe-nav-menu-icon" id="three_slides_mobile_view">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 50 50"
                                width="50px" height="50px">
                                <path
                                    d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z">
                                </path>
                            </svg>
                        </div>
                    </div> --}}
                    <div style="background: #FAFAFA;text-align: right;" class="elementor-clickable d-block d-sm-none "
                        id="three_slides_mobile_view">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 50 50" width="50px"
                            height="50px">
                            <path
                                d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z">
                            </path>
                        </svg>
                    </div>

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
                                <div class="hfe-has-submenu-container"><a href=""
                                        class="hfe-menu-item">{{ $data[1]->categorie_name }} <span
                                            class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                class='fa'></i></span></a>

                                </div>


                                <ul class="sub-menu mt-2 ">
                                    <div class="d-flex "
                                        style="border-radius: 8px;background-color: #fff;webkit-box-shadow: 0 4px 10px -2px rgba(0, 0, 0, .1);
                                            box-shadow: 0 4px 10px -2px rgba(0, 0, 0, .1);"
                                        id="app_sub_menu">
                                        <div id="div_menu">
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
                                                    oeuvre<span class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                            class='fas fa-chevron-right'></i></span></a>
                                            </li>
                                            <li id="menu-item-5707"
                                                class="menu-item app_menu_item_app menu-item-type-custom menu-item-object-custom stm_col_width_default stm_mega_cols_inside_default stm_mega_col_width_banner_default hfe-creative-menu">
                                                <a href="#"
                                                    class="hfe-sub-menu-item  {{ Route::currentRouteName() === 'expérience_utilisateur' || Route::currentRouteName() === 'Cloud' || Route::currentRouteName() === 'green_it' || Route::currentRouteName() === 'data_inteligence' ? 'content_menu_item_active' : '' }}">Nos
                                                    Centres d'Excellence<span
                                                        class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
                                                            class='fas fa-chevron-right'></i></span></a>
                                            </li>
                                        </div>

                                        <div id="nav_slider_extra_content_0">
                                            <li id="menu-item-6493" class="mt-2">
                                                <a class="content_menu_item"
                                                    id="co_construire_votre_stratégie_technologique"
                                                    href="{{ url('/service/construire-la-vision#construire-votre-stratégie-technologique') }}">Co-construire
                                                    voter stratégie technologique</a>
                                            </li>
                                            <li id="menu-item-6493" class="md-1">
                                                <a class="content_menu_item"
                                                    href="{{ url('/service/construire-la-vision#architecture.') }}">Architecture</a>
                                            </li>
                                        </div>
                                        <div id="nav_slider_extra_content_1">
                                            <li id="menu-item-6493" class="mt-2">
                                                <a class="content_menu_item"
                                                    href="{{ url('/service/accompagner-la-mise-en-oeuvre#pilotage.') }}">Pilotage</a>
                                            </li>
                                            <li id="menu-item-6493" class="md-1">
                                                <a class="content_menu_item"
                                                    href="{{ url('/service/accompagner-la-mise-en-oeuvre#réalisation.') }}">Réalisation</a>
                                            </li>
                                        </div>
                                        <div id="nav_slider_extra_content_2">
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <a class="content_menu_item {{ request()->is('service/data-inteligence') || Route::currentRouteName() === 'data_inteligence' ? 'content_menu_item_active' : '' }}"
                                                        href="{{ route('data_inteligence') }}">Data
                                                        Intelligence</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="content_menu_item {{ request()->is('service/cloud') || Route::currentRouteName() === 'Cloud' ? 'content_menu_item_active' : '' }}"
                                                        href='{{ route('Cloud') }}'>Cloud </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a class="content_menu_item {{ request()->is('service/expérience-utilisateur') || Route::currentRouteName() === 'expérience_utilisateur' ? 'content_menu_item_active' : '' }}"
                                                        href="{{ route('expérience_utilisateur') }}"> Expérience
                                                        Utilisateur</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="content_menu_item {{ request()->is('service/green-it') || Route::currentRouteName() === 'green_it' ? 'content_menu_item_active' : '' }}"
                                                        href="{{ route('green_it') }}"> Green
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
                                <div class="hfe-has-submenu-container"><a href="{{ url('/') }}"
                                        class="hfe-menu-item">{{ $data[10]->categorie_name }}<span
                                            class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
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
<script src="{{ asset('assets/cache/autoptimize/js/navbar.js') }}"></script>
