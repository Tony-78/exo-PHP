const heartIcon = document.getElementsByClassName("heartIcon");

console.log(heartIcon);

const arrayHeartIcon = [...heartIcon];

console.log(arrayHeartIcon);

arrayHeartIcon.forEach(e => {
    console.log(e);
    e.onclick = function () {
        if (e.className == "far fa-heart fa-2x heartIcon") {
            e.className = "fas fa-heart fa-2x text-danger heartIcon";
        } else {
            e.className = "far fa-heart fa-2x heartIcon";
        }
    };
});
