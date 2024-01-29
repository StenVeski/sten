document.addEventListener("DOMContentLoaded", function () {
    var listItems = document.querySelectorAll(".list-group-item");

    listItems.forEach(function (item) {
        var text = item.textContent.toLowerCase();
        if (text.includes("ootel")) {
            item.classList.add("list-group-item-warning");
        } else if (text.includes("tehtud")) {
            item.classList.add("list-group-item-success");
        } else if (text.includes("viga")) {
            item.classList.add("list-group-item-danger");
        }
    });
});
