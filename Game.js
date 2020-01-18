var waterX = 5;
var seedX = 1;
var score = 0;
var pic = 2;
var plantHeight = 150;
var plantWidth = 50;

function reset() {
    window.location.reload();
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("current", ev.target.id);
}

function plantDrop(ev) {
    ev.preventDefault();
    var obj = document.getElementById(ev.dataTransfer.getData("current"));
    var seeds = document.getElementById("seeds");
    var soil = document.getElementById("soil");
    var plant = document.getElementById("plant");
    var water = document.getElementById("water");

    if (obj.id == seeds.id) {
        if (seedX > 0) {
            seedX--;
            if (seedX == 0) {
                seeds.src = "Images/x.png";
                seeds.draggable = false;
                seeds.style.cursor = "default";
            }
            document.getElementById("seedsX").innerHTML = seedX;
            window.setTimeout(function () {
                plant.src = "Images/" + pic + ".png";
                pic++;
                plant.style.height = "90px";
            }, 1000);
            score += 25;
            document.getElementById("score").innerHTML = score;
        }
    }
    if (obj.id == water.id && seedX == 0 && pic < 8) {
        if (waterX > 0) {
            waterX--;
            if (waterX == 0) {
                water.src = "Images/x.png";
                water.draggable = false;
                water.style.cursor = "default";

            }
            document.getElementById("waterX").innerHTML = waterX;
            window.setTimeout(function () {
                if (pic == 4) {
                    plant.style.marginTop = "230px";

                } else if (pic == 5) {
                    plant.style.marginTop = "200px";
                } else if (pic == 6) {
                    plant.style.marginTop = "180px";
                    plant.style.marginLeft = "-132px";

                } else if (pic == 7) {
                    plant.style.marginTop = "167px";
                    plant.style.marginLeft = "-139px";

                } else {
                    plant.style.marginTop = "240px";
                    plant.style.marginLeft = "-119px";
                }
                plant.src = "Images/" + pic + ".png";
                pic++;
                plant.style.height = plantHeight + "px";
                plantHeight += 20;
                plant.style.width = plantWidth + "px";
                plantWidth += 8;
            }, 1000);
            score += 15;
            document.getElementById("score").innerHTML = score;
        }
    }
}
function clsModal() {
    var input = document.getElementById("inp").value;

    document.getElementById('Modal2').style.display = "none";

}



var seconds = 15;
var timer;
function myFunction() {
    if (seconds < 15) {
        document.getElementById("timer").innerHTML = seconds;
    }
    if (seconds > 0) {
        seconds--;
    } else {
        document.getElementById("Modal2").style.display = "block";
        document.getElementById("sc").value = score;
    }
}
window.onload = function () {
    if (!timer) {
        timer = window.setInterval(function () {
            myFunction();
        }, 1000); // every second
    }
} 