<html>
<head>
    <title>Form receive</title>
</head>
<body>
    <p>Thank you, got your input</p>
    <?php 
        $userName = $_POST['name'];
        $class = $_POST['class'];
        $university = $_POST['univ'];
        $gender = $_POST['gender'];
        $hobbie = $_POST['hobbie'];

        print("<p>Hello $userName, class $class, univerity $university</p>");
        print("<p>You are a $gender</p>");
        print("<p>You like");
        for($x=0; $x<count($hobbie); $x++){
            print(" $hobbie[$x],");
        }
        print("</p>");
    ?>
</body>
</html>