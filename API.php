<?php
	if($_POST['Search']){
		$api_url="https://fa.wikibooks.org/w/index.php?go=Go&search=books&title=%D9%88%DB%8C%DA%98%D9%87:%D8%AC%D8%B3%D8%AA%D8%AC%D9%88&ns0=1&ns102=1&ns110=1".ucwords($_POST['Search'])."redirects=true";
				$api_url=str_replace('', '20', $api_url);
					if($data =json_decode(file_get_contents($api_url))){
						foreach ($data-> query->pages as $key => $value) {
							$pageId =$key;
								break;
						}
						$Content=$data->query->pages-$pageId->extract;
						

						echo $Content;
											}
	}
	else {
		echo"No Resuilt found!";
	}





?>