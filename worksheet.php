// PHP's date function demonstrated

<?php
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow);
?>

// strtotime

<?php
echo(strtotime("now") . "<br />");
echo(strtotime("3 October 2005") . "<br />");
echo(strtotime("+5 hours") . "<br />");
echo(strtotime("+1 week") . "<br />");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br />");
echo(strtotime("next Monday") . "<br />");
echo(strtotime("last Sunday"));
?>

// Script to display today's posts only

$current_day = date('j');
<?php query_posts('day='.$current_day); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
         // WordPress loop      
    <?php endwhile; ?>
<?php endif; ?>

// Algorithm similar to what I could use. 

<?php query_posts("showposts=5") ?>
<?php while (have_posts()) : the_post(); ?>

<?php $mylimit=7 * 86400; //days * seconds per day
$post_age = date('U') - get_post_time('U');
if ($post_age < $mylimit) { ?>

// your post elements here

<a href="<?php the_permalink() ?>" rel="bookmark">

etc...

<?php } ?>
<?php endwhile; ?>

// Let's give it a try...

<?php $weekbegin=strtotime("-1 day");
$weekend=strtotime("+1 week");
$post_age = get_post_time();
if ($post_age >= $weekbegin && $post_age <= $weekend) { ?>

// posty posting

<?php } ?>