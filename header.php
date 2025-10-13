<!DOCTYPE html>
<?php if (is_single()): ?>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/Article">
<?php else: ?>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/WebPage">
<?php endif; ?>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "<?php bloginfo("name"); ?>",
  "url": "<?php echo home_url(); ?>",
  "description": "<?php bloginfo("description"); ?>",
  "creator": {
    "@type": "Person",
    "name": "Mike Moisio",
    "url": "https://mikemoisio.ai"
  }
}
</script>    
</head>
<body <?php body_class(); ?>>

<nav>
    <?php wp_nav_menu([
        "theme_location" => "main-menu",
        "container" => false,
        "items_wrap" => '%3$s<hr/>',
        "fallback_cb" => false,
        "link_before" => "",
        "link_after" => " ",
    ]); ?>
</nav>


