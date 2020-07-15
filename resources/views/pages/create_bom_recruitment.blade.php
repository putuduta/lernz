@extends('layouts.app')

@section('content')

<div class="container mt-5 py-5">
    <div class="card border-0 mb-2">
            <form id="regForm" method="POST" action="{{ action('BomRecruitmentController@create') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="card-header bg-teal font-weight-bold border-0">BOM RECRUITMENT</div>
            <!-- One "tab" for each step in the form: -->
            <div class="card-body border border-top-0 rounded-bottom">
                <div class="tab form-group">
                    <label for="buept_score" class="col-form-label
                        formright">{{ _('BUEPT Score:') }}</label>
                    <p><input type="text" id="buept_score" name="buept_score" class="form-control" required></p>
                    <label for="buept_score_proof" class="col-form-label
                        formright">{{ _('BUEPT Score Proof:') }}</label>
                    <div class="custom-file">
                        <input type="file" id="buept_score_proof" name="buept_score_proof"
                                        class="custom-file-input form-control"
                                        value="{{ old('buept_score_proof') }}">
                        <label class="trans-cst custom-file-label overflow-hidden" for="buept_score_proof">Choose file</label>
                    </div>
                </div>
                <div class="tab">
                    <label for="division_preference1" class="col-form-label
                            formright">{{ _('1st division preference:') }}</label>
                    <p><input type="text" id="division_preference1" name="division_preference1" class="form-control" required></p>
                    <label for="division_preference1_reason" class="col-form-label
                                        formright">{{ _('Please state your reason(s):') }}</label>
                    <p><textarea id="division_preference1_reason" name="division_preference1_reason" class="form-control" required> </textarea></p>
                    <label for="division_preference2" class="col-form-label
                            formright">{{ _('2nd division preference:') }}</label>
                    <p><input type="text" id="division_preference2" name="division_preference2" class="form-control" required></p>
                    <label for="division_preference2_reason" class="col-form-label
                                        formright">{{ _('Please state your reason(s):') }}</label>
                    <p><textarea id="division_preference2_reason" name="division_preference2_reason" class="form-control" required> </textarea></p>
                    <label for="division_preference3" class="col-form-label
                            formright">{{ _('3rd division preference:') }}</label>
                    <p><input type="text" id="division_preference3" name="division_preference3" class="form-control" required></p>
                    <label for="division_preference3_reason" class="col-form-label
                                        formright">{{ _('Please state your reason(s):') }}</label>
                    <p><textarea id="division_preference3_reason" name="division_preference3_reason" class="form-control" required> </textarea></p>
                </div>
            </div>
            <div class="form-group" style="overflow:auto;">
                <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


</script>

@endsection
