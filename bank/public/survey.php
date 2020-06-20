<?php include "templates/lheader.php"; ?>
<div class="topnav">
<a><img src="images/logo.jpeg" width="50" height="50"></a>
<a>                     </a>
  <a style="color:black"  href="../public/lindex.php">About us</a>
  <a style="color:black" class="active" href="../public/survey.php">Survey</a>
  
  <a style="color:black" href="../public/earning.php">Earning options</a>
  <a style="color:black" href="../public/fexpert.php">Financial Expert</a>
  <a style="color:black"  href="../public/contact.php">Contact</a>
  <div class="topnav-right">
  <form>
  <button type="submit" class="button button5" formaction="../public/index.php">Logout</button>
  </form>

  </div>
</div>
</head>
<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */

require "../config.php";
require "../common.php";

if (isset($_POST['submit'])) {
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

  try  {
    $connection = new PDO($dsn, $username, $password, $options);
    
    $new_user = array(
      "q1" => $_POST['q1'],
      "q2" => $_POST['q2'],
      "q3" => $_POST['q3'],
      "q4"  => $_POST['q4'],
      "q5"  => $_POST['q5'],
      "q6"  => $_POST['q6'],
      "q7"  => $_POST['q7'],
      "q8"  => $_POST['q8'],
      "q9"  => $_POST['q9'],
      "q10"  => $_POST['q10'],
      "q11"  => $_POST['q11']
    );

    $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "form",
      implode(", ", array_keys($new_user)),
      ":" . implode(", :", array_keys($new_user))
    );
    
    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}
?>


  <?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote> successfully submitted.</blockquote>
  <?php endif; ?>
 

<body class="bg-img">
  <h2 class="container" style="color:black" align="center"><u>Survey Form</u></h2>

  <form class="container" method="post" style="color:black">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
    <p>
