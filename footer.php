 

<footer id="footer" class="page-footer blue darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Achilles Sole</h5>
                <p class="grey-text text-lighten-4">
                  (123)-456-7890 or fake@achillessole.com
                  </p>
              </div>
              <div class="col l4 offset-l2 s12">
      
                <ul>
                  <li><a class="grey-text text-lighten-3" href="about.php">About Us</a></li>
                  
					<?
					if (isset($_SESSION['loggedin'])) {
						echo"<li><a class=\"grey-text text-lighten-3\" href=\"logout.php\">Logout</a></li>";
					}
					?>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
           This site is not official and is an assignment for a UCF Digital Media course.
            <span class="grey-text text-lighten-4 right">Achilles Sole</span>
            </div>
          </div>
        </footer>
   