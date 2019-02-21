<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js
"></script>
  <script type="text/javascript">
$(document).ready(function(){


      // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#reg").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fname: "required",
      lname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      cont: {
        required: true,
        minlength: 10,
        maxlength:10
      },
      agg:{
        required:true,
        range:[0.08,99.99]  


      },
      preagg: {
                required:true,
                        range:[0.08,99.99]  



      }
    },
    // Specify validation error messages
    messages: {
      fname: "Please enter your firstname",
      lname: "Please enter your lastname",
   
      email: "Please enter a valid email address",
      cont : "please enter a valid phone number",
      agg : "please enter valid percentage",
      preagg :"please enter valid percentage",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  })
  </script>
 </head>
<body>
<div class="container" >
  <div class="info">
  <h1>SKILL PICKER</h1>
</div>


<form action="userinfo.php" method="post" class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" id="reg">
  <ul id="progressbar">
    <li class="active">Personal Details</li>
    <li>10th Details</li>
    <li>Pre-Graduation Details</li>
    <li>Graduation Details</li>
    <li>Masters/ POST- Graduation Deatils</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Basic Information</h2>
    <h3 class="fs-subtitle">We just need some basic information to begin your scoring</h3>
    <!-- Begin What's Your First Name Field -->

   <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required="true">
    </div>
        <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required="true">
    </div>
        <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="Date" class="form-control" id="dob" placeholder="Enter Date of Birth" name="dob">
    </div>
      <div class="form-group">
      <label for="optradio">Gender:</label>
        <div class="form-check-inline">     
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="male">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="female">Female
  </label>
</div>
</div>
    <div class="form-group">
      <label for="cont">Contact Number:</label>
      <input type="Number" class="form-control" id="cont" placeholder="Enter Phone Number +91....." name="cont" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div> 
     <div class="form-group">
      <label for="agg">Aggregate in 10 th %:</label>
      <input type="Number" class="form-control" id="email" placeholder="88.88" name="agg" >
    </div>

      <div class="form-group">
      <label for="email">Aggregate in 12 th %:</label>
      <input type="Number" class="form-control" id="preagg" placeholder="88.88" name="preagg" >
    </div>
    <!-- End Total Number of Constituents in Your Database Field -->
            <input id="hey" class="hs-button primary large next action-button" type="submit" value="Submit">
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Academic Details</h2>
    <h3 class="fs-subtitle">How have you been doing in your academics?</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
      <div class="form-group">
  <label for="sel1">Board:</label>
  <select class="form-control" id="sel1" name="borad">
    <option>None</option>
    <option>ICSE</option>
    <option>CBSE</option>
    <option>STATE</option>
    <option>OTHER</option>
  </select>
</div>
          <div class="form-group">
      <label for="yop">Year of Passing:</label>
      <input type="text" class="form-control" id="yop" name="yearpass" >
    </div>
   
        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
       <h2 class="fs-title">Pre-Graduation Details</h2>
    <h3 class="fs-subtitle">How have you been doing in your Pre-Graduation?</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
      <div class="form-group">
  <label for="sel1">Board:</label>
  <select class="form-control" id="newsel" name="presel">
    <option>None</option>
    <option>ICSE</option>
    <option>CBSE</option>
    <option>PUC</option>
    <option>OTHER</option>
  </select>
</div>
          <div class="form-group">
      <label for="year">Year of Passing:</label>
      <input type="text" class="form-control" id="year" name="preyear" >
    </div>
  
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Graduation Details</h2>
    <h3 class="fs-subtitle">How have you been doing in your Graduation?</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
       <div class="form-group">
      <label for="email">University Registration Number:</label>
      <input type="Number" class="form-control" id="gregno" placeholder="Enter Your University Registration Number" name="gregno">
    </div>
      <div class="form-group">
  <label for="sel1">Degree Type:</label>
  <select class="form-control" id="gsel1" name="gsel1">
    <option>None</option>
    <option>Bachelor's</option>
    <option>Diploma</option>
    <option>Correspondence</option>
    <option>OTHER</option>
  </select>
</div>
  <div class="form-group">
  <label for="gsel2">Degree:</label>
  <select class="form-control" id="gsel2" name="gsel2">
   <option>Bachelor of Architecture (BArch)</option>
