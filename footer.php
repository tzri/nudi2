<hr/>

<footer>

<?php if (is_active_sidebar("footer-widget")): ?>
	<?php dynamic_sidebar("footer-widget"); ?>
<?php else: ?>
    <p>&copy; <?php echo date('Y');?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. Theme powered by <a href="https://mikemoisio.ai/nudi2/">Nudi2</a>.</p>
<?php endif; ?>

</footer>

<?php wp_footer(); ?>
</body>
</html>

