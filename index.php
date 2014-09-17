<?php include 'header.php'; ?>

<div class="form-container">

     <div class="form-title field">
          <h2>User Form</h2>
          <h3>Please fill out the form. Fields with * are required</h3>
     </div>

     <form enctype="multipart/form-data" action="form.php" class="form"
     method="post" novalidate="">

          <div id="field5-container" class="field">
               <label for="field5">
                    Login *
               </label>
               <input name="login" id="field5" required="required" type="text">
          </div>

          <div id="field6-container" class="field">
               <label for="field6">
                    First Name
               </label>
               <input name="first-name" id="field6" type="text">
          </div>

          <div id="field7-container" class="field">
               <label for="field7">
                    Last Name
               </label>
               <input name="last-name" id="field7" type="text">
          </div>

          <div id="field8-container" class="field">
               <label for="field8">
                    Email Address *
               </label>
               <input name="email" id="field8" required="required" type="email">
          </div>

          <div id="field9-container" class="field">
               <label for="field9">
                    Password *
               </label>
               <input name="password" id="field9" required="required" type="password">
          </div>

          <div id="field10-container" class="field">
               <label for="field10">
                    Website
               </label>
               <input name="website" id="field10" type="url">
          </div>

          <div id="field11-container" class="field">
               <label for="field11">
                    Google+
               </label>
               <input name="google-plus" id="field11" type="url">
          </div>

          <div class="field" id="field13-container">
               <label for="field13">
                    Photo
               </label>
               <div class="uploader" id="uploader">
                 <input type="file" id="field13" name="photo">
                 <span class="filename"></span>
                 <span class="action"></span>
               </div>
          </div>

          <div id="field12-container" class="field">
               <label for="field12">
                    Additional Information
               </label>
               <textarea rows="5" cols="70" name="information" id="field12"></textarea>
          </div>

          <div id="form-submit" class="field clearfix submit">
               <input value="Submit" type="submit">
          </div>
     </form>
</div>

<?php include 'footer.php'; ?>


