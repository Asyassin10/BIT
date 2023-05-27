const app_menu_item_app = document.getElementsByClassName("app_menu_item_app");
const hf_ub_menu_item = document.getElementsByClassName("hfe-sub-menu-item");
const app_sub_menu = document.getElementById("app_sub_menu");
const div_menu = document.getElementById("div_menu");

app_sub_menu.style.width = "400px";
div_menu.style.width = "400px";

for (let i = 0; i < app_menu_item_app.length; i++) {
    const nav_slider_extra_content_i = document.getElementById("nav_slider_extra_content_" + i);
    nav_slider_extra_content_i.style.display = "none";

    const handleMouseOver = function () {
        nav_slider_extra_content_i.style.width = "340px";
        app_sub_menu.style.width = "680px";
        div_menu.style.width = "400px";
        nav_slider_extra_content_i.style.display = "block";
        hf_ub_menu_item[i].style.color = "#e99b17";
    };

    const handleMouseOut = function () {
        nav_slider_extra_content_i.style.width = "340px";
        app_sub_menu.style.width = "400px";
        div_menu.style.width = "400px";
        nav_slider_extra_content_i.style.display = "none";
        hf_ub_menu_item[i].style.color = "";
    };

    app_menu_item_app[i].addEventListener("mouseover", handleMouseOver);
    app_menu_item_app[i].addEventListener("mouseout", handleMouseOut);
    nav_slider_extra_content_i.addEventListener("mouseover", handleMouseOver);
    nav_slider_extra_content_i.addEventListener("mouseout", handleMouseOut);
}