<option>Bachelor of Arts (BA, AB, BS, BSc, SB, ScB)</option>
<option>Bachelor of Applied Arts (BAA)</option>
<option>Bachelor of Applied Arts and Science (BAAS)</option>
<option>Bachelor of Applied Science in Information Technology (BAppSc(IT))</option>
<option>Bachelor of Design (BDes, or SDes in Indonesia)</option>
<option>Bachelor of Engineering (BEng, BE, BSE, BESc, BSEng, BASc, BTech, BSc(Eng), AMIE,GradIETE)</option>
<option>Bachelor of Science in Business (BSBA)</option>
<option>Bachelor of Engineering Technology (BSET)</option>
<option>Bachelor of Technology (B.Tech. or B.Tech.)</option>
<option>International Business Economics (BIBE)</option>
<option>Bachelor of Business Administration (BBA)</option>
<option>Bachelor of Management Studies (BMS)</option>
<option>Bachelor of Administrative Studies</option>
<option>Bachelor of International Business Economics (BIBE)</option>
<option>Bachelor of Commerce (BCom, or BComm)</option>
<option>Bachelor of Fine Arts (BFA)</option>
<option>Bachelor of Business (BBus or BBus)</option>
<option>Bachelor of Management and Organizational Studies (BMOS)</option>
<option>Bachelor of Business Science (BBusSc)</option>
<option>Bachelor of Accountancy (B.Acy. or B.Acc. or B. Accty)</option>
<option>Bachelor of Comptrolling (B.Acc.Sci. or B.Compt.)</option>
<option>Bachelor of Economics (BEc, BEconSc; sometimes BA(Econ) or BSc(Econ))</option>
<option>Bachelor of Arts in Organizational Management (BAOM)</option>
<option>Bachelor of Computer Science (BCompSc)</option>
<option>Bachelor of Computing (BComp)</option>
<option>Bachelor of Science in Information Technology (BSc IT)</option>
<option>Bachelor of Computer Applications (BCA)</option>
<option>Bachelor of Business Information Systems (BBIS)</option>
<option>Intercalated Bachelor of Science (BSc)</option>
<option>Bachelor of Medical Science (BMedSci)</option>
<option>Bachelor of Medical Biology (BMedBiol)</option>
<option>Bachelor of Science in Public Health (BSPH)</option>
<option>Bachelor of Science in Nursing (BN, BNSc, BScN, BSN, BNurs, BSN, BHSc.)</option>
<option>Bachelor of Health Science (BHS & BHSc)</option>
<option>Bachelor of Kinesiology (BKin, BSc(Kin), BHK)</option>
<option>Bachelor of Arts for Teaching (BAT)</option>
<option>Bachelor of Aviation (BAvn)</option>
<option>Bachelor of Divinity (BD or BDiv)</option>
<option>Bachelor of Theology (B.Th.; Th.B. or BTheol)</option>
<option>Bachelor of Religious Education (BRE)</option>
<option>Bachelor of Religious Studies (BRS)</option>
<option>Bachelor of Film and Television (BF&TV)</option>
<option>Bachelor of Integrated studies (BIS)</option>
<option>Bachelor of Journalism (BJ, BAJ, BSJ or BJourn)</option>
<option>Bachelor of Landscape Architecture (BLArch)</option>
<option>Bachelor of Liberal Arts (B.L.A.; occasionally A.L.B.)</option>
<option>Bachelor of General Studies (BGS, BSGS)</option>
<option>Bachelor of Science in Human Biology (BSc)</option>
<option>Bachelor of Applied Studies (BAS)</option>
<option>Bachelor of Liberal Studies</option>
<option>Bachelor of Professional Studies (BPS)</option>
<option>Bachelor of Library Science (B.L.S., B.Lib.)</option>
<option>Bachelor of Library and Information Science (B.L.I.S.)</option>
<option>Bachelor of Music (BM or BMus)</option>
<option>Bachelor of Art in Music (BA in Music)</option>
<option>Bachelor of Music Education (BME)</option>
<option>Bachelor of Philosophy (BPhil, PhB)</option>
<option>Bachelor of Arts in Psychology (BAPSY)</option>
<option>Bachelor of Mortuary Science (BMS)</option>
<option>Bachelor of Science in Psychology (BSc(Psych)</option>
<option>Bachelor of Science in Education (BSE, BS in Ed)</option>
<option>Bachelor of Science and/with education degree (BScEd)</option>
<option>Bachelor of Science in Forestry (B.S.F. or B.Sc.F.)</option>
<option>Bachelor of Applied Science (BASc)</option>
<option>Bachelor of Science in Law (BSL)</option>
<option>Bachelor of Social Science (BSocSc)</option>
<option>Bachelor of Arts in Social Work (BSW or BASW)</option>
<option>Bachelor of Talmudic Law (BTL)</option>
<option>Bachelor of Technology (B.Tech)</option>
<option>Bachelor of Tourism Studies (BTS)</option>
<option>Bachelor of Mathematics (BMath)</option>
<option>Bachelor of Mathematical Sciences (BMathSc)</option>
  </select>
</div>
   <div class="form-group">
  <label for="gsel3">Stream (Specialization):</label>
  <select class="form-control" id="gsel3" name="gsel3">
    <option>Science</option>
    <option>Commerce</option>
    <option>Engineering</option>
    <option>Management</option>
    <option>Arts</option>
    <option>Law</option>
    <option>Communication</option>
    <option>other</option>
  </select>
</div>
<div class="form-group">
      <label for="gcname">College Name:</label>
      <input type="text" class="form-control" id="gcname" placeholder="Enter College Name" name="gcname" >
    </div>
        <div class="form-group">
      <label for="gcuname">University Name:</label>
      <input type="text" class="form-control" id="gcuname" placeholder="Enter University Name" name="gcuname" >
    </div>
          <div class="form-group">
      <label for="gpass">Year of Passing:</label>
      <input type="text" class="form-control" id="gpass" name="gpass">
    </div>
     <div class="form-group">
      <label for="gcpga">CGPA:</label>
      <input type="Number" class="form-control" id="gcpga" placeholder="88.88" name="gcpga" >
    </div>
    <div class="form-group">
      <label for="gaggri">Aggregate in %:</label>
      <input type="Number" class="form-control" id="gaggri" placeholder="88.88" name="gaggri" >
    </div>
       <div class="form-group">
  <label for="gsel4">Do you Have Master's Degree:</label>
  <select class="form-control" id="gsel4" name="gsel4">
    <option>No</option>
    <option>YES</option>
  </select>
</div>
    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
  </fieldset>


  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Post Graduation Details</h2>
    <h3 class="fs-subtitle">How have you been doing in your Graduation?</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
       <div class="form-group">
      <label for="postreg">University Registration Number:</label>
      <input type="Number" class="form-control" id="postreg" placeholder="Enter Your University Registration Number" name="postreg">
    </div>
      <div class="form-group">
  <label for="postsel1">Degree Type:</label>
  <select class="form-control" id="postsel1" name="postsel1">
    <option>None</option>
    <option>Master's</option>
    <option>Diploma</option>
    <option>Correspondence</option>
    <option>OTHER</option>
  </select>
</div>
  <div class="form-group">
  <label for="postsel2">Degree:</label>
  <select class="form-control" id="postsel2" name="postsel2">
 <option>Master of Accountancy (MAcc, MAc, or MAcy)</option>
<option>Master of Advanced Study (MAS)</option>
<option>Master of Economics (MEcon)</option>
<option>Master of Architecture (MArch)</option>
<option>Master of Applied Science (MASc, MAppSc, MApplSc, MASc and MAS)</option>
<option>Master of Arts (MA, MA, AM, or AM)</option>
<option>Master of Arts in Teaching (MAT)</option>
<option>Master of Commerce (MCom or MComm)</option>
<option>Master of Computer Applications (MCA)</option>
<option>Master in Creative Technologies</option>
<option>Master of Finance (MFin)</option>
<option>Master of Financial Mathematics (Master of Quantitative Finance)</option>
<option>Master of Financial Engineering (Master of Quantitative Finance)</option>
<option>Master of Financial Economics</option>
<option>Master of Information System Management (abbreviated MISM, MSIM, MIS or similar)</option>
<option>Master of IT (abbreviated MSIT, MScIT, MScIT, MScIT or MSc IT)</option>
<option>Master of Management (MM)</option>
<option>Master of Mathematics (or MMath)</option>
<option>Master of Mathematical Finance</option>
<option>Master of Philosophy (MPhil)</option>
<option>Master of Physics (MPhys)</option>
<option>Master of Physician Assistant Studies</option>
<option>Master of Political Science</option>
<option>Master of Professional Studies (MPS or MPS)</option>
<option>Master of Public Administration (MPA)</option>
<option>Master of Public Affairs (MPAff)</option>
<option>Master of Public Health (MPH)</option>
<option>Master of Science (MSc, MSc, MSci, MSi, ScM, MS, MSHS, MS, Mag, Mg, Mgr, SM, or SM)</option>
<option>Master of Science in Education</option>
<option>Master of Science in Engineering (MSE)</option>
<option>Master of Science in Finance (MFin)</option>
<option>Master of Science in Information Systems Management (MSMIS)</option>
<option>Master of Science in Information Systems (MSIS)</option>
<option>Master of Science in Information Technology (MSIT, MScIT, MScIT, MScIT or MSc IT)</option>
<option>Master of Science in Teaching (MST)</option>
<option>Master of Social Work (MSW)</option>
<option>Master of Social Science (MSSc)</option>
<option>Master of Studies (MSt or MSt)</option>
  </select>
</div>
   <div class="form-group">
  <label for="postsel3">Stream (Specialization):</label>
  <select class="form-control" id="postsel3" name="postsel3">
    <option>Science</option>
    <option>Commerce</option>
    <option>Engineering</option>
    <option>Management</option>
    <option>Arts</option>
    <option>Law</option>
    <option>Communication</option>
    <option>other</option>
  </select>
</div>
<div class="form-group">
      <label for="postcol">College Name:</label>
      <input type="text" class="form-control" id="postcol" placeholder="Enter College Name" name="postcol">
    </div>
        <div class="form-group">
      <label for="postuni">University Name:</label>
      <input type="text" class="form-control" id="postuni" placeholder="Enter University Name" name="postuni">
    </div>
          <div class="form-group">
      <label for="postyear">Year of Passing:</label>
      <input type="text" class="form-control" id="postyear" name="postyear">
    </div>
     <div class="form-group">
      <label for="postcpg">CGPA:</label>
      <input type="Number" class="form-control" id="postcpg" placeholder="88.88" name="postcpg">
    </div>
    <div class="form-group">
      <label for="postagg">Aggregate in %:</label>
      <input type="Number" class="form-control" id="postagg" placeholder="88.88" name="postagg">
    </div>
        <!-- End Final Calc -->
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />


</fieldset>

  <fieldset>
    <h2 class="fs-title">Inputs Received!</h2>
    <h3 class="fs-subtitle">Thank you for Your Valuable Inputs. Please Proceed for the Exam</h3>
  </fieldset>

</form>



<style type="text/css">
  /*basic reset*/
* {margin: 0; padding: 0;}

html {
  height: 100%;
  /*Image only BG fallback*/
  background: #0e3997;
}

body {
  font-family: montserrat, arial, verdana;
    width: 100%;
  overflow-x: hidden;
}
/*form styles*/
.steps {
    width: 675px;
  margin: 50px auto;
  position: relative;
}

.steps fieldset {
  background: white;
  border: 0 none;
  border-radius: 3px;
  box-shadow: 0 17px 41px -21px rgb(0, 0, 0);
  padding: 20px 30px;
  border-top: 9px solid #7B1FA2;
  box-sizing: border-box;
  width: 80%;
  margin: 0 10%;
  
  /*stacking fieldsets above each other*/
  position: absolute;
}
/*Hide all except first fieldset*/
.steps fieldset:not(:first-of-type) {
  display: none;
}
/*inputs*/
.steps label{
  color: #333333;
  text-align: left !important;
  font-size: 15px;
  font-weight: 200;
  padding-bottom: 7px;
  padding-top: 12px;
  display: inline-block;
}


.steps input, .steps textarea {
  outline: none;
  display: block;
  width: 100%;
  margin: 0 0 20px;
  padding: 10px 15px;
  border: 1px solid #d9d9d9;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #837E7E;
  font-family: "Roboto";
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 14px;
  font-wieght: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}

.steps input:focus, .steps textarea:focus{
  color: #333333;
  border: 1px solid #7B1FA2;
}

.error1{
   -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-box-shadow: 0 0 0 transparent;
  -webkit-box-shadow: 0 0 0 transparent;
  box-shadow: 0 0 0 transparent;
  position: absolute;
  left: 525px;
  margin-top: -58px;
  padding: 0 10px;
  height: 39px;
  display: block;
  color: #ffffff;
  background: #e62163;
  border: 0;
  font: 14px Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;
  line-height: 39px;
  white-space: nowrap;

}

.error1:before{
    width: 0;
  height: 0;
  left: -8px;
  top: 14px;
  content: '';
  position: absolute;
  border-top: 6px solid transparent;
  border-right: 8px solid #e62163;
  border-bottom: 6px solid transparent;
}

.error-log{
    margin: 5px 5px 5px 0;
  font-size: 19px;
  position: relative;
  bottom: -2px;
}

.question-log {
  margin: 5px 1px 5px 0;
  font-size: 15px;
  position: relative;
  bottom: -2px;
  }

/*buttons*/
.steps .action-button, .action-button {
  width: 100px !important;
  background: #7B1FA2;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 1px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px auto;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
  display: block;
}

.steps .next, .steps .submit{
    float: right;
}

.steps .previous{
  float:left;
}

.steps .action-button:hover, .steps .action-button:focus, .action-button:hover, .action-button:focus {
  background:#9F2AD0;;
}

.steps .explanation{
display: block;
  clear: both;
  width: 540px;
  background: #f2f2f2;
  position: relative;
  margin-left: -30px;
  padding: 22px 0px;
  margin-bottom: -10px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  top: 10px;
  text-align: center;
  color: #333333;
  font-size: 12px;
  font-weight: 200;
  cursor:pointer;
}


/*headings*/
.fs-title {
  text-transform: uppercase;
     margin: 0 0 5px;
     line-height: 1;
     color: #7B1FA2;
     font-size: 18px;
    font-weight: 400;
    text-align:center;
}
.fs-subtitle {
  font-weight: normal;
  font-size: 13px;
  color: #837E7E;
  margin-bottom: 20px;
  text-align: center;
}
/*progressbar*/
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  /*CSS counters to number the steps*/
  counter-reset: step;
  width:100%;
  text-align: center;
}
#progressbar li {
  list-style-type: none;
    color: rgb(51, 51, 51);
  text-transform: uppercase;
  font-size: 9px;
  width: 20%;
  float: left;
  position: relative;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 20px;
  line-height: 20px;
  display: block;
  font-size: 10px;
  color: #333;
  background: white;
  border-radius: 3px;
  margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: white;
  position: absolute;
  left: -50%;
  top: 9px;
  z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
  /*connector not needed before the first step*/
  content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
  background: #7B1FA2;
  color: white;
}


