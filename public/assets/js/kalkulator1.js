document.addEventListener('DOMContentLoaded', () => {
    const display = document.querySelector('#display');
    const buttons = document.querySelectorAll('.num');
    const operators = document.querySelectorAll('.operator');
    const clear = document.querySelector('#clear');
    const equals = document.querySelector('#equals');
    const del = document.querySelector('#delete');

    let currentNum = '';
    let prevNum = '';
    let result = null;
    let currentOperator = null;

    console.log("JavaScript loaded and DOM fully parsed");

    buttons.forEach(button => {
        button.addEventListener('click', handleNumberClick);
    });

    operators.forEach(operator => {
        operator.addEventListener('click', handleOperatorClick);
    });

    equals.addEventListener('click', handleEqualsClick);
    clear.addEventListener('click', handleClearClick);
    del.addEventListener('click', handleDeleteClick);

    function handleNumberClick(e) {
        console.log("Number clicked:", e.target.value);
        if (result !== null) {
            currentNum = '';
            result = null;
        }
        currentNum += e.target.value;
        updateDisplay();
    }

    function handleOperatorClick(e) {
        console.log("Operator clicked:", e.target.value);
        if (currentNum === '') return;

        if (currentOperator !== null) {
            calculate();
        }

        currentOperator = e.target.value;
        prevNum = currentNum;
        currentNum = '';
        updateDisplay();
    }

    function handleEqualsClick() {
        console.log("Equals clicked");
        if (currentOperator === null || currentNum === '') return;
        calculate();
    }

    function handleClearClick() {
        console.log("Clear clicked");
        currentNum = '';
        prevNum = '';
        result = null;
        currentOperator = null;
        display.value = '';
    }

    function handleDeleteClick() {
        console.log("Delete clicked");
        if (currentNum !== '') {
            currentNum = currentNum.slice(0, -1);
            updateDisplay();
        }
    }

    function calculate() {
        console.log("Calculating result");
        const prev = parseFloat(prevNum.replace(/,/g, '.'));
        const current = parseFloat(currentNum.replace(/,/g, '.'));
        if (isNaN(prev) || isNaN(current)) return;

        switch (currentOperator) {
            case '+':
                result = prev + current;
                break;
            case '-':
                result = prev - current;
                break;
            case '*':
                result = prev * current;
                break;
            case '/':
                if (current === 0) {
                    alert("Cannot divide by zero");
                    return;
                }
                result = prev / current;
                break;
        }

        currentNum = result.toString().replace('.', ',');
        currentOperator = null;
        prevNum = '';
        updateDisplay();
    }

    function updateDisplay() {
        if (currentOperator !== null && currentNum === '') {
            display.value = `${formatNumber(prevNum)} ${currentOperator}`;
        } else if (currentOperator !== null) {
            display.value = `${formatNumber(prevNum)} ${currentOperator} ${formatNumber(currentNum)}`;
        } else {
            display.value = formatNumber(currentNum);
        }
    }

    function formatNumber(numStr) {
        const parts = numStr.split(',');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        return parts.join(',');
    }
});
