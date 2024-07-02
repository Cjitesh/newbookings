<?php

$data = array(
           'name' => $_POST['modalname'],
           'email' => $_POST['modalemail'],
           'contact' => $_POST['modalcontact'],
           'path' => 'NB - Godrej Hillside 3',
          	'mobile' => '9819777057,9310863636,9137692059',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '386',
           'project' => '190',
           'toemail' => 'suryabhanmaurya14@gmail.com',
           'fromname' => 'New Bookings',
        );
      $url = 'https://neeadigital.com/crm/api/insert-lead';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
      $res = curl_exec($ch);
      
      $url1 = 'https://neeadigital.com/crm/api/send-mail';
      $ch1 = curl_init();
      curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch1, CURLOPT_URL, $url1);
      curl_setopt($ch1, CURLOPT_POSTFIELDS,$data);
      $res1 = curl_exec($ch1);
    
	header("Location: thankyou.php");
	                  
	
?>