/* my modal */

.modal p{
  font-size: 15px;
  font-weight: 100;
  font-family: sans-serif;
  color: #3C3B3B;
  line-height: 21px;
}

.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 50%;
  max-width: 630px;
  min-width: 320px;
  height: auto;
  z-index: 2000;
  visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.modal.modal-show {
  visibility: visible;
}
.lt-ie9 .modal {
  top: 0;
  margin-left: -315px;
}

.modal-content {
  background: #ffffff;
  position: relative;
  margin: 0 auto;
  padding: 40px;
  border-radius: 3px;
}

.modal-overlay {
  background: #000000;
  position: fixed;
  visibility: hidden;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition-property: visibility, opacity;
  -o-transition-property: visibility, opacity;
  -webkit-transition-property: visibility, opacity;
  transition-property: visibility, opacity;
  -moz-transition-delay: 0.5s, 0.1s;
  -o-transition-delay: 0.5s, 0.1s;
  -webkit-transition-delay: 0.5s, 0.1s;
  transition-delay: 0.5s, 0.1s;
  -moz-transition-duration: 0, 0.5s;
  -o-transition-duration: 0, 0.5s;
  -webkit-transition-duration: 0, 0.5s;
  transition-duration: 0, 0.5s;
}
.modal-show .modal-overlay {
  visibility: visible;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
  opacity: 0.6;
  -moz-transition: opacity 0.5s;
  -o-transition: opacity 0.5s;
  -webkit-transition: opacity 0.5s;
  transition: opacity 0.5s;
}

