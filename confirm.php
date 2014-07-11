<?php
Class Confirm
{
    private $data;

    function  __construct()
    {
        if (isset($_GET)) {
            $this->data = $_GET;
        } else {
            header('Location: index.php');
        }
    }

    function validate($data)
    {
        $uid = $this->test_input($data['uid']);
        $name = $this->test_input($data['name']);
        $email = $this->test_input($data['email']);
        $address = $this->test_input($data['address']);
        //Validate
        if ($this->testUid($uid) == false || $this->testName($name) == false || $this->testEmail($email) == false || ($address != NULL && $this->testAddress($address) == false)) {
            header("Location: index.php?uid=$uid&name=$name&email=$email&address=$address&mode=invalid");
            return;
        } else {

            $data['uid'] = $uid;
            $data['name'] = $name;
            $data['email'] = $email;
            $data['address'] = $address;
            return $data;
        }
    }

    function getOutput()
    {
        $data = $this->validate($this->data);
        return $data;
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function testUid($data)
    {
        if (!is_numeric($data) || strlen($data) != 10) {
//            die('1');
            return false;
        }
        return $data;
    }

    function testName($data)
    {
        if (!(strlen($data) <= 10)) {
//            die('2');
            return false;
        }
        return $data;
    }

    function testEmail($data)
    {
        if (strlen($data) >= 50 || !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $data)) {
//            die('2');
            return false;
        }
        return $data;
    }

    function testAddress($data)
    {
        if ($data != NULL) {
            if (strlen($data) > 100) {
//                die('4');
                return false;
            }
        }

        return $data;
    }
}


$confirm = new Confirm();
$output = $confirm->getOutput();
?>

<html>
<head>

</head>
<body>
<h1>Please confirm your information below:</h1><br>

<div style="font-size: 20">
    User ID : <?php echo $output['uid'] ?> <br>
    Name : <?php echo $output['name'] ?> <br>
    Email : <?php echo $output['email'] ?> <br>
    Address : <?php echo $output['address'] ?> <br><br>
</div>
<form method="get" action="finish.php">
    <input type="hidden" name="uid" value="<?php echo $output['uid'] ?>"/>
    <input type="hidden" name="name" value="<?php echo $output['name'] ?>"/>
    <input type="hidden" name="email" value="<?php echo $output['email'] ?>"/>
    <input type="hidden" name="address" value="<?php echo $output['address'] ?>"/>
    <input type="submit" name="confirm" value="Cancel"/>
    <input type="submit" name="confirm" value="Confirm"/>
</form>
</body>
</html>