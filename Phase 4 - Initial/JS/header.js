document.getElementById("courses").addEventListener("click", function () {
    toggle_drop_sub_menu("courses");
}, false);
document.getElementById("degree_programs").addEventListener("click", function () {
    toggle_drop_sub_menu("degree_programs");
}, false);
document.getElementById("scholarships_financial_aid").addEventListener("click", function () {
    toggle_drop_sub_menu("scholarships_financial_aid");
}, false);
document.getElementById("clubs_extra").addEventListener("click", function () {
    toggle_drop_sub_menu("clubs_extra");
}, false);
document.getElementById("faculty_staff").addEventListener("click", function () {
    toggle_drop_sub_menu("faculty_staff");
}, false);
document.getElementById("admissions").addEventListener("click", function () {
    toggle_drop_sub_menu("admissions");
}, false);
document.getElementById("student_resources").addEventListener("click", function () {
    toggle_drop_sub_menu("student_resources");
}, false);
document.getElementById("business_resources").addEventListener("click", function () {
    toggle_drop_sub_menu("business_resources");
}, false);

function toggle_drop_menu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
function toggle_drop_sub_menu(id) {
    var x = document.getElementById(id);
    if (x.className === "dropdown") {
        x.className += " responsive";
    } else {
        x.className = "dropdown";
    }
}