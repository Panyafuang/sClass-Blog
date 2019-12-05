<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php
    require_once('connect.php');

    if(isset($_POST['btn-submit'])){
        $secretKey = '6LdEHMMUAAAAAAtkgBv-jH601bCjIzXSn3ep2sAr';
        $response = $_POST['g-recaptcha-response'];
        // IP domain client
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteip";
        // Read content from url & covert json to array
        $res = json_decode(file_get_contents($url));

        // Check validation
        if($res->success){
            // If pass
            // Insert to DB
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $msg = mysqli_real_escape_string($conn, $_POST['message']);
            
            $sql = "INSERT INTO `contacts` (`name`, `phone`, `email`, `message`, `created_at`) VALUES ('$name', '$phone', '$email', '$msg', '".date("Y-m-d")."' )";
            $result = $conn->query($sql) or die($conn->error);

            // Check Query
            if($result){
                    sentToLine();
            }else{

            }

        }else{
            // If not pass
            echo '<script>alert("Valification Failed!!")</script>';
            header('Refresh:0; url=../contact.php');
        }
    }else{
        header('Refresh:0; url=../index.php');
    }

    
    function sentToLine(){
        // Concat var
        $text = "มีผู้ติดต่อมาจากเว็บไซต์ \n";
        $text .= "ชื่อ: ".$_POST['name']."\n";
        $text .= "เบอร์: ".$_POST['phone']."\n";
        $text .= "อีเมล์: ".$_POST['email']."\n";
        $text .= "ข้อความ: ".$_POST['message'];
        // Create array message
        $message = array(
            'message' => $text
        );

        // Invoke notify_message
        notify_message($message);

    }
    
    function notify_message($message){
        // Create const var
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', "Vy3JMRl3TYUy1g1RJ4W6pfGWRBGziURc1zRKEyu0bqi");
        // Generate URL-encoded query string
        $queryData = http_build_query($message, '', '&');
        // AJAX
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content' => $queryData
            )
        );

        // Creates a stream context
        $context = stream_context_create($headerOptions);
        // Read message back from line
        $result = file_get_contents(LINE_API,FALSE,$context);

        // Convert json to array
        $arrResult = json_decode($result);

        if($arrResult->status == 200){
            echo '<script>alert("ส่งข้อมูลสำเร็จ")</script>';
            header('Refresh:0; url=../index.php');
        }else{
            echo '<script>alert("เกิดข้อผิดพลาด กรุณาลองใหม่ในภายหลัง!!")</script>';
            header('Refresh:0; url=../contact.php');
        }
    }



?>