const menuTarget = document.querySelector('[data-menu-toggle]')
const menu = document.querySelector('[data-menu]')

menuTarget.addEventListener('click', event => {
    event.preventDefault()
    menuTarget.lastElementChild.classList.toggle('text-brand')
    menu.classList.toggle('hidden')
});

// const showOrHide = function () {
//
//     const first = document.getElementById("movies-section-latest");
//     const second = document.getElementById("movies-section-title-az");
//     const third = document.getElementById("movies-section-title-za");
//     const fourth = document.getElementById("movies-section-year-az");
//     const fifth = document.getElementById("movies-section-year-za");
//     const array = [first,second,third,fourth,fifth];
//
//     // switch (array) {
//     //     case first.style.display === "flex": second.style.display = "none";
//     //     third.style.display = "none";fourth.style.display = "none";fifth.style.display = "none"; break;
//     //     case second.style.display === "flex": first.style.display = "none";
//     //         third.style.display = "none";fourth.style.display = "none";fifth.style.display = "none"; break;
//     //     case third.style.display === "flex": first.style.display = "none";
//     //         second.style.display = "none";fourth.style.display = "none";fifth.style.display = "none"; break;
//     //     case fourth.style.display === "flex": first.style.display = "none";
//     //         third.style.display = "none";second.style.display = "none";fifth.style.display = "none"; break;
//     //     case fifth.style.display === "flex": first.style.display = "none";
//     //         third.style.display = "none";fourth.style.display = "none";second.style.display = "none"; break;
//     //
//     // }
//
//     if (first.style.display === "none") {
//         first.style.display = "flex";
//     }
//     if (second.style.display === "none") {
//         second.style.display = "flex";
//     }
//     if (third.style.display === "none") {
//         third.style.display = "flex";
//     }
//     if (fourth.style.display === "none") {
//         fourth.style.display = "flex";
//     }
//     if (fifth.style.display === "none") {
//         fifth.style.display = "flex";
//     }
// };

const first = document.getElementById("section-latest");
const second = document.getElementById("section-title-az");
const third = document.getElementById("section-title-za");
const fourth = document.getElementById("section-year-az");
const fifth = document.getElementById("section-year-za");

const firstBut = document.getElementById("a-section-latest");
const secondBut = document.getElementById("a-section-title-az");
const thirdBut = document.getElementById("a-section-title-za");
const fourthBut = document.getElementById("a-section-year-az");
const fifthBut = document.getElementById("a-section-year-za");


function showOrHide1() {

    if (first.style.display === "none") {
        first.style.display = "flex";
        firstBut.style.color = "red";
        secondBut.style.color = "white";
        thirdBut.style.color = "white";
        fourthBut.style.color = "white";
        fifthBut.style.color = "white";


        second.style.display = "none";
        third.style.display = "none";
        fourth.style.display = "none";
        fifth.style.display = "none";
    }


}

function showOrHide2() {

    if (second.style.display === "none") {
        second.style.display = "flex";
        firstBut.style.color = "white";
        secondBut.style.color = "red";
        thirdBut.style.color = "white";
        fourthBut.style.color = "white";
        fifthBut.style.color = "white";

        first.style.display = "none";
        third.style.display = "none";
        fourth.style.display = "none";
        fifth.style.display = "none";
    }


}

function showOrHide3() {


    if (third.style.display === "none") {
        third.style.display = "flex";
        firstBut.style.color = "white";
        secondBut.style.color = "white";
        thirdBut.style.color = "red";
        fourthBut.style.color = "white";
        fifthBut.style.color = "white";

        first.style.display = "none";
        second.style.display = "none";
        fourth.style.display = "none";
        fifth.style.display = "none";
    }


}

function showOrHide4() {


    if (fourth.style.display === "none") {
        fourth.style.display = "flex";
        firstBut.style.color = "white";
        secondBut.style.color = "white";
        thirdBut.style.color = "white";
        fourthBut.style.color = "red";
        fifthBut.style.color = "white";

        second.style.display = "none";
        third.style.display = "none";
        first.style.display = "none";
        fifth.style.display = "none";
    }


}

function showOrHide5() {

    if (fifth.style.display === "none") {
        fifth.style.display = "flex";
        firstBut.style.color = "white";
        secondBut.style.color = "white";
        thirdBut.style.color = "white";
        fourthBut.style.color = "white";
        fifthBut.style.color = "red";

        second.style.display = "none";
        third.style.display = "none";
        fourth.style.display = "none";
        first.style.display = "none";
    }


}


first.addEventListener("click",showOrHide1);
second.addEventListener("click",showOrHide2);
third.addEventListener("click",showOrHide3);
fourth.addEventListener("click",showOrHide4);
fifth.addEventListener("click",showOrHide5);



