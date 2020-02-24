<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cancelled Successfully</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
  <body>
      <form method="post">
          <a href="login.php" class="btn btn primary" name="">Logout</a>
          <a href="selection.php" class="btn btn primary" name="">Continue</a>
      </form>
  </body>
</html>
<?php
    include_once('connection.php');
    session_start();
    $driver = '';
    $fare = '';
    $price = '';
    $user = $_SESSION['username'];
    $email1 = $_SESSION['send'];
    // echo $user;
    // echo $email1;
    $query="select email from users where username='$user'";
    $result=mysqli_query($con,$query);
    if($rows=mysqli_fetch_assoc($result)){
      $to_email = $rows['email'];
      // echo $to_email;

    $query1="select drivername,price from book where email='$to_email'";
    // echo $query1;
    $result1=mysqli_query($con,$query1);
    if($rows=mysqli_fetch_assoc($result1)){
      $driver =  $rows['drivername'];
      $price = $rows['price'];
      // echo $driver;
      // echo $price;

    
      $subject = 'ABC COMPANY';
      $message ='Cancelled Successfully. Your driver name is '.$driver.' and your fare for ride is '.$price.'

      Thank you.

      For any query please drop a mail to vehiclebooking.official@gmail.com
      Please dont hesitate to ask


      ABC Ticket Cancellation Rules
        1. For cancellation of tickets, cancellation fee is calculated on the journey fare applicable as per the mentioned slabs here.
        2. Cancellation of tickets with discounts will be as per the rules in force. However, cancellation charges will be worked out on the collected fare of the ticket and refund amount will be fare collected less cancellation fee. Further, cancellation charges are applicable on actual fare only.
        3. Reservation fee and service charges are not refundable.
        4. The cancellation for e-ticket and refund rules slab wise (excluding the reservation fee, which is non refundable) are as follows:

        Sl.No Cancellation Terms  Cancellation Charges
        1 More than 48 hrs before the Schedule service start time at origin of the bus. Only reservation charges
        2 From 48 hrs before and up to 24 hrs. before the Schedule service start time at origin of the bus. 10% of the actual fare + Reservation charges
        3 From 24 hrs before and up to 2 hrs before the Schedule service start time at origin of the bus  25% of the actual fare + Reservation charges
        4 Up to 1 hr before Schedule service start time at origin of the bus. 50% of the actual fare + reservation charges.
        ABC Ticket Refund Procedure:
        1. In respect of tickets cancelled by the passenger, ABC will refund the amount applicable to the concerned Credit card / Debit Card account by ABC.
        2. In respect of refunds due to ticket not booked but amount debited to passengers account, passenger is requested to send an e-mail to  vehiclebooking.official@gmail.com mentioning     DRIVERNAME and DRIVERLICENSENUMBER of the BOOKING. Officials of ABC will verify the details and refund the amount to the concerned Credit card / Debit Card account.
        3. Refunds to passengers will be given normally in one month, after the cancellation of ticket or receipt of e-mail. If refunds are delayed more than a month, passengers may contact helpline telephone number at 1800 200 4599 from 04:00 hrs to 23:00 hrs.

        Service Cancellation by ABC
        a) If service is cancelled by ABC for any reason, customer can cancel the ticket within 15 days from the date of journey to get full refund, except Service Fee.
        b) Cancellation is not allowed after 15 days from the date of journey.

      ';
      $headers='From: vehiclebooking.official@gmail.com';
      if(mail($to_email,$subject,$message,$headers)){
        $em = $_SESSION['send'];
        echo "<h1>Cancelled Successfully</h1>";
            $q = "delete from book where email='$em'";
            $result = mysqli_query($con,$q);
      }
      else{
        echo "<h1>Error in the mail </h1>";
      }
    }
  }
?>