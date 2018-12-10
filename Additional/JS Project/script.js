// Initializing button connections
var buttons = document.getElementsByClassName("button");
var buttonClear = document.getElementsByClassName("button--clear");
var buttonOperators = document.getElementsByClassName("button--operator");
var buttonNumber = document.getElementsByClassName("button--number");
var buttonDecimal = document.getElementsByClassName("button--decimal");
var buttonEquate = document.getElementsByClassName("button--equate");
var screen = document.getElementsByClassName("calc-display");

console.log("Number of buttons detected: " + buttons.length); // 18



// Shades color to gray on hover
for (var i = 0; i < buttons.length; i++) {
    let point = i;
    buttons[point].addEventListener('mouseover', function(){
        buttons[point].style.backgroundColor = "gray";
    });
    var initialColor = buttons[point].style.backgroundColor;
    buttons[point].addEventListener('mouseleave', function(){
        buttons[point].style.backgroundColor = initialColor;
    });
}

// Changes border of to a thicker black button on click
for (var i = 0; i < buttons.length; i++) {
    let point = i;
    buttons[point].addEventListener('click', function(){
        buttons[point].style.border = "2px solid black";
    });
    var initialBorder = buttons[point].style.border;
    buttons[point].addEventListener('mouseleave', function(){
        buttons[point].style.border = initialBorder;
    });
}

//--// MATHMATICS //--//
var workingNumbers = [];

// Coverts array to string and removes commas
function stringify(array){
    var str = array.toString();
    str = str.replace(/[, ]+/g, "").trim();
    return str;
}

// Utility array for checking if first character is an operator or an invalid character
function checkFirstChar(array){
    var operators = ['%', '/', '*', '-', '+', '.'];
    for(var i = 0; i < array.length; i++){
        for(var oper = 0; oper <= operators.length; oper++){
            if (array[0] == operators[oper]){
                return false;
            }
        }
    }
    return true;
}

// Calculator's display numbers onto screen function
function updateScreen(){
    if(checkFirstChar(workingNumbers) == false){
        screen[0].innerHTML = "<span style='color: red; font-size: 0.7em;'>ERROR: Query must start with a number</span>";
    } else {
        screen[0].innerHTML = stringify(workingNumbers);
    }
}

// Calculate function using math.js
function calculate(){
    var query = stringify(workingNumbers);
    var evaluation = math.eval(query);
    screen[0].style.color = 'green';
    screen[0].style.fontWeight = 'bold'; 
    screen[0].style.fontFamily = 'Arial'; 
    screen[0].innerHTML = " &nbsp;" + evaluation;
    workingNumbers = [evaluation];
    return evaluation;
}

// Reverts back to regular style for computations
function resetStyle(){
    screen[0].style.color = 'initial';
    screen[0].style.fontWeight = 'initial'; 
    screen[0].style.fontFamily = 'Courier';
}

//-- Button Bindings --//
// Clear
buttonClear[0].addEventListener("click", function(){
    workingNumbers = [];
    resetStyle();
    updateScreen();
});
// %
buttonOperators[0].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("%");
    updateScreen();
});
// ÷
buttonOperators[1].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("/");
    updateScreen();
});
// *
buttonOperators[2].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("*");
    updateScreen();
});
// -
buttonOperators[3].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("-");
    updateScreen();
});
// +
buttonOperators[4].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("+");
    updateScreen();
});
// 1
buttonNumber[6].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("1");
    updateScreen();
});
// 2
buttonNumber[7].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("2");
    updateScreen();
});
// 3
buttonNumber[8].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("3");
    updateScreen();
});
// 4
buttonNumber[3].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("4");
    updateScreen();
});
// 5
buttonNumber[4].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("5");
    updateScreen();
});
// 6
buttonNumber[5].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("6");
    updateScreen();
});
// 7
buttonNumber[0].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("7");
    updateScreen();
});
// 8
buttonNumber[1].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("8");
    updateScreen();
});
// 9
buttonNumber[2].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("9");
    updateScreen();
});
// 0
buttonNumber[9].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push("0");
    updateScreen();
});
// .
buttonDecimal[0].addEventListener("click", function(){
    resetStyle();
    workingNumbers.push(".");
    updateScreen();
});
// =
buttonEquate[0].addEventListener("click", function(){
    console.log(workingNumbers);
    calculate();
    updateScreen();
    console.log("CALCULATION: " + calculate());
});




