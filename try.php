<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Example</title>
    <style>
        .button-container button {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Select an Option</h1>
    <form action="try-rd.php" method="post" id="radioForm">
        <label>
            <input type="radio" name="option" value="1"> Option 1
        </label>
        <label>
            <input type="radio" name="option" value="2"> Option 2
        </label>
        <label>
            <input type="radio" name="option" value="3"> Option 3
        </label>
        <div class="button-container">
          <button id="button1">Button for Option 1</button>
          <button id="button2">Button for Option 2</button>
          <button id="button3">Button for Option 3</button>
        </div>
    </form>

    

    <script>
        const radioForm = document.getElementById('radioForm');
        const buttons = document.querySelectorAll('.button-container button');

        radioForm.addEventListener('change', function (event) {
            if (event.target.name === 'option') {
                console.log(event.target.value);
                buttons.forEach(button => button.style.display = 'none');
                document.getElementById('button' + event.target.value).style.display = 'inline-block';
            }
        });
    </script>
</body>
</html>