/*slide*/
.modal[data-modal-effect|=slide] .modal-content {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition: all 0.5s 0;
  -o-transition: all 0.5s 0;
  -webkit-transition: all 0.5s 0;
  transition: all 0.5s 0;
}
.modal[data-modal-effect|=slide].modal-show .modal-content {
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
  -moz-transition: all 0.5s 0.1s;
  -o-transition: all 0.5s 0.1s;
  -webkit-transition: all 0.5s;
  -webkit-transition-delay: 0.1s;
  transition: all 0.5s 0.1s;
}
.modal[data-modal-effect=slide-top] .modal-content {
  -moz-transform: translateY(-300%);
  -ms-transform: translateY(-300%);
  -webkit-transform: translateY(-300%);
  transform: translateY(-300%);
}
.modal[data-modal-effect=slide-top].modal-show .modal-content {
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -webkit-transform: translateY(0);
  transform: translateY(0);
}


/* RESPONSIVE */

/* moves error logs in tablet/smaller screens */

@media (max-width:1000px){

/*brings inputs down in size */
.steps input, .steps textarea {
  outline: none;
  display: block;
  width: 100% !important;
  }

  /*brings errors in */
  .error1 {
  left: 345px;
  margin-top: -58px;
}




}


@media (max-width:675px){
/*mobile phone: uncollapse all fields: remove progress bar*/

.steps {
  width: 100%;
  margin: 50px auto;
  position: relative;
}

#progressbar{
  display:none;
}

