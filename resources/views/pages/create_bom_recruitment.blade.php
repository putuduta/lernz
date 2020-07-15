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
                    <h1>Division Preferences</h1>
                    <p>Please choose your three preferred divisions.</p>
                    <p>Ensure that you have known and understand the three divisions that you’re interested in.</p>
                    <p>If you have any questions or require any further information regarding the divisions, please do not hesitate to contact us through:</p>
                    <p>
                        <span class="font-weight-bold">Michael Djiauw</span>
                        <br>
                        Line: michaeldjauw <br>
                        Phone Number: 089653150079
                    </p>
                    <p>
                       <span class="font-weight-bold">Cristina Ellen</span> <br>
                        Line: cristinaliem7 <br>
                        Phone Number: 081578006811 <br>
                    </p>

                    <p>Below is the explanation for BNEC division: </p>
                    <div class="text-justify">
                        <p>    1. Learning Management: Learning Management is the division responsible for maintaining the classes system in BNEC, such as TOEFL, Fast Track TOEFL, Debate, and Public Speaking classes. Learning Management pays attention to its class’s relevance to BINUSIAN needs by providing the classes and ensures that BNEC’s classes are qualified. The Learning Management division has the responsibility to fulfill what BNEC's families need to reach Global English Proficiency. </p>

                        <p>   2. Talent Development: There are many communities in BNEC, such as Debate, Speech, Storytelling, Newscasting, and Scrabble. These communities generate what’s called BNEC's talents. Therefore, the Talent Development Division is responsible for ensuring that a good management system maintains the communities and talents, so BNEC's talents can develop and continuously improve skills and achievements.</p>

                        <p>    3. Member Focus: Member Focus is a division that’s developed to enhance BNEC's focus in giving benefits to its members to satisfy their expectations towards BNEC. Member Focus acts as a mediator that connects all BNEC entities, including members, BoMs, talents, Liaison Officers, and tutors. The main focus of this division is to give a whole new experience and other benefits that BNEC's entities could get through our fun events, such as Outing Program, Study Tours, Gatherings, and many more. All of those programs are conducted to build and strengthen the bonds between all BNEC entities. Creativity and innovation, teamwork, communications, planning, and organizing skills are basic skills that you will learn from being a part of the Member Focus Division.</p>

                        <p>    4. Product Research & Development: BINUSIANS’ needs always change from time to time. Considering this condition, BNEC must also consider the relevance of its product with BINUSIANS’ needs. It is the responsibility of the Product Research and Development division to generate new products to satisfy these needs. In this division, you'll learn how to conduct research, develop, and maintain a new potential product. Besides that, you’ll also learn how to proofread and improve your English skills.</p>

                        <p>    5. Human Resource Development: Human Resources Development Division focuses on providing, developing, and optimizing human resources in BNEC. The HRD Division is responsible for recruiting new Board of Management and Tutors through interviews, while maintaining, tracking, and developing the performances of BNEC’s Board of Management through training and performance appraisal. The HRD Division is also responsible for building strong bonds among the Board of Management through gatherings. HRD division is where you can develop your analytical skill, judging skill, critical thinking, interpersonal skill, and many more. The HRD division also offers you the chance to enrich your knowledge of how the HRD works in a company.</p>

                        <p>    6. Information Technology: The Information Technology Division gathers data and publishes the updates about BNEC through technology to support BNEC's annual goals. By joining this division, you will learn how to maintain and create good information flow, as well as develop websites to support BNEC's events, such as administration, registration, etc. You can also learn how to maintain technology equipment related to BNEC works such as LCD Projector, Printer, and so on.</p>

                        <p>    7. Brand Management: Brand Management is responsible for increasing the brand recognition of BNEC through professional visual representation, and optimizing its design identity system. You will learn how to create a professional visual representation as well as exploring various new media.</p>

                        <p>    8. Public Relations: Every organization must deal with two important entities, internal and external entities. Public Relations division is a division that mainly focuses on maintaining relationships and becomes a window between BNEC and external entities, such as a company, another student organization, NGO (Non-government Organization), and, most importantly, our very own members. PR division is the ones who manage BNEC brand touch-point, while also interacting with the public and maintaining a good relationship that keeps BNEC and others connected. By managing BNEC social media, creating articles, attending other organizations' invitations, and dealing with non-profit organizations, you will learn communication skills, public speaking, content writing, and many more.</p>

                        <p>    9. Corporate Relations: Corporate Relations is a division that becomes the “bridge” between BNEC and profit organizations. The purpose of this division is to create, manage, maintain relations between BNEC and profit organizations. Corporate Relations is present to be a liaison and face of BNEC towards profit organization, so all actions of CR will become a brand recognized external to BNEC. In this division, you will learn how to negotiate, establish, and get a lot of networking with external entities. Therefore, Corporate Relations is the best place for you who want to learn about negotiation and get a lot of networks.</p>

                    </div>

                    </p>
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
