<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Donation Form</title>
  <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.min.css" rel="stylesheet" type="text/css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .container {
      /*        display: flex;*/
      width: 60%;
      margin: 5px;
      padding: 5px;
      box-shadow: 2px 2px 2px 2px rgba(173, 162, 162, 0.30);
      /*        align-content: center;*/
      justify-content: center;

    }

    .card-body {
      /*        background-color: red;*/
      float: right;
    }

    .card img {
      height: 100px;
      width: 100px;
      object-fit: cover;
      margin-left: 50px;
      /*        background-color: red;*/
    }
    form .part{
      margin-top: 20px;
    }
  </style>
</head>

<body>
<div class="d-flex justify-content-center align-items-center h-100">
  <div class="container p-4">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="user-img/blood-center.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Blood Donation Form</h5>
            <p class="card-text">Confidential - Please answer the following questions correctly. This will help to protect you and the patient who receives your blood.</p>
          </div>
        </div>
      </div>
    </div>
    <form class="row g-3 needs-validation" method="post" action="store-donor.php" novalidate>
      <div class="col-md-4 part">
        <label for="validationCustom01" class="form-label">Name</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="your_name" name="name" required>
      </div>

      <div class="col-md-4 part">
        <label for="validationCustom03" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="your_address" name="address" required>
        <div class="invalid-feedback">
          Please provide a valid Address.
        </div>
      </div>
      <div class="col-md-4 part">
        <label for="validationCustom04" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="your_phone number" name="contact_number" required>
        <div class="invalid-feedback">
          Please provide a valid Phone Number.
        </div>
      </div>

      <div class="col-md-4 part">
        <label for="validationCustom06" class="form-label">Weight</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="your_Weight" name="weight" required>
        <div class="invalid-feedback">
          Enter Your Weight
        </div>
      </div>

      <div class="col-md-4 part">
        <label for="validationCustom07" class="form-label">Blood Group</label>
        <select class="form-select" name="blood_group" id="validationCustom04" required>
          <option>A+</option>
          <option>A-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>B+</option>
          <option>B-</option>
          <option>O+</option>
          <option>O-</option>
        </select>
        <div class="invalid-feedback">
          Please select your blood group.
        </div>
      </div>
      <div class="col-md-4 part">
        <label for="validationCustom08" class="form-label">Age</label>
        <input type="text" class="form-control" name="age" id="validationCustom03" placeholder="your_age" required>
        <div class="invalid-feedback">
          <!-- Please provide a valid Phone Number. -->
        </div>
      </div>
      <div class="col-md-4 part">
        <label for="validationCustom05" class="form-label">Gender</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <div class="invalid-feedback">
          Please Select one.
        </div>
      </div>

      <div class="col-md-4 part">
        <label for="validationCustom05" class="form-label">Have you donated previously?</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="prev_donate" id="inlineRadio1" value="Yes">
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="prev_donate" id="inlineRadio2" value="No">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
        <div class="invalid-feedback">
          Please Select one.
        </div>
      </div>

      <div class="col-md-4 part">
        <label for="validationCustom06" class="form-label">What was the last time you donated blood?