/*move error logs */
.error1 {
  position: relative;
  left: 0 !important;
  margin-top: 24px;
  top: -11px;
}

.error1:before {
  width: 0;
  height: 0;
  left: 14px;
  top: -14px;
  content: '';
  position: absolute;
  border-left: 6px solid transparent;
  border-bottom: 8px solid #e62163;
  border-right: 6px solid transparent;
  }

/*show hidden fieldsets */
.steps fieldset:not(:first-of-type) {
  display: block;
}

.steps fieldset{
  position:relative;
  width: 100%;
  margin:0 auto;
  margin-top: 45px;
}

.steps .next, .steps .previous{
  display:none;
}

.steps .explanation{
  display:none;
}

.steps .submit {
  float: right;
  margin: 28px auto 10px;
  width: 100% !important;
}

}



/* Info */
.info {
  width: 300px;
  margin: 35px auto;
  text-align: center;
  font-family: 'roboto', sans-serif;
}

.info h1 {
  margin: 0;
  padding: 0;
  font-size: 28px;
  font-weight: 400;
  color: #333333;
  padding-bottom: 5px;

}
.info span {
  color:#666666;
  font-size: 13px;
  margin-top:20px;
}
.info span a {
  color: #666666;
  text-decoration: none;
}
.info span .fa {
  color: rgb(226, 168, 16);
  font-size: 19px;
  position: relative;
  left: -2px;
}

