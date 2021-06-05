function toggleNav() {
    var sidenav = document.getElementById("dropnav"),
        main = document.getElementById("main");
    dropnav.style.height = sidenav.style.height == "150px" ? '0' : "150px";
    main.style.marginheight = main.style.marginheight === "150px" ? '0' : '150px';
}
