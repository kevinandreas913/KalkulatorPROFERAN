<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator 2</title>
    <link rel="stylesheet" href="{{asset('assets/css/kalkulator2.css')}}">
</head>

<body>
    <div id="calculator">
        <img src="{{asset('assets/img/logo.png')}}" alt="Logo" id="logo">
        <!-- <select>
            <option class="operator" value="shift1">BEP Unit</option>
            <option class="operator" value="shift2">BEP Nominal</option>
            <option class="operator" value="shift3">Gross Profit Margin</option>
            <option class="operator" value="shift4">Net Profit Margin</option>
        </select> -->
        <input type="text" id="display" readonly>
        <div id="buttons">
            <button class="num" value="7">7</button>
            <button class="num" value="8">8</button>
            <button class="num" value="9">9</button>
            <button class="num" value="4">4</button>
            <button class="num" value="5">5</button>
            <button class="num" value="6">6</button>
            <button class="num" value="1">1</button>
            <button class="num" value="2">2</button>
            <button class="num" value="3">3</button>
            <button class="num" value="0">0</button>
            <button class="num" value="00">.00</button>
            <button class="num" value="000">.000</button>
            <!-- <button id="shift" class="operator">SHIFT</button> -->
            <button class="operator" value="shift1">BEP Unit</button>
            <button class="operator" value="shift2">mode2</button>
            <button class="operator" value="shift3">mode3</button>
            <button class="operator" value="shift4">mode4</button>
            <button class="operator" value=";">;</button>
            <button id="clear">C</button>
            <button id="delete">Del</button>
            <!-- <button id="kosong" disabled></button> -->
            <button id="equals">=</button>
        </div>
    </div>

    <script src="{{ asset('assets/js/kalkulator2aman1.js') }}"></script>
</body>

</html>