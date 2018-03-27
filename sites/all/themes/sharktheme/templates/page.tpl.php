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

<div class="mobileNotification landscape">
    <span>For the full experience<br>
    please switch your device to landscape
    </span>
</div>
<div class="mobileNotification fullscreen">
  <span>For the full experience
    <br><button>Go fullscreen</button>
  </span>
</div>

<div class="diveVideos">
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L5.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L5rev.mp4" type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L4.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L4rev.mp4" type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L3.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L3rev.mp4" type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L2.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L2rev.mp4" type="video/mp4">
    </video>  
  </aside>

  <aside class="diveVideoWrapper" id="lukevideo">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L1.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/L1rev.mp4" type="video/mp4">
    </video>  
  </aside>

  
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/00.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/00rev.mp4" type="video/mp4">
    </video>  
  </aside>
  
  <aside class="diveVideoWrapper">
  </aside>
  
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/Shop.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/Shoprev.mp4" type="video/mp4">
    </video>  
  </aside>
  
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/Buy.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/Buyrev.mp4" type="video/mp4">
    </video>  
  </aside>
  
  <aside class="diveVideoWrapper">
    <video style="" muted playsinline class="diveVideo goinDown" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/Disclaimer.mp4" type="video/mp4">
    </video>  
    <video style="" muted playsinline class="diveVideo goinUp" preload="metadata" width="320" height="180">
        <source src="/sites/all/themes/sharktheme/images/headers/Disclaimerrev.mp4" type="video/mp4">
    </video>  
  </aside>
  
  <aside class="diveVideoWrapper">
  </aside>
</div>


<div class="island-wrapper" data-state="cube" data-level="1">
  <section id="safety" class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/safety.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
        <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical"></div>
        <div class="island-dive-content-text">
          <div class="island-dive-content-text-blocks">
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
          </div>

            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--left" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
        </div>
      </div>
    </aside>
  </section>
  <section id="eco" class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/eco.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
      <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical"></div>

        <div class="island-dive-content-text">
          <div class="island-dive-content-text-blocks">
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
          </div>

            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--left" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
        </div>
      </div>
    </aside>
  </section>
  <section id="habitat" class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/habitat.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
        <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical"></div>
        <div class="island-dive-content-text">
          <div class="island-dive-content-text-blocks">
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
          </div>
            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--left" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
        </div>
      </div>
    </aside>
  </section>
  <section id="roots" class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/roots.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
        <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical"></div>
        <div class="island-dive-content-text">
          <div class="island-dive-content-text-blocks">
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
              <div class="island-dive-content-text-block"></div>
          </div>
            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--left" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
        </div>
      </div>
    </aside>
  </section>
  <section id="about" class="island island-left">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/about.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
      <div class="island-dive-content-text-title">
      </div>
      <div class="island-dive-content-smokey"></div>
      <div class="underwater-slider-vertical noSwipe"></div>
      <div class="island-dive-content-text">
      <div class="island-dive-content-text-blocks">
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
          <div class="island-dive-content-text-block"></div>
      </div>
        <span class="island-dive-nav island-dive-nav--up" ></span>
        <span class="island-dive-nav island-dive-nav--left" ></span>
        <span class="island-dive-nav island-dive-nav--right" ></span>
    </div>
      </div>
    </aside>
  </section>



  <section id="luke" class="island island-center">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/mimicLogoAnim1.gif">
    </div>
    <aside class="island-dive island-dive--visible">
      <div class="island-dive-transition">
      </div>
      <div class="island-dive-content island-dive-fixed">
        <div class="island-dive-content-sitemap">
          
          <section class="sitemap-container">
            <span class="sitemap-nav left" data-increment="-1"></span>
            <span class="sitemap-nav right" data-increment="1"></span>
            <div id="sitemap" class="sitemap">
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/R1.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/products/women.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/products/men.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/R2.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/shop/women.png">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/shop/men.png">
                </figure>

              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/R3.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/checkout/checkout.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/R4.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/disclaimer/disclaimer.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/R5.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/contact/contact.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/L5.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/texts/safety.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/L4.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/texts/eco.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/L3.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/texts/habitat.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/L2.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/texts/roots.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/L1.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/texts/about.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/islands/00.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/underluke.jpg">
                </figure>
              </div>

            </div>
          </section>  

          
          
          
          
          
          <span class="island-dive-nav island-dive-nav--up" ></span>
        </div>
      </div>
    </aside>
  </section>
  
  <section id="products" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/products.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
      </div>

      <div class="island-dive-content">
        <div id="products-women"  class="island-dive-content-product">
          WOMEN
            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
            <span class="island-dive-nav island-dive-nav--down" ></span>
        </div>
        <div id="products-men"  class="island-dive-content-product">
          MEN
            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
            <span class="island-dive-nav island-dive-nav--down" ></span>
        </div>
      </div>
    </aside>
  </section>
  
  <section id="shop" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/shop.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
      </div>
      
      <div class="island-dive-content">
        <div id="shop-women" class="island-dive-content-shop">

            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--left" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>
            <span class="island-dive-nav island-dive-nav--down" ></span>

            <div class="island-dive-size">
              <h3 class="island-dive-size-title">WOMEN</h3>
              <h3 class="island-dive-size-chart" style="display: none;">SIZE CHART</h3>
            </div>
            <div class="island-dive-shop">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/women.png" style="display: none;">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/women1.jpg">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/women2.jpg">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/women3.jpg">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/women4.jpg">
            </div>
        </div>
        <div id="shop-men" class="island-dive-content-shop">
            <span class="island-dive-nav island-dive-nav--up" ></span>
            <span class="island-dive-nav island-dive-nav--left" ></span>
            <span class="island-dive-nav island-dive-nav--right" ></span>

            <div class="island-dive-size">
              <h3 class="island-dive-size-title">MEN</h3>
              <h3 class="island-dive-size-chart" style="display: none;">SIZE CHART</h3>
            </div>
            <div class="island-dive-shop">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/men.png" style="display: none;">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/men1.jpg">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/men2.jpg">
              <img class="island-dive-shop-thumb" src="/sites/all/themes/sharktheme/images/bg/shop/men3.jpg">
            </div>
        </div>        
      </div>

    </aside>
  </section>

  <section id="buy" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/buy.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
    
      </div>

      <div class="island-dive-content island-dive-fixed">

        <?php print render($page['content']); ?>
        <span class="island-dive-nav island-dive-nav--up" ></span>
        <span class="island-dive-nav island-dive-nav--left" ></span>
        <span class="island-dive-nav island-dive-nav--right" ></span>

      </div>
    </aside>
  </section>
  <section id="disclaimer" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/disclaimer.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
        <div class="island-dive-content-disclaimer">
          <span class="island-dive-nav island-dive-nav--up" ></span>
          <span class="island-dive-nav island-dive-nav--left" ></span>
          <span class="island-dive-nav island-dive-nav--right" ></span>
        </div>
      </div>
    </aside>
  </section>
  <section id="contact" class="island island-right">
    <nav class="island-nav">
      <span class="island-nav--left"></span>
    </nav>
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/titles/contact.gif">
    </div>
    <aside class="island-dive">
      <div class="island-dive-transition">
        
      </div>
      <div class="island-dive-content island-dive-fixed">
        <?php print render($page['footer']); ?>
        <span class="island-dive-nav island-dive-nav--up" ></span>
        <span class="island-dive-nav island-dive-nav--left" ></span>
        <span class="island-dive-nav island-dive-nav--right" ></span>
      </div>
    </aside>
  </section>

</div>

 
 