</label>
        <input type="text" class="form-control" id="nepali-datepicker" placeholder="blood_donated_date" name="blood_donated_date" required>
        <div class="invalid-feedback">
          Enter Last Donated Time
        </div>
      </div>
      <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.min.js" type="text/javascript"></script>
      <script type="text/javascript">
         window.onload = function() {
                var mainInput = document.getElementById("nepali-datepicker");
                mainInput.nepaliDatePicker();
                /* Select your element */
                var elm = document.getElementById("nepali-datepicker");
                 
                /* Initialize Datepicker with options */
                elm.nepaliDatePicker({
                    ndpTriggerButton: true
                });
            };
      </script>

      <script>
         function showQuotaDiv() {
            let quotaDiv = document.querySelector("#quotaCertificateDiv");
            quotaDiv.style.display = "none";
            let quotas = document.querySelectorAll("input[name=quota]");
            quotas.forEach(quota => {
                quota.addEventListener('click', () => {
                    if (quotas[1].checked) {
                        quotaDiv.style.display = "block";
                        document.getElementById("quotaCertificate").setAttribute("required", "");
                    } else {
                        quotaDiv.style.display = "none";
                        document.getElementById("quotaCertificate").removeAttribute("required");
                    }
                });
            });
        }

        showQuotaDiv();
      </script>

      <div class="col-md-12 part">
        <label for="validationCustom09" class="form-label">Do you suffer from or have suffered from any of the following diseases?</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="heart disease" name="disease" id="heartDisease">
          <label class="form-check-label" for="heartDisease">
            Heart Disease
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="diabetese" name="disease" id="diabetes">
          <label class="form-check-label" for="diabetes">
            Diabetes
          </label>
        </div>
                  <div class="form-check">
          <input class="form-check-input" type="checkbox" value="tuberculosis" name="disease" id="tuberculosis">
          <label class="form-check-label" for="tuberculosis">
            Tuberculosis
          </label>
          </div>
                  <div class="form-check">
          <input class="form-check-input" type="checkbox" 
          value="lung disease" name="disease" id="lungDisease">
          <label class="form-check-label" for="lungDisease">
            Lung Disease
          </label>
        </div>
                <div class="form-check">
          <input class="form-check-input" type="checkbox" value="allergic disease" name="disease" id="allergicDisease">
          <label class="form-check-label" for="allergicDisease">
            Allergic Disease
          </label>
        </div>
                <div class="form-check">
          <input class="form-check-input" type="checkbox" value="kidney disease" name="disease" id="kidneyDisease">
          <label class="form-check-label" for="kidneyDisease">
            Kidney Disease
          </label>
        </div>
                <div class="form-check">
          <input class="form-check-input" type="checkbox" value="sexual transmitted disease" name="disease" id="sexualtransmittedDisease">
          <label class="form-check-label" for="sexualtransmittedDisease">
            Sexually Transmitted Disease
          </label>
        </div>
                <div class="form-check">
          <input class="form-check-input" type="checkbox" value="typhoid" name="disease" id="typhoid">
          <label class="form-check-label" for="typhoid">
            Typhoid ( last on year)
          </label>
        </div>
        <div class="invalid-feedback">
          Please provide a dieases.
        </div>
      </div>
      <div class="col-md-12 part">
        <label for="validationCustom09" class="form-label">Is there any history of surgery or blood transfusion in the past six months?</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="major" name="surgery" id="major">
          <label class="form-check-label" for="major">
           Major
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="minor" name="surgery" id="minor">
          <label class="form-check-label" for="minor">
           Minor
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="bloodtransfusion" name="surgery" id="bloodtransfusion">
          <label class="form-check-label" for="bloodtransfusion">
           Blood Transfusion
          </label>
        </div>

      <div class="col-md-12 part">
        <label for="validationCustom10" class="form-label">Blood Test Report</label>
        <input type="file" class="form-control" name="blood_test_report" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" placeholder="Upload your blood test report">
        <div class="invalid-feedback">
          Please provide your blood test report.
        </div>
      </div>

      <div class="col-md-4 part">
        <label for="validationCustom01" class="form-label">Active Stauts</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            Online
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Offline
          </label>
        </div>
      </div>
      <div class="col-12 part">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="agreed" id="invalidCheck" name="rule" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12 part">
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        <button class="btn btn-primary" type="reset">Reset</button>
      </div>
    </form>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

       // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (() => {
    //   'use strict'

    //   // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //   const forms = document.querySelectorAll('.needs-validation')

    //   // Loop over them and prevent submission
    //   Array.from(forms).forEach(form => {
    //     form.addEventListener('submit', event => {
    //       if (!form.checkValidity()) {
    //         event.preventDefault()
    //         event.stopPropagation()
    //       }

    //       form.classList.add('was-validated')
    //     }, false)
    //   })
    // })()
  </script>
</body>

</html>