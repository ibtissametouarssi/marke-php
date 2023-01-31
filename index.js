


let hid = document.querySelector(".hidd")
let vis = document.querySelector(".vis")
let next = document.querySelector(".arrow-right")
let previous = document.querySelector(".arrow-left")

next.onclick = function () {
    hid.style.display = "flex";
    vis.style.display = "none"
}
previous.onclick = function () {
    hid.style.display = "none";
    vis.style.display = "flex"
}


// Initialize and add the map

                     
