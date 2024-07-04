<?php
	if($_POST['formtype'] == 'banner'){
		$data = array(
			'apiKey' => 'e9c33d8faae7e50260c045825ce52c86',
			'srdno' => $_POST['srdno'],
           'name' => $_POST['bannername'],
           'email' => $_POST['banneremail'],
           'contact' => $_POST['bannercontact'],
           'path' => 'NB SKG Chembur',
          	'mobile' => '9892803933,9137124089,9137692059',
			//'mobile' => '7972844511',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '656',
           'project' => '400',
           'toemail' => 'citygainsmumbai@gmail.com',
           'fromname' => 'New Bookings',
       );
        $data2 = array(
            'name' => $_POST['bannername'],
            'email' => $_POST['banneremail'],
            'mobile' => $_POST['bannercontact'],
            'source' => 'Website',
            'project' => 'SKG Chembur',
        );
	}elseif($_POST['formtype'] == 'sticky'){
		$data = array(
			'apiKey' => 'e9c33d8faae7e50260c045825ce52c86',
			'srdno' => $_POST['srdno'],
           'name' => $_POST['stickyname'],
           'email' => $_POST['stickyemail'],
           'contact' => $_POST['stickycontact'],
           'path' => 'NB SKG Chembur',
          	'mobile' => '9892803933,9137124089,9137692059',
			//'mobile' => '7972844511',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '656',
           'project' => '400',
           'toemail' => 'citygainsmumbai@gmail.com',
           'fromname' => 'New Bookings',
       );
       $data2 = array(
           'name' => $_POST['stickyname'],
           'email' => $_POST['stickyemail'],
           'mobile' => $_POST['stickycontact'],
           'source' => 'Website',
           'project' => 'SKG Chembur',
       );
	}elseif($_POST['formtype'] == 'modal'){
		$data = array(
			'apiKey' => 'e9c33d8faae7e50260c045825ce52c86',
			'srdno' => $_POST['srdno'],
           'name' => $_POST['modalname'],
           'email' => $_POST['modalemail'],
           'contact' => $_POST['modalcontact'],
           'path' => 'NB SKG Chembur',
          	'mobile' => '9892803933,9137124089,9137692059',
			//'mobile' => '7972844511',
           'countrycode' => $_POST['countrycode'],
           'campaign' => '656',
           'project' => '400',
           'toemail' => 'citygainsmumbai@gmail.com',
           'fromname' => 'New Bookings',
       );
       $data2 = array(
           'name' => $_POST['modalname'],
           'email' => $_POST['modalemail'],
           'mobile' => $_POST['modalcontact'],
           'source' => 'Website',
           'project' => 'SKG Chembur',
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

      $url2 = 'https://glitz.apps.enrichr.co/public/companies/d7d72ad5-7953-4e66-acd5-15d7d4f8ad68/leads-all';
      $ch2 = curl_init();
      curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch2, CURLOPT_URL, $url2);
      curl_setopt($ch2, CURLOPT_POSTFIELDS,$data2);
      $res2 = curl_exec($ch2);
    
	header("Location: thankyou.php");
	                  
	
?>