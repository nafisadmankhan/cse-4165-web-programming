function calculate(parameter) {
    var number_1 = parseFloat(document.getElementById('number_1').value);
    var number_2 = parseFloat(document.getElementById('number_2').value)

    if (parameter == '+__argument') {
        result = number_1 + number_2;
    } else if (parameter == '-__argument') {
        result = number_1 - number_2;
    } else if (parameter == '*__argument') {
        result = number_1 * number_2;
    } else if (parameter == '/__argument') {
        if (number_2 != 0) {
            result = number_1 / number_2;
        } else {
            result = "Can't divide by 0";
        }
    } else if (parameter == "reset_arg") {
        document.getElementById('number_1').value = 0;
        document.getElementById('number_2').value = 0;
        result = "";
    }
    document.getElementById("result").innerText = result;
}