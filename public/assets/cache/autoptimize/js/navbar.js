//services container first level
let mobile_view_main_content_2 = document.getElementById(
    "mobile_view_main_content_2"
);
//dynamic contenent of services second level container
let mobile_view_service_second_level_dynamic_container =
    document.getElementById(
        "mobile_view_service_second_level_dynamic_container"
    );
let mobile_view_service_second_level_dynamic_container_title =
    document.getElementById(
        "mobile_view_service_second_level_dynamic_container_title"
    );
//main content

let mobile_view_main_content = document.getElementById(
    "mobile_view_main_content"
);
function HideAll() {
    mobile_view_main_content.classList.add("d-none");
    mobile_view_main_content_2.classList.add("d-none");
    mobile_view_service_second_level_dynamic_container.classList.add("d-none");
}
function Init() {
    HideAll();
    //mobile_view_service_second_level_dynamic_container
    //mobile_view_main_content
    mobile_view_main_content.classList.remove("d-none");
    /* mobile_view_service_second_level_dynamic_container_title.innerText =
        "text_title"; */
}
Init();
function ShowServicesTopLevel() {
    HideAll();
    mobile_view_main_content_2.classList.remove("d-none");
}
function ShowRootLevelNavigation() {
    HideAll();
    mobile_view_main_content.classList.remove("d-none");
}
function ShowRootLevelServiceNavigations() {
    HideAll();
    mobile_view_main_content_2.classList.remove("d-none");
}
//construire_la_vision__construire_votre_stratégie_technologique
let green_it = document.getElementById("green_it");
let experiance_utilisateur = document.getElementById("experiance_utilisateur");
let data_inteligence = document.getElementById("data_inteligence");
let cloud = document.getElementById("cloud");
let construire_la_vision__construire_votre_stratégie_technologique =
    document.getElementById(
        "construire_la_vision__construire_votre_stratégie_technologique"
    );
let construire_la_vision__architecture = document.getElementById(
    "construire_la_vision__architecture"
);
let accompagner_la_mise_en_oeuvre__Pilotage = document.getElementById(
    "accompagner_la_mise_en_oeuvre__Pilotage"
);
let accompagner_la_mise_en_oeuvre__Réalisation = document.getElementById(
    "accompagner_la_mise_en_oeuvre__Réalisation"
);
function HideAllSubServices() {
    green_it.classList.add("d-none");
    experiance_utilisateur.classList.add("d-none");
    data_inteligence.classList.add("d-none");
    cloud.classList.add("d-none");
    construire_la_vision__construire_votre_stratégie_technologique.classList.add(
        "d-none"
    );
    construire_la_vision__architecture.classList.add("d-none");
    accompagner_la_mise_en_oeuvre__Pilotage.classList.add("d-none");
    accompagner_la_mise_en_oeuvre__Réalisation.classList.add("d-none");
}
function ShowSpeceficSubServices(arr_str_ids) {
    for (let i = 0; i < arr_str_ids.length; i++) {
        let id_str = arr_str_ids[i];
        document.getElementById(id_str).classList.remove("d-none");
    }
}

function ShowServicesSecondLevelLevel(text_title, arr_str_ids) {
    HideAll();
    mobile_view_service_second_level_dynamic_container.classList.remove(
        "d-none"
    );
    mobile_view_service_second_level_dynamic_container_title.innerText =
        text_title;
    HideAllSubServices();
    ShowSpeceficSubServices(arr_str_ids);
}
/* document.getElementById("close_svg").addEventListener("click", function () {
    alert("hh");
     document
            .getElementById("halaloya_navbar_overlay")
            .classList.add("d-none");
}); */

let close_svg_container = document.getElementById("close_svg_container");
let three_slides_mobile_view = document.getElementById(
    "three_slides_mobile_view"
);

let halaloya_navbar_overlay = document.getElementById(
    "halaloya_navbar_overlay"
);
close_svg_container.onclick = function () {
    halaloya_navbar_overlay.style.display = "none";
};
three_slides_mobile_view.onclick = function () {
    halaloya_navbar_overlay.style.display = "block";
};

halaloya_navbar_overlay.style.display = "none";
var current_url = window.location.href;
/* console.log(fragmentIdentifier); // or display it i
alert(fragmentIdentifier); */
let mobile_view_navigation_titles = document.getElementsByClassName(
    "mobile_view_navigation_title"
);
if (
    current_url.includes(
        "service/construire-la-vision#construire-votre-strat%C3%A9gie-technologique"
    )
) {
    let element = document.getElementById(
        "construire_la_vision__construire_votre_stratégie_technologique_title"
    );
    element.classList.add("color_gold");
}
if (current_url.includes("service/construire-la-vision#architecture")) {
    let element = document.getElementById(
        "construire_la_vision__architecture_title"
    );
    element.classList.add("color_gold");
}
if (current_url.includes("accompagner-la-mise-en-oeuvre#pilotage.")) {
    let element = document.getElementById(
        "accompagner_la_mise_en_oeuvre__Pilotage_title"
    );
    element.classList.add("color_gold");
}
if (
    current_url.includes(
        "service/accompagner-la-mise-en-oeuvre#r%C3%A9alisation."
    )
) {
    let element = document.getElementById(
        "accompagner_la_mise_en_oeuvre__Réalisation_title"
    );
    element.classList.add("color_gold");
}
