let flag = 0;
console.log(flag);

// STATIC NAVIGATION BAR
let counter = 0;
$(".hamburger").click(() => {
    if (counter == 0) {
        $(".nav-items-mobile").css("animation", "fadeDown .2s both");
        counter++;
    } else {
        $(".nav-items-mobile").css("animation", "fadeDownDown .2s both");
        counter--;
    }
});

