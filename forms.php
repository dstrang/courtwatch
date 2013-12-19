<?php
require('includes/header.php');
?>

    <div id="container">
        
    </div>

    <script type="text/template" id="admin-forms-template">
    	<form action="formpost.php" method="post">
        	<div id="formAccordion">

                
                  <h3>Court Information</h3>
                  <div class="panel">
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-4">State/County: </label><input type="text" name="stateCounty" /></p>
                            <p class="col-md-6">Volunteer#: <input type="text" name="volunteerId" /><p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><label class="col-md-2">Court: </label><textarea rows="4" cols="50" name="court"></textarea></p>
                        </div>
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-6">Case Short Title: </label><input type="text" name="caseShortTitle" /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-6">Case Number: </label><input type="text" name="caseNumber" /></p>
                            <p class="col-md-6">Department: <input type="text" name="department" /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-6">Hearing Date: </label><input type="text" id="datePicker" name="hearingDate" /></p>
                            <p class="col-md-6">Hearing Time: <input type="text" name="hearingTime" /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-6">Judge/Commissioner: </label><input type="text" name="judgeName" /></p>
                            <div class="col-md-6">
                                <p class="col-md-3">Male <input type="radio" name="judgeGender" value="male" /></p>
                                <p class="col-md-3">Female <input type="radio" name="judgeGender" value="female" /></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-6">Petitioners Name: </label><input type="text" name="petitionerName" /></p>
                            <div class="col-md-6">
                                <p class="col-md-3">Male <input type="radio" name="petitionerGender" value="male" /></p>
                                <p class="col-md-3">Female <input type="radio" name="petitionerGender" value="female" /></p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="col-md-6"><label class="col-md-6">Respondents Name: </label><input type="text" name="respondentName" /></p>
                            <div class="col-md-6">
                                <p class="col-md-3">Male <input type="radio" name="respondentGender" value="male" /></p>
                                <p class="col-md-3">Female <input type="radio" name="respondentGender" value="female" /></p>
                            </div>
                        </div>

                        <div class="row">
                            <p class="col-md-8">Type of hearing:</p>
                            <p class="col-md-8"><input type="radio" name="hearingType" value="ex_parte" /> Ex Parte</p>
                            <p class="col-md-8"><input type="radio" name="hearingType" value="law_motion" /> Law and Motion</p>
                            <p class="col-md-8"><input type="radio" name="hearingType" value="hearing" /> Hearing</p>
                            <p class="col-md-8"><input type="radio" name="hearingType" value="trial" /> Trial</p>
                            <p class="col-md-8"><input type="radio" name="hearingType" value="settlement_conference" /> Settlement Conference</p>
                            <p class="col-md-8"><input type="radio" name="hearingType" value="other" /> Other: <input type="text" name="hearingTypeOther" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Courtroom Appearances:</p>
                        </div><br />

                        <div class="row">
                        <p class="col-md-3"><input type="checkbox" name="courtAppearance" value="petitioner" /> Petitioner</p>
                        <p class="col-md-3"><input type="radio" name="petitionerAppearanceType" value="counsel" /> Represented by counsel</p>
                        <p class="col-md-3"><input type="radio" name="petitionerAppearanceType" value="pro_se" /> Pro se</p>
                        </div><br />

                        <div class="row">
                        <p class="col-md-3"><input type="checkbox" name="courtAppearance" value="respondent" /> Respondent</p>
                        <p class="col-md-3"><input type="radio" name="respondentAppearanceType" value="counsel" /> Represented by counsel</p>
                        <p class="col-md-3"><input type="radio" name="respondentAppearanceType" value="pro_se" /> Pro se</p>
                        </div><br />

                        <div class="row">
                        <p class="col-md-3"><input type="checkbox" name="courtAppearance" value="attorneyForChild" /> Attorney for child</p>
                        <p class="col-md-4">Name: <input type="text" name="attorneyForChildName" /></p>
                        <p class="col-md-2"><input type="radio" name="attorneyForChildGender" value="male" /> Male</p>
                        <p class="col-md-2"><input type="radio" name="attorneyForChildGender" value="female" /> Female</p>
                        </div><br />

                        <div class="row">
                        <p class="col-md-8"><input type="checkbox" name="courtAppearance" value="other" /> Other: <input type="text" name="courtAppearanceOther" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If one of the parties was not present, what reason was given?</p>
                            <p class="col-md-4"><input type="text" name="notPresentReason" /></p>
                        </div><br />
                        

                        <div class="row">
                            <p class="col-md-8">Appear by phone:</p></p>
                            <p class="col-md-2">Yes <input type="radio" name="appearByPhone" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="appearByPhone" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Appear by skype:</p>
                            <p class="col-md-2">Yes <input type="radio" name="appearBySkype" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="appearBySkype" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Minute Order:</p>
                            <p class="col-md-2">Yes <input type="radio" name="minuteOrder" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="minuteOrder" value="no" /></p>
                        </div><br />
                        <p class="next">next</p>
                  </div>
                  <h3>Issues / Litigation</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">What issues were being heard/considered at the hearing?</p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="divorce" /> divorce </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="child_custody" /> child custody </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="child_support" /> child support </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="child_visitation" /> child visitation </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="restraining_order" /> restraining order </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="spousal_support" /> spousal support </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="contempt" /> contempt </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="attorney_fees" /> attorney fees </p>
                            <p class="col-md-8"><input type="checkbox" name="issues[]" value="other" /> other: <input type="text" name="issuesOther" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was the case continued to a future date?</p>
                            <p class="col-md-2">Yes <input type="radio" name="caseContinued" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="caseContinued" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, date <input type="text" name="caseContinuedDate" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Were any stipulations presented to the court?</p>
                            <p class="col-md-2">Yes <input type="radio" name="stipulationsPresented" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="stipulationsPresented" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, did the judge ask the parties if they understood the stipulation and its consequences, and if they entered into it freely and without coercion, undue influence, or duress?</p>
                            <p class="col-md-2">Yes <input type="radio" name="partiesUnderstoodStipulation" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="partiesUnderstoodStipulation" value="no" /></p>
                        </div><br />
                        <p class="next">next</p>
                  </div>
                  <h3>Child Custody / Visitation / Child Support Orders</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">What child custody/visitation orders were in place prior to the hearing?
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="joint_physical_custody" /> joint physical custody </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value=" joint_legal_custody" /> joint legal custody </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="legal_custody_petitioner" /> legal custody to petitioner </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="legal_custody_respondent" /> legal custody to respondent </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="physical_custody_petitioner" /> physical custody to petitioner </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="physical_custody_respondent" /> physical custody to respondent </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="unsupervised_visitation_petitioner" /> unsupervised visitation to petitioner </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="unsupervised_visitation_respondent" /> unsupervised visitation to respondent </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="supervised_visitation_petitioner" /> supervised visitation to petitioner </p>
                            <p class="col-md-8"><input type="checkbox" name="custodyVisitationOrders[]" value="supervised_visitation_respondent" /> supervised visitation to respondent </p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did either party request a change in an existing child custody order?</p>
                            <p class="col-md-2">Yes <input type="radio" name="requestChangeCustody" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="requestChangeCustody" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who was making the request?</p>
                            <p class="col-md-2">Petitioner <input type="checkbox" name="requestChangeCustodyParty[]" value="petitioner" /></p>
                            <p class="col-md-2">Respondent <input type="checkbox" name="requestChangeCustodyParty[]" value="respondent" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did either party request a change in an existing visitation (parenting time) order?</p>
                            <p class="col-md-2">Yes <input type="radio" name="requestChangeVisitation" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="requestChangeVisitation" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who was making the request?</p>
                            <p class="col-md-2">Petitioner <input type="checkbox" name="requestChangeVisitationParty[]" value="petitioner" /></p>
                            <p class="col-md-2">Respondent <input type="checkbox" name="requestChangeVisitationParty[]" value="respondent" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">What reason was given for requesting the change in custody/parenting time?</p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="domestic_violence" /> domestic violence </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="child_abuse" /> child abuse/neglect </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="relocation" /> relocation </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="educational_issues" /> educational issues </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="child_behavioral_issues" /> child behavioral issues </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="child_wishes" /> child's wishes </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="developmental_stage_of_child" /> developmental stage of child </p>
                            <p class="col-md-8"><input type="checkbox" name="reasonForRequest[]" value="other" /> other: <input type="text" name="reasonForRequestOther" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Were any changes made in the custody orders?</p>
                            <p class="col-md-2">Yes <input type="radio" name="anyCustodyChanges" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="anyCustodyChanges" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How was the custody order changed?</p>
                            <p class="col-md-8"><input type="radio" name="soleLegalCustody" value="petitioner" /> sole legal to petitioner </p>
                            <p class="col-md-8"><input type="radio" name="soleLegalCustody" value="respondent" /> sole legal to respondent </p>
                            <p class="col-md-8"><input type="radio" name="jointLegalCustody" value="petitioner" /> joint legal to petitioner </p>
                            <p class="col-md-8"><input type="radio" name="jointLegalCustody" value="respondent" /> joint legal to respondent </p>
                            <p class="col-md-8"><input type="radio" name="solePhysicalCustody" value="petitioner" /> sole physical to petitioner </p>
                            <p class="col-md-8"><input type="radio" name="solePhysicalCustody" value="respondent" /> sole physical to respondent </p>
                            <p class="col-md-8"><input type="radio" name="jointPhysicalCustody" value="petitioner" /> joint physical to petitioner </p>
                            <p class="col-md-8"><input type="radio" name="jointPhysicalCustody" value="respondent" /> joint physical to respondent </p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Were any changes made in the visitation orders?</p>
                            <p class="col-md-2">Yes <input type="radio" name="anyVisitationChanges" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="anyVisitationChanges" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How was the visitation (parenting time) order changed?</p>
                            <p class="col-md-8"><input type="radio" name="increasedVisitation" value="petitioner" /> increased for petitioner </p>
                            <p class="col-md-8"><input type="radio" name="increasedVisitation" value="respondent" /> increased for respondent </p>
                            <p class="col-md-8"><input type="radio" name="terminatedVisitation" value="petitioner" /> terminated for petitioner </p>
                            <p class="col-md-8"><input type="radio" name="terminatedVisitation" value="respondent" /> terminated for respondent </p>
                            <p class="col-md-8"><input type="radio" name="supervisedVisitation" value="petitioner" /> supervised for petitioner </p>
                            <p class="col-md-8"><input type="radio" name="supervisedVisitation" value="respondent" /> supervised for respondent </p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Were there any prior or current allegations of domestic violence or child abuse against a party who received increased custody or visitation?</p>
                            <p class="col-md-8"><input type="radio" name="allegationsOfDVorCA" value="yes" /> Yes</p>
                            <p class="col-md-8"><input type="radio" name="allegationsOfDVorCA" value="no" /> No</p>
                            <p class="col-md-8"><input type="radio" name="allegationsOfDVorCA" value="unknown" /> Unknown</p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was a party requesting increased custody or parenting time reported to be in arrears in child support?</p>
                            <p class="col-md-8"><input type="radio" name="arrearsReported" value="yes" /> Yes</p>
                            <p class="col-md-8"><input type="radio" name="arrearsReported" value="no" /> No</p>
                            <p class="col-md-8"><input type="radio" name="arrearsReported" value="unknown" /> Unknown</p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was either party attempting to change a child support order?</p>
                            <p class="col-md-8"><input type="radio" name="childSupportChanged" value="yes" /> Yes</p>
                            <p class="col-md-8"><input type="radio" name="childSupportChanged" value="no" /> No</p>
                            <p class="col-md-8"><input type="radio" name="childSupportChanged" value="unknown" /> Unknown</p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who was attempting to change the order?</p>
                            <p class="col-md-2">Primary custodial parent <input type="radio" name="whoChangedChildSupport" value="primary_custodial_parent" /></p>
                            <p class="col-md-2">Other parent <input type="radio" name="whoChangedChildSupport" value="other_parent" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was the support order changed?</p>
                            <p class="col-md-2">Yes <input type="radio" name="wasSupportChanged" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="wasSupportChanged" value="no" /></p>
                            <p class="col-md-8"><input type="radio" name="supportChange" value="increase" /> increased</p>
                            <p class="col-md-8"><input type="radio" name="supportChange" value="decrease" /> decreased</p>
                            <p class="col-md-8"><input type="radio" name="supportChange" value="no_change" /> no change</p>
                        </div>
                        <p class="next">next</p>
                  </div>
                  <h3>Due Process / Constitutional Rights</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">Was a court reporter present to make a record of the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="courtReporterPresent" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="courtReporterPresent" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If no court reporter was present, did a (party) or (child’s attorney) request a court reporter and/or object to the hearing proceeding without a court reporter?</p>
                            <p class="col-md-2">Yes <input type="radio" name="requestCourtReporter" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="requestCourtReporter" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, did the hearing proceed over the objection?</p>
                            <p class="col-md-2">Yes <input type="radio" name="hearingProceedAnyway" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="hearingProceedAnyway" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did either party ask to audio/or video record the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="askForRecording" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="askForRecording" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, was the request granted?</p>
                            <p class="col-md-2">Yes <input type="radio" name="requestForRecGranted" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="requestForRecGranted" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did any meeting/discussion take place in chambers (other than examination of a child witness)?</p>
                            <p class="col-md-2">Yes <input type="radio" name="meetingInChambers" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="meetingInChambers" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who went into chambers for the meeting/discussion?</p>
                            <p class="col-md-8"><input type="checkbox" name="whoWentToChambers[]" value="petitioner_attorney" /> petitioner's attorney</p>
                            <p class="col-md-8"><input type="checkbox" name="whoWentToChambers[]" value="respondent_attorney" /> respondent's attorney</p>
                            <p class="col-md-8"><input type="checkbox" name="whoWentToChambers[]" value="child_attorney" /> child's attorney</p>
                            <p class="col-md-8"><input type="checkbox" name="whoWentToChambers[]" value="petitioner" /> petitioner</p>
                            <p class="col-md-8"><input type="checkbox" name="whoWentToChambers[]" value="respondent" /> respondent</p>
                            <p class="col-md-8"><input type="checkbox" name="whoWentToChambers[]" value="court_reporter" /> court reporter</p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If either the petitioner and/or respondent were excluded from the in-chambers meeting/discussion, what reason was given for the exclusion?</p>
                            <p class="col-md-4"><input type="text" name="reasonForExclusionFromChambers" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If a record was made of the in-chambers meeting by a court reporter, did the judge order the record to be sealed?</p>
                            <p class="col-md-2">Yes <input type="radio" name="recordsSealed" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="recordsSealed" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was any report/information from a court appointee presented to the court?</p>
                            <p class="col-md-2">Yes <input type="radio" name="courtAppointeeReport" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="courtAppointeeReport" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who was the author of the report or supplier of information?</p>
                            <p class="col-md-8">Name: <input type="text" name="reportAuthor" /></p>
                            <p class="col-md-8"><input type="radio" name="reportAuthorPosition" value="mediator" /> mediator</p>
                            <p class="col-md-8"><input type="radio" name="reportAuthorPosition" value="evaluator" /> evaluator/investigator</p>
                            <p class="col-md-8"><input type="radio" name="reportAuthorPosition" value="court_appointed_therapist" /> court appointed therapist</p>
                            <p class="col-md-8"><input type="radio" name="reportAuthorPosition" value="co_parenting_coordinator" /> co-parenting coordinator</p>
                            <p class="col-md-8"><input type="radio" name="reportAuthorPosition" value="child_attorney" /> child's attorney</p>
                            <p class="col-md-8"><input type="radio" name="reportAuthorPosition" value="other" /> other: <input type="text" name="reportAuthorPositionOther" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did either party object to the information/report being read and/or considered by the court?</p>
                            <p class="col-md-2">Yes <input type="radio" name="reportObjection" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="reportObjection" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, what was the basis for the objection?</p>
                            <p class="col-md-8"><input type="checkbox" name="basisforObjection[]" value="no_report_received_prior" /> party did not receive the report at least 10 days prior to the hearing</p>
                            <p class="col-md-8"><input type="checkbox" name="basisforObjection[]" value="report_is_hearsay" /> report/information is hearsay</p>
                            <p class="col-md-8"><input type="checkbox" name="basisforObjection[]" value="report_not_authenticated" /> report/information was not authenticated</p>
                            <p class="col-md-8"><input type="checkbox" name="basisforObjection[]" value="other" /> other: <input type="text" name="basisForObjectionOther" /></p>
                        </div><br />

                        <div class="row">               
                            <p class="col-md-8">How did the judge rule on the objection?</p>
                            <p class="col-md-2">sustained/granted <input type="radio" name="objectionRuled" value="granted" /></p>
                            <p class="col-md-2">overruled/denied <input type="radio" name="objectionRuled" value="denied" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">If overruled, was the objecting party given the opportunity to examine the author of the report/supplier of information on the witness stand at the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="oppToExamReport" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="oppToExamReport" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If no, was a hearing date set to allow for such examination?</p>
                            <p class="col-md-2">Yes <input type="radio" name="dateToAllowExam" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="dateToAllowExam" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did anyone else, including a party, present information to the court about something that was said, done, or known by someone who was not present in court to testify as a witness?</p>
                            <p class="col-md-2">Yes <input type="radio" name="infoOnSomeoneNotPresent" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="infoOnSomeoneNotPresent" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who presented the information?</p>
                            <p class="col-md-4"><input type="text" name="whoPresentedInfo" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was a hearsay objection made to the information?</p>
                            <p class="col-md-2">Yes <input type="radio" name="hearsayObjection" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="hearsayObjection" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, who made the objection?</p>
                            <p class="col-md-4"><input type="text" name="whoHearsayObjection" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did the court hear and/or consider the information over the objection?</p>
                            <p class="col-md-2">Yes <input type="radio" name="hearsayObjectionConsidered" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="hearsayObjectionConsidered" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was any party denied the right to present evidence or witnesses at the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="deniedRightToPresent" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="deniedRightToPresent" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, which party was denied?</p>
                            <p class="col-md-2">Petitioner <input type="radio" name="whichPartyDenied" value="petitioner" /></p>
                            <p class="col-md-2">Respondent <input type="radio" name="whichPartyDenied" value="respondent" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">What reason was given for the denial?</p>
                            <p class="col-md-4"><input type="text" name="reasonForDenial" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was a future hearing date set to allow the party the opportunity to present evidence and/or witnesses?</p>
                            <p class="col-md-2">Yes <input type="radio" name="futureDateforEvidence" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="futureDateforEvidence" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was any party prevented from conducting discovery?</p>
                            <p class="col-md-2">Yes <input type="radio" name="preventedToDiscover" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="preventedToDiscover" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, what reason was given for the denial of the right to discovery?</p>
                            <p class="col-md-4"><input type="text" name="reasonForDenialOfDiscovery" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was each party given equal opportunity to speak and present his/her position to the court?</p>
                            <p class="col-md-2">Yes <input type="radio" name="equalOpportunity" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="equalOpportunity" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If not, which party was given less opportunity?</p>
                            <p class="col-md-2">Petitioner <input type="radio" name="whichPartyLessOpp" value="petitioner" /></p>
                            <p class="col-md-2">Respondent <input type="radio" name="whichPartyLessOpp" value="respondent" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was any party discouraged in any way by the judge from speaking publicly about the case?</p>
                            <p class="col-md-2">Yes <input type="radio" name="discouragedFromSpeaking" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="discouragedFromSpeaking" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, what order or comment was made by the judge regarding speaking publicly about the case?</p>
                            <p class="col-md-4"><input type="text" name="whatOrderMade" /></p>
                        </div><br />
                        <p class="next">next</p>
                  </div>
                  <h3>Judicial Conduct / Demeanor</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">Was any audience member asked to identify themselves before the hearing began?</p>
                            <p class="col-md-2">Yes <input type="radio" name="audienceMemberIdentified" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="audienceMemberIdentified" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Was anyone who was not identified as a witness, excluded from the proceeding?</p>
                            <p class="col-md-2">Yes <input type="radio" name="anyoneExcluded" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="anyoneExcluded" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, what reason was given for the exclusion?</p>
                            <p class="col-md-4"><input type="text" name="reasonForExclusionFromProceeding" /></p>
                        </div><br />

                        <div class="row"> 
                            <p class="col-md-8">Was the judge courteous and respectful toward the parties and attorneys throughout the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="judgeCourteous" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="judgeCourteous" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If no, to whom was the judge disrespectful?</p>
                            <p class="col-md-4"><input type="text" name="whoWasJudgeDisrespectful" /></p>
                            <p class="col-md-8">Describe <input type="text" name="howWasJudgeDisrespectful" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How did the person who was treated disrespectfully by the judge react/respond?</p>
                            <p class="col-md-4"><input type="text" name="howMistreatedRespond" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did anyone other than the judge speak disrespectfully to another person during the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="anyoneDisrespectful" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="anyoneDisrespectful" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, describe (who/what):</p>
                            <p class="col-md-8">Who was disrespectful?: <input type="text" name="whoWasDisrespectful" /></p>
                            <p class="col-md-8">Who were they disrespecting?: <input type="text" name="whoWasDisrespected" /><br /></p>
                            <p class="col-md-8">How were they disrespected?: <input type="text" name="describeDisrespect" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How did the person who was disrespected react/respond?</p>
                            <p class="col-md-4"><input type="text" name="howWasDisrespectful" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How did the judge handle the situation?</p>
                            <p class="col-md-4"><input type="text" name="howJudgeHandleDisrespect" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">Did anyone raise his/her voice or behave aggressively during the hearing?</p>
                            <p class="col-md-8">Yes <input type="radio" name="anyoneAggressive" value="yes" /></p>
                            <p class="col-md-8">No <input type="radio" name="anyoneAggressive" value="no" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">If yes, describe (who/what):</p>
                            <p class="col-md-8">Who was aggressive?: <input type="text" name="whoAggressive" /></p>
                            <p class="col-md-8">Who were they aggressive towards?: <input type="text" name="whoAggressed" /></p>
                            <p class="col-md-8">How were they aggressive?: <input type="text" name="describeAggression" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How did the person who was aggressed react/respond?</p>
                            <p class="col-md-4"><input type="text" name="howAggressedReact" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How did the judge respond to the situation?</p>
                            <p class="col-md-4"><input type="text" name="howJudgeHandleAggression" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">At any time during the hearing, did one of the parties cry?</p>
                            <p class="col-md-2">Yes <input type="radio" name="anyoneCry" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="anyoneCry" value="no" /></p>
                        </div><br />
                    
                        <div class="row">
                            <p class="col-md-8">If yes, who cried and how did the judge respond to the situation?</p>
                            <p class="col-md-8">Who cried?: <input type="text" name="whoCried" /></p>
                            <p class="col-md-8">Judge's response: <input type="text" name="howJudgeRespondCry" /></p>
                        </div><br />
                  
                        <div class="row">
                            <p class="col-md-8">At any time did the judge appear impatient, irritated, or angry because a non-represented party did not understand a legal procedure or issue, or how to represent him/herself?</p>
                            <p class="col-md-8">Yes <input type="radio" name="judgeAngryAtNoRep" value="yes" /></p>
                            <p class="col-md-8">No <input type="radio" name="judgeAngryAtNoRep" value="no" /></p>
                            <p class="col-md-8">N/A <input type="radio" name="judgeAngryAtNoRep" value="na" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">If yes, describe how the judge behaved and what s/he said:</p>
                            <p class="col-md-4"><input type="text" name="howJudgeBehaved" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">At any time during the hearing, did it appear that a party was incapable of meaningfully participating because of a physical condition, cognitive impairment, or emotional distress?</p>
                            <p class="col-md-2">Yes <input type="radio" name="partyIncapableParticipate" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="partyIncapableParticipate" value="no" /></p>
                        </div><br />
                  
                        <div class="row">
                            <p class="col-md-8">If yes, describe the condition of the party?</p>
                            <p class="col-md-4"><input type="text" name="whichCondition" /></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-8">How did the judge handle the situation?</p>
                            <p class="col-md-4"><input type="text" name="judgeHandleIncapParty" /></p>
                        </div><br />
                        <p class="next">next</p>
                  </div>
                  <h3>Impressions</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">Did it appear that there was an "even playing field" between the parties?</p>
                            <p class="col-md-2">Yes <input type="radio" name="evenPlayingField" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="evenPlayingField" value="no" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-12">If no, which party appeared to be disadvantaged and why?</p>
                            <p class="col-md-12">Which party?: <input type="text" name="evenPlayingFieldDisadvantaged" /></p>
                            <p class="col-md-12">Describe: <input type="text" name="evenPlayingFieldDescription"/></p>
                        </div><br />

                        <div class="row">
                            <p class="col-md-12">Did an un-represented party appear to be disadvantaged in the litigation because of the legal expertise of the other party's attorney?</p>
                            <p class="col-md-12"><input type="radio" name="disadvantagedDueToLegalExpertise" value="yes" /> Yes</p>
                            <p class="col-md-12"><input type="radio" name="disadvantagedDueToLegalExpertise" value="no" /> No</p>
                            <p class="col-md-12"><input type="radio" name="disadvantagedDueToLegalExpertise" value="na" /> N/A</p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did it appear that both parties were held to the same standards of conduct?</p>
                            <p class="col-md-2">Yes <input type="radio" name="conduct" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="conduct" value="no" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">If no, describe what was said or done to give the impression that one
                            party was being held to a different standard than the other:</p>
                            <p class="col-md-4"><input type="text" name="conductDescription"/></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was there any demonstration of familiarity/camaraderie between a party
                            or attorney for a party with other court appointees/officials/personnel
                            that led to the appearance of bias in favor of one party?</p>
                            <p class="col-md-2">Yes <input type="radio" name="familiarity" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="familiarity" value="no" /></p>
                        </div>

                        <div class="row">
                            <p class="col-md-8">If yes, describe:
                            <input type="text" name="familiarityDescription"/>
                            </p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was there any demonstration of favoritism or antagonism toward one of the
                            parties by a judicial official?</p>
                            <p class="col-md-2">Yes <input class="more" type="radio" name="favoritism" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="favoritism" value="no" /></p>
                        </div>

                        <div class="row">
                                <p class="col-md-12">If yes, describe: <input type="text" name ="favoritismDescription"/></p>
                        </div>
                        
                        <div class="row">
                            <p class="col-md-12">Other Remarks: <input type="text" name="otherRemarks"/></p>
                            <p class="next">next</p>
                        </div>
                  </div>
                  <h3>Accommodations</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-6">Was an interpreter present for either party?</p>
                            <p class="col-md-3">Yes <input type="radio" name="interpreterPresent" value="yes" /></p>
                            <p class="col-md-3">No <input type="radio" name="interpreterPresent" value="no" /><br /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-6">If yes, on whose behalf was the interpreter present?</p>
                            <p class="col-md-3">Petitioner <input type="radio" name="whoseBehalf[]" value="petitioner" /></p>
                            <p class="col-md-3">Respondent <input type="radio" name="whoseBehalf[]" value="respondent" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-12">Did either party ask for accommodations?</p>
                            <p class="col-md-12"><input type="radio" name="accommodations" value="yes" /> Yes</p>
                            <p class="col-md-12"><input type="radio" name="accommodations" value="no" /> No</p>
                            <p class="col-md-12"><input type="radio" name="accommodations" value="unknown" /> Unknown</p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-6">If yes:</p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-6">Who requested the accommodations?</p>
                            <p class="col-md-3">Petitioner <input type="checkbox" name="whoRequestedAccommodations[]" value="petitioner" /></p>
                            <p class="col-md-3">Respondent <input type="checkbox" name="whoRequestedAccommodations[]" value="respondent" /></p>
                        </div>
                        <br />
                        <div class="row">
                            <p class="col-md-12">What accommodations were requested? <input type="text" name="accommodationsRequested"/></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-12">What accommodations were provided? <input type="text" name="accommodationsProvided"/></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-8">Did the judge reveal a diagnosis for which the accommodations were requested?</p>
                            <p class="col-md-2">Yes <input type="radio" name="diagnosis" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="diagnosis" value="no" /></p>
                        </div>
                        <p class="next">next</p>
                  </div>
                  <h3>Domestic Violence</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-12">Did one party have a protective order in place against the other?</p>
                            <p class="col-md-12"><input type="radio" name="protectiveOrder" value="yes" /> Yes</p>
                            <p class="col-md-12"><input type="radio" name="protectiveOrder" value="no" /> No</p>
                            <p class="col-md-12"><input type="radio" name="protectiveOrder" value="unknown" /> Unknown</p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-12">If yes, who was protected?
                            <p class="col-md-12"><input type="checkbox" name="protected[]" value="petitioner" /> Petitioner</p>
                            <p class="col-md-12"><input type="checkbox" name="protected[]" value="respondent" /> Repsondent</p>
                            <p class="col-md-12"><input type="checkbox" name="protected[]" value="children" /> Child(ren) </p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-8">Was the restrained party seeking to terminate the protective order?</p>
                            <p class="col-md-2">Yes <input type="radio" name="terminate" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="terminate" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-8">If yes, was the protective order dismissed?</p>
                            <p class="col-md-2">Yes <input type="radio" name="dismissed" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="dismissed" value="no" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did anyone raise allegations of domestic violence at the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="allegations" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="allegations" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-12">If yes, who raised the allegation?</p>
                            <p class="col-md-12"><input type="checkbox" name="domesticViolenceAllegation[]" value="petitioner" /> Petitioner</p>
                            <p class="col-md-12"><input type="checkbox" name="domesticViolenceAllegation[]" value="respondent" /> Respondent</p>
                            <p class="col-md-12"><input type="checkbox" name="domesticViolenceAllegation[]" value="other" /> Other
                                <input type="text" name="domesticViolenceAllegationOther"/>
                            </p><br />
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-12">What type of DV was alleged? <br />
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="typeOfDV[]" value="physical" /> Physical</p>
                            <p class="col-md-12"><input type="checkbox" name="typeOfDV[]" value="sexual" /> Sexual</p>
                            <p class="col-md-12"><input type="checkbox" name="typeOfDV[]" value="verbal" /> Verbal/Psychological/Threats</p>
                            <p class="col-md-12"><input type="checkbox" name="typeOfDV[]" value="stalking" /> Stalking</p>
                            <p class="col-md-12"><input type="checkbox" name="typeOfDV[]" value="other" /> Other: 
                                <input type="text" name="typeOfDVOther"/>
                            </p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did the party who raised the allegation of DV request a restraining order?</p>
                            <p class="col-md-2">Yes <input type="radio" name="restrainingOrder" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="restrainingOrder" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-8">If yes, was the request granted?</p>
                            <p class="col-md-2">Yes <input type="radio" name="domesticViolenceRequestGranted" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="domesticViolenceRequestGranted" value="no" /></p>
                        </div><br /><br />
                        <div class="row">
                            <p class="col-md-12">If the request was not granted, what reason was given for the denial?
                                <input type="text" name="requestNotGrantedDV"/>
                            </p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-12">If the request was granted:</p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did the judge explain the conditions of the order and the consequences of violating the order?</p>
                            <p class="col-md-2">Yes <input type="radio" name="conditions" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="conditions" value="no" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did the judge order the alleged perpetrator to turn in all weapons?</p>
                            <p class="col-md-2">Yes <input type="radio" name="turnInWeapons" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="turnInWeapons" value="no" /></p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-12">Describe any other orders made for the safety of the alleged victim(s):
                                <input type="text" name="otherOrders"/>
                            </p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was a party with a protective order or reporting DV ordered to have 
                            contact with the alleged abuser?</p>
                            <p class="col-md-2">Yes <input type="radio" name="contactWithAbuser" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="contactWithAbuser" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-12">If yes, what were the conditions of the contact?<br />
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="conditionsOfContact[]" value="mediation" /> Mediation</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="conditionsOfContact[]" value="classes" /> Co-parenting classes</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="conditionsOfContact[]" value="child_exchanges" /> Child exchanges</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="conditionsOfContact[]" value="other" /> Other</p>
                            <input type="text" name="conditionsOfContactOther" />
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">If the party protected or reporting DV was ordered to have contact with the 
                            alleged abuser for child  exchanges, where were the exchanges to take place?</p>
                            <p class="col-md-4"><input type="text" name="conditionsOfContactPlace"/></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was the party protected or reporting DV accused by the alleged abuser of fabricating, exaggerating, 
                            alienating, or using the allegation for a tactical advantage in the litigation?</p>
                            <p class="col-md-2">Yes <input type="radio" name="tacticalAdvantage" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="tacticalAdvantage" value="no" /></p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did the judge or any court appointee make gestures or comments indicating that s/he
                            was disbelieving, minimizing, or ridiculing the report of DV?</p>
                            <p class="col-md-2">Yes <input type="radio" name="ridicule" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="ridicule" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-8">If yes, what gesture/comment was made and who made it?</p>
                            <p class="col-md-4"><input type="text" name="ridiculeDescription"/></p>
                            </p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was a provision made for a party protected or reporting DV, to leave the courtroom
                            ahead of the other party as a safety measure?</p>
                            <p class="col-md-2">Yes <input type="radio" name="provisionMade" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="provisionMade" value="no" /></p>
                        </div>
                        <p class="next">next</p>
                  </div>
                  <h3>Child Abuse</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">Did anyone raise allegations of child abuse at the hearing?</p>
                            <p class="col-md-2">Yes <input type="radio" name="childAbuse" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="childAbuse" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-12">If yes, who raised the allegation?</p>
                            <p class="col-md-12"><input type="checkbox" name="whoAllegatedChildAbuse[]" value="petitioner" /> Petitioner</p>
                            <p class="col-md-12"><input type="checkbox" name="whoAllegatedChildAbuse[]" value="respondent" /> Respondent</p>
                            <p class="col-md-12"><input type="checkbox" name="whoAllegatedChildAbuse[]" value="other" /> Other
                                <input type="text" name="whoAllegatedChildAbuseOther"/>
                            </p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-12">What type of child abuse was alleged?</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="allegedChildAbuseType[]" value="physical" /> Physical</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="allegedChildAbuseType[]" value="sexual" /> Sexual</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="allegedChildAbuseType[]" value="neglect" /> Neglect</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="allegedChildAbuseType[]" value="verbal" /> Verbal/Psychological/Threats</p>
                        </div>
                        <div class="row">
                            <p class="col-md-12"><input type="checkbox" name="allegedChildAbuseType[]" value="other" /> Other
                                <input type="text" name="allegedChildAbuseTypeOther"/>
                            </p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-12">What was the age of the alleged victim(s)?</p>
                            <p class="col-md-12"><input type="checkbox" name="victimAge[]" value="0_4" /> 0-4</p>
                            <p class="col-md-12"><input type="checkbox" name="victimAge[]" value="5_10" /> 5-10</p>
                            <p class="col-md-12"><input type="checkbox" name="victimAge[]" value="11_14" /> 11-14</p>
                            <p class="col-md-12"><input type="checkbox" name="victimAge[]" value="over14" /> Over 14</p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-12">Was the allegation already reported to law enforcement?</p>
                            <p class="col-md-12"><input type="radio" name="reported" value="yes" /> Yes</p>
                            <p class="col-md-12"><input type="radio" name="reported" value="no" /> No</p>
                            <p class="col-md-12"><input type="radio" name="reported" value="unknown" /> Unknown</p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was an investigative report of the abuse ordered by the court?</p>
                            <p class="col-md-2">Yes <input type="radio" name="investigativeReport" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="investigativeReport" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-12">If yes, who was ordered to do an investigation?</p>
                            <p class="col-md-12"><input type="radio" name="investigation" value="mdit" /> MDIT/law investigation</p>
                            <p class="col-md-12"><input type="radio" name="investigation" value="cps" /> Child Protective Services </p>
                            <p class="col-md-12"><input type="radio" name="investigation" value="probation" /> Probation dept.</p>
                            <p class="col-md-12"><input type="radio" name="investigation" value="evaluator" /> Family court evaluator/investigator,
                                Name: <input type="text" name="evaluatorName" />
                            </p>
                            <p class="col-md-12"><input type="radio" name="investigation" value="mediator" /> Family court mediator,
                                Name: <input type="text" name="mediatorName" />
                            </p>
                            <p class="col-md-12"><input type="radio" name="investigation" value="other" /> Other 
                                <input type="text" name="investigationOther"/>
                            </p>
                        </div><br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">If the allegation was of sexual abuse, did the court specifically
                            order a FC§3118 investigation?</p>
                            <p class="col-md-2">Yes <input type="radio" name="3118_investigation" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="3118_investigation" value="no" /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-12">Name of evaluator/investigator chosen? <input type="text" name="3118_investigator" /></p>
                        </div>
                        <br /><br />
                        
                        <div class="row">
                            <p class="col-md-8">Was the child ordered to have contact with the alleged abuser?</p>
                            <p class="col-md-2">Yes <input type="radio" name="childContactWithAbuser" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="childContactWithAbuser" value="no" /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-12">If yes, what were the conditions of the contact?</p>
                            <p class="col-md-12"><input type="checkbox" name="contactConditions[]" value="unsupervised" /> Unsupervised contact</p>
                            <p class="col-md-12"><input type="checkbox" name="contactConditions[]" value="professional" /> Contact supervised by professional</p>
                            <p class="col-md-12"><input type="checkbox" name="contactConditions[]" value="neutral" /> Contact supervised by non-professional neutral person</p>
                            <p class="col-md-12"><input type="checkbox" name="contactConditions[]" value="family_member" /> Contact supervised by family member/friend</p>
                            <p class="col-md-12"><input type="checkbox" name="contactConditions[]" value="therapy" /> Parent/child therapy</p>
                            <p class="col-md-12"><input type="checkbox" name="contactConditions[]" value="other" /> Other 
                                <input type="text" name="contactConditionsOther"/>
                            </p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-8">Did the party who raised the allegation request an order protecting the child(ren)?</p>
                            <p class="col-md-2">Yes <input type="radio" name="requestOrder" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="requestOrder" value="no" /><br /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-8">If yes, was the request granted?</p>
                            <p class="col-md-2">Yes <input type="radio" name="childAbuseRequestGranted" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="childAbuseRequestGranted" value="no" /><br /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-12">If the request was not granted, what reason was given for the denial?
                                <input type="text" name="requestNotGrantedChildAbuseReason" />
                            </p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-8">Was the party reporting child abuse accused by anyone of bad motive, such as fabricating,
                            exaggerating, alienating, or using the allegation for a tactical advantage in the litigation?</p>
                            <p class="col-md-2">Yes <input type="radio" name="badMotive" value="yes" />
                            <p class="col-md-2">No <input type="radio" name="badMotive" value="no" /><br />
                        </div>
                        <div class="row">
                            <p class="col-md-12">If yes, who accused the reporting party of bad motive?
                                <input type="text" name="accuser" />
                            </p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-8">Did the judge or any court appointee make gestures or comments indicating that s/he was
                            disbelieving, minimizing, or ridiculing the report of child abuse?</p>
                            <p class="col-md-2">Yes <input type="radio" name="disbelief" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="disbelief" value="no" /><br /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-12">If yes, describe:
                                <input type="text" name="disbeliefDescription" />
                            </p><br />
                        </div>
                        <p class="next">next</p>
                  </div>
                  <h3>Child's Input</h3>
                  <div>
                        <div class="row">
                            <p class="col-md-8">Did anyone request that a child involved in the litigation appear before
                            the court to provide input and/or voice his/her wishes?</p>
                            <p class="col-md-2">Yes <input type="radio" name="childInput" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="childInput" value="no" /></p>
                        </div><br />
                        
                        <div class="row">
                            <p class="col-md-12">Who made the request?</p>
                            <p class="col-md-12"><input type="checkbox" name="childInputRequest[]" value="petitioner" /> Petitioner</p>
                            <p class="col-md-12"><input type="checkbox" name="childInputRequest[]" value="respondent" /> Respondent</p>
                            <p class="col-md-12"><input type="checkbox" name="childInputRequest[]" value="attorney" /> Child's Attorney</p>
                            <p class="col-md-12"><input type="checkbox" name="childInputRequest[]" value="other" /> Other
                                <input type="text" name="childInputRequestOther" />
                            </p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-12">How did the judge respond to the request?</p>
                            <p class="col-md-12"><input type="radio" name="judgeResponse" value="agreed" /> Agreed</p>
                            <p class="col-md-12"><input type="radio" name="judgeResponse" value="denied" /> Denied, 
                                Reason: <input type="text" name="judgeResponseDenial" /></p>
                            <p class="col-md-12"><input type="radio" name="judgeResponse" value="future_hearing" /> Reserved the issue for a future hearing, 
                                Date: <input type="text" name="judgeResponseDate" />
                            </p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-12">If an attorney was present to represent the child(ren) of the parties,
                            how was that person identified?</p>
                            <p class="col-md-12"><input type="radio" name="attorney" value="child_attorney" /> Child's Attorney</p>
                            <p class="col-md-12"><input type="radio" name="attorney" value="guardian" /> Guardian Ad Litem</p>
                            <p class="col-md-12"><input type="radio" name="attorney" value="best_interest_attorney" /> Best Interest Attorney</p><br />
                        </div>
                        <div class="row">
                            <p class="col-md-12">Where was s/he physically positioned in the courtroom?
                                <input type="text" name="attorneyPosition" />
                            </p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-8">Did the child’s attorney appear to be aligned with one of the parties,
                            or prejudiced against one of the parties?</p>
                            <p class="col-md-2">Yes <input type="radio" name="alignedOrPrejudice" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="alignedOrPrejudice" value="no" /></p>
                        </div><br />
                        <div class="row">
                            <p class="col-md-8">If yes, what did the child’s attorney do or say to give the appearance
                            that s/he favored or disfavored one of the parties?</p>
                            <p class="col-md-4"><input type="text" name="attorneyWords" /></p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-8">Did the child’s attorney present a report or give input to the court about the child?</p>
                            <p class="col-md-2">Yes <input type="radio" name="presentReport" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="presentReport" value="no" /><br /></p>
                        </div>
                        <div class="row">
                            <p class="col-md-8">If yes, was the child present to testify/be examined by the court?</p>
                            <p class="col-md-2">Yes <input type="radio" name="childPresent" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="childPresent" value="no" /></p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-8">Did the court receive information from the child’s attorney over
                            the objection of one of the parties?</p>
                            <p class="col-md-2">Yes <input type="radio" name="courtReceivedInformation" value="yes" /></p>
                            <p class="col-md-2">No <input type="radio" name="courtReceivedInformation" value="no" /></p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-12">If the child gave input (testimony) to the court:</p><br />
                        </div>
                        
                        <div class="row">
                            <p class="col-md-12">What was the age of the child?</p>
                            <p class="col-md-12"><input type="radio" name="childAgeTestimony" value="under10" /> under 10</p>
                            <p class="col-md-12"><input type="radio" name="childAgeTestimony" value="10-14" /> 10_14</p>
                            <p class="col-md-12"><input type="radio" name="childAgeTestimony" value="over14" /> over14</p><br />
                        </div>
                        
                        <div class="row">
                            How was the examination conducted?<br /><br />
                        </div>
                        
                        <div class="row">
                            Examined on the witness stand <input type="checkbox" name="examinationConducted[]" value="witness_stand" /><br /><br />
                        </div>
                            <div class="row">
                                <p class="col-md-8">Did anyone object to the child being questioned in open court?</p>
                                <p class="col-md-2">Yes <input type="radio" name="openCourt" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="openCourt" value="no" /></p><br />
                            </div>
                            <div class="row">
                                <p class="col-md-12">If yes, who objected? <input type="text" name="whoObjected" /></p><br />
                            </div>
                            <div class="row">
                                <p class="col-md-8">Was the child placed under oath?</p>
                                <p class="col-md-2">Yes <input type="radio" name="childUnderOath" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="childUnderOath" value="no" /><br /></p>
                            </div>
                            <div class="row">
                                <p class="col-md-12">Who questioned the child?</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChild[]" value="judge" /> Judge</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChild[]" value="child_attorney" /> Child's Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChild[]" value="petitioner" /> Petitioner/Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChild[]" value="respondent" /> Respondent/Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChild[]" value="other" /> Other</p>
                            </div><br />
                            <div class="row">
                                <p class="col-md-8">Was either party denied the opportunity to question the child?</p>
                                <p class="col-md-2">Yes <input type="radio" name="deniedOpportunity" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="deniedOpportunity" value="no" /></p><br />
                            </div>
                            <div class="row">
                                <p class="col-md-8">If yes, who was prevented from questioning the child?</p>
                                <p class="col-md-2">Petitioner <input type="checkbox" name="preventedFromQuestioning[]" value="petitioner" /></p>
                                <p class="col-md-2">Respondent <input type="checkbox" name="preventedFromQuestioning[]" value="respondent" /></p><br />
                            </div>
                            <div class="row">
                                <p class="col-md-12">How did the child react to the examination? <input type="text" name="childReactionWitnessStand" /></p>
                            </div><br />
                        <div class="row">
                            Questioned in chambers <input type="checkbox" name="examinationConducted[]" value="chambers" />
                        </div><br /><br />
                            <div class="row">
                                <p class="col-md-8">Did any party object to the child being questioned in chambers?</p>
                                <p class="col-md-2">Yes <input type="radio" name="objectToChamberQuestioning" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="objectToChamberQuestioning" value="no" /><br /></p>
                            </div>
                            <div class="row">
                                <p class="col-md-12">Who went into chambers for the questioning?</p>
                                <p class="col-md-12"><input type="checkbox" name="whoWentToChambersQuestioning[]" value="petitioner" /> Petitioner</p>
                                <p class="col-md-12"><input type="checkbox" name="whoWentToChambersQuestioning[]" value="petitioner_attorney" /> Petitioner's Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoWentToChambersQuestioning[]" value="respondent" /> Respondent</p>
                                <p class="col-md-12"><input type="checkbox" name="whoWentToChambersQuestioning[]" value="respondent_attorney" /> Respondent's Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoWentToChambersQuestioning[]" value="child_attorney" /> Child's Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoWentToChambersQuestioning[]" value="court_reporter" /> Court Reporter</p>
                            </div>
                            <div class="row">
                                <p class="col-md-8">If a court reporter was present for the in-chambers questioning, did the court make an order 
                                preventing the parties from accessing a record of the examination?</p>
                                <p class="col-md-2">Yes <input type="radio" name="accessRecord" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="accessRecord" value="no" /></p>
                            </div><br/><br />
                        <div class="row">
                            Questioned by remote access <input type="checkbox" name="examinationConducted" value="remote_access" />
                        </div><br /><br />
                            <div class="row">
                                <p class="col-md-12"><input type="radio" name="remoteAccessQuestioning" value="courthouse" />
                                    At the courthouse in a separate location by video transmission to the courtroom 
                                </p>  
                            </div><br />
                            <div class="row">
                                <p class="col-md-12"><input type="radio" name="remoteAccessQuestioning" value="skype" /> 
                                     Away from the courthouse by Skype to the courtroom
                                </p>
                            </div><br />
                            <div class="row">
                                <p class="col-md-12"><input type="radio" name="remoteAccessQuestioning" value="other" /> Other,
                                    Describe: <input type="text" name="remoteAccessQuestioningOther" />
                                </p>
                            </div><br />
                            <div class="row"><br />
                                <p class="col-md-8">Was the child placed under oath?</p>
                                <p class="col-md-2">Yes <input type="radio" name="childUnderOathRemoteAccess" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="childUnderOathRemoteAccess" value="no" /></p>
                            </div><br />
                            <div class="row">
                                <p class="col-md-12">Who questioned the child?</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChildRemoteAccess[]" value="judge" /> Judge</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChildRemoteAccess[]" value="child_attorney" /> Child's Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChildRemoteAccess[]" value="petitioner" /> Petitioner/Attorney</p>
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChildRemoteAccess[]" value="respondent" /> Respondent/Attorney</p>
                            </div><br />
                            <div class="row">
                                <p class="col-md-12"><input type="checkbox" name="whoQuestionedChildRemoteAccess[]" value="other" />
                                     Other <input type="text" name="whoQuestionedChildRemoteAccessOther" />
                                </p><br />
                            </div>
                            <div class="row">
                                <p class="col-md-8">Was either party denied the opportunity to question the child?</p>
                                <p class="col-md-2">Yes <input type="radio" name="deniedQuestioning" value="yes" /></p>
                                <p class="col-md-2">No <input type="radio" name="deniedQuestioning" value="no" /></p>
                            </div><br />
                            <div class="row">
                                <p class="col-md-8">If yes, who was prevented from questioning the child?</p>
                                <p class="col-md-2">Petitioner <input type="checkbox" name="whoDeniedQuestioning[]" value="petitioner" /></p>
                                <p class="col-md-2">Respondent <input type="checkbox" name="whoDeniedQuestioning[]" value="respondent" /></p>
                            </div><br />
                            <div class="row">
                                <p class="col-md-12">How did the child react to the examination?
                                    <input type="text" name="childReactionRemoteAccess" />
                                </p>
                            </div>
                            <p class="close">close</p>
                  </div>

            

     		</div>

            <div id="#formButtons">
                <button id="fillForm" class="btn btn-lg btn-primary btn-block formButton">Test Fill</button>
                <button id="submitForm" class="btn btn-lg btn-primary btn-block formButton">Submit</button>
                <div class="login-error insert-error" style="display:none;"></div>
            </div>
            <p id="testresult"></p>
    	</form>
    </script>

<?php
require('includes/scripts.php');
?>

	<script type="text/javascript" src="js/views/forms.js"></script>

  </body>
</html>