<?php 

ini_set('max_execution_time', 9000);
ini_set('memory_limit','960M');
 include("wp-config.php");   
include("wp-admin/includes/taxonomy.php");


$hours = $hour+5;
 $blogtime = current_time( 'mysql' ); 
list( $today_year, $today_month, $today_day, $hours, $minute, $second ) = preg_split( '([^0-9])', $blogtime );

echo $blogtime;



function Generate_Featured_Images( $image_url, $post_id  ){
    $y = rand(1001, 9999999);
    $t = "$y.jpg";
	echo "img-[$t]-img";
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($t);
    if(wp_mkdir_p($upload_dir['path']))     $file = $upload_dir['path'] . '/' . $filename;
    else                                    $file = $upload_dir['basedir'] . '/' . $filename;
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
    $res2= set_post_thumbnail( $post_id, $attach_id );
	echo "-imgid-[$attach_id]-imgid-";
}



function curl($url, $post=false)
{
    $user_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; tr; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, $post ? true : false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post ? $post : false);
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    $icerik = curl_exec($ch);
    curl_close($ch);
    return $icerik;
}

 function parcala_ve_al($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
} 





for($sayi = 0; $sayi < 8; $sayi++) {
    
    
$titlecek1212xrrr = curl("SITENAME");
    
    
    

    

    
    
    


$namex1rrr = parcala_ve_al('<h2 class="entry-title"><a href="', '" rel="bookmark">', $titlecek1212xrrr);

    

    
    
$titlecek1212xXrrr = curl("$namex1rrr[$sayi]");


$titlerrr = parcala_ve_al('<title>', '</title>', $titlecek1212xXrrr);
$iframerrr = parcala_ve_al('<p>', '</p>', $titlecek1212xXrrr);
$descriptionrrr = parcala_ve_al('<meta name="description" content="', '" />', $titlecek1212xXrrr);
$strong_descriptionrrr = parcala_ve_al('<p>', '</p>', $titlecek1212xXrrr);
$categoryrrr = parcala_ve_al('el="category tag">', '</a>', $titlecek1212xXrrr);
$tagrrr = parcala_ve_al('<meta property="article:tag" content="', '" />', $titlecek1212xXrrr);
$jpgrrr = parcala_ve_al('<meta property="og:image" content="', '" />', $titlecek1212xXrrr);

    $leyle = "$titlerrr[0]";

     $dosya = fopen('postlar.txt', 'r');
$icerik = fread($dosya, filesize('postlar.txt'));
echo $icerik;
fclose($dosya);   
    
    
        $varvar = "yok";
$degisken1 = "$icerik"; if(strstr($degisken1, "$leyle")) { $varvar = "varvar"; }
    
    if ($varvar == "yok") {
        
        
$dosya = fopen('postlar.txt', 'a');
fwrite($dosya, "<t1> $leyle <t1>");
fclose($dosya);
    
    

    

echo "<br>$titlerrr[0]<br>";
echo "$iframerrr[0]<br>";
echo "$descriptionrrr[0]<br>";
echo "$categoryrrr[0]<br>";
echo "$tagrrr[0]<br>";
echo "$jpgrrr[0]<br>";
echo "$strong_descriptionrrr[1]<br>";

 
$samsap = parcala_ve_al('- ', '8)', $titlerrr[0]);

$samsap1 = parcala_ve_al('', ' -', $titlerrr[0]);    
    
$textxdxd = "$samsap[0]8) #$samsap1[0]";
    
$text2rrr = str_replace('', ' - ', $textxdxd);
    
   
$yyy2rrr = str_replace('2018', '18', $text2rrr);

echo $yyy2rrr;


$tagmyrrr = str_replace(" ", "-", $tagrrr[0]);
$trytode1rrr = '<a href="http://www.pornopalast.net/pornstar/';
    $trytode2rrr = "$tagmyrrr";
    $trytode3rrr = '/" aria-label="View “';
    $trytode4rrr = "$tagrrr[0] Porn";
    $trytode5rrr = '” archive">';
    $trytode6rrr = "$tagrrr[0]";
    $trytode7rrr = '</a>';



$desctext2rrr = str_replace("$desctextrrr", "$trytode1rrr$trytode2rrr$trytode3rrr$trytode4rrr$trytode5rrr$trytode6rrr$trytode7rrr", $desctext);

$vvzrrr = "$trytode1rrr$trytode2rrr$trytode3rrr$trytode4rrr$trytode5rrr$trytode6rrr$trytode7rrr";
echo $vvz;





wp_create_category("$categoryrrr[0]");
$cat_idrrr = get_cat_ID("$categoryrrr[0]");



$my_post1rrr = array(
    'post_title'    => $yyy2rrr,
    'post_content'  =>   "$iframerrr[0]<p><br>$strong_descriptionrrr[1]</p>",
    'to_ping'        => 'http://rpc.pingomatic.com/',
    //'post_type'      => 'page',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_category' => array($cat_idrrr),
    'post_date'  => $blogtime,
    'edit_date' => 'true'
    
   
   
    
);
 $my_postrrr['post_category'] = array($cat_idrrr);
// Insert the post into the database.

remove_filter('content_save_pre', 'wp_filter_post_kses');
remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
$post_id = wp_insert_post($my_post1rrr);
    
 $echo = $post_id;
    echo $echo;


Generate_Featured_Image( "$jpgrrr[0]",   $post_id );
$post_thumbnail_idrrr = get_post_thumbnail_id( $post_id );


add_post_meta( $post_id, $key = '_su_title', $value = "$yyy2rrr" );
add_post_meta( $post_id, $key = '_su_description', $value = "Watch Free $descriptionrrr[0]" );
add_post_meta( $post_id, $key = '_su_keywords', $value = "$tagrrr[0],$categoryrrr[0]" );
add_post_meta( $post_thumbnail_id, $key = '_wp_attachment_image_alt', $value = "$yyy2rrr" );
wp_set_post_tags( $post_id, "$tagrrr[0]", true );
    
    add_filter('content_save_pre', 'wp_filter_post_kses');
add_filter('content_filtered_save_pre', 'wp_filter_post_kses');

echo $post_thumbnail_idrrr;

add_post_meta( $post_thumbnail_idrrr, $key = 'post_title', $value = "$yyy2rrr" );


  // Update post 37
  $my_post = array(
      'ID'           => $post_thumbnail_idrrr,  
      'post_excerpt'    => $yyy2rrr,
      'post_title'    => "$yyy2rrr Free",
      'post_content'  => "$descriptionrrr[0]",
  );

// Update the post into the database
  wp_update_post( $my_postrrr );











    






    
    /////////////////BURADAN SONRASI 



$yyystst = str_replace(' ', '+', $tagrrr[0]);

$titlecek1212xqwX = curl("https://www.brazzers.com/search/all/?q=$yyystst");

$yoyobr = parcala_ve_al('<a href="/profile/', '"', $titlecek1212xqwX);

echo "bb$tagrrr[0]bb";

//DESCRIPTION

$pagedesclink = curl("https://www.brazzers.com/profile/$yoyobr[0]/");

$yyy33 = str_replace('                                            ', 'buradan', $pagedesclink);
$yyy44 = str_replace('                                    ', 'buraya', $yyy33);

$pagedesc = parcala_ve_al("buradan", '</p>', $yyy44);
 echo $pagedesc[0];

//



//NAME

$yyyxc = str_replace('                        ', 'buradan1', $pagedesclink);
$yyyct = str_replace('                    </h1>', 'buraya1', $yyyxc);

$pagename = parcala_ve_al("buradan1", 'buraya1', $yyyct);
echo $pagename[0];


//

$yyyxct = str_replace('                    <img src="', 'buradan2', $pagedesclink);
$yyyctt = str_replace('" alt="', 'buraya2', $yyyxct);

$pagejpg = parcala_ve_al("buradan2", 'buraya2', $yyyctt);
$jpgg = "http:$pagejpg[0]";
echo $jpgg;

echo "BYCAN QNQ $pagedesclink";
//check 

$xcxcv = str_replace(' ', '-', $pagename[0]);

$titlecek1212xqwXy = curl("localhost/wordpress/pornstar/$xcxcv/");

$sayfayap = "yapma";

    
    $degisken = "$titlecek1212xqwXy"; if(strstr($degisken, "Sorry, but the page you are looking for")) { 
        $sayfayap = "yap";
        
        
         }
    

    
    

        
        





echo "QQ$tagrrr[0]$pagename[0]QQ";




//if (($sayfayap == "yap") && ($pagename[0] == $tagrrr[0] ) ) {
    
if (0 == 0)  {



//IMG ID




$my_post1 = array(
    'post_title'    => $pagename[0],
    'post_content'  => "<p>$pagedesc[0] , $post_thumbnail_id</p>",
    'to_ping'        => 'http://rpc.pingomatic.com/',
    'post_type'      => 'page',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_category' => array($cat_id),
    'post_date'  => $blogtime,
    'edit_date' => 'true'
    
   
   
    
);
 $my_post['post_category'] = array($cat_id);
// Insert the post into the database.

remove_filter('content_save_pre', 'wp_filter_post_kses');
remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
$post_id = wp_insert_post($my_post1);
    


Generate_Featured_Image( "$jpgg",   $post_id );
$post_thumbnail_id = get_post_thumbnail_id( $post_id );


add_post_meta( $post_id, $key = '_su_title', $value = "$pagename[0] Free Porn Videos" );
add_post_meta( $post_id, $key = '_su_description', $value = "About Pornstar $pagename[0] , $pagedesc[0]" );
add_post_meta( $post_id, $key = '_su_keywords', $value = "$pagename[0]" );
add_post_meta( $post_thumbnail_id, $key = '_wp_attachment_image_alt', $value = "$pagename[0]" );
wp_set_post_tags( $post_id, "$tag[0]", true );
    
    add_filter('content_save_pre', 'wp_filter_post_kses');
add_filter('content_filtered_save_pre', 'wp_filter_post_kses');

echo $post_thumbnail_id;

add_post_meta( $post_thumbnail_id, $key = 'post_title', $value = "$pagename[0]" );


  // Update post 37
  $my_post = array(
      'ID'           => $post_thumbnail_id,  
      'post_excerpt'    => "About $pagename[0] Page",
      'post_title'    => "$pagename[0]",
      'post_content'  => "$pagedesc[0]",
  );

// Update the post into the database
  wp_update_post( $my_post );

////////////////////////

$a3 = "<h1><strong>$pagename[0]</h1></strong>";
$a6 = '[vc_row][vc_column width="1/3"][vc_single_image image="';
                                
$b6 = "$post_thumbnail_id";
                               
$c7 = '"][/vc_column][vc_column width="2/3"][td_block_text_with_title custom_title="';
                                                                    
$d6 = $pagename[0];
                                                                    
$f6 = '"block_template_id="td_block_template_1" border_top="no_border_top" header_color="#0a0a0a" header_text_color="#ffffff"]<p>';
    
$g6 = $pagedesc[0];
    
$g7 = '</p>[/td_block_text_with_title][/vc_column][/vc_row][vc_row][vc_column][td_block_big_grid_4 category_id="" tag_slug="';
                                                                            
$g8 = $pagename[0];
                                                                           
$g9 = '"][td_block_3 limit="9" tag_slug="';
                                                                             
$f9 = $pagename[0];
                                                                            
$f8 = '"][td_block_8 custom_title="Upcoming" category_id="3" limit="9"][/vc_column][/vc_row]';

echo "$a3$a6$b6$c7$d6$f6$g6$g7$g8$g9$f9$f8";
  $my_post1 = array(
      'ID'           => $post_id,  
      'post_content'  => "$a6$b6$c7$d6$f6$a3$g6$g7$g8$g9$f9$f8",
  );

// Update the post into the database
  wp_update_post( $my_post1 );

    
    






} else {
    $zatenvar = "pagevar";
}






  $my_post1rrr = array(
      'ID'           => $echo,  
      'post_content'  => "<center>[xyz-ips snippet=" . 'fafa' . "]</center></br>" . "$iframerrr[0]<p><br>$strong_descriptionrrr[1]AAA</p>",
  );

// Update the post into the database
    remove_filter('content_save_pre', 'wp_filter_post_kses');
remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
  wp_update_post( $my_post1rrr );




    
    

//////////////////////////////////////////////

/**



$my_post1 = array(
    'post_title'    => $pagename[0],
    'post_content'  => "<p>$pagedesc[0]</p>",
    'to_ping'        => 'http://rpc.pingomatic.com/',
    //'post_type'      => 'page',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_category' => array($cat_id),
    'post_date'  => $blogtime,
    'edit_date' => 'true'
    
   
   
    
);
 $my_post['post_category'] = array($cat_id);
// Insert the post into the database.

remove_filter('content_save_pre', 'wp_filter_post_kses');
remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
$post_id = wp_insert_post($my_post1);
    


Generate_Featured_Image( "$jpg[0]",   $post_id );
$post_thumbnail_id = get_post_thumbnail_id( $post_id );


add_post_meta( $post_id, $key = '_su_title', $value = "$yyy2" );
add_post_meta( $post_id, $key = '_su_description', $value = "Watch Free $description[0]" );
add_post_meta( $post_id, $key = '_su_keywords', $value = "$tag[0],$category[0]" );
add_post_meta( $post_thumbnail_id, $key = '_wp_attachment_image_alt', $value = "$yyy2" );
wp_set_post_tags( $post_id, "$tag[0],$category[0]", true );
    
    add_filter('content_save_pre', 'wp_filter_post_kses');
add_filter('content_filtered_save_pre', 'wp_filter_post_kses');

echo $post_thumbnail_id;

add_post_meta( $post_thumbnail_id, $key = 'post_title', $value = "$yyy2" );


  // Update post 37
  $my_post = array(
      'ID'           => $post_thumbnail_id,  
      'post_excerpt'    => $yyy2,
      'post_title'    => "$yyy2 Free",
      'post_content'  => "$description[0]",
  );

// Update the post into the database
  wp_update_post( $my_post );

    **/









/**




<p>
                                            Danielle is a blue eyed busty beauty with a serious cock fixation and an insatiable sexual appetite. One of her favorite daily routines is to rub one out before her shower every morning, leaving herself refreshed for the day ahead. But one orgasm isn't enough for a serious nympho like Danielle, especially when there's no cocks involved! That's why she took her big juicy ass, nice natural titties, and pretty pink nipples, and headed out to porn valley. Now she gets to start every day with an orgasm, and end every day with a facial; every dirty girl's dream! So make sure to check out Danielle's Doctor Adventures scene to watch her show off her dick sucking skills and impressive natural titties!                                    </p>
                                            
                                            
wp_create_category('DENEMECAT');

$cat_id = get_cat_ID('DENEMECAT');

echo $cat_id;

$xx = get_the_title( 1433 );

// Yazı nesnesi oluştur
  $my_post = array();
  $my_post['post_title'] = "$xx";
  $my_post['post_content'] = 'Bu bir yazı örneğidir.';
  $my_post['post_status'] = 'publish';
  $my_post['post_author'] = 1;
  $my_post['post_category'] = array($cat_id);

// Yazıyı veritabanına ekle
  $id = wp_insert_post( $my_post );

echo "<br>$id";





// Update post 37
  $my_post = array(
      'ID'           => 1437,
      'post_title'   => 'This is the post title.',
      'post_content' => 'This is the updated content.',
  );

// Update the post into the database
  wp_update_post( $my_post );
  
  
 //////////////////////////////////////// 
  
  // Update post 37
  $my_post = array(
      'ID'           => 1471,
      'post_category' => array(3),
  );

// Update the post into the database
  wp_update_post( $my_post );
  
  ////////////////////////////////////

**/
        
        } else {
    echo "comeback";
}
    
    
}

?>