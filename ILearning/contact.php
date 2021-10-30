<!--Start Contact Us-->
<div class="container mt-4" id="Contact">  <!--Start Contact Us Container-->
      <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
      <div class="row">  <!--Start Contact Us Row-->
        <div class="col-md-8"> <!--Start Contact Us 1st Column-->
          <script type="text/javascript">var submitted=false;
            
function validateName() {
            var name = document.getElementById('name').value;
            if(name.length == 0) {
              alert("Name can't be blank") ;
              return false;

            }
            if (!name.match(/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/)) {
              alert("Please enter your correct name") ;//Validation Message
              return false;
            }
            return true;
          }


         function validateEmail () {

          var email = document.getElementById('email').value;
          if(email.length == 0) {
            alert("Email can't be blank") ;//Validation Message
            return false;

          }

          if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
            alert("Please enter a correct email address") ;//Validation Message
            return false;

          }

          return true;

        }

            function validateForm() {
            alert("Form Submited")
        }
        </script>
    
          <!--Update the URL for thank you page on form submit -->
            <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='http://www.google.com/';}"></iframe>
          <form action="https://docs.google.com/forms/u/6/d/e/1FAIpQLSdP0ZznR23ZEYzEZumDJ077T4EgP0-6y8neB_Ofb0ZHq8wWwA/formResponse" method="post" target="hidden_iframe" onsubmit="return validateForm(); ">
            <input type="text" class="form-control" id="name" placeholder="Name" required name="entry.287956900"><br>
            <input type="text" class="form-control" id="subject" placeholder="Subject" required name="entry.1068676674"><br>
            <input type="email" class="form-control" id="email" placeholder="E-mail" required name="entry.1197131012"><br>
            <textarea class="form-control" id="message" placeholder="How can we help you?" required name="entry.1321721833" style="height:150px;"></textarea><br>
            <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
          </form>
        </div> <!-- End Contact Us 1st Column-->

        <div class="col-md-4 stripe text-white text-center">  <!-- Start Contact Us 2nd Column-->
          <h4>iLearning</h4>
          <p>iLearning, 
          NH-95, Ludhiana - Chandigarh Hwy, 
          Punjab - 140413<br /> 
          Phone: +00000000 <br />
          www.ilearning.com </p>
        </div> <!-- End Contact Us 2nd Column-->
      </div> <!-- End Contact Us Row-->
    </div> <!-- End Contact Us Container-->
    <!-- End Contact Us -->
