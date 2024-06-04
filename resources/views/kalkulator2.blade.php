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
            <button class="operator" value=";">;</button>
            <button id="clear">C</button>
            <button id="delete">Del</button>
            <button id="equals">=</button>
        </div>
        <button id="showOperators" class="arrow">Mode</button>
        <div id="operatorMenu" style="display: none;">
            <button class="operator" value="shift1">BEP Unit</button>
            <button class="operator" value="shift2">BEP Nominal</button>
            <button class="operator" value="shift3">RProf. Gross Profit Margin</button>
            <button class="operator" value="shift4">RProf. Net Profit Margin</button>
            <button class="operator" value="shift5">RLik. Current Ratio</button>
            <button class="operator" value="shift6">RLik. Quick Ratio</button>
            <button class="operator" value="shift7">RLik. Cash Ratio</button>
            <button class="operator" value="shift8">RSol. Debt to Asset Ratio</button>
            <button class="operator" value="shift9">RSol. Debt to Equity Ratio</button>
            <button class="operator" value="shift10">RSol. Debt to Capital Ratio</button>
        </div>
    </div>

    <script src="{{ asset('assets/js/kalkulator2.js') }}"></script>
</body>

</html>