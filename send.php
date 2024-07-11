<?php 
if (isset($_POST['name']) && isset($_POST['email'])) {
    $message = $_POST['message'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $to = 'body.hamed@outlook.com';
    $subject = "طلب إستفسار من موقع فيو إيجيبت";
    $body = '<html>
        
            <body>
            <h2>بيانات - تقديم</h2>
            
            ===================
            <p>الإستفسار:<br>'.$message.'</p>    <hr>    
            <p>الاسم:<br>'.$name.'</p>         <hr>    
            <p>الهاتف:<br>'.$phone.'</p>        <hr>   
            <p>البريد:<br>'.$email.'</p>          <hr>  
            ===================
            </body>
            </html>';
    
    $headers  = "from: ".$name." <".$email.">\r\n";
    $headers .= "reply-to: ".$email."\r\n";
    $headers .= "MIME-verson: 1.0\r\n";
    $headers .= "content-type: text/html; charset=utf-8";
    
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<center><img src="images/favicon.png" alt="View Egypt" /></center>';
        echo '<br/>';
        echo '<br/>';
        echo '<br/>';
        echo '<center>.شكراً لإختيارك فيو إيجيبت</center>';
    } else {
        echo 'error';
    }
}
?>