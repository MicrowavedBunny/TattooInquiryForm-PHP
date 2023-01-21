<!DOCTYPE html>
<html>

<head>
  <title>Tattoo Inquiry</title>
  <!-- BootStrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<!--font-->
<style type="text/css">
  @font-face {
    font-family: "My Custom Font";
    src: url(https://fonts.gstatic.com/s/jetbrainsmono/v13/tDbp2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO-LfjGbsVNLG7DGdF6OZ1PszQMgo-8.woff2) format("woff2");
  }

  p.customfont {
    font-family: "My Custom Font";
  }
</style>


<body style="background-color: black;color: #412a68;">
  <!--<iframe src = "URL" allowtransparency = "true"></iframe>-->
  <!-- maybe user later <input type="hidden" name="formID" value="221827538638163"> -->

  <!--edit this image-->
  <img class="rounded mx-auto d-block  p-1" src="InsertYourLogo" alt="Logo" height="163" width="250">

  <!--box for form mx-5 -->
  <div style="background-color: #f7f2ff; box-shadow: 0rem 1.375rem 3.25rem 2.125rem rgb(255 255 255 / 24%)"
    class="card mx-5 mb-5 border border-secondary">

    <!--<div class="card-header py-5 px-5 col-lg-6 offset-lg-3">--> <!--DONT DELETE-->
    <!--<div class="card-header">-->

    <div style="background-color: #f7f2ff" class="card-header border border-secondary">

      <h1 id="header_1" style="color:#412a68">
        Tattoo Appointment Request
      </h1>

      <div id="subHeader">
        In order to help me streamline the booking process please fill out any relevent information I may need for your
        appointment below. If there is a question you do not understand or are not sure how to answer, give a best guess
        and let me know at the end how I can help. Once this has been filled out you will be automatically put onto a
        waitlist and from then you will be contacted for more information.
      </div>

    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data" style="background-color: #f7f2ff" class="border border-secondary card-body">
      <!--First Name-->
      <div class="mb-4 row">
        <div class="form-group col-md-6">
          <label for="FirstName">First Name *</label>
          <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="Enter First Name" required>
        </div>
        <!--Last Name-->
        <div class="form-group col-md-6">
          <label for="LastName">Last Name *</label>
          <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Enter Last Name" required>
        </div>
      </div>

      <!--EMAIL-->
      <div class="mb-4 row">
        <div class="mb-4 form-group col-md-6">
          <label for="exampleInputEmail1">Email address *</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <!--Phone Number-->
        <div class="mb-4 form-group col-md-6">
          <label for="PhoneNumber">Phone Number</label>
          <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" placeholder="(999) 999-9999">
          <small class="form-text text-muted">Not required, I may phone if needed to discuss further.</small>
        </div>
      </div>


      <!--Placement-->
      <div class="mb-4 row">
        <div class="mb-4 form-group col-md-6">
          <label for="Placement">Placement *</label>
          <input type="text" class="form-control" name="Placement" id="Placement" placeholder="Enter Placement" required>
          <small class="form-text text-muted">(forearm, calf, etc. BE SPECIFIC.)</small>
        </div>

        <!--is this a cover-up?-->
        <div class="mb-4 form-group col-md-6"> <!--this is a radio with yes and no-->
          <label for="CoverUp">Is this a cover-up? *</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="CoverUp" id="CoverUp" value="Yes" required>
            <label class="form-check-label" for="CoverUpYes">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="CoverUp" id="CoverUp" value="No">
            <label class="form-check-label" for="CoverUpNo">
              No
            </label>
          </div>
        </div>
      </div>

      <!-- Placement Location picture-->
      <div class="mb-4 row">
        <div class="mb-4 form-group col-md-6">
          <label for="placementLocation">Placement Location</label>
          <input type="file" name="image" class="form-control-file" id="placementLocation">
          <small class="row m-auto form-text text-muted">If there is a cover-up involved, please take a well-lit photo
            of the tattoo or scar that you would like covered as well as some area around it. Also please note how old
            the tattoo/scar is in the description box.</small>
        </div>

        <!--Tattoo Size-->
        <div class="mb-4 form-group col-md-6">
          <label for="TattooSize">Tattoo Size *</label>
          <input type="text" class="form-control" name="TattooSize" id="TattooSize" placeholder="Enter Tattoo Size" required>
          <small class="form-text text-muted">(HxW in inches) please measure or try to guess.</small>
        </div>
      </div>

      <!--Style-->
      <div class="mb-4 row">
        <div class="mb-4 form-group col-md-6">
          <label for="Style">Style *</label>
          <input type="text" class="form-control" name="Style" id="Style" placeholder="Enter Style" required>
          <small class="form-text text-muted">Floral, line work, realism, traditional, dot work etc.</small>
        </div>

        <!--Color or B/G *-->
        <div class="mb-4 form-group col-md-6">
          <label for="Color">Color or B/G *</label>
          <input type="text" class="form-control" name="Color" id="Color" placeholder="Enter Color or B/G" required>
          <small class="form-text text-muted">Color, black and grey, mix</small>
        </div>
      </div>

      <!--Description-->
      <div class="mb-4 row">
        <div class="mb-4 form-group col-md-6">
          <label for="Description">Description *</label>
          <textarea class="form-control" name="Description" id="Description" rows="3" required></textarea>
          <small class="form-text text-muted">(Please be as specific as possible.)</small>
        </div>

        <!--link to font-->
        <div class="mb-4 form-group col-md-6">
          <label for="Font">If you would like script in your tattoo, please find a font on www.dafont.com, list it
            below, and what the exact wording will be.</label>
          <textarea class="form-control" name="Font" id="Font" rows="3"></textarea>
          <small class="form-text text-muted">Please note, any script in another language, I am unable to redesign or
            translate seeing as I can only read and write in English. Please make sure if it’s in another language the
            spelling and script is correct.</small>
        </div>
      </div>

      <!-- Reference 1-->
      <div class="mb-4 form-group col-md-6">
        <label for="reference1">Reference 1</label>
        <input type="file" class="form-control-file" name="reference1" id="reference1">
      </div>
      <!--reference 2-->
      <div class="mb-4 form-group col-md-6">
        <label for="reference2">Reference 2</label>
        <input type="file" class="form-control-file" name="reference2" id="reference2">
      </div>
      <!--reference 3-->
      <div class="mb-4 form-group col-md-6">
        <label for="reference3">Reference 3</label>
        <input type="file" class="form-control-file" name="reference3" id="reference3">
      </div>

      <!--Prefered days of the week Tue-Sat-->
      <div class="mb-4 form-group col-md-6">
        <label for="PreferedDays">Prefered days of the week *</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedDays" id="PreferedDays" value="Tue">
          <label class="form-check-label" for="PreferedDaysTue">
            Tuesday
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedDays" id="PreferedDays" value="Wed">
          <label class="form-check-label" for="PreferedDaysWed">
            Wednesday
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedDays" id="PreferedDays" value="Thu">
          <label class="form-check-label" for="PreferedDaysThu">
            Thursday
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedDays" id="PreferedDays" value="Fri">
          <label class="form-check-label" for="PreferedDaysFri">
            Friday
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedDays" id="PreferedDays" value="Sat">
          <label class="form-check-label" for="PreferedDaysSat">
            Saturday
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedDays" id="PreferedDays" value="Sun">
          <label class="form-check-label" for="PreferedDaysSun">
            Sunday
          </label>
        </div>
      </div>

      <!--Preferred Time of day options: Early (2pm-5pm),Afternoon (5pm-8pm),Late (7pm-10pm),HALF DAY (2pm-7pm/5pm-10pm),FULL DAY (2pm-10pm) Required Checkbox-->
      <div class="mb-4 form-group col-md-6">
        <label for="PreferedTime">Prefered Time of day *</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedTime" id="PreferedTime" value="Early">
          <label class="form-check-label" for="PreferedTimeEarly">
            Early (2pm-5pm)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedTime" id="PreferedTime" value="Afternoon">
          <label class="form-check-label" for="PreferedTimeAfternoon">
            Afternoon (5pm-8pm)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedTime" id="PreferedTime" value="Late">
          <label class="form-check-label" for="PreferedTimeLate">
            Late (7pm-10pm)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedTime" id="PreferedTime" value="Half Day">
          <label class="form-check-label" for="PreferedTimeHalfDay">
            Half Day (2pm-7pm/5pm-10pm)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="PreferedTime" id="PreferedTime" value="Full Day">
          <label class="form-check-label" for="PreferedTimeFullDay">
            Full Day (2pm-10pm)
          </label>
        </div>
      </div>

      <!--specific date textbox-->
      <div class="mb-4 form-group col-md-6">
        <label for="SpecificDate">If you are looking for a specific date, please list below those dates, so I can try to
          accommodate you.</label>
        <textarea rows="3" class="form-control" name="SpecificDate" id="SpecificDate"> </textarea>
      </div>

      <!--INQUIRIES & ADDITIONAL COMMENTS-->
      <div class="mb-4 form-group col-md-6">
        <label for="Inquiries">Inquiries & Additional Comments</label>
        <textarea class="form-control" name="Inquiries" id="Inquiries" rows="3"></textarea>
      </div>

      <!-- tattooed by me before? yes no radio buttons-->
      <div class="mb-4 form-group col-md-6">
        <label for="TattooedBefore">Have you been tattooed by me before? *</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="TattooedBefore" id="TattooedBefore" value="Yes" required>
          <label class="form-check-label" for="TattooedBeforeYes">
            Yes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="TattooedBefore" id="TattooedBefore" value="No">
          <label class="form-check-label" for="TattooedBeforeNo">
            No
          </label>
        </div>
      </div>
      <small class="form-text text-muted">*Please note if you are only looking for price estimates and are NOT looking
        to booking an appointment.*</small>

      <!--submit button-->
      <div style="background-color: #f7f2ff" class="card-footer "></div>
      <div class="mb-4 form-group col-md-6">
        <!--<input type="submit" name="submit" value="Upload">-->
        <button type="submit" name="submit" value="Upload" style="background-color: #412a68;" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>