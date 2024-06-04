document.addEventListener('DOMContentLoaded', () => {
    const display = document.querySelector('#display');
    const buttons = document.querySelectorAll('.num');
    const operators = document.querySelectorAll('.operator');
    const clear = document.querySelector('#clear');
    const equals = document.querySelector('#equals');
    const del = document.querySelector('#delete');

    let currentNum = '';
    let currentMode = null;

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
        currentNum += e.target.value;
        updateDisplay();
    }

    function handleOperatorClick(e) {
        const operator = e.target.value;
        if (operator === 'shift1') {
            currentMode = 'bep-unit';
            display.value = 'Mode: BEP Unit';
            currentNum = '';
        } else if (operator === 'shift2') {
            currentMode = 'bep-nominal';
            display.value = 'Mode: BEP Nominal';
            currentNum = '';
        } else {
            currentNum += e.target.value;
            updateDisplay();
        }
    }

    function handleEqualsClick() {
        if (!currentMode) {
            displayError("Please select a mode using SHIFT1 or SHIFT2");
            return;
        }
        calculateSpecial();
    }

    function handleClearClick() {
        currentNum = '';
        currentMode = null;
        display.value = '';
    }

    function handleDeleteClick() {
        if (currentNum !== '') {
            currentNum = currentNum.slice(0, -1);
            updateDisplay();
        }
        if (currentMode !== null && currentNum === '') {
            currentMode = null;
            display.value = '';
        }
    }

    function calculateSpecial() {
        const values = currentNum.split(';');
        if (values.length !== 3) {
            displayError("Error: Format number");
            handleClearClick();
            return;
        }

        const biayaTetap = parseFloat(values[0].replace(/\./g, '').replace(/,/g, '.'));
        const biayaVariabel = parseFloat(values[1].replace(/\./g, '').replace(/,/g, '.'));
        const hargaJual = parseFloat(values[2].replace(/\./g, '').replace(/,/g, '.'));

        if (isNaN(biayaTetap) || isNaN(biayaVariabel) || isNaN(hargaJual)) {
            displayError("Error: Format number");
            handleClearClick();
            return;
        }

        let result;
        if (currentMode === 'bep-unit') {
            result = biayaTetap / (hargaJual - biayaVariabel);
        } else if (currentMode === 'bep-nominal') {
            result = biayaTetap / ((hargaJual - biayaVariabel) / hargaJual) * hargaJual;
        }

        display.value = formatNumber(result.toString());
        currentNum = result.toString();
        currentMode = null;
    }

    function updateDisplay() {
        display.value = formatNumber(currentNum);
    }

    function formatNumber(numStr) {
        const [integerPart, decimalPart] = numStr.split('.');
        const formattedIntegerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        return decimalPart ? `${formattedIntegerPart},${decimalPart}` : formattedIntegerPart;
    }

    function displayError(message) {
        display.value = message;
        setTimeout(() => {
            display.value = '';
            currentNum = '';
            currentMode = null;
        }, 2000);
    }
});
