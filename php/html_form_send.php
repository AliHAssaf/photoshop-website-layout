<?php
header('Content-Type:text/html; charset=utf-8');
if(isset($_POST['email'])){
    //EDIT THE 2 LINES BELOWAS REQUIRED
    $email_to = "email@website.com";
    $email_subject = "Email from";

    $first_name = $_POST['first_name'];//requierd
    $last_name = $_POST['last_name'];//requierd
    $email_from = $_POST['email'];//requierd
    $telephone = $_POST['telephone'];//requierd
    $comments = $_POST['comments'];//requierd

    $email_message = "From details below\n\n";

    function clean_string($string){
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $emsil_message = "First Name".clean_string($first_name)."\n";
    $emsil_message = "Last Name".clean_string($last_name)."\n";
    $emsil_message = "Email".clean_string($email_from)."\n";
    $emsil_message = "Telephone".clean_string($telephone)."\n";
    $emsil_message = "Comments".clean_string($comments)."\n";

//create email headers
$headers = 'From:'.$email_from."\r\n".
  "Reply-To".$email_from."\r\n".
  "X-Mailer: PHP/".phpversion();
  @mail($email_to,$email_subject,$email_message,$headers);
}
?>
<?php
echo "<script >alert("شكراً لتواصلك سيتم قراءة الرسالة و الرد بأسرع وقت")</script>";
echo "<script>window.location.assign('../index.html');</script>";
?>
<?php } ?>