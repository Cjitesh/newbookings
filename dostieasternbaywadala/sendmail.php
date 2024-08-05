<?php
	if($_POST['formtype'] == 'banner'){
		$data = array(
           'name' => $_POST['bannername'],
           'email' => $_POST['banneremail'],
           'contact' => $_POST['bannercontact'],
           'path' => 'NB DOSTI WADALA',
          	'mobile' => '7900149466,9137692059',
			//'mobile' => '7972844511',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '616',
           'project' => '250',
           'toemail' => 'infojaiambe@gmail.com',
           'fromname' => 'New Bookings',
       );
	}elseif($_POST['formtype'] == 'sticky'){
		$data = array(
           'name' => $_POST['stickyname'],
           'email' => $_POST['stickyemail'],
           'contact' => $_POST['stickycontact'],
           'path' => 'NB DOSTI WADALA',
          	'mobile' => '7900149466,9137692059',
			//'mobile' => '7972844511',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '616',
           'project' => '250',
           'toemail' => 'infojaiambe@gmail.com',
           'fromname' => 'New Bookings',
       );
	}elseif($_POST['formtype'] == 'modal'){
		$data = array(
           'name' => $_POST['modalname'],
           'email' => $_POST['modalemail'],
           'contact' => $_POST['modalcontact'],
           'path' => 'NB DOSTI WADALA',
          	'mobile' => '7900149466,9137692059',
			//'mobile' => '7972844511',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '616',
           'project' => '250',
           'toemail' => 'infojaiambe@gmail.com',
           'fromname' => 'New Bookings',
       );
	}
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