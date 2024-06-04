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
        } else if (operator === 'shift3') {
            currentMode = 'gross-profit-margin';
            display.value = 'Mode: Margin laba kotor';
            currentNum = '';
        } else if (operator === 'shift4') {
            currentMode = 'net-profit-margin';
            display.value = 'Mode: Margin laba bersih';
            currentNum = '';
        } else {
            currentNum += e.target.value;
            updateDisplay();
        }
    }

    function handleEqualsClick() {
        if (!currentMode) {
            display.value = "Please select a mode!";
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
    
    let no1, no2, no3;

    if (currentMode === 'bep-unit' || currentMode === 'bep-nominal') {
        // biaya tetap = no1
        // biaya variabel = no2
        // harga jual = no3
        no1 = parseFloat(values[0].replace(/\./g, '').replace(/,/g, '.'));
        no2 = parseFloat(values[1].replace(/\./g, '').replace(/,/g, '.'));
        no3 = parseFloat(values[2].replace(/\./g, '').replace(/,/g, '.'));
    } else if (currentMode === 'gross-profit-margin') {
        // gross profit (penjualan - HPP) = no1
        // penjualan bersih = no2
        no1 = parseFloat(values[0].replace(/\./g, '').replace(/,/g, '.'));
        no2 = parseFloat(values[1].replace(/\./g, '').replace(/,/g, '.'));
        no3 = 0;
    } else if (currentMode === 'net-profit-margin') {
        // laba bersih (penjualan - HPP - biaya) = no1
        // penjualan bersih = no2
        no1 = parseFloat(values[0].replace(/\./g, '').replace(/,/g, '.'));
        no2 = parseFloat(values[1].replace(/\./g, '').replace(/,/g, '.'));
        no3 = 0;
    } 
        
    if ((currentMode === 'bep-unit' || currentMode === 'bep-nominal') && (isNaN(no1) || isNaN(no2) || isNaN(no3))) {
        display.value = "Error: Format number";
        setTimeout(handleClearClick, 2000);
        return;
    } else if ((currentMode === 'gross-profit-margin' || currentMode === 'net-profit-margin') && (isNaN(no1) || isNaN(no2))) {
        display.value = "Error: Format number";
        setTimeout(handleClearClick, 2000);
        return;
    }

    let result;

    if (currentMode === 'bep-unit') {
        result = no1 / (no3 - no2);
    } else if (currentMode === 'bep-nominal') {
        result = no1 / ((no3 - no2) / no3) * no3;
    } else if (currentMode === 'gross-profit-margin') {
        result = (no1 / no2) * 100;
    } else if (currentMode === 'net-profit-margin') {
        result = (no1 / no2) * 100;
    }

    if (currentMode === 'bep-unit' || currentMode === 'bep-nominal'){
        display.value = formatNumber(result.toString());
        currentNum = result.toString();
        currentMode = null;
    } else if (currentMode === 'gross-profit-margin' || currentMode === 'net-profit-margin'){
        display.value = formatNumber(result.toString()) + "%";
        currentNum = result.toString();
        currentMode = null;
    }
    
}


    function updateDisplay() {
        display.value = formatNumber(currentNum);
    }

    function formatNumber(numStr) {
        const [integerPart, decimalPart] = numStr.split('.');
        const formattedIntegerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        return decimalPart ? `${formattedIntegerPart},${decimalPart}` : formattedIntegerPart;
    }
});