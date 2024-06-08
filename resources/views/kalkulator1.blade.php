<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator 1</title>
    <link rel="stylesheet" href="{{asset('assets/css/kalkulator1.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<!-- catatan kalau mau kembali ke awal, tinggal hapus jquery boostrap, dan hapus 
<div class="modal-header-edit">
    <img src="{{asset('assets/img/logo.png')}}" alt="Logo" id="logo">
    <button type="button" class="btn-close-edit" data-dismiss="modal" aria-label="Close"><img id="close-btn" src="{{asset('assets/img/x-circle.png')}}" alt=""></button>
</div> 
serta hapus juga bagian 
<div class="modal" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" dan sisakan cuma class modal lalu tabindex=-1
lalu hapus juga 
<div class="calculator-body"> -->

<body>
    <div class="modal" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-contents">
                <div id="calculator">
                    <div class="modal-header-edit">
                        <img src="{{asset('assets/img/logo.png')}}" alt="Logo" id="logo">
                        <!-- <button type="button" class="btn-close-edit" data-dismiss="modal" aria-label="Close">
                            <img id="close-btn" src="{{asset('assets/img/x-circle.png')}}" alt="">
                        </button> -->
                    </div>
                    <!-- <h1>Kalkulator</h1> -->
                    <div class="calculator-body">
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
    </div>



    <script src="{{ asset('assets/js/kalkulator1.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>