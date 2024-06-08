<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/floating.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Utama</title>
</head>

<body>
    <div class="fab">
        <img src="{{asset('assets/img/arrow-bar-up.png')}}" alt="">
    </div>

    <div class="box">
        <button class="item item1" data-toggle="modal" data-target="#kalkulator1">
            <img src="{{asset('assets/img/calculator.png')}}" alt="">
            <!-- <span class="button-text">Kalkulator 1</span> -->
        </button>
        <button class="item item2" data-toggle="modal" data-target="#kalkulator2">
            <img src="{{asset('assets/img/calculator.png')}}" alt="">
        </button>
    </div>

    <div class="modal fade" id="kalkulator1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog">
                <div class="modal-contents">
                    <!-- <div class="modal-header-edit">
                        <button type="button" class="btn-close-edit" data-dismiss="modal" aria-label="Close"><img id="close-btn" src="{{asset('assets/img/x-circle.png')}}" alt=""></button>
                    </div> -->
                    <div class="modal-body-edit">
                        <div class="modal-body-edit">
                            <button type="button" class="btn-close-edit" data-dismiss="modal" aria-label="Close"><img id="close-btn" src="{{asset('assets/img/x-circle.png')}}" alt=""></button>
                            <div class="iframe1">
                                <iframe src="/kalkulator" frameborder="0" width="100%" height="600px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- kalkulator 2 -->
    <div class="modal fade" id="kalkulator2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog">
                <div class="modal-contents">
                    <!-- <div class="modal-header-edit">
                        <button type="button" class="btn-close-edit" data-dismiss="modal" aria-label="Close"><img id="close-btn" src="{{asset('assets/img/x-circle.png')}}" alt=""></button>
                    </div> -->
                    <div class="modal-body-edit">
                        <div class="modal-body-edit">
                            <button type="button" class="btn-close-edit" data-dismiss="modal" aria-label="Close"><img id="close-btn" src="{{asset('assets/img/x-circle.png')}}" alt=""></button>
                            <div class="iframe1">
                                <iframe src="/kalkulator2" frameborder="0" width="100%" height="600px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.fab').addEventListener('click', function(e) {
            document.querySelector('.box').classList.toggle('box-active');
            document.querySelector('.fab').classList.toggle('fab-active');
        });
        // Event listener untuk tombol close di kalkulator1
        document.querySelector('#kalkulator1 .btn-close-edit').addEventListener('click', function(e) {
            $('#kalkulator1').modal('hide');
        });

        // Event listener untuk tombol close di kalkulator2
        document.querySelector('#kalkulator2 .btn-close-edit').addEventListener('click', function(e) {
            $('#kalkulator2').modal('hide');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>