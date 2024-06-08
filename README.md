<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #282c34;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 400px;
            text-align: center;
        }
        .display {
            width: calc(100% - 40px);
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #444;
            border-radius: 10px;
            font-size: 32px;
            background-color: #222;
            color: #fff;
            text-align: right;
        }
        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .buttons button {
            width: 90px;
            height: 90px;
            margin: 5px;
            font-size: 28px;
            border: none;
            border-radius: 10px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .buttons button.operation {
            background-color: #FF5722;
        }
        .buttons button.clear {
            background-color: #F44336;
        }
        .buttons button.equal {
            background-color: #FFC107;
            width: calc(100% - 20px);
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2 style="color: #fff;">Calculatrice</h2>
        <form method="post" id="calculator-form">
            <input type="hidden" id="number1" name="number1" required>
            <input type="hidden" id="operation" name="operation">
            <input type="hidden" id="number2" name="number2" required>
            <div class="display" id="display"></div>
            <div class="buttons">
                <button type="button" onclick="appendNumber(7)">7</button>
                <button type="button" onclick="appendNumber(8)">8</button>
                <button type="button" onclick="appendNumber(9)">9</button>
                <button type="button" class="operation" onclick="setOperation('divide')">÷</button>
                <button type="button" onclick="appendNumber(4)">4</button>
                <button type="button" onclick="appendNumber(5)">5</button>
                <button type="button" onclick="appendNumber(6)">6</button>
                <button type="button" class="operation" onclick="setOperation('multiply')">×</button>
                <button type="button" onclick="appendNumber(1)">1</button>
                <button type="button" onclick="appendNumber(2)">2</button>
                <button type="button" onclick="appendNumber(3)">3</button>
                <button type="button" class="operation" onclick="setOperation('subtract')">-</button>
                <button type="button" onclick="appendNumber(0)">0</button>
                <button type="button" class="clear" onclick="clearDisplay()">C</button>
                <button type="button" class="operation" onclick="setOperation('add')">+</button>
                <button type="submit" class="equal">=</button>
            </div>
        </form>
        <div class="result" style="color: #fff;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $operation = $_POST['operation'];
                $result = 0;

                switch ($operation) {
                    case "add":
                        $result = $number1 + $number2;
                        break;
                    case "subtract":
                        $result = $number1 - $number2;
                        break;
                    case "multiply":
                        $result = $number1 * $number2;
                        break;
                    case "divide":
                        if ($number2 != 0) {
                            $result = $number1 / $number2;
                        } else {
                            echo "Erreur : Division par zéro!";
                            exit;
                        }
                        break;
                }
                echo "Le résultat est : " . $result;
            }
            ?>
        </div>
    </div>
    <script>
        let display = document.getElementById('display');
        let number1 = document.getElementById('number1');
        let operation = document.getElementById('operation');
        let number2 = document.getElementById('number2');
        let resetDisplay = false;

        function appendNumber(num) {
            if (resetDisplay) {
                display.innerHTML = '';
                resetDisplay = false;
            }
            display.innerHTML += num;
        }

        function setOperation(op) {
            if (!number1.value) {
                number1.value = display.innerHTML;
            } else if (number2.value) {
                number2.value = display.innerHTML;
                number1.value = calculate(number1.value, number2.value, operation.value);
                display.innerHTML = number1.value;
                number2.value = '';
            }
            operation.value = op;
            resetDisplay = true;
        }

        function calculate(num1, num2, op) {
            let result = 0;
            switch (op) {
                case "add":
                    result = parseFloat(num1) + parseFloat(num2);
                    break;
                case "subtract":
                    result = parseFloat(num1) - parseFloat(num2);
                    break;
                case "multiply":
                    result = parseFloat(num1) * parseFloat(num2);
                    break;
                case "divide":
                    result = parseFloat(num1) / parseFloat(num2);
                    break;
            }
            return result;
        }

        function clearDisplay() {
            display.innerHTML = '';
            number1.value = '';
            operation.value = '';
            number2.value = '';
        }

        document.getElementById('calculator-form').addEventListener('submit', function(event) {
            if (number1.value && operation.value) {
                number2.value = display.innerHTML;
                display.innerHTML = calculate(number1.value, number2.value, operation.value);
                number1.value = display.innerHTML;
                operation.value = '';
                number2.value = '';
                resetDisplay = true;
            }
            event.preventDefault();
        });
    </script>
</body>
</html>
