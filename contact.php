
<?php

$fields = array(
    'name'=>array(
        'type'=>'text'
        'label'=>'First Name'
    ),
    'email'=>array(
        'type'=>'email'
        'label'=>'Email'
    ),
    'message'=>array(
        'type'=>'textmessage'
        'label'=>'Message'

    )


    // 'phone'=>array(
    //     'type'=>'number'
    //     'label'=>'Phone'
    // ),
    // 'message'=>array(
    //     'type'=>'testarera'
    //     'label'=>'Message'
    // )

);


function send_email(){
    $to = 'hassany96@hotmail.com';
    $subject = "Email from week12"
    $message = 'Message Body:' $_GET['message'];
    $headers = "From: noreply@YOURDOMAIN.COM";
    $headers .= 'Reply-To:',$_GET['email'];

    //pretent this line is working
    // mail($to, $subject, $message, $headers);

    echo '==== Fake Emails ===='.PHP_EOL;
    echo 'Subject: '.$subject.PHP_EOL;
    echo 'Email To: ' .$email.PHP_EOL;
    echo 'Message: ' .$message.PHP_EOL;
    echo '==== Emails End ===='.PHP_EOL;

    // only use for php server version ...    




    //$headers = "To: header@ccc.com/r/n";
    //$headers = "subject: subject as a header/r/n";

    // mail($to, $subject, $message);
    // if using the PHP.EOL lines then dont use ' mail($to, $subject, $message); ' 
}

send_email();






    ?>

!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contact us</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<!-- this form is not complete -->

</head>
<body>
<?php if(isset($_get['status']) && $_GET['status']==='successful'):?>
<p>The form submitted succesfully!</p>
<?php endif;?>
<form action="./admin/scripts/sendEmail.php" method="POST">
<?php foreach($fields as $fields_name => $field_config):?>
<div class="form-group">
<?php if($field_config['type']==='textarea'):?>
    <label for=<?php echo $field_name;?><?php echo $field_name;?><?php echo $field_config['label'];?
    <textarea class="form-control" id="<?php echo $field_name;?>" name="<?php" 
    <?php else:?>
        <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?
        <input type="<?php echo $field_config['type'];?>" class="form-control" name=""
    </php endif;?>
    </div>
    <?php endif;?>





<form action="./contact.php">



    <?php foreach($fields as $fields_name  => $field_config):?>
        <div class="form-group">
        <?php if($field_config['type']==='textarea'):?>
        <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
        <textarea class="form-control" id="<?php echo $field_name;?>" rows="3"></textarea>
    <?php else:?>
        <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
        <input id="<?php echo $field_config['type'];?>" class="form-control" id="<?php echo $field_name:?>" row="3" ></textarea>  
        <small id="<?php echo $field_name;?>" class="form-text text-muted"> We'll never share your email with anyone else.</small>
        <?php endif;?>
        </div>



        
    <?php endforeach;?>
</form>
</body>
<button>submit</button>


</html>



<!-- ................................................................................................................................... -->

<!-- Goal -->
<!-- 1. build a contack form -->
<!-- 2. when user submit the , form an email will be generated and sent out -->


<!-- plan -->
<!-- 1. build the form in HTML / php -->
<!-- 2/ submit the form to somewhere?? ("target") -->
<!-- 3. use php to get the submission  -->
<!-- 4. use php to send  -->


<!-- imporvments -->
<!-- 1.our contact.php has too many things...   -->
<!-- 2.the url contains too much information...  -->
<!-- 3. UX, the user will be lost once email sent out... -->







