"use strict"

const btn = document.getElementById("startButton");
const screenQuestion = document.getElementById("question");
const questionArray = [
    'soccer',
    'basketball',
    'tennis',
    'softball',
    'volleyball',
    'badminton',
    'handball',
    'rugby',
    'golf',
    'hockey',
    'swimming',
    'diving',
    'boxing',
    'wrestling',
    'karate',
    'judo',
    'archery',
    'fencing',
    'skateboard',
    'cycling',
    'shooting',
    'triathlon',
    'climbing',
    'trampoline',
    'surfing',
    'canoe'
]
const length = questionArray.length;
let getKey = "";

btn.addEventListener("click", ()=> {
    gameStart();
    window.addEventListener("keypress", e =>{
        const screenAnswer = document.getElementById("answer");
        console.log(e)
        getKey = e.key;
        if(questionLetterArray.lagth !== 0){
            const index = questionLetterArray.findIndex(elem => elem === getKey)
            if(index !== -1 && questionLetterArray[0] === getKey) {
                const value = questionLetterArray.shift(index);
                screenAnswer.innerHTML += value;
                if(questionLetterArray.length === 0) {
                    screenAnswer.innerHTML = ""
                    reStartGame();
                }
            }
        }
    })
});

function gameStart() {
    const random = Math.floor(Math.random() * length);
    const question = questionArray[random];
    screenQuestion.textContent = question;
    calc(question);
    btn.remove();
}

function reStartGame () {
    const random = Math.floor(Math.random() * length);
    const question = questionArray[random];
    screenQuestion.textContent = question;
    questionLetterArray = [];
    calc(question);
}

let questionLetterArray = [];
function calc(question) {
    questionLetterArray = question.split("")
}