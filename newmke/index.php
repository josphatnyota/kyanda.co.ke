<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/icon.png">
    <title>Kyanda Merchant SA </title>
      <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Icons CSS -->
      
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
     <!-- Style CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/style.scss">
  <script>
var subjectObject = {
  "Front-end": {
    "HTML": ["Links", "Images", "Tables", "Lists"],
    "CSS": ["Borders", "Margins", "Backgrounds", "Float"],
    "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]    
  },
  "Back-end": {
    "PHP": ["Variables", "Strings", "Arrays"],
    "SQL": ["SELECT", "UPDATE", "DELETE"]
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
  </head>
  <body>
 <header class="intro">
  <img src="assets/kym.png" class="responsive" style="width: 100%; max-width: 300px; " alt="some_text">
 <h1 style="color:#333333;"><b>KYANDA MERCHANT APPLICATION FORM</b> </h1>
 <!--<p> Register as a Merchant</p>-->
 

 
 
 </header>
  
 <main>
  <article>

      <!-- Start Multiform HTML -->
  <section class="multi_step_form">  
  <form id="msform" method="POST" name="submit" action="post.php" enctype="application/x-www-form-urlencoded"> 
    <!-- Tittle>
    <div class="tittle">
      <h2>This process will take a few minutes. </h2>
      <p>In order to start Registration, you have to confirm the following Documents</p>
    </div>-->
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Checklist</li>  
      <li>Verification</li>  
      <li>Business Details</li> 
      <li>Bank Details</li> 
      <li>Personal Info</li>
      <li>KYC Upload</li>
      <li>Finish</li>
    </ul>
    <!-- Checklist -->
    <fieldset>
      <h6 style="text-align: left;">Hello prospective merchant. Kyanda is all about convenience. This application process is 
        straightforward. With all the documentation in order, it will only take you 10 minutes to
        finish..
        <b>NOTE: Ensure you have the required documents for upload and in the correct format as 
          you cannot save and continue later once you have started.</b></h6>
     
        <p style="text-align: left;"> Documents you’ll need to upload: (Checklist)
          *accepted formats (pdf,png,jpg and jpeg) Maximum upload size 10MB</p> 
      <div class="form-row"> 
       
      </div> 
      <div class="funkyradio">
        
        <div class="funkyradio-primary">
            <input type="checkbox" name="checkbox" id="checkbox2" required />
            <label for="checkbox2" style="text-align: left;">CK Registration Certificate</label>
        </div>
        <div class="funkyradio-success">
            <input type="checkbox" name="checkbox" id="checkbox3" required/>
            <label for="checkbox3" style="text-align: left;" > Tax Clearance Certificate</label>
        </div>
       
        <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="checkbox5" required/>
            <label for="checkbox5" style="text-align: left;"> Bank Confirmation Letter</label>
        </div>
        <div class="funkyradio-info">
            <input type="checkbox" name="checkbox" id="checkbox6" required/>
            <label for="checkbox6" style="text-align: left;">ID (of all shareholders as one pdf)</label>
        </div>
        <div class="funkyradio-danger">
            <input type="checkbox" name="checkbox" id="checkbox1" required/>
            <label for="checkbox1" style="text-align: left;">Proof of residence (utility bill not older than 3 months)</label>
        </div>
    </div>
</div> 
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>
     
   <fieldset>
      <!-- fieldsets -->
    
        
     <h3>Contact Details</h3>
      <div class="form-row"> 
        <div class="form-group col-md-4">  
          <input type="tel" maxLength="3"id="phone"name="PhoneNo" class="form-control" placeholder="+27"> 
        </div>  
        <div class="form-group col-md-8"> 
          <input type="tel"  maxLength="10"name="PhoneNo" class="form-control" placeholder="+271123456789" required>
        </div> 
      </div> 
      
      
     <div class="form-group fg_2"> 
      <input type="email" Name="Email" class="form-control" placeholder="Email Address" required>
    </div>
      <!--<div class="done_text"> 
        <a href="#" class="don_icon"><i class="ion-android-done"></i></a> 
        <h6>A secret code is sent to your phone. <br>Please enter it here.</h6> 
      </div> 
      <div class="code_group"> 
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
        <input type="text" class="form-control" placeholder="0">
      </div>  --> 
       
  
     <button type="button" class="action-button previous previous_button">Back</button> 
     
     <button type="button" class="next action-button">Continue</button>  
    </fieldset>  
       <!-- Business Details -->
       
       <fieldset>
     
     <h3>Business Details</h3>
    <!-- <div class="form-group fg_4"> 
       <select class="product_select">
         <option data-display="Do you have a Super Merchant Code?">Super Merchant Code?</option> 
         <option value="Yes"> Yes</option>
         <option value="No">No</option> 
       </select>
     
     </div>-->
  
     <div class="form-group fg_2"> 
       <input type="number"  maxlength="6"class="form-control" name="SuperMerchantCode" placeholder="Super Merchant Code" >
     </div>
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="BusinessName" placeholder="Business Name" >
     </div>
     <div class="form-group fg_1"> 
       <input type="text" class="form-control" name="Street"placeholder="Street Address" >
     </div> 
     
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="BusinessProvince"placeholder="Province" >
     </div> 
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name=" BusinessMunicipality"placeholder=" Municipality" >
     </div> 
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="BusinessLocalMunicipality"placeholder="Local Municipality" >
     </div> 
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="RegNo"placeholder="Registration Number" >
     </div>
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="BusinessType"placeholder="Business Type" >
     </div>
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="Industry"placeholder="Industry" >
     </div>
     <div class="form-group fg_2"> 
       <input type="text" class="form-control" name="BusinessNature"placeholder="Business Nature" >
     </div>  
     
     
    
     <button type="button" class="action-button previous previous_button">Back</button> 
     <button type="button" class="next action-button">Continue</button> 
    

   </fieldset> 
   <!-- Bank Details -->
   <fieldset>
       <h3>Bank Details</h3>
       <div class="form-group fg_8 "> 
         <select class="product_select" name="BankName">
           <option data-display="Select Bank">Select Bank</option> 
           <option value="Absa Bank">Absa Bank</option>  
           <option value="Barclays Africa Group">Barclays Africa Group</option>  
           <option value="African Bank">African  Bank</option>  
           <option value="Al Baraka Bank">Al Baraka  Bank</option>  
           <option value="Bidvest  Bank">Bidvest  Bank</option>  
           <option value="Capitec Bank Holdings">Capitec Bank Holdings</option>  
           <option value="First National Bank (FNB)">First National Bank (FNB)</option> 
           <option value="Grindrod Bank (GRDB)">Grindrod Bank (GRDB)</option> 
           <option value="HBZ Bank">HBZ Bank</option> 
           <option value="Investec Bank Ltd">Investec Bank Ltd</option> 
           <option value="Nedbank Group">Nedbank Group</option> 
           <option value="Sasfin Bank">Sasfin Bank</option> 
           <option value="Ubank Ltd (formerly Teba Bank">Ubank Ltd (formerly Teba Bank</option> 
           <option value="WesBank">WesBank</option> 
         </select>
       </div> 
       <div class="form-group "> 
         <input type="text" class="form-control" placeholder="Branch Code:" name="Branch">
       </div>
       <div class="form-group "> 
         <input type="text" class="form-control" placeholder="Account Name:" name="AccName">
       </div> 
       <div class="form-group "> 
         <input type="text" class="form-control" placeholder="Account Number:" name="AccNo">
       </div> 
       <button type="button" class="action-button previous previous_button">Back</button> 
       <button type="button" class="next action-button">Continue</button>  
     </fieldset>
         <!-- Personal Details -->
         <fieldset>
      <h3>Personal Details</h3>
    
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" name="Surname" placeholder="Surname:">
      </div>
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" name="OtherNames" placeholder="Other Name:">
      </div>
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" name="Telephone" placeholder="Mobile Number:">
      </div>
      <div class="form-group fg_2"> 
        <input type="phone" class="form-control" name="BusinessEmail" placeholder="Email Address:">
      </div> 
      <div class="form-group"> 
        <select class="product_select" name="IdType">
          <option data-display="ID Type:">ID Type:</option> 
          <option value="National ID">National ID</option>
          <option value="Passport">Passport</option> 
          <option value="Asylum ID">Asylum ID</option> 
        </select>
      </div> 
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" name="IdNo" placeholder="ID/Passport No:">
      </div>
      <button type="button" class="action-button previous previous_button">Back</button> 
     <button type="button" class="next action-button">Continue</button> 
    </fieldset>  
       
       <!-- KYC Upload -->
       <fieldset>
        <h3>KYC Upload</h3>
        <h6>Please upload all the registration documents here The formats allowed are 
          <b>pdf,jpeg,png & jpg </b>and the file maximum size is <b>10mbs.</b></h6>
        <label style="padding-left: 10px;">CK Registration Certificate</label>
          <div class="form-group fg_2"> 
            <input type="file" class="form-control" placeholder="ID/Passport No:">
          </div>
          <label style="padding-left: 10px;">Tax Clearance Certificate</label>
          <div class="form-group fg_2"> 
            <input type="file" class="form-control" placeholder="ID/Passport No:">
          </div>
          <label style="padding-left: 10px;"> Bank Confirmation Letter</label>
          <div class="form-group fg_2"> 
            <input type="file" class="form-control" placeholder="ID/Passport No:">
          </div>
          <label style="padding-left: 10px;">ID (of all shareholders as one pdf)</label>
          <div class="form-group fg_2"> 
            <input type="file" class="form-control" placeholder="ID/Passport No:">
          </div>
          <label style="padding-left: 10px;"> Proof of residence (utility bill not older than 3 months)</label>
          <div class="form-group fg_2"> 
            <input type="file" class="form-control" placeholder="ID/Passport No:">
          </div>
          <br>    
        <button type="button" class="action-button previous previous_button">Back</button>
        <button type="button" class="next action-button">Continue</button>  
      </fieldset>

       <!-- Terms And Conditions -->  
       <fieldset>
        <h3 style="padding-bottom: 700px;">Merchant Agreement Page</h3>
       <!-- <h6>Please update your account with security questions</h6> 
        <div class="form-group"> 
          <select class="product_select">
            <option data-display="1. Choose A Question">1. Choose A Question</option> 
            <option>2. Choose A Question</option>
            <option>3. Choose A Question</option> 
          </select>
        </div> 
        <div class="form-group fg_2"> 
          <input type="text" class="form-control" placeholder="Anwser here:">
        </div> 
        <div class="form-group"> 
          <select class="product_select">
            <option data-display="1. Choose A Question">1. Choose A Question</option> 
            <option>2. Choose A Question</option>
            <option>3. Choose A Question</option> 
          </select>
        </div> 
        <div class="form-group fg_3"> 
          <input type="text" class="form-control" placeholder="Anwser here:">
        </div> -->
        <button type="button" class="action-button previous previous_button">Back</button> 
      <input id="submit" type="submit"class="action-button "	name="submit" value="submit"	onclick="on_submit()">
      </fieldset>
  </form>  
</section> 
      <!-- END Multiform HTML -->
  </article>
 </main>
  <footer class="credit"> © 2022, <a title="Kyanda South Africa" href="https://kyanda.co.za/" target="_blank">Kyanda Developers</a></footer>
  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script src="js/script.js"></script>

</script> 
  </body>
</html>