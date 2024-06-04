<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator 1</title>
    <link rel="stylesheet" href="{{asset('assets/css/kalkulator1.css')}}">
</head>

<body>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-contents">
                <div id="calculator">
                    <img src="{{asset('assets/img/logo.png')}}" alt="Logo" id="logo">
                    <!-- <h1>Kalkulator</h1> -->
                    <input type="text" id="display" readonly>
                    <div id="buttons">
                        <button class="num" value="7">7</button>
                        <button class="num" value="8">8</button>
                        <button class="num" value="9">9</button>
                        <button class="operator" value="/">÷</button>
                        <button class="num" value="4">4</button>
                        <button class="num" value="5">5</button>
                        <button class="num" value="6">6</button>
                        <button class="operator" value="*">×</button>
                        <button class="num" value="1">1</button>
                        <button class="num" value="2">2</button>
                        <button class="num" value="3">3</button>
                        <button class="operator" value="-">-</button>
                        <button class="num" value="0">0</button>
                        <button class="num" value="00">.00</button>
                        <button class="num" value="000">.000</button>
                        <button class="operator" value="+">+</button>
                        <button id="clear">C</button>
                        <button id="delete">Del</button>
                        <button class="num" value=",">,</button>
                        <button id="equals">=</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('assets/js/kalkulator1.js') }}"></script>
</body>

</html>