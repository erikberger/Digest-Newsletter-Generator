<?php

include_once("config/keys.php");

$urls = implode(",", $_POST['item']); 
$header = $_POST['header'];

?>

<table class="body" cellpadding="0" cellspacing="0" style="width: 100%; background: #607D8B;" bgcolor="#607D8B" >

  <tr>
   <td class="headerholder" style="
    padding-top: 25px;
    padding-bottom: 10px;
">
     <center>
      <table style="
    width: 100%;
    max-width: 550px;
">
        <tbody><tr>
          <td>

      <h1 style="font-family: Arial; font-weight: 200; font-size: 32px; color: #BBDEFB; border-radius: 4px; margin-bottom: 10px; padding: 10px; border: 2px solid #bbdefb; text-align: center">Passyunk Post</h1>
          </td>
        </tr>
      </tbody></table>
      </center>
    </td>
  </tr>


  <tr>
    <td class="bodyholder" style="margin: 0 auto;">

      <center>

<?php

$apiCall = "http://api.embed.ly/1/oembed?key={$embedlyKey}&urls={$urls}&image_method=crop&image_width=550&image_height=235&chars=136";

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$apiCall);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);


$items = (json_decode($result, true));

foreach($items as $item){


$title = $item['title'];
$image = $item['thumbnail_url'];
$desc  = $item['description'];
$source = $item['provider_name'];
$url = $item['url'];


echo "
<center>
    <table class='story' cellpadding='0' cellspacing='0' align='center' style='max-width: 550px; margin-bottom: 30px; border-radius: 4px; background: #ffffff;' bgcolor='#ffffff'>
                    <tr>
                        <td>
                            <img src='{$image}' style='display: block; max-width: 100%; border-top-left-radius: 4px; border-top-right-radius: 4px;'><span class='pub' style='display: inline-block; color: #fff; font-family: Arial; text-transform: uppercase; font-size: 12px; font-weight: bold; background: #607D8B; margin: 20px 20px 10px; padding: 2px 5px;'>{$source}</span>

                             <h2 style='font-family: Arial; font-size: 26px; color: #212121; line-height: 30px; max-width: 510px; margin: 0; padding: 0 20px;'>{$title}</h2>

                            <p class='copy' style='font-family: Arial; font-size: 16px; color: #212121; line-height: 22px; margin-top: 10px; max-width: 510px; padding: 0 20px;'>{$desc}</p>
                            <div class='cta' style='text-align: center; padding-top: 10px; padding-bottom: 20px;' align='center'> <a href='{$url}' style='border-radius: 4px; color: #ffffff; display: inline-block; font-family: sans-serif; font-size: 13px; font-weight: bold; line-height: 40px; text-align: center; text-decoration: none; width: 240px; -webkit-text-size-adjust: none; mso-hide: all; background-color: #607D8B; border: 2px solid #BBDEFB;'>READ THE ARTICLE</a>

                            </div>
                        </td>
                    </tr>
                </table>
			</center>
";
}

?>
 </td>
  </tr>
  <tr>
    <td>
	<center>
      <table class="footer" align="center" cellpadding="0" cellspacing="0" style="font-family: arial; width: 100%; max-width: 550px; height: 60px;">
        <tr>
          <td align="center" style="width: 33%; margin: 0; padding: 0;"><a href="#">FOOTER</a></td>
          <td align="center" style="width: 33%; margin: 0; padding: 0;"><a href="#">STUFF</a></td>
          <td align="center" style="width: 33%; margin: 0; padding: 0;"><a href="#">HERE</a></td>
        </tr>
		<tr>
			<td colspan="3" align="center">
			<small>Copyright 2015 &mdash; All Rights Reserved</small>
			</td>
		</tr>
      </table>
	  </center>
    </td>
  </tr>
</table>