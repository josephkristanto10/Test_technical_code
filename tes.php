<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <form method="post" id="myform">
        <input type="text" placeholder="Input Angka" id="myinputnumber">
        <button onclick="GenerateSegititga()" value="Segitiga">Generate Segitiga</button>
        <button onclick="GenerateGanjil()" value="Segitiga">Generate Bilangan Ganjil</button>
        <button onclick="GeneratePrima()">Generate Bilangan Prima</button>
    </form>
    <br>
    <h2>Result :</h2>
    <div id="result"></div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$("#myform").addEventListener('click', function(event) {
    event.preventDefault();
});

function GenerateSegititga() {

    // alert("test");
    $.ajax({
        type: "POST",
        url: "proses.php",
        data: {
            param: "segitiga",
            mynumber: $("#myinputnumber").val()
        },
        dataType: "html",
        success: function(response) {
            $("#result").html(response);
        }
    });
    event.preventDefault();
}

function GenerateGanjil() {

    // alert("test");
    $.ajax({
        type: "POST",
        url: "proses.php",
        data: {
            param: "ganjil",
            mynumber: $("#myinputnumber").val()
        },
        dataType: "html",
        success: function(response) {
            $("#result").html(response);
        }
    });
    event.preventDefault();
}

function GeneratePrima() {

    // alert("test");
    $.ajax({
        type: "POST",
        url: "proses.php",
        data: {
            param: "Prima",
            mynumber: $("#myinputnumber").val()
        },
        dataType: "html",
        success: function(response) {
            $("#result").html(response);
        }
    });
    event.preventDefault();
}
</script>