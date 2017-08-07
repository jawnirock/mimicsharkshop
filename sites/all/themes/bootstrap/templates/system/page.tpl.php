<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<div class="island-wrapper">
  <section class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      SAFETY
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        island content
      </div>
    </aside>
  </section>
  <section class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      ECO
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        island content
      </div>
    </aside>
  </section>
  <section class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      HABITAT
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        island content
      </div>
    </aside>
  </section>
  <section class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      ROOTS
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        island content
      </div>
    </aside>
  </section>
  <section id="about" class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      ABOUT
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        <div class="island-dive-content-text">
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </div>
      </div>
    </aside>
  </section>
  
  <section id="luke" class="island island-center">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      <img src="/sites/all/themes/sharktheme/mimicLogoAnim1.gif">
    </div>
    <aside class="island-dive island-dive--visible">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        <span class="island-dive-nav island-dive-nav--up" data-divetarget="luke"></span>
        island content
      </div>
    </aside>
  </section>
  
  <section id="products" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      PRODUCTS
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div id="products-kids" class="island-dive-content">
          <span class="island-dive-nav island-dive-nav--up" data-divetarget="products"></span>
          <span class="island-dive-nav island-dive-nav--down" data-divetarget="products-women"></span>
          KIDS
      </div>
      <div id="products-women" class="island-dive-content">
          <span class="island-dive-nav island-dive-nav--up" data-divetarget="products-kids"></span>
          <span class="island-dive-nav island-dive-nav--down" data-divetarget="products-men"></span>
          WOMEN
      </div>
      <div id="products-men" class="island-dive-content">
          <span class="island-dive-nav island-dive-nav--up" data-divetarget="products-women"></span>
          MEN
      </div>
    </aside>
  </section>
  <section id="shop" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      SHOP
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div id="shop-kids" class="island-dive-content">
          <span class="island-dive-nav island-dive-nav--up" data-divetarget="shop"></span>
          <span class="island-dive-nav island-dive-nav--down" data-divetarget="shop-women"></span>
          <div class="island-dive-size">
            <h3 class="island-dive-size-title">KIDS</h3>
            <h3 class="island-dive-size-chart" style="display: none;">SIZE CHART</h3>
          </div>
          <div class="island-dive-shop">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg1.png">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg2.png">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg3.png">
          </div>
      </div>
      <div id="shop-women" class="island-dive-content">
          <span class="island-dive-nav island-dive-nav--up" data-divetarget="shop-kids"></span>
          <span class="island-dive-nav island-dive-nav--down" data-divetarget="shop-men"></span>
          <div class="island-dive-size">
            <h3 class="island-dive-size-title">WOMEN</h3>
            <h3 class="island-dive-size-chart" style="display: none;">SIZE CHART</h3>
          </div>
          <div class="island-dive-shop">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg1.png">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg2.png">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg3.png">
          </div>
      </div>
      <div id="shop-men" class="island-dive-content">
          <span class="island-dive-nav island-dive-nav--up" data-divetarget="shop-women"></span>
          <div class="island-dive-size">
            <h3 class="island-dive-size-title">MEN</h3>
            <h3 class="island-dive-size-chart" style="display: none;">SIZE CHART</h3>
          </div>
          <div class="island-dive-shop">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg1.png">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg2.png">
            <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/bg3.png">
          </div>
      </div>
    </aside>
  </section>
  <section id="buy" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      BUY
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        <?php print render($page['content']); ?>
      </div>
    </aside>
  </section>
  <section id="disclaimer" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title">
      DISCLAIMER
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        disclaimer guy
      </div>
    </aside>
  </section>
  <section id="contact" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
    </nav>
    <div class="island-title">
      CONTACT
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        dive transition
      </div>
      <div class="island-dive-content">
        island content
      </div>
    </aside>
  </section>

</div>

 
 
