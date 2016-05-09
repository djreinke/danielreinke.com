<?php 
  require 'includes/globals.php';
  $page_title = "Daniel J. Reinke's Resume | Software Engineer, B.S. Computer Science"; 
  include 'includes/header.php'; 
  include 'includes/navigation.php'; 
?>
  <div class="container">
  <header class="page-heading" itemscope itemtype="http://schema.org/Person">
    <div class="row">
      <div class="eight columns">
        <h1 itemprop="name">Daniel J. Reinke</h1>
        <h2 itemprop="jobTitle">Software Engineer, B.S. Computer Science</h2>
      </div>
      <div class="four columns contact-top">
        <span>Personal E-mail: <a href="mailto:dreink95@gmail.com?Subject=Hello" target="_top" title="dreink95@gmail.com" itemprop="email">dreink95@gmail.com</a></span><br>
        <span>Personal Website: <a href="http://www.danielreinke.com" title="Daniel J. Reinke" itemprop="url">www.danielreinke.com</a></span>
        <p><a href="https://www.linkedin.com/in/danreinke" target="_blank">LinkedIn</a></p>
      </div>
    </div>
    <p><strong>Status:</strong> As of November 26th, 2015, Daniel is searching for internship or employment opportunities.</p>
    <hr>
  </header>
  <section id="technical-expertise" class="sec">
    <h4>Technical Expertise</h4>
    <div class="row">
      <div class="four columns"><strong>Programming languages: </strong></div>
      <div class="eight columns"><a class="intr" href="https://www.java.com/en/" target="_blank" title="Java">Java</a>, <a class="intr" href="https://en.wikipedia.org/wiki/C_(programming_language)" target="_blank" title="C">C</a>, <a class="intr" href="https://msdn.microsoft.com/en-us/library/kx37x362.aspx" target="_blank" title="Visual C#">C#</a>, <a class="intr" href="https://secure.php.net/" target="_blank" title="PHP">PHP</a>, <a class="intr" href="https://www.javascript.com/" target="_blank" title="JavaScript">JavaScript</a>, <a class="intr" href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5" target="_blank">HTML5</a>, <a class="intr" href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3" target="_blank">CSS3</a>, <a class="intr" href="http://www.json.org/" target="_blank">JSON</a> & <a class="intr" href="http://www.w3.org/XML/" target="_blank">XML</a></div>
    </div>
    <div class="row">
      <div class="four columns"><strong>Frameworks/Libraries: </strong></div>
      <div class="eight columns">
      <a href="https://nodejs.org/en/" class="intr" target="_blank" title="Node.js">Node.js</a>,
      <a href="https://jquery.com/" class="intr" target="_blank" title="jQuery">jQuery</a>, 
      <a href="http://gruntjs.com/" class="intr" target="_blank" title="Grunt">Grunt</a>, 
      <a href="http://asp.net" class="intr" target="_blank" title="ASP.NET">ASP.NET</a>, 
      <a href="https://www.codeigniter.com/" class="intr" target="_blank" title="CodeIgniter">CodeIgniter</a>,
      <a href="https://symfony.com/" class="intr" target="_blank" title="Symphony">Symphony</a>, 
      <a href="http://getbootstrap.com/" class="intr" target="_blank" title="Bootstrap">Bootstrap</a>,
      <a href="https://mochajs.org/" class="intr" target="_blank" title="Mocha">Mocha</a>, 
      <a href="http://eslint.org/" class="intr" target="_blank" title="ESLit">ESLint</a>,
      <a href="http://junit.org/junit4/" class="intr" target="_blank" title="jUnit">jUnit</a>,
      <a href="https://getcomposer.org/" class="intr" target="_blank" title="Composer">Composer</a>,
      <a href="https://www.vagrantup.com/" class="intr" target="_blank" title="Vagrant">Vagrant</a>,
      <a href="https://git-scm.com/" class="intr" target="_blank" title="Git">Git</a>,
      <a href="http://www.vim.org/" class="intr" target="_blank" title="Vim/vi">Vim/vi</a>
      </div>
    </div>
      
    <div class="row">
      <div class="four columns"><strong>Database Systems: </strong></div>
      <div class="eight columns">
      <a href="https://www.mysql.com/" class="intr" target="_blank" title="MySQL">MySQL</a>, 
      <a href="http://www.microsoft.com/en-us/server-cloud/products/sql-server/" class="intr" target="_blank" title="SQL Server">SQL Server</a></div>
    </div>
    <div class="row">
      <div class="four columns"><strong>Development IDE: </strong></div>
      <div class="eight columns">
      <a href="https://eclipse.org/" class="intr" target="_blank" title="Eclipse">Eclipse</a>, 
      <a href="http://www.jgrasp.org/" class="intr" target="_blank" title="JGRASP">JGRASP</a>, 
      <a href="https://www.visualstudio.com/en-us/visual-studio-homepage-vs.aspx" class="intr" target="_blank" title="Visual Studio 2015">Visual Studio</a>, 
      <a href="http://www.aptana.com/" class="intr" target="_blank" title="Aptana Studio">Aptana Studio</a>, 
      <a href="http://www.adobe.com/products/dreamweaver.html" class="intr" target="_blank" title="Adobe Dreamweaver">Dreamweaver</a></div>
    </div>
  </section>
  <section id="summary" class="sec">
    <h4>Summary</h4>
    <p>
    Software engineer with over three years of demonstrated industry experience in the full software development life cycle including requirements definition, prototyping, design, development, implementation, testing, and maintenance. Proven ability to excel at software development, software quality assurance, and software project management activities with a variety of systems, technologies, and constraints. Trained in <a class="intr" href="http://www.agilemanifesto.org/" title="Manifesto for Agile Software Development" target="_blank">Agile software development methodologies</a>.
    </p>
  </section>
  <section id="experience" class="sec">
    <h4>Experience</h4>
    <section id="exp-adp" class="exp">
    <div class="row">
      <div class="nine columns">
      <h5 class="exp-company"><a href="http://adp.com" target="_blank">Automatic Data Processing Inc.</a></h5><span class="exp-local">(Florham Park, New Jersey)</span>
      <span class="exp-position">Software Engineering Intern</span>
      </div>
      <div class="three columns">
      <strong>Summer 2015</strong>
      </div>
    </div>
    <div class="exp-details">
    <ul>
      <li>Designed and developed PDF check printing component in C# for RUN payroll application to replace existing browser plugin functionality used by 415,000+ clients.</li>
      <li>Extensive debugging, unit testing, and cross-browser testing of new and existing software and assistance to QA certification efforts.</li>
      <li>Participated in Agile scrum team organization with daily standups and bi-weekly sprints.</li>
      <li>Assisted development efforts of Principal Application Developer and reported to Director of Application Development.</li>
    </ul>
    </div>
    </section>
    <section id="exp-elegran" class="exp">
    <div class="row">
      <div class="nine columns">
      <h5 class="exp-company"><a href="http://elegran.com" target="_blank">Elegran Real Estate and Development</a></h5><span class="exp-local">(Lexington Ave, New York, NY)</span>
      <span class="exp-position">Junior Web Developer</span>
      </div>
      <div class="three columns">
      <strong>Summer 2013, 2014</strong>
      </div>
    </div>
    <div class="exp-details">
    <ul>
      <li>Led responsive development improvements to a suite of real estate property listing applications.</li>
      <li>Deployed and analyzed A/B testing scripts and reports to track client engagement and improve user experience.</li>
      <li>Developed custom real estate property websites with PHP to generate sales leads for the firm.</li>
    </ul>
    </div>
    </section>
    <section id="exp-olivet" class="exp">
    <div class="row">
      <div class="nine columns">
      <h5 class="exp-company"><a href="http://olivet.edu" target="_blank">Olivet Nazarene University</a></h5><span class="exp-local">(Bourbonnais, IL)</span>
      <span class="exp-position">Junior Web Developer</span>
      </div>
      <div class="three columns">
      <strong>2013 - 2016</strong>
      </div>
    </div>
    <div class="exp-details">
    <ul>
      <li>Redesigned and developed university online admissions application for new undergraduate and honors applicants with C# and ASP.NET.</li>
      <li>Worked with development team to create, improve, and maintain all websites and applications for the university and its departments. Extensive work with front-end technologies.</li>
      <li>Setup version control, coding standards, and implementation policies and practices for department.</li>
    </ul>
    </div>
    </section>
  </section>
  <section id="education" class="sec sec-last">
    <h4>Education</h4>
    <h5>Olivet Nazarene University</h5>
    <p>Bourbonnais, IL<br>
    <a href="http://olivet.edu" title="Olivet Nazarene University" target="_blank">www.olivet.edu</a><br>
    <em>Bachelor of Science</em>, Computer Science (Expected, 2017)<br>
    Deans List (3 Semseters)<br>
    Courses: Programming I &amp; II, Software Engineering, Calculus I, Linear Algebra, Systems Programming, SQL Database Administration, Network Administration, Systems Administration</p>
  </section>
</div><!-- /container --> 
<?php include 'includes/footer.php'; ?>
