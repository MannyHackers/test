<?php if( have_rows('player') ): ?>
<div id="player2">
<?php $activar = get_option('activar-fake'); if ($activar == "false") { ?>
<div id="tab-ad"  >
<div class="movieplay">
<?php
$values = info_movie_get_meta( 'serie' );
$values = str_replace(' ', '-', $values);
										
												 
$seson = info_movie_get_meta( 'temporada' );
$epi = info_movie_get_meta( 'episodio' );
$values = str_replace( ':','',  $values);
echo '<iframe src="https://gomostream.com/show/'.$values.'/';
echo sprintf('%02d',$seson);
echo '-';
echo sprintf('%02d',$epi);
echo '" height="100%" allowfullscreen="true" scrolling="no" frameborder="0"></iframe>';
?>
//My API Ez99ULqORLkSi7LH
//His API w9RFKGBEzvEtmpv4
<span class="controles">
<div class="player_nav">
<ul class="idTabs">
<i class="fa fa-play" aria-hidden="true"></i>
<i class="fa fa-volume-up" aria-hidden="true"></i>
<i><?php _e('0:00', 'psythemes'); ?><span><?php _e('/ 45:00', 'psythemes'); ?></span> </i>
<i class="fa fa-arrows-alt" aria-hidden="true"></i>
</span>
</section>
</a>
</div>
</div>
</div>
<?php } ?>
<?php if(!is_singular('episodes')) {?>
<?php include('trailer-player.php'); ?>
<?php }?>
<?php $numerado = 1; { while( have_rows('player') ): the_row(); ?>
<div id="tab<?php echo $numerado; ?>"  >
<div class="movieplay">

<?php if (get_sub_field('type_player') == "p_iframe") {?>
<?php if($dato = get_sub_field('embed_player')) {  ?>
<iframe src="<?php echo $dato; ?>" frameborder="0" allowfullscreen></iframe>
<?php }?>

<?php } elseif (get_sub_field('type_player') == "p_mp4") {?>
<?php if($dato = get_sub_field('embed_player')) {  ?>
<?php echo do_shortcode('[video src="' . $dato .'" autoplay="false"]'); ?>
<?php }?>


<?php } else {?>
<?php if($dato = get_sub_field('embed_player')) {  ?>
<?php echo do_shortcode($dato); ?>
<?php }?>
<?php }?>

</div>
<?php $numerado++; ?>   
</div>
<?php endwhile; } ?>
</div>
<?php get_template_part('includes/single/parts/controls'); ?>
<div class="player_nav">
<ul class="idTabs">
<?php if(!is_singular('episodes')) {?>
<?php $activar = get_option('psy-trailer-player'); if ($activar == "enable") { ?>
<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong><?php $t_srvn = get_option('psy-trailer-player-srvrn'); if(!empty($t_srvn)) {echo $t_srvn; } else { echo 'HD Server' ; }?></strong>
</div>
<div class="les-content"><a href="#tab-trailer"><?php $t_srvq = get_option('psy-trailer-player-srvrq'); if(!empty($t_srvq)) {echo $t_srvq; } else { echo 'HD 1080P' ; }?></a></div>
</li>
<?php }?>
<?php }?>
<?php $activar = get_option('activar-fake'); if ($activar == "false") { ?>
<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong><?php if ($note = get_option('server_adplayer') ) { echo $note; } else { echo 'HD Server' ;} ?></strong>
</div>
<div class="les-content"><a href="#tab-ad"><?php if ($note = get_option('quality_adplayer') ) { echo $note; } else { echo 'HD 1080p' ;} ?></a></div>
</li>
<?php }?>
<?php $numerado = 1; { while( have_rows('player') ): the_row(); ?>
<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong><?php $server = get_sub_field('name_player'); if(!empty($server)){ $name = $server; } else { $name = $numerado; } echo __('Server').' '.$name;?></strong></div>
<div class="les-content"><a href="#tab<?php echo $numerado; ?>"><?php  the_sub_field('quality_player'); ?></a></div>
</li>
<?php $numerado++; ?>   
<?php endwhile; } ?>
</ul>
</div>

<?php else : ?>
<?php $activar = get_option('activar-fake'); $activar2 = get_option('psy-trailer-player'); if ($activar == "true" or $activar2 == "enable") { ?>

<div id="player2">

<div id="tab-ad"  >
<div class="movieplay">
<?php
$numero = get_option('enlaces-fake');
$random = rand(1,$numero);
$url = array();
$url[1] = get_option('fake-link-1');
$url[2] = get_option('fake-link-2');
$url[3] = get_option('fake-link-3');
$url[4] = get_option('fake-link-4');
$url[5] = get_option('fake-link-5');
$url[6] = get_option('fake-link-6');
$url[7] = get_option('fake-link-7');
$url[8] = get_option('fake-link-8');
$url[9] = get_option('fake-link-9');
$url[10] = get_option('fake-link-10');								  
?>



<div id="pbar_outerdiv" class="fake_player">
<?php if($values = get_post_custom_values("fondo_player")) { ?>

<?php
$values = info_movie_get_meta( 'ids' );

										
						$values = info_movie_get_meta( 'serie' );
$values = str_replace(' ', '-', $values);
										
												 
$seson = info_movie_get_meta( 'temporada' );
$epi = info_movie_get_meta( 'episodio' );
$values = str_replace( ':','',  $values);
echo '<iframe src="https://gomostream.com/show/'.$values.'/';
echo sprintf('%02d',$seson);
echo '-';
echo sprintf('%02d',$epi);
echo '" height="100%" allowfullscreen="true" scrolling="no" frameborder="0"></iframe>';
?>
				 

<?php } else { ?>
																																			 
<?php } ?>	
											   

  
</div>
</div>
</div>
<?php if(!is_singular('episodes')) {?>
<?php include('trailer-player.php'); ?>
<?php }?>

</div>
<?php get_template_part('includes/single/parts/controls'); ?>
<?php } ?>
<?php $activar = get_option('activar-fake'); $activar2 = get_option('psy-trailer-player'); if ($activar == "true" or $activar2 == "enable") { ?>
<div class="player_nav">
<ul class="idTabs">

<?php $activar = get_option('activar-fake'); if ($activar == "true") { ?>

<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong><?php if ($note = get_option('server_adplayer') ) { echo $note; } else { echo 'HD Server' ;} ?></strong>

</div>
<div class="les-content"><a href="#tab-ad"><?php if ($note = get_option('quality_adplayer') ) { echo $note; } else { echo 'HD 1080p' ;} ?></a></div>
</li>
<?php }?>
<?php if(!is_singular('episodes')) {?>
<?php $activar = get_option('psy-trailer-player'); if ($activar == "enable") { ?>
<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong><?php $t_srvn = get_option('psy-trailer-player-srvrn'); if(!empty($t_srvn)) {echo $t_srvn; } else { echo 'HD Server' ; }?></strong>
</div>
<div class="les-content"><a href="#tab-trailer"><?php $t_srvq = get_option('psy-trailer-player-srvrq'); if(!empty($t_srvq)) {echo $t_srvq; } else { echo 'HD 1080P' ; }?></a></div>
</li>
<?php }?>
<?php }?>
</ul>
</div>
<?php }?>
	 
<?php endif; ?>
