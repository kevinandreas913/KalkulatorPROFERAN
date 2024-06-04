<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-grid gap-2 d-md-flex text-center">
        <a href="/kalkulator" class="btn btn-primary" role="button" data-bs-toggle="button">kalkulator 1</a>
        <a href="/kalkulator2" class="btn btn-primary active" role="button" data-bs-toggle="button">Kalkulator 2</a>
        <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
    </div>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .fab-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .fab {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .fab i {
            font-size: 24px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="fab-container">
        <a href="#calculatorModal" class="btn btn-primary fab" role="button" data-bs-toggle="modal" data-bs-target="#calculatorModal"><i class="bi bi-calculator"></i></a>
        <a href="#calculatorModal2" class="btn btn-primary fab" role="button" data-bs-toggle="modal" data-bs-target="#calculatorModal2"><i class="bi bi-calculator-fill"></i></a>
        <a id="toggle-btn" class="btn btn-primary fab" role="button" data-bs-toggle="button" onclick="toggleFABs()"><i class="bi bi-x-circle"></i></a>
    </div>

    <!-- Modal for Calculator 1 -->
    <div class="modal fade" id="calculatorModal" tabindex="-1" aria-labelledby="calculatorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="calculatorModalLabel">Kalkulator 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="calculator">
                        <img src="{{asset('assets/img/logo.png')}}" alt="Logo" id="logo">
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

    <!-- Modal for Calculator 2 -->
    <div class="modal fade" id="calculatorModal2" tabindex="-1" aria-labelledby="calculatorModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="calculatorModalLabel2">Kalkulator 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content for Kalkulator 2 goes here -->
                    <p>Kalkulator 2 content...</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JAWsR1lC7JLDBnN8FbA0j6LyVE6Bx7KtkO2gLtKxVVHTIzlAm5f5sWV59JkBoFxT" crossorigin="anonymous"></script>
    <script>
        function toggleFABs() {
            const fabs = document.querySelectorAll('.fab:not(#toggle-btn)');
            fabs.forEach(fab => {
                fab.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>