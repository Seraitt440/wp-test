<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mag_Lite
 */

?>
  <?php
  /**
   * Hook - mag_lite_action_after_content.
   *
   * @hooked mag_lite_content_end - 10
   */
  do_action( 'mag_lite_action_after_content' );
  ?>

  <?php
  /**
   * Hook - mag_lite_action_before_footer.
   *
   * @hooked mag_lite_add_footer_bottom_widget_area - 5
   * @hooked mag_lite_footer_start - 10
   */
  do_action( 'mag_lite_action_before_footer' );
  ?> 
  <?php
    /**
     * Hook - mag_lite_action_footer.
     *
     * @hooked mag_lite_footer_copyright - 10
     */
    do_action( 'mag_lite_action_footer' );
  ?>
  <?php
  /**
   * Hook - mag_lite_action_before_footer.
   *
   * @hooked mag_lite_add_footer_bottom_widget_area - 5
   * @hooked mag_lite_footer_start - 10
   */
  do_action( 'mag_lite_action_after_footer' );
  ?>  

 
  <div class="back-to-top">
    <a href="#masthead" title="<?php echo esc_attr__( 'Go To Top','mag-lite' );?>" class="fa-angle-up"></a>       
  </div>
  <?php
  /**
   * Hook - mag_lite_action_after.
   *
   * @hooked mag_lite_page_end - 10   * 
   */
  do_action( 'mag_lite_action_after' );
  ?>

<?php wp_footer(); ?>
</body>
</html>