.info span .spoilers {
  color: #999999;
  margin-top: 5px;
  font-size: 10px;
}
</style>
<script type="text/javascript">
  /* Fundraising Grader
*
* Generic Copyright, yadda yadd yadda
*
* Plug-ins: jQuery Validate, jQuery 
* Easing
*/

$(document).ready(function() {
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    $(".steps").validate({
        errorClass: 'invalid',
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.insertAfter(element.next('span').children());
        },
        highlight: function(element) {
            $(element).next('span').show();
        },
        unhighlight: function(element) {
            $(element).next('span').hide();
        }
    });
    $(".next").click(function() {
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        if ((!$('.steps').valid())) {
            return true;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
  /*  $(".submit").click(function() {
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        if ((!$('.steps').valid())) {
            return false;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });*/
    $(".previous").click(function() {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
});
jQuery(document).ready(function() {
    jQuery("#edit-submitted-acquisition-amount-1,#edit-submitted-acquisition-amount-2,#edit-submitted-cultivation-amount-1,#edit-submitted-cultivation-amount-2,#edit-submitted-cultivation-amount-3,#edit-submitted-cultivation-amount-4,#edit-submitted-retention-amount-1,#edit-submitted-retention-amount-2,#edit-submitted-constituent-base-total-constituents").keyup(function() {
        calcTotal();
    });
});

function calcTotal() {
    var grade = 0;
    var donorTotal = Number(jQuery("#edit-submitted-constituent-base-total-constituents").val().replace(/,/g, ""));
    if (donorTotal) {
        donorTotal = parseFloat(donorTotal);
    } else {
        donorTotal = 0;
    }
    grade += getBonusDonorPoints(donorTotal);
    var acqAmount1 = Number(jQuery("#edit-submitted-acquisition-amount-1").val().replace(/,/g, ""));
    var acqAmount2 = Number(jQuery("#edit-submitted-acquisition-amount-2").val().replace(/,/g, ""));
    var acqTotal = 0;
    if (acqAmount1) {
        acqAmount1 = parseFloat(acqAmount1);
    } else {
        acqAmount1 = 0;
    }
    if (acqAmount2) {
        acqAmount2 = parseFloat(acqAmount2);
    } else {
        acqAmount2 = 0;
    }
    if (acqAmount1 > 0 && acqAmount2 > 0) {
        acqTotal = ((acqAmount2 - acqAmount1) / acqAmount1 * 100).toFixed(2);
    } else {
        acqTotal = 0;
    }
    jQuery("#edit-submitted-acquisition-percent-change").val(acqTotal + '%');
    grade += getAcquisitionPoints(acqTotal);
    console.log(grade);
    var cultAmount1 = Number(jQuery("#edit-submitted-cultivation-amount-1").val().replace(/,/g, ""));
    var cultAmount2 = Number(jQuery("#edit-submitted-cultivation-amount-2").val().replace(/,/g, ""));
    var cultTotal = 0;
    if (cultAmount1) {
        cultAmount1 = parseFloat(cultAmount1);
    } else {
        cultAmount1 = 0;
    }
    if (cultAmount2) {
        cultAmount2 = parseFloat(cultAmount2);
    } else {
        cultAmount2 = 0;
    }
    if (cultAmount1 > 0 && cultAmount2 > 0) {
        cultTotal = ((cultAmount2 - cultAmount1) / cultAmount1 * 100).toFixed(2);
    } else {
        cultTotal = 0;
    }
    jQuery("#edit-submitted-cultivation-percent-change1").val(cultTotal + '%');
    grade += getAcquisitionPoints(cultTotal);
    var cultAmount3 = Number(jQuery("#edit-submitted-cultivation-amount-3").val().replace(/,/g, ""));
    var cultAmount4 = Number(jQuery("#edit-submitted-cultivation-amount-4").val().replace(/,/g, ""));
    if (cultAmount3) {
        cultAmount3 = parseFloat(cultAmount3);
    } else {
        cultAmount3 = 0;
    }
    if (cultAmount4) {
        cultAmount4 = parseFloat(cultAmount4);
    } else {
        cultAmount4 = 0;
    }
    if (cultAmount3 > 0 && cultAmount4 > 0) {
        cultTotal2 = ((cultAmount4 - cultAmount3) / cultAmount3 * 100).toFixed(2);
    } else {
        cultTotal2 = 0;
    }
    jQuery("#edit-submitted-cultivation-percent-change2").val(cultTotal2 + '%');
    grade += getAcquisitionPoints(cultTotal2);
    var retAmount1 = Number(jQuery("#edit-submitted-retention-amount-1").val().replace(/,/g, ""));
    var retAmount2 = Number(jQuery("#edit-submitted-retention-amount-2").val().replace(/,/g, ""));
    var retTotal = 0;
    if (retAmount1) {
        retAmount1 = parseFloat(retAmount1);
    } else {
        retAmount1 = 0;
    }
    if (retAmount2) {
        retAmount2 = parseFloat(retAmount2);
    } else {
        retAmount2 = 0;
    }
    if (retAmount1 > 0 && retAmount2 > 0) {
        retTotal = (retAmount2 / retAmount1 * 100).toFixed(2);
    } else {
        retTotal = 0;
    }
    jQuery("#edit-submitted-retention-percent-change").val(retTotal + '%');
    grade += getAcquisitionPoints(retTotal);
    jQuery("#edit-submitted-final-grade-grade").val(grade + ' / 400');
}

function getAcquisitionPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 6) {
        return 50;
    } else if (val >= 6 && val < 11) {
        return 60;
    } else if (val >= 11 && val < 16) {
        return 70;
    } else if (val >= 16 && val < 21) {
        return 75;
    } else if (val >= 21 && val < 26) {
        return 80;
    } else if (val >= 26 && val < 31) {
        return 85;
    } else if (val >= 31 && val < 36) {
        return 90;
    } else if (val >= 36 && val < 41) {
        return 95;
    } else if (val >= 41) {
        return 100;
    }
}

function getCultivationGiftPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 4) {
        return 50;
    } else if (val >= 4 && val < 7) {
        return 60;
    } else if (val >= 7 && val < 10) {
        return 70;
    } else if (val >= 10 && val < 13) {
        return 75;
    } else if (val >= 13 && val < 16) {
        return 80;
    } else if (val >= 16 && val < 21) {
        return 85;
    } else if (val >= 21 && val < 26) {
        return 90;
    } else if (val >= 26 && val < 51) {
        return 95;
    } else if (val >= 51) {
        return 100;
    }
}

function getCultivationDonationPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 6) {
        return 50;
    } else if (val >= 6 && val < 11) {
        return 60;
    } else if (val >= 11 && val < 16) {
        return 70;
    } else if (val >= 16 && val < 21) {
        return 75;
    } else if (val >= 21 && val < 26) {
        return 80;
    } else if (val >= 26 && val < 31) {
        return 85;
    } else if (val >= 31 && val < 36) {
        return 90;
    } else if (val >= 36 && val < 41) {
        return 95;
    } else if (val >= 41) {
        return 100;
    }
}

function getRetentionPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 51) {
        return 50;
    } else if (val >= 51 && val < 56) {
        return 60;
    } else if (val >= 56 && val < 61) {
        return 70;
    } else if (val >= 61 && val < 66) {
        return 75;
    } else if (val >= 66 && val < 71) {
        return 80;
    } else if (val >= 71 && val < 76) {
        return 85;
    } else if (val >= 76 && val < 81) {
        return 90;
    } else if (val >= 81 && val < 91) {
        return 95;
    } else if (val >= 91) {
        return 100;
    }
}

function getBonusDonorPoints(val) {
    if (val < 10001) {
        return 0;
    } else if (val >= 10001 && val < 25001) {
        return 10;
    } else if (val >= 25001 && val < 50000) {
        return 15;
    } else if (val >= 50000) {
        return 20;
    }
}
var modules = {
    $window: $(window),
    $html: $('html'),
    $body: $('body'),
    $container: $('.container'),
    init: function() {
        $(function() {
            modules.modals.init();
        });
    },
    modals: {
        trigger: $('.explanation'),
        modal: $('.modal'),
        scrollTopPosition: null,
        init: function() {
            var self = this;
            if (self.trigger.length > 0 && self.modal.length > 0) {
                modules.$body.append('<div class="modal-overlay"></div>');
                self.triggers();
            }
        },
        triggers: function() {
            var self = this;
            self.trigger.on('click', function(e) {
                e.preventDefault();
                var $trigger = $(this);
                self.openModal($trigger, $trigger.data('modalId'));
            });
            $('.modal-overlay').on('click', function(e) {
                e.preventDefault();
                self.closeModal();
            });
            modules.$body.on('keydown', function(e) {
                if (e.keyCode === 27) {
                    self.closeModal();
                }
            });
            $('.modal-close').on('click', function(e) {
                e.preventDefault();
                self.closeModal();
            });
        },
        openModal: function(_trigger, _modalId) {
            var self = this,
                scrollTopPosition = modules.$window.scrollTop(),
                $targetModal = $('#' + _modalId);
            self.scrollTopPosition = scrollTopPosition;
            modules.$html.addClass('modal-show').attr('data-modal-effect', $targetModal.data('modal-effect'));
            $targetModal.addClass('modal-show');
            modules.$container.scrollTop(scrollTopPosition);
        },
        closeModal: function() {
            var self = this;
            $('.modal-show').removeClass('modal-show');
            modules.$html.removeClass('modal-show').removeAttr('data-modal-effect');
            modules.$window.scrollTop(self.scrollTopPosition);
        }
    }
}
modules.init();


    var year = 2010;
var till = 2018;
var options = "";
for(var y=year; y<=till; y++){
  options += "<option>"+ y +"</option>";
}
document.getElementById("year").innerHTML = options;
</script>

</body>
</html>