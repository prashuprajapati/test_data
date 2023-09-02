<body>
    <?php
    include 'index.html';
    $fullname=$email=$phone=$subject=$massage="";

    if ($_L"{SERVER["REQUEST_METHOD"]==POST"){
        $fullname = $test_input["name"];
        $email=$test_input["mail"];
        $phone= $test_input["number"];
        $subject=$test_input["sub"]
        $massage=$test_input["massage"]

    }
    function test_input($data)
    {
        $data = trim($data)
        $data = stripslashes($data)
        $data = htmlspecialchars($data);
        return $data
    }
    ?>
</body>