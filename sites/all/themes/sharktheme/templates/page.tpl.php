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


<!--<video style="" preload="auto" muted playsinline autoplay loop id="preloadVideo" width="320" height="180">-->
<!--    <source src="/sites/all/themes/sharktheme/images/LOAD.mp4"  type="video/mp4">-->
<!--</video>  -->

<div class="diveVideos">
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271566093.hd.mp4?s=f18a8089cb296015a1e5ddaac4725737c0193ef5&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271566246.hd.mp4?s=15c5fc97f470e535ed90b7261cc5f56563fd2318&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565654.hd.mp4?s=9ed59eafe859a8cf1886d23338619be8b51f7a7a&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565880.hd.mp4?s=649a576e7bb16829486eb67860107cfd95950cf3&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565408.hd.mp4?s=4ef48f8a316e6bbf850f93130356169ae8f4d5c7&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565507.hd.mp4?s=656d24837cf620bead006095ef7760065a116d62&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565199.hd.mp4?s=315b9a65e0844e2becfef4901546b146f90937b6&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565295.hd.mp4?s=cd793b841e22a5b667f28982d11e4786a74a84b8&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564986.hd.mp4?s=2da09257bf4e2c58cde152268c94fa0224cef03f&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271565110.hd.mp4?s=fd78acbbbcf232d963b1785a8649f7ad96653f91&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564227.hd.mp4?s=452a8185c97a4ae1002c615078f7cd32948b5b5f&profile_id=175"  type="video/mp4">
    </video>  

    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564439.hd.mp4?s=77244c2afd17a937120c3563acf0d9e7246c9102&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside id="videos-products" class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271566443.hd.mp4?s=7512d3aa9a954d9fc16a2a436aac0036bf2835f3&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271566667.hd.mp4?s=c128ef9f38819132f4b6805ca0e02478d2ba0249&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside id="videos-shop" class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271567779.hd.mp4?s=752569f597c03c4f3235f4fa37c7ced53028ff1d&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271568018.hd.mp4?s=a3dc5eb766f385e0cc71705182b69f2867d9bc56&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564559.hd.mp4?s=4b93e04c052e0319bbb3085ee9c1202177079e30&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564660.hd.mp4?s=c24251eae35f4aa8685e0b13bd37b3a9786e4cd6&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564747.hd.mp4?s=d1d78b20f090c2859690c43c2d2d84722adb2679&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271564859.hd.mp4?s=26ed8e5bbc71cf81de7ac78af20c3e43198651e6&profile_id=175"  type="video/mp4">
    </video>  
  </aside>
  <aside id="videos-contact" class="diveVideoWrapper">
    <video style="" preload="auto" muted playsinline class="diveVideo goinDown"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271566970.hd.mp4?s=e559c1b2099e9ffe1fe84bc3d18f686e68c50d7c&profile_id=175"  type="video/mp4">
    </video>  
    <video style="" preload="auto" muted playsinline class="diveVideo goinUp"  width="320" height="180">
        <source src="https://player.vimeo.com/external/271567193.hd.mp4?s=ea304ed016a538dd1a8ca123961bcf334a702c6b&profile_id=175"  type="video/mp4">
    </video>  
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
      <div class="island-dive-content">
        <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical noSwipe">
          <a href="#" class="underwater-slider-more">
            ▼
          </a>          
        </div>
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
      <div class="island-dive-content">
      <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical noSwipe">
        </div>

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
      <div class="island-dive-content">
        <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical noSwipe">
        <a href="/sites/all/themes/sharktheme/images/pdf/HABITAT.pdf" target="_blank" class="underwater-slider-more">
            ▼
          </a>          
        </div>
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
      <div class="island-dive-content">
        <div class="island-dive-content-smokey"></div>
        <div class="underwater-slider-vertical noSwipe">
        <a href="/sites/all/themes/sharktheme/images/pdf/ROOTS.pdf" target="_blank" class="underwater-slider-more">
            ▼
          </a>          
        </div>
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
      <div class="island-dive-content">
      <div class="island-dive-content-text-title">
      </div>
      <div class="island-dive-content-smokey"></div>
      <div class="underwater-slider-vertical noSwipe">
        <a href="/sites/all/themes/sharktheme/images/pdf/ABOUT.pdf" target="_blank" class="underwater-slider-more">
          ▼
        </a>
      </div>
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
    <div class="lukeBg"></div>
    <nav class="island-nav">
      <span class="island-nav--left"></span>
      <span class="island-nav--right"></span>
    </nav>
    
    <div class="island-title island-dive-nav--down">
      <img src="/sites/all/themes/sharktheme/images/mimicLogoAnim1.gif">
    </div>
    <div class="island-title--insta">
      <a target="_blank" href="https://www.instagram.com/mimicsharksuits/">
        <img src="/sites/all/themes/sharktheme/images/titles/instagram.gif">
      </a>
    </div>

    <aside class="island-dive island-dive--visible">
      <div class="island-dive-transition">
      </div>
      <div class="island-dive-content">
        <div class="island-dive-content-sitemap">
          <section class="sitemap-container">
            <img class="sitemap-title" src="/sites/all/themes/sharktheme/images/titles/islandmap.png">  
            <span class="sitemap-nav left" data-increment="-1"></span>
            <span class="sitemap-nav right" data-increment="1"></span>
            <div id="sitemap" class="sitemap">
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R1.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R1a.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R1b.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R1c.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R2.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R2a.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R2b.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R2c.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R3.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R3a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R4.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R4a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R5.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/R5a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L5.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L5a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L4.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L4a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L3.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L3a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L2.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L2a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L1.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/L1a.jpg">
                </figure>
              </div>
              <div class="sitemap-panel">
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/00.jpg">
                </figure>
                <figure class="sitemap-panel-item">
                  <img src="/sites/all/themes/sharktheme/images/bg/luke/00a.jpg">
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
          <div class="island-product-info">
            <h3 class="island-product-info-title">
              <img src="/sites/all/themes/sharktheme/images/titles/womenwhite.png">  
            </h3>
            <h3 class="island-product-info-text" style="display: none;">info</h3>
          </div>
          <video style="" preload="auto" muted autoplay loop playsinline class="productVideo"  width="320" height="180">
              <source src="https://player.vimeo.com/external/271567387.hd.mp4?s=eaefe0d0ba8a87a605e2e87f601b75716b9ffff7&profile_id=175"  type="video/mp4">
          </video>  

        </div>
        <div id="products-men"  class="island-dive-content-product">
          <div class="island-product-info">
            <h3 class="island-product-info-title">
              <img src="/sites/all/themes/sharktheme/images/titles/menwhite.png">  
            </h3>
            <h3 class="island-product-info-text" style="display: none;">info</h3>
          </div>

          <video style="" preload="auto" muted autoplay loop playsinline class="productVideo"  width="320" height="180">
              <source src="https://player.vimeo.com/external/271567602.hd.mp4?s=d7c2b9758d26f9356912267bf5eb690961951070&profile_id=175"  type="video/mp4">
          </video>
        </div>
        <div id="products-kids"  class="island-dive-content-product">
          <div class="island-product-info">
            <h3 class="island-product-info-title">
              <img src="/sites/all/themes/sharktheme/images/titles/kidswhite.png">  
            </h3>
            <h3 class="island-product-info-text" style="display: none;">info</h3>
          </div>

          <video style="" preload="auto" muted autoplay loop playsinline class="productVideo"  width="320" height="180">
              <source src="https://player.vimeo.com/external/276500492.hd.mp4?s=e8c4e3a6b4a17bfbba624e70f95c016bb12d0f8a&profile_id=175"  type="video/mp4">
          </video>
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
            <div class="island-dive-size">
              <h3 class="island-dive-size-title">
                <img src="/sites/all/themes/sharktheme/images/titles/women.png">  
              </h3>

              <div class="island-dive-size-chart noSwipe" style="display: none;" >
                <img src="/sites/all/themes/sharktheme/images/bg/shop/SIZECHART_W.png">
              </div>
            </div>
            <div class="island-dive-shop-thumb island-dive-shop-grower"></div>
            <div class="island-dive-shop-thumb island-dive-shop-shower"  data-thumb="1"></div>
            <div class="island-dive-shop">
              <div class="island-dive-shop-thumb static" data-thumb="1">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="2">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="3">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="4">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="5">
              </div> 
            </div>
        </div>
        <div id="shop-men" class="island-dive-content-shop">
            <div class="island-dive-size">
              <h3 class="island-dive-size-title">
                <img src="/sites/all/themes/sharktheme/images/titles/men.png">  
              </h3>

              <div class="island-dive-size-chart noSwipe" style="display: none;">
                <img src="/sites/all/themes/sharktheme/images/bg/shop/SIZECHART_M.png">
              </div>
            </div>
            <div class="island-dive-shop-thumb island-dive-shop-grower"></div>
            <div class="island-dive-shop-thumb island-dive-shop-shower"  data-thumb="1"></div>
            <div class="island-dive-shop">
              <div class="island-dive-shop-thumb static" data-thumb="1">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="2">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="3">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="4">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="5">
              </div> 
            </div>
        </div>
        <div id="shop-kids" class="island-dive-content-shop">
            <div class="island-dive-size">
              <h3 class="island-dive-size-title">
                <img src="/sites/all/themes/sharktheme/images/titles/kids.png">  
              </h3>

              <div class="island-dive-size-chart noSwipe" style="display: none;">
                <img src="/sites/all/themes/sharktheme/images/titles/COMINGSOON_AQUA.png">
              </div>
            </div>
            <div class="island-dive-shop-thumb island-dive-shop-grower"></div>
            <div class="island-dive-shop-thumb island-dive-shop-shower"  data-thumb="1"></div>
            <div class="island-dive-shop">
              <div class="island-dive-shop-thumb static" data-thumb="1">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="2">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="3">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="4">
              </div> 
              <div class="island-dive-shop-thumb static" data-thumb="5">
              </div> 
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

      <div class="island-dive-content">
        <div id="sideluke"></div>

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
      <div class="island-dive-content">
        <div class="island-dive-content-disclaimer">
          <a href="/sites/all/themes/sharktheme/images/pdf/DISCLAIMER.pdf" target="_blank" class="island-dive-content-disclaimer-more">
            <img src="/sites/all/themes/sharktheme/images/bg/disclaimer/pdf_icon2.png"></img>
          </a>  
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
      <div class="island-dive-content">
        <?php print render($page['footer']); ?>
        <span class="island-dive-nav island-dive-nav--up" ></span>
        <span class="island-dive-nav island-dive-nav--left" ></span>
        <span class="island-dive-nav island-dive-nav--right" ></span>
      </div>
    </aside>
  </section>

</div>

 
 
