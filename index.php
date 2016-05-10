<?php 
  require 'includes/globals.php'; 
  include 'includes/header.php'; 
  include 'includes/navigation.php'; 
?>
<div class="container">
<header class="page-heading" itemscope itemtype="http://schema.org/Person">
  <div class="row">
    <div class="">
      <img src="<?php print $base_url;?>images/daniel-reinke.jpg" alt="Daniel Reinke" id="my-photo">
      <h1 itemprop="name" class="center">Daniel J. Reinke</h1>
      <h2 itemprop="jobTitle" class="center">Software Engineer, B.S. Computer Science</h2>
      <p class="center"><a href="http://github.com/djreinke">GitHub</a>, <a href="https://www.linkedin.com/in/danreinke">LinkedIn</a>, <?php print $email; ?></p>
    </div>
  </div>
  <hr>
</header>
<section class="work">
  <strong>Recent Work</strong>
  <div class="row work-entry">
    <div class="six columns">
      <a href="http://yourblurr.com" target="_blank"><img src="<?php print $base_url;?>images/blurr.jpg" class="work-entry-image"></a>
    </div>
    <div class="six columns">
    <h4 class="work-entry-title">Blurr</h4>
    <p><a href="http://yourblurr.com" target="_blank">yourblurr.com</a></p>
    <strong>Technologies/Skills:</strong>
    <ul>
      <li>JavaScript/jQuery</li>
      <li>HTML5/CSS3</li>
      <li>Google Analytics/Conversion Tracking</li>
      <li>PHP</li>
      <li>Git</li>
      <li>Bootstrap</li>
      <li>Design</li>
      <li>WordPress</li>
      <li>Apache</li>
      <li>Photoshop</li>
    </ul>
    </div>
  </div>
    <div class="row work-entry">
    <div class="six columns">
    <h4 class="work-entry-title">RUN Powered by ADP®</h4>
    <p><a href="http://www.adp.com/solutions/small-business/products/run/why-run.aspx" target="_blank">http://www.adp.com/solutions/small-business/products/run/why-run.aspx</a></p>
    <strong>Technologies/Skills:</strong>
    <ul>
      <li>C#</li>
      <li>ASP.NET MVC</li>
      <li>HTML5/CSS3</li>
      <li>JavaScript/jQuery</li>
      <li>Prototyping</li>
      <li>REST API</li>
      <li>SQL Server</li>
      <li>Visual Studio</li>
      <li>Agile Scrum</li>
    </ul>
    </div>
    <div class="six columns">
      <a href="http://www.adp.com/solutions/small-business/products/run/why-run.aspx" target="_blank"><img src="<?php print $base_url;?>images/run-adp.jpg" class="work-entry-image"></a>
    </div>
  </div>
  <div class="row work-entry">
    <div class="six columns">
      <a href="http://marchmadness.olivet.edu" target="_blank"><img src="<?php print $base_url;?>images/marchmadness.jpg" class="work-entry-image"></a>
    </div>
    <div class="six columns">
    <h4 class="work-entry-title">March Madness Web Application</h4>
    <p><a href="http://marchmadness.olivet.edu" target="_blank">marchmadness.olivet.edu</a></p>
    <strong>Technologies/Skills:</strong>
    <ul>
      <li>PHP</li>
      <li>JavaScript/jQuery</li>
      <li>Web Design</li>
      <li>HTML5/CSS3</li>
      <li>Google Analytics/Conversion Tracking</li>
      <li>Git</li>
      <li>Photoshop</li>
    </ul>
    </div>
  </div>
  <div class="row work-entry">
    <div class="six columns">
    <h4 class="work-entry-title">Server Shell in C</h4>
    <p><a href="https://github.com/djreinke/c-server-shell" target="_blank">https://github.com/djreinke/c-server-shell</a></p>
    <p>A simple server written in C that allows for shell execution from multiple remote clients.</p>
    <strong>Technologies/Skills:</strong>
    <ul>
      <li>C</li>
      <li>UNIX/Linux</li>
      <li>Vim</li>
      <li>Systems Programming</li>
      <li>Sockets</li>
    </ul>
    </div>
    <div class="six columns">
      <a href="https://github.com/djreinke/c-server-shell" target="_blank"><img src="<?php print $base_url;?>images/server-shell-c.jpg" class="work-entry-image"></a>
    </div>
  </div>
  <div class="row work-entry">
    <div class="six columns">
      <a href="http://orosapparel.com" target="_blank"><img src="<?php print $base_url;?>images/oros.jpg" class="work-entry-image"></a>
    </div>
    <div class="six columns">
    <h4 class="work-entry-title">Oros Apparel Ecommerce</h4>
    <p><a href="http://orosapparel.com" target="_blank">orosapparel.com</a></p>
    <strong>Technologies/Skills:</strong>
    <ul>
      <li>Liquid/Ruby</li>
      <li>CSS/SCSS</li>
      <li>JavaScript/jQuery</li>
      <li>HTML5</li>
      <li>Git</li>
      <li>Web Design</li>
      <li>Google Analytics/Conversion Tracking</li>
      <li>Photoshop</li>
      <li>Shopify</li>
    </ul>
    </div>
  </div>
  <div class="row work-entry">
    <div class="six columns">
    <h4 class="work-entry-title">Protect Your Pet Website</h4>
    <p><a href="http://protectyourpet.info" target="_blank">protectyourpet.info</a></p>
    <strong>Technologies/Skills:</strong>
    <ul>
      <li>JavaScript/jQuery</li>
      <li>PHP</li>
      <li>HTML5/CSS3</li>
      <li>Web Design</li>
      <li>Git</li>
      <li>Photoshop</li>
      <li>Google Analytics/Conversion Tracking</li>
    </ul>
    </div>
    <div class="six columns">
      <a href="http://protectyourpet.info" target="_blank"><img src="<?php print $base_url;?>images/protect-your-pet.jpg" class="work-entry-image"></a>
    </div>
  </div>
</section>
<section class="pre-footer">
  <p class="center"><strong>Status:</strong> As of May 1, 2016, Daniel is searching for internship or employment opportunities.</p>
  <a class="button button-primary" href="mailto:<?php print $email; ?>">Email Me - <?php print $email; ?></a>

</section>
</div><!-- /container -->

<?php include 'includes/footer.php'; ?>
