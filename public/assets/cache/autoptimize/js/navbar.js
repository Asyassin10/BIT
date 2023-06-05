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

function HideAllSubServices() {
    green_it.classList.add("d-none");
    experiance_utilisateur.classList.add("d-none");
    data_inteligence.classList.add("d-none");
    cloud.classList.add("d-none");
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

let halaloya_navbar_overlay = document.getElementById("halaloya_navbar_overlay");
close_svg_container.onclick = function () {
    halaloya_navbar_overlay.style.display = "none";
};
three_slides_mobile_view.onclick = function () {
    halaloya_navbar_overlay.style.display = "block";
};

halaloya_navbar_overlay.style.display = "none";
