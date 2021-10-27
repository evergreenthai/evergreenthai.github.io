           <!-- starting php code -->
           <?php
                //first we leave this input field blank
                $recipient = "";
                //if user click the send button
                if(isset($_POST['send'])){
                    //access user entered data
                   $recipient = $_POST['email'];
                   $subject = $_POST['subject'];
                   $message = $_POST['message'];
                   $sender = "From: shahiprem7890@gmail.com";
                   //if user leave empty field among one of them
                   if(empty($recipient) || empty($subject) || empty($message)){
                       ?>
                       <!-- display an alert message if one of them field is empty -->
                        <div class="alert alert-danger text-center">
                            <?php echo "All inputs are required!" ?>
                        </div>
                       <?php
                    }else{
                        // PHP function to send mail
                       if(mail($recipient, $subject, $message, $sender)){
                        ?>
                        <!-- display a success message if once mail sent sucessfully -->
                        <div class="alert alert-success text-center">
                            <?php echo "Your mail successfully sent to $recipient"?>
                        </div>
                       <?php
                       $recipient = "";
                       }else{
                        ?>
                        <!-- display an alert message if somehow mail can't be sent -->
                        <div class="alert alert-danger text-center">
                            <?php echo "Failed while sending your mail!" ?>
                        </div>
                       <?php
                       }
                   }
                }
            ?> <!-- end of php code -->
