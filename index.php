<?php

$lastName = 'Zabala';
$name = "Miguel $lastName";
$work = 'Developer';

include('jobs.php');

include('proyects.php')

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume - Miguel Zabala</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=Miguel+Zabala&size=255" alt="">
      </div>
      <div class="col">
        <h1><?php echo $name; ?></h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba3aea8bfa4b98ba6aaa2a7e5a8a4a6">[email&#160;protected]</a></li>
          <li>Phone: 315 7707744</li>
          <li>LinkedIn: <a href="https://www.linkedin.com/in/miguelzabalaf/">https://www.linkedin.com/in/miguelzabalaf/</a></li>
          <li>Twitter: <a href="https://twitter.com/miguelzabalaf">@miguelzabalaf</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>

          <!-- Para no tener que copiar repetitivamente cada trabajo o tema dominado, haré uso de do-while -->
            <?php 

            $idx = 0;

            do {

              echo '<li class="work-position">';
              echo '<h5> ' . $jobs[$idx]['title'] . '</h5>';
              echo '<p>' . $jobs[$idx]['description'] . '</p>';
              echo '<strong>Achievements:</strong>';
              echo '<ul>';
              for($i = 0; $i < count($jobs); $i++) {
                echo '<li>' . $jobs[$idx]['achievements'] . '</li>';
              }
              echo '</ul>';
              echo '</li>';


            $idx = $idx + 1;
            } while($idx < count($jobs));

            ?>

          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>


            <?php 
            
            $idx = 0;
            do {
              echo '<div class="project">';
                  echo '<h5>' . $proyects[$idx]['title'] . '</h5>';
                  echo '<div class="row">';
                      echo '<div class="col-3">';
                          echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=Miguel+Zabala&size=255" alt="">';
                        echo '</div>';
                        echo '<div class="col">';
                          echo '<p>' . $proyects[$idx]['description'] . '</p>';
                          echo '<strong>Technologies used:</strong>';
                          for($i = 0; $i > 3; $i++){
                            echo '<span class="badge badge-secondary">' . $proyects[$idx]['technologies'] . '</span>';
                          }
                        echo '</div>';
                  echo '</div>';
              echo '</div>';

              $idx = $idx + 1;
              
            } while($idx < count($proyects));
            ?>
            <!-- <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div> -->
          </div>
      </div>
      <div class="col-12">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by <a href="https://instagram.com/miguelzabalaf">@miguelzabalaf</a>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>