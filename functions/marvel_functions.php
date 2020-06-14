<?php
	if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
		if (isset($_GET['character-id'])) {
		  $curl = curl_init();
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		  $character_id = $_GET['character-id'];

		  $ts = time();
		  $public_key = '68a39d879e5e19e0bd8b140b4b5a6a70';
		  $private_key = '39f471d883d743a7f87d74b01ccab5f2aeca7e38';
		  $hash = md5($ts . $private_key . $public_key);

		  $query = array(
		   'format' => 'comic',
		   'formatType' => 'comic',
		   'apikey' => $public_key,
		   'ts' => $ts,
		   'hash' => $hash,
		  );

		  curl_setopt($curl, CURLOPT_URL,
		   "https://gateway.marvel.com:443/v1/public/characters/" . $character_id . "/comics" . "?" . http_build_query($query)
		  );

		  $result = json_decode(curl_exec($curl), true);

		  curl_close($curl);

		  echo json_encode($result);

		} else {
			echo "Character Id not defined";
		}
	} else {
		echo "Error: wrong server.";
	}