<!DOCTYPE html>

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <img id="img-banner" src="../images/Mech.jpg">
    <link rel="stylesheet" href="../CSS/header.css">
    <link href="<?php echo $css_path; ?>" rel="stylesheet">
  </head>
  
  <h1 id = "mobile_title">Mechanical Engineering</h1>

  <div class="navbar" id="myTopnav">
    <div class="first_dropdown">
        <button onclick="location.href='index.html'" class="dropbtn">Home</button>
    </div>
    <div class="dropdown" id = "courses">
        <button class="dropbtn">Courses</button>
        <div class="dropdown-content">
          <a href="Courses_Undergrad.html">Undergraduate Course Listing</a>
          <a href="Courses_Graduate.html">Graduate Course Listing</a>
          <a href="Courses_Search.html">Course Search</a>
        </div>
      </div>

    <div class="dropdown" id = "degree_programs">
      <button class="dropbtn">Degree Programs</button>
      <div class="dropdown-content">
        <a href="Degree_Progs_Undergrad.html">Undergraduate Program</a>
        <a href="Degree_Progs_3+2.html">3+2 Program</a>
        <a href="Degree_Progs_Masters.html">Master's Program</a>
        <a href="Degree_Progs_Doctorate.html">Doctorate's Program</a>
      </div>
    </div>

    <div class="dropdown" id = "scholarships_financial_aid">
      <button class="dropbtn">Scholarship/Financial Aid</button>
      <div class="dropdown-content">
        <a href="Scholarships_Undergrad.html">Undergraduate Scholarships</a>
        <a href="Scholarships_SchoolOfEng.html">School of Engineering Scholarships</a>
      </div>
    </div>

    <div class="dropdown" id = "clubs_extra">
      <button class="dropbtn">Clubs/Extracurriculars</button>
      <div class="dropdown-content">
        <a href="Extras_Research_Proj.html">Research Projects</a>
        <a href="Extras_Group_Proj.html">Group Projects</a>
        <a href="Extras_Student_Orgs.html">Student Organizations</a>
      </div>
    </div>

    <div class="dropdown" id = "faculty_staff">
      <button class="dropbtn">Faculty/Staff</button>
      <div class="dropdown-content">
        <a href="Fac_Dean.html">Dean</a>
        <a href="Fac_Chair.html">Chair</a>
        <a href="Fac_Professors.html">Professors</a>
        <a href="Fac_Advisors.html">Advisors</a>
      </div>
    </div>

   <div class="dropdown">
    <button onclick="location.href='News.html'" class="dropbtn">News</button>
  </div>

    <div class="dropdown" id = "admissions">
      <button class="dropbtn">Admissions</button>
      <div class="dropdown-content">
        <a href="Admissions_Enrollment.html">Enrollment</a>
        <a href="Admissions_Deadlines.html">Deadlines</a>
        <a href="Admissions_Equal_Opportunity.html">Equal Opportunity</a>
        <a href="Admissions_Enrollment_Statistics.html">Enrollment Statistics</a>
      </div>
    </div>

    <div class="dropdown" id = "student_resources">
      <button class="dropbtn">Student Resources</button>
      <div class="dropdown-content">
        <a href="Student_Resources.html">Resources</a>
      </div>
    </div>

    <div class="dropdown" id = "business_resources">
      <button class="dropbtn">Business Resources</button>
      <div class="dropdown-content">
        <a href="business.html">Business Resources</a>
      </div>
    </div>
    <a id = "menu_icon" href="javascript:void(0);" class="icon" onclick="toggle_drop_menu()">&#9776;</a>
</div>
<script src = "../JS/header.js"></script>
 