Question 1 : What is your gender?
<p><input type="radio" name="q1" value="male">Male</p>
<p><input type="radio" name="q1" value="female">Female</p>
</p>
<p>
Question 2 : What is your age group?
<p><input type="radio" name="q2" value="18-24 years">18-24 years
<p><input type="radio" name="q2" value="25-31 years">25-31 years
<p><input type="radio" name="q2" value="32-38 years">32-38 years
<p><input type="radio" name="q2" value="39-45 years">39-45 years
<p><input type="radio" name="q2" value="46 years and above">46 years and above
</p>
<p>
Question 3 : What is your status?<p>
<p><input type="radio" name="q3" value="Student">Student
<p><input type="radio" name="q3" value="Self-employed">Self-employed
<p><input type="radio" name="q3" value="worker">worker
<p><input type="radio" name="q3" value="Unable to work">Unable to work
<p><input type="radio" name="q3" value="Retired">Retired
<p><input type="radio" name="q3" value="employee">employee
<p><input type="radio" name="q3" value="Other">Other
</p>
<p>
Question 4 : What is your occupation?<p>
<p><input type="radio" name="q4" value="Accountant">Accountant
<p><input type="radio" name="q4" value="Teacher/lecturer">Teacher/lecturer
<p><input type="radio" name="q4" value="Marketer">Marketer
<p><input type="radio" name="q4" value="Civil Servant">Civil Servant
<p><input type="radio" name="q4" value="Data analyst">Data analyst
<p><input type="radio" name="q4" value="Administrator">Administrator
<p><input type="radio" name="q4" value="Doctor">Doctor
<p><input type="radio" name="q4" value="Journalist">Journalist
<p><input type="radio" name="q4" value="Public relations officer">Public relations officer
<p><input type="radio" name="q4" value="Banker">Banker
<p><input type="radio" name="q4" value="Consultant">Consultant
<p><input type="radio" name="q4" value="Self-employed (e.g Businessman or businesswoman)">Self-employed (e.g Businessman or businesswoman)
<p><input type="radio" name="q4" value="Other (please specify)">Other (please specify)
</p><p>
Question 5 : What is your average monthly expenditure (AUD)?
<p><input type="radio" name="q5" value="Below 10,000">Below 10,000
<p><input type="radio" name="q5" value="10,000-15,000">10,000-15,000
<p><input type="radio" name="q5" value="16,000-20,000">16,000-20,000
<p><input type="radio" name="q5" value="21,000-25,000">21,000-25,000
<p><input type="radio" name="q5" value="Above 25,000">Above 25,000
</p><p>
Question 6 : How would you rate the quality of banking services you currently use?
<p><input type="radio" name="q6" value="Very high quality">Very high quality
<p><input type="radio" name="q6" value="High quality">High quality
<p><input type="radio" name="q6" value="Neither high nor low quality">Neither high nor low quality
<p><input type="radio" name="q6" value="Low quality">Low quality
<p><input type="radio" name="q6" value="Very low quality">Very low quality
<p><input type="radio" name="q6" value="I don't use banking services">I don't use banking services
</p><p>
Question 7 : How innovative is the service?
<p><input type="radio" name="q7" value="Extremely innovative">Extremely innovative
<p><input type="radio" name="q7" value="Very innovative">Very innovative
<p><input type="radio" name="q7" value="Somewhat innovative">Somewhat innovative
<p><input type="radio" name="q7" value="Not so innovative">Not so innovative
<p><input type="radio" name="q7" value="Not at all innovative">Not at all innovative
</p><p>
Question 8 : If access to full business banking services were available today, how likely would you be to use the service?
<p><input type="radio" name="q8" value="Extremely likely">Extremely likely
<p><input type="radio" name="q8" value="Very likely">Very likely
<p><input type="radio" name="q8" value="Somewhat likely">Somewhat likely
<p><input type="radio" name="q8" value="Not so likely">Not so likely
<p><input type="radio" name="q8" value="Not at all likely">Not at all likely
</p><p>
Question 9 : When you think about banking, do you think of it as something you need or don’t need?
<p><input type="radio" name="q9" value="Definitely need">Definitely need
<p><input type="radio" name="q9" value="Probably need">Probably need
<p><input type="radio" name="q9" value="Neutral">Neutral
<p><input type="radio" name="q9" value="Probably don’t need">Probably don’t need
<p><input type="radio" name="q9" value="Definitely don’t need">Definitely don’t need
</p><p>
Question 10 : Are you satisfied with the customer support services?
<p><input type="radio" name="q10" value="Very satisfied">Very satisfied
<p><input type="radio" name="q10" value="Satisfied">Satisfied
<p><input type="radio" name="q10" value="Neither satisfied or dissatisfied">Neither satisfied or dissatisfied
<p><input type="radio" name="q10" value="Dissatisfied">Dissatisfied
<p><input type="radio" name="q10" value="Very dissatisfied">Very dissatisfied
</p><p>
Question 11 : How likely is it that you would recommend banking services to a friend or colleague?
<p><input type="radio" name="q11" value="0">0    (Not at all likely)
<p><input type="radio" name="q11" value="1">1
<p><input type="radio" name="q11" value="2">2
<p><input type="radio" name="q11" value="3">3
<p><input type="radio" name="q11" value="4">4
<p><input type="radio" name="q11" value="5">5
<p><input type="radio" name="q11" value="6">6
<p><input type="radio" name="q11" value="7">7
<p><input type="radio" name="q11" value="8">8
<p><input type="radio" name="q11" value="9">9    (Extremely likely)
</p><p>
<label for="email">Question 12 : What is your email address?</label>
<p><input type="email" name="email" id="email" required="required" maxlength="80">
</p>
<p>
<p>
Question 13 : Finally, is there any other information you would like to share?
<p><input type="text" name="text" id="text" required="required">
<p>
<p>
<p><input type="submit" name="submit" value="Submit">
</p>
  </form>
<?php require "templates/footer.php"; ?>
