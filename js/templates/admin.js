<script type="text/template" id="admin-home-template">
    <ul>
        <li id="volunteers"><img src="img/volunteers.png" /><p>Volunteers</p></li>
        <li id="forms"><img src="img/forms.png" /><p>Forms</p></li>
        <li id="graphs"><img src="img/graphs.png" /><p>Graphs</p></li>
    </ul>
</script>

<script type="text/template" id="top-bar-template">
    <p><%= username %> |<span>Log Out<span></p>
</script>

<script type="text/template" id="admin-volunteer-panel-template">
    <div class="row">
        <div class="col-md-4">
            <form id="newVolunteerForm" class="form-signin">
                <h2 class="form-signin-heading">Add Volunteer</h2>
                <input type="text" id="username" class="form-control" placeholder="User ID">
                <button class="btn btn-lg btn-primary btn-block">Add User</button>
            </form>
        </div>
        <div class="col-md-8">
            <h2 class="form-signin-heading">Volunteers</h2>
            <div id="volunteerList">
                

            </div>
        </div>
    </div>
</script>

<script type="text/template" id="admin-volunteers-template">
    <div id="volunteerAccordion">

    </div>

</script>

<script type="text/template" id="admin-volunteer-template">
    <h3><%= username %></h3>
    <div>
        <p class="info-left">
            Phone: <br />
            Email:
        </p>
        <p class="info-right">
            Admin: <input type="checkbox" value="admin" />
        </p>
    </div>
</script>

<script type="text/template" id="admin-forms-template">
    <form>
    <div id="formAccordion">

            
              <h3>Section 1</h3>
              <div>
                    Case Short Title: <input type="text" /><br />
                    Case Number: <input type="text" />
                    <p class="next">next</p>
              </div>
              <h3>Issues / Litigation</h3>
              <div>
                    What issues were being heard/considered at the hearing?
                    <br /> <br />
                        divorce <input type="checkbox" name="issues" value="divorce" />
                        child custody <input type="checkbox" name="issues" value="child_custody" />
                        child support <input type="checkbox" name="issues" value="child_support" />
                    <br />
                        child visitation <input type="checkbox" name="issues" value="child_visitation" />
                        restraining order <input type="checkbox" name="issues" value="restraining_order" />
                        spousal support <input type="checkbox" name="issues" value="spousal_support" />
                    <br />
                        contempt <input type="checkbox" name="issues" value="contempt" />
                        attorney fees <input type="checkbox" name="issues" value="attorney_fees" />
                        other (specify) <input type="text" name="other" />
                    <br /> <br />

                    Was the case continued to a future date?
                        Yes <input type="radio" name="caseContinued" value="yes" />
                        No <input type="radio" name="caseContinued" value="no" />
                        If yes, date <input type="text"name="caseContinuedDate" />
                    <br /> <br />

                    Were any stipulations presented to the court?
                        Yes <input type="radio" name="stipulationsPresented" value="yes" />
                        No <input type="radio" name="stipulationsPresented" value="no" />
                    <br /> <br />

                    If yes, did the judge ask the parties if they understood the stipulation and its consequences,
                    and if they entered into it freely and without coercion, undue influence, or duress?
                        Yes <input type="radio" name="partiesUnderstoodStipulation" value="yes" />
                        No <input type="radio" name="partiesUnderstoodStipulation" value="no" />
                    <br /> <br />
                    <p class="next">next</p>
              </div>
              <h3>Child Custody / Visitation / Child Support Orders</h3>
              <div>
                    What child custody/visitation orders were in place prior to the hearing?
                    <br /> <br />
                        joint physical custody <input type="checkbox" name="custodyVisitationOrders" value="joint_physical_custody" />
                        joint legal custody <input type="checkbox" name="custodyVisitationOrders" value=" joint_legal_custody" />
                    <br />
                        legal custody to (pet/resp) <input type="checkbox" name="custodyVisitationOrders" value="legal_custody_to_(pet/resp)" />
                        physical custody to (pet/resp)<input type="checkbox" name="custodyVisitationOrders" value="physical_custody_to_(pet/resp)" />
                    <br />
                        unsupervised visitation to (pet/resp) <input type="checkbox" name="custodyVisitationOrders" value="unsupervised_visitation_to_(pet/resp)" />
                        supervised visitation to (pet/resp) <input type="checkbox" name="custodyVisitationOrders" value="supervised_visitation_to_(pet/resp)" />
                    <br /> <br />

                    Did either party request a change in an existing child custody or visitation (parenting time) order?
                    <br /> <br />
                    Custody:
                        Yes <input type="radio" name="requestChangeCustody" value="yes" />
                        No <input type="radio" name="requestChangeCustody" value="no" />
                    Visitation: (parenting time):
                        Yes <input type="radio" name="requestChangeVisitation" value="yes" />
                        No <input type="radio" name="requestChangeVisitation" value="no" />
                    <br />

                    If yes, who was making the request?
                        Petitioner <input type="radio" name="requestMaker" value="petitioner" />
                        Respondent <input type="radio" name="requestMaker" value="respondent" />

                    What reason was given for requesting the change in custody/parenting time?
                    <br /> <br />
                        domestic violence <input type="checkbox" name="reasonForRequest" value="domestic_violence" />
                        child abuse/neglect <input type="checkbox" name="reasonForRequest" value="child_abuse/neglect" />
                        relocation <input type="checkbox" name="reasonForRequest" value="relocation" />
                        <br />
                        educational issues <input type="checkbox" name="reasonForRequest" value="educational_issues" />
                        child behavioral issues <input type="checkbox" name="reasonForRequest" value="child_behavioral_issues" />
                        child's wishes <input type="checkbox" name="reasonForRequest" value="child's_wishes" />
                        <br />
                        developmental stage of child <input type="checkbox" name="reasonForRequest" value="developmental_stage_of_child" />
                        other (describe) <input type="text" name="other" />
                        <br /> 
                    Were any changes made in the custody or parenting time orders?
                        Yes <input type="radio" name="anyCustodyChanges" value="yes" />
                        No <input type="radio" name="anyCustodyChanges" value="no" />
                    <br /> <br />

                    How was the custody order changed?
                    <br /> <br />
                        sole legal to (Pet/Resp) <input type="checkbox" name="custodyOrdersChanged" value="sole_legal_to_(Pet/Resp)" />
                        joint legal to (Pet/Resp) <input type="checkbox" name="custodyOrdersChanged" value="joint_legal_to_(Pet/Resp) " />
                    <br />
                        sole physical to(pet/resp) <input type="checkbox" name="custodyOrdersChanged" value="sole_physical_to_(Pet/Resp)" />
                        joint physical (equal/primary to Pet/primary to Resp) <input type="checkbox" name="custodyOrdersChanged" value="joint_physical_(equal/primary_to_Pet/primary_to_Resp)" />
                    <br /> <br />

                    How was the visitation (parenting time) order changed?
                    <br /> <br />
                        increased for (Pet/Resp) <input type="radio" name="visitationOrdersChanged" value="increased_for_(Pet/Resp)" />
                        terminated for (Pet/Resp) <input type="radio" name="visitationOrdersChanged" value="terminated_for_(Pet/Resp)" />
                        supervised for (Pet/Resp) <input type="radio" name="visitationOrdersChanged" value="supervised_for_(Pet/Resp)" />
                    <br /> <br />
                    Were there any prior or current allegations of domestic violence or child abuse against a party who received increased custody or visitation?
                        Yes <input type="radio" name="allegationsOfDVorCA" value="yes" />
                        No <input type="radio" name="allegationsOfDVorCA" value="no" />
                        Unknown <input type="radio" name="allegationsOfDVorCA" value="unknown" />
                    <br /> <br />
                    Was a party requesting increased custody or parenting time reported to be in arrears in child support?
                    <br />
                        Yes <input type="radio" name="arrearsReported" value="yes" />
                        No <input type="radio" name="arrearsReported" value="no" />
                        Unknown <input type="radio" name="arrearsReported" value="unknown" />
                    <br /> <br />
                    Was either party attempting to change a child support order?
                    <br />
                        Yes <input type="radio" name="childSupportChanged" value="yes" />
                        No <input type="radio" name="childSupportChanged" value="no" />
                        Unknown <input type="radio" name="childSupportChanged" value="unknown" />
                    <br /> <br />
                    If yes, who was attempting to change the order?
                        Primary custodial parent <input type="radio" name="whoChangedChildSupport" value="primary_custodial_parent" />
                        Other parent <input type="radio" name="whoChangedChildSupport" value="other_parent" />
                    <br /> <br />
                    Was the support order changed?
                        Yes (increased/decreased) <input type="radio" name="wasSupportChanged" value="yes" />
                        No <input type="radio" name="wasSupportChanged" value="no" />
                    <p class="next">next</p>
              </div>
              <h3>Due Process / Constitutional Rights</h3>
              <div>
                    Was a court reporter present to make a record of the hearing?
                        Yes <input type="radio" name="courtReporterPresent" value="yes" />
                        No <input type="radio" name="courtReporterPresent" value="no" />
                    <br /> <br />
                    If no court reporter was present, did a (party) or (child’s attorney) request a court reporter and/or object to the hearing proceeding without a court reporter?
                        Yes <input type="radio" name="requestCourtReporter" value="yes" />
                        No <input type="radio" name="requestCourtReporter" value="no" />
                    <br /> <br />
                    If yes, did the hearing proceed over the objection?
                        Yes <input type="radio" name="hearingProceedAnyway" value="yes" />
                        No <input type="radio" name="hearingProceedAnyway" value="no" />
                    <br /> <br />
                    Did either party ask to audio/or video record the hearing?
                        Yes <input type="radio" name="askForRecording" value="yes" />
                        No <input type="radio" name="askForRecording" value="no" />
                    <br /> <br />
                    If yes, was the request granted?
                        Yes <input type="radio" name="requestForRecGranted" value="yes" />
                        No <input type="radio" name="requestForRecGranted" value="no" />
                    <br /> <br />
                    Did any meeting/discussion take place in chambers (other than examination of a child witness)?
                        Yes <input type="radio" name="meetingInChambers" value="yes" />
                        No <input type="radio" name="meetingInChambers" value="no" />
                    <br /> <br />
                    If yes, who went into chambers for the meeting/discussion?
                    <br />
                        petitioner's attorney <input type="checkbox" name="whoWentToChambers" value="petitioner's_attorney" />
                        respondent's attorney <input type="checkbox" name="whoWentToChambers" value="respondent's_attorney" />
                        child's attorney <input type="checkbox" name="whoWentToChambers" value="child's_attorney" />
                        <br />
                        petitioner <input type="checkbox" name="whoWentToChambers" value="petitioner" />
                        respondent <input type="checkbox" name="whoWentToChambers" value="respondent" />
                        court reporter <input type="checkbox" name="whoWentToChambers" value="court reporter" />
                    <br /> <br />
                    If either the petitioner and/or respondent were excluded from the in-chambers meeting/discussion, what reason was given for the exclusion?
                    <br />
                        <input type="text" name="reasonForExclusion" />
                    <br /> <br />
                    If a record was made of the in-chambers meeting by a court reporter, did the judge order the record to be sealed?
                        Yes <input type="radio" name="recordsSealed" value="yes" />
                        No <input type="radio" name="recordsSealed" value="no" />
                    <br /> <br />
                    Was any report/information from a court appointee presented to the court?
                        Yes <input type="radio" name="courtAppointeeReport" value="yes" />
                        No <input type="radio" name="courtAppointeeReport" value="no" />
                    <br /> <br />
                    If yes:
                    <br /> <br />
                    Who was the author of the report or supplier of information?
                        (Name) <input type="text" name="reportAuthor" />
                    <br />
                        mediator <input type="radio" name="reportAuthorPosition" value="mediator" />
                        evaluator/investigator <input type="radio" name="reportAuthorPosition" value="evaluator/investigator" />
                        court appointed therapist <input type="radio" name="reportAuthorPosition" value="court_appointed_therapist" />
                        <br />
                        co-parenting coordinator <input type="radio" name="reportAuthorPosition" value="co-parenting_coordinator" />
                        child's attorney <input type="radio" name="reportAuthorPosition" value="child's_attorney" />
                        other: <input type="text" name="other" />
                    <br /> <br />
                    Did either party object to the information/report being read and/or considered by the court?
                        Yes <input type="radio" name="reportObjection" value="yes" />
                        No <input type="radio" name="reportObjection" value="no" />
                    <br /> <br />
                    If yes, what was the basis for the objection?
                    <br />
                        party did not receive the report at least 10 days prior to the hearing <input type="radio" name="BasisforObjection" value="no_report_received_prior" />
                        <br />
                        report/information is hearsay <input type="radio" name="BasisforObjection" value="report_is_hearsay" />
                        <br />
                        report/information was not authenticated <input type="radio" name="BasisforObjection" value="report_not_authenticated" />
                        <br />
                        other: <input type="text" name="other" />
                    <br /> <br />               
                    How did the judge rule on the objection?
                        sustained/granted <input type="radio" name="objectionRuled" value="sustained/granted" />
                        overruled/denied <input type="radio" name="objectionRuled" value="overruled/denied" />
                    <br /> <br />
                    
                    If overruled, was the objecting party given the opportunity to examine the author of the report/supplier of information on the witness stand at the hearing?
                        Yes <input type="radio" name="oppToExamReport" value="yes" />
                        No <input type="radio" name="oppToExamReport" value="no" />
                    <br /> <br />
                    If no, was a hearing date set to allow for such examination?
                        Yes <input type="radio" name="dateToAllowExam" value="yes" />
                        No <input type="radio" name="dateToAllowExam" value="no" />
                    <br /> <br />
                    Did anyone else, including a party, present information to the court about something that was said, done, or known by someone who was not present in court to testify as a witness?
                        Yes <input type="radio" name="infoOnSomeoneNotPresent" value="yes" />
                        No <input type="radio" name="infoOnSomeoneNotPresent" value="no" />
                    <br /> <br />
                    If yes, who presented the information?
                        <input type="text" name="whoPresentedInfo" />
                    <br /> <br />
                    Was a hearsay objection made to the information?
                        Yes <input type="radio" name="hearsayObjection" value="yes" />
                        No <input type="radio" name="hearsayObjection" value="no" />
                    <br /> <br />
                    If yes, who made the objection?
                        <input type="text" name="whoHearsayObjection" />
                    <br /> <br />
                    Did the court hear and/or consider the information over the objection?
                        Yes <input type="radio" name="hearsayObjectionConsidered" value="yes" />
                        No <input type="radio" name="hearsayObjectionConsidered" value="no" />
                    <br /> <br />
                    Was any party denied the right to present evidence or witnesses at the hearing?
                        Yes <input type="radio" name="deniedRightToPresent" value="yes" />
                        No <input type="radio" name="deniedRightToPresent" value="no" />
                    <br /> <br />
                    If yes, which party was denied?
                        Petitioner <input type="radio" name="whichPartyDenied" value="petitioner" />
                        Respondent <input type="radio" name="whichPartyDenied" value="respondent" />
                    <br /> <br />
                    What reason was given for the denial?
                        <input type="text" name="reasonForDenial" />
                    <br /> <br />
                    Was a future hearing date set to allow the party the opportunity to present evidence and/or witnesses?
                    <br />
                        Yes <input type="radio" name="futureDateforEvidence" value="yes" />
                        No <input type="radio" name="futureDateforEvidence" value="no" />
                    <br /> <br />
                    Was any party prevented from conducting discovery?
                        Yes <input type="radio" name="preventedToDiscover" value="yes" />
                        No <input type="radio" name="preventedToDiscover" value="no" />
                    <br /> <br />
                    If yes, what reason was given for the denial of the right to discovery?
                        <input type="text" name="reasonForDenialOfDiscovery" />
                    <br /> <br />
                    Was each party given equal opportunity to speak and present his/her position to the court?
                    <br />
                        Yes <input type="radio" name="equalOpportunity" value="yes" />
                        No <input type="radio" name="equalOpportunity" value="no" />
                    <br /> <br />
                    If not, which party was given less opportunity?
                        Petitioner <input type="radio" name="whichPartyLessOpp" value="petitioner" />
                        Respondent <input type="radio" name="whichPartyLessOpp" value="respondent" />
                    <br /> <br />
                    Was any party discouraged in any way by the judge from speaking publicly about the case?
                    <br />
                        Yes <input type="radio" name="discouragedFromSpeaking" value="yes" />
                        No <input type="radio" name="discouragedFromSpeaking" value="no" />
                    <br /> <br />
                    If yes, what order or comment was made by the judge regarding speaking publicly about the case?
                    <br />
                        <input type="text" name="whatOrderMade" />
                    <br /> <br />
                    <p class="next">next</p>
              </div>
              <h3>Judicial Conduct / Demeanor</h3>
              <div>
                    Was any audience member asked to identify themselves before the hearing began?
                    Yes <input type="radio" name="audienceMemberIdentified" value="yes" />
                    No <input type="radio" name="audienceMemberIdentified" value="no" />
                    <br /> <br />
                    Was anyone who was not identified as a witness, excluded from the proceeding?
                        Yes <input type="radio" name="anyoneExcluded" value="yes" />
                        No <input type="radio" name="anyoneExcluded" value="no" />
                    <br /> <br />
                    If yes, what reason was given for the exclusion?
                        <input type="text" name="reasonForExclusion" />
                    <br /> <br />   
                    Was the judge courteous and respectful toward the parties and attorneys throughout the hearing?
                    <br />
                        Yes <input type="radio" name="judgeCourteous" value="yes" />
                        No <input type="radio" name="judgeCourteous" value="no" />
                    <br /> <br />
                    If no, to whom was the judge disrespectful?
                        <input type="text" name="whoWasJudgeDisrespectfulTo" />
                    <br /> <br />
                    Describe
                        <input type="text" name="howWasJudgeDisrespectful" />
                    <br /> <br />
                    How did the person who was treated disrespectfully by the judge react/respond?
                        <input type="text" name="howMistreatedRespond" />
                    <br /> <br />
              Did anyone other than the judge speak disrespectfully to another person during the hearing?
                        Yes <input type="radio" name="anyoneDisrespectfull" value="yes" />
                        No <input type="radio" name="anyoneDisrespectfull" value="no" />
                    <br /> <br />
              If yes, describe (who/what):
              <br />
                        <input type="text" name="whoWasDisrespectfull" />
                    <br /> <br />
              How did the person who was disrespected react/respond?
              <br />
                        <input type="text" name="howWasDisrespectfull" />
                    <br /> <br />
              How did the judge handle the situation?
              <br />
                        <input type="text" name="howJudgeHandleDisrespect" />
                    <br /> <br />
              Did anyone raise his/her voice or behave aggressively during the hearing?
                        Yes <input type="radio" name="anyoneAggressive" value="yes" />
                        No <input type="radio" name="anyoneAggressive" value="no" />
                    <br /> <br />
              If yes, describe (who/what):
                        <input type="text" name="whoAggressive" />
                    <br /> <br />
              How did the judge respond to the situation?
                        <input type="text" name="howJudgeHandleAggression" />
                    <br /> <br />
              At any time during the hearing, did one of the parties cry?
                        Yes <input type="radio" name="anyoneCry" value="yes" />
                        No <input type="radio" name="anyoneCry" value="no" />
                    <br /> <br />
              If yes, who cried and how did the judge respond to the situation?
                        <input type="text" name="whoCried" />
                    <br /> <br />
              At any time did the judge appear impatient, irritated, or angry because a non-represented party did not understand a legal procedure or issue, or how to represent him/herself?
              <br />
                        Yes <input type="radio" name="judgeAngryofPartywithNoRep" value="yes" />
                        No <input type="radio" name="judgeAngryofPartywithNoRep" value="no" />
                        N/A <input type="radio" name="judgeAngryofPartywithNoRep" value="no" />
                    <br /> <br />
              If yes, describe how the judge behaved and what s/he said:
                        <input type="text" name="howJudgeBehaved" />
                    <br /> <br />
              At any time during the hearing, did it appear that a party was incapable of meaningfully participating because of a physical condition, cognitive impairment, or emotional distress?
                        Yes <input type="radio" name="partyIncapableParticipatate" value="yes" />
                        No <input type="radio" name="partyIncapableParticipatate" value="no" />
                    <br /> <br />
              If yes, describe the condition of the party?
                        <input type="text" name="whichCondition" />
                    <br /> <br />
              How did the judge handle the situation?
                        <input type="text" name="judgeHandleIncapParty" />
                    <br /> <br />
                    <p class="next">next</p>
              </div>
              <h3>Impressions</h3>
              <div>
                    Did it appear that there was an "even playing field" between the parties?
                    Yes <input type="radio" name="evenPlayingField" value="yes" />
                    No <input type="radio" name="evenPlayingField" value="no" /> <br />
                    If no, which party appeared to be disadvantaged and why?
                    <input type="text" name="evenPlayingFieldDescription"/><br /><br />
                    
                    Did an un-represented party appear to be disadvantaged in the litigation
                    because of the legal expertise of the other party's attorney?
                    Yes <input type="radio" name="legalExpertise" value="yes" />
                    No <input type="radio" name="legalExpertise" value="no" />
                    N/A <input type="radio" name="legalExpertise" value="n/a" /><br /><br />
                    
                    Did it appear that both parties were held to the same standards of conduct?
                    Yes <input type="radio" name="conduct" value="yes" />
                    No <input type="radio" name="conduct" value="no" /><br />
                    If no, describe what was said or done to give the impression that one
                    party was being held to a different standard than the other:
                    <input type="text" name="conductDescription"/><br /><br />
                    
                    Was there any demonstration of familiarity/camaraderie between a party
                    or attorney for a party with other court appointees/officials/personnel
                    that led to the appearance of bias in favor of one party?
                    Yes <input type="radio" name="familiarity" value="yes" />
                    No <input type="radio" name="familiarity" value="no" /><br />
                    If yes, describe:
                    <input type="text" name="familiarityDescription"/><br /><br />
                    
                    Was there any demonstration of favoritism or antagonism toward one of the
                    parties by a judicial official?
                    Yes <input type="radio" name="favoritism" value="yes" />
                    No <input type="radio" name="favoritism" value="no" /><br />
                    If yes, describe:
                    <input type="text" name ="favoritismDescription"/><br /><br />
                    
                    Other Remarks: <input type="text" name="remarks"/>
                    <p class="next">next</p>
              </div>
              <h3>Accommodations</h3>
              <div>
                    Was an interpreter present for either party?
                    Yes <input type="radio" name="interpreter" value="yes" />
                    No <input type="radio" name="interpreter" value="no" /><br />
                    If yes, on whose behalf was the interpreter present?
                    Petitioner <input type="radio" name="whoseBehalf" value="petitioner" />
                    Respondent <input type="radio" name="whoseBehalf" value="respondent" />
                    <br /><br />
                    
                    Did either party ask for accommodations?
                    Yes <input type="radio" name="accommodations" value="yes" />
                    No <input type="radio" name="accommodations" value="no" />
                    Unknown <input type="radio" name="accommodations" value="unknown" /><br /><br />
                    If yes:<br />
                    Who requested the accommodations?
                    Petitioner <input type="checkbox" name="accommodationsRequested" value="petitioner" />
                    Respondent <input type="checkbox" name="accommodationsRequested" value="respondent" />
                    <br />
                    What accommodations were requested? <input type="text" name="requested"/><br />
                    What accommodations were provided? <input type="text" name="provided"/><br />
                    Did the judge reveal a diagnosis for which the accommodations were requested?
                    Yes <input type="radio" name="diagnosis" value="yes" />
                    No <input type="radio" name="diagnosis" value="no" />
                    <p class="next">next</p>
              </div>
              <h3>Domestic Violence</h3>
              <div>
                    Did one party have a protective order in place against the other?
                    Yes <input type="radio" name="protectiveOrder" value="yes" />
                    No <input type="radio" name="protectiveOrder" value="no" />
                    Unknown <input type="radio" name="protectiveOrder" value="unknown" /><br />
                    If yes, who was protected?
                    Petitioner <input type="checkbox" name="protected" value="petitioner" />
                    Respondent <input type="checkbox" name="protected" value="respondent" />
                    Child(ren) <input type="checkbox" name="protected" value="children" /><br />
                    Was the restrained party seeking to terminate the protective order?
                    Yes <input type="radio" name="terminate" value="yes" />
                    No <input type="radio" name="terminate" value="no" /><br />
                    If yes, was the protective order dismissed?
                    Yes <input type="radio" name="dismissed" value="yes" />
                    No <input type="radio" name="dismissed" value="no" /><br /><br />
                    
                    Did anyone raise allegations of domestic violence at the hearing?
                    Yes <input type="radio" name="allegations" value="yes" />
                    No <input type="radio" name="allegations" value="no" /><br />
                    If yes, who raised the allegation?
                    Petitioner <input type="radio" name="domesticViolenceAllegation" value="petitioner" />
                    Respondent <input type="radio" name="domesticViolenceAllegation" value="respondent" />
                    Other <input type="radio" name="domesticViolenceAllegation" value="other" /><br />
                    What type of DV was alleged? <br />
                    Physical <input type="checkbox" name="typeOfDV" value="physical" />
                    Sexual <input type="checkbox" name="typeOfDV" value="sexual" />
                    Verbal/Psychological/Threats <input type="checkbox" name="typeOfDV" value="verbal" />
                    Stalking <input type="checkbox" name="typeOfDV" value="stalking" />
                    Other <input type="checkbox" name="typeOfDV" value="other" /><br /><br />
                    
                    Did the party who raised the allegation of DV request a restraining order?
                    Yes <input type="radio" name="restrainingOrder" value="yes" />
                    No <input type="radio" name="restrainingOrder" value="no" /><br />
                    If yes, was the request granted?
                    Yes <input type="radio" name="domesticViolenceRequestGranted" value="yes" />
                    No <input type="radio" name="domesticViolenceRequestGranted" value="no" /><br /><br />
                    If the request was not granted, what reason was given for the denial?
                    <input type="text" name="reasonForDomesticViolenceDenial"/><br /><br />
                    
                    If the request was granted:<br />
                    Did the judge explain the conditions of the order and the consequences of violating the order?
                    Yes <input type="radio" name="conditions" value="yes" />
                    No <input type="radio" name="conditions" value="no" /><br />
                    Did the judge order the alleged perpetrator to turn in all weapons?
                    Yes <input type="radio" name="turnInWeapons" value="yes" />
                    No <input type="radio" name="turnInWeapons" value="no" /><br /><br />
                    
                    Describe any other orders made for the safety of the alleged victim(s):
                    <input type="text" name="otherOrders"/><br /><br />
                    
                    Was a party with a protective order or reporting DV ordered to have 
                    contact with the alleged abuser?
                    Yes <input type="radio" name="contactWithAbuser" value="yes" />
                    No <input type="radio" name="contactWithAbuser" value="no" /><br />
                    
                    If yes, what were the conditions of the contact?<br />
                    Mediation <input type="checkbox" name="conditionsOfContact" value="mediation" />
                    Co-parenting classes <input type="checkbox" name="conditionsOfContact" value="co-parenting" />
                    Child exchanges <input type="checkbox" name="conditionsOfContact" value="childExchanges" />
                    Other <input type="checkbox" name="conditionsOfContact" value="other" /><br /><br />
                    
                    Was party protected or reporting DV accused by the alleged abuser of fabricating, exaggerating, 
                    alienating, or using the allegation for a tactical advantage in the litigation?
                    Yes <input type="radio" name="tacticalAdvantage" value="yes" />
                    No <input type="radio" name="tacticalAdvantage" value="no" /><br /><br />
                    
                    Did the judge or any court appointee make gestures or comments indicating that s/he
                    was disbelieving, minimizing, or ridiculing the report of DV?
                    Yes <input type="radio" name="ridicule" value="yes" />
                    No <input type="radio" name="ridicule" value="no" /><br />
                    If yes, what gesture/comment was made and who made it?
                    <input type="text" name="ridiculeDescription"/><br /><br />
                    
                    Was a provision made for a party protected or reporting DV, to leave the courtroom
                    ahead of the other party as a safety measure?
                    Yes <input type="radio" name="safetyMeasure" value="yes" />
                    No <input type="radio" name="safetyMeasure" value="no" />
                    <p class="next">next</p>
              </div>
              <h3>Child Abuse</h3>
              <div>
                    Did anyone raise allegations of child abuse at the hearing?
                    Yes <input type="radio" name="childAbuse" value="yes" />
                    No <input type="radio" name="childAbuse" value="no" /><br />
                    If yes, who raised the allegation?
                    Petitioner <input type="radio" name="childAbuseAllegation" value="petitioner" />
                    Respondent <input type="radio" name="childAbuseAllegation" value="respondent" />
                    Other <input type="radio" name="childAbuseAllegation" value="other" /><br /><br />
                    
                    What type of child abuse was alleged?<br />
                    Physical <input type="checkbox" name="allegedChildAbuse" value="physical" />
                    Sexual <input type="checkbox" name="allegedChildAbuse" value="sexual" />
                    Neglect <input type="checkbox" name="allegedChildAbuse" value="neglect" />
                    Verbal/Psychological/Threats <input type="checkbox" name="allegedChildAbuse" value="verbal" />
                    Other <input type="checkbox" name="allegedChildAbuse" value="other" /><br /><br />
                    
                    What was the age of the alleged victim(s)?
                    0-4 <input type="radio" name="victimAge" value="0-4" />
                    5-10 <input type="radio" name="victimAge" value="5-10" />
                    11-14 <input type="radio" name="victimAge" value="11-14" />
                    Over 14 <input type="radio" name="victimAge" value="over14" /><br /><br />
                    
                    Was the allegation already reported to law enforcement?
                    Yes <input type="radio" name="reported" value="yes" />
                    No <input type="radio" name="reported" value="no" />
                    Unknown <input type="radio" name="reported" value="unknown" /><br /><br />
                    
                    Was an investigative report of the abuse ordered by the court?
                    Yes <input type="radio" name="investigativeReport" value="yes" />
                    No <input type="radio" name="investigativeReport" value="no" /><br />
                    If yes, who was ordered to do an investigation?<br />
                    MDIT/law investigation <input type="radio" name="investigation" value="MDIT" />
                    Child Protective Services <input type="radio" name="investigation" value="CPS" />
                    Probation dept. <input type="radio" name="investigation" value="probation" /><br />
                    Family court evaluator/investigator <input type="radio" name="investigation" value="evaluator" />
                    Name <input type="text" name="nameOfEvaluator" /><br />
                    Family court mediator <input type="radio" name="investigation" value="mediator" />
                    Name <input type="text" name="nameOfMediator" /><br />
                    Other <input type="radio" name="investigation" value="other" /><br /><br />
                    
                    If the allegation was of sexual abuse, did the court specifically
                    order a FC§3118 investigation?
                    Yes <input type="radio" name="3118" value="yes" />
                    No <input type="radio" name="3118" value="no" />
                    Name of evaluator/investigator chosen? <input type="text" name="evaluator3118" />
                    <br /><br />
                    
                    Was the child ordered to have contact with the alleged abuser?
                    Yes <input type="radio" name="childContactWithAbuser" value="yes" />
                    No <input type="radio" name="childContactWithAbuser" value="no" /><br />
                    If yes, what were the conditions of the contact?<br />
                    Unsupervised contact <input type="checkbox" name="contactConditions" value="unsupervised" /><br />
                    Contact supervised by professional <input type="checkbox" name="contactConditions" value="professional" /><br />
                    Contact supervised by non-professional neutral person <input type="checkbox" name="contactConditions" value="neutral" /><br />
                    Contact supervised by family member/friend <input type="checkbox" name="contactConditions" value="familyMember" /><br />
                    Parent/child therapy <input type="checkbox" name="contactConditions" value="therapy" /><br />
                    Other <input type="checkbox" name="contactConditions" value="other" /><br /><br />
                    
                    Did the party who raised the allegation request an order protecting the child(ren)?
                    Yes <input type="radio" name="requestOrder" value="yes" />
                    No <input type="radio" name="requestOrder" value="no" /><br />
                    If yes, was the request granted?
                    Yes <input type="radio" name="childAbuseRequestGranted" value="yes" />
                    No <input type="radio" name="childAbuseRequestGranted" value="no" /><br />
                    If the request was not granted, what reason was given for the denial?
                    <input type="text" name="reasonForChildAbuseDenial" /><br /><br />
                    
                    Was the party reporting child abuse accused by anyone of bad motive, such as fabricating,
                    exaggerating, alienating, or using the allegation for a tactical advantage in the litigation?<br />
                    Yes <input type="radio" name="badMotive" value="yes" />
                    No <input type="radio" name="badMotive" value="no" /><br />
                    If yes, who accused the reporting party of bad motive?
                    <input type="text" name="accuser" /><br /><br />
                    
                    Did the judge or any court appointee make gestures or comments indicating that s/he was
                    disbelieving, minimizing, or ridiculing the report of child abuse?
                    Yes <input type="radio" name="disbelief" value="yes" />
                    No <input type="radio" name="disbelief" value="no" /><br />
                    If yes, describe:
                    <input type="text" name="disbeliefDescription" />
                    <p class="next">next</p>
              </div>
              <h3>Child's Input</h3>
              <div>
                    Did anyone request that a child involved in the litigation appear before
                    the court to provide input and/or voice his/her wishes?
                    Yes <input type="radio" name="childInput" value="yes" />
                    No <input type="radio" name="childInput" value="no" /><br /><br />
                    
                    Who made the request?
                    Petitioner <input type="radio" name="childInputRequest" value="petitioner" />
                    Respondent <input type="radio" name="childInputRequest" value="respondent" />
                    Child's Attorney <input type="radio" name="childInputRequest" value="attorney" />
                    Other <input type="radio" name="childInputRequest" value="other" /><br /><br />
                    
                    How did the judge respond to the request?<br />
                    Agreed <input type="radio" name="judgeResponse" value="agreed" /><br />
                    Denied <input type="radio" name="judgeResponse" value="denied" />
                    Reason <input type="text" name="judgeResponseDenial" /><br />
                    Reserved the issue for a future hearing <input type="radio" name="judgeResponse" value="futureHearing" />
                    Date <input type="text" name="judgeResponseDate" /><br /><br />
                    
                    If an attorney was present to represent the child(ren) of the parties,
                    how was that person identified?
                    Child's Attorney <input type="radio" name="attorney" value="childAttorney" />
                    Guardian Ad Litem <input type="radio" name="attorney" value="guardian" />
                    Best Interest Attorney <input type="radio" name="attorney" value="BIAttorney" /><br />
                    Where was s/he physically positioned in the courtroom?
                    <input type="text" name="position" /><br /><br />
                    
                    Did the child’s attorney appear to be aligned with one of the parties,
                    or prejudiced against one of the parties?
                    Yes <input type="radio" name="alignedOrPrejudice" value="yes" />
                    No <input type="radio" name="alignedOrPrejudice" value="no" /><br />
                    If yes, what did the child’s attorney do or say to give the appearance
                    that s/he favored or disfavored one of the parties?
                    <input type="text" name="attorneyWords" /><br /><br />
                    
                    Did the child’s attorney present a report or give input to the court about the child?
                    Yes <input type="radio" name="presentReport" value="yes" />
                    No <input type="radio" name="presentReport" value="no" /><br />
                    If yes, was the child present to testify/be examined by the court?
                    Yes <input type="radio" name="childPresent" value="yes" />
                    No <input type="radio" name="childPresent" value="no" /><br /><br />
                    
                    Did the court receive information from the child’s attorney over
                    the objection of one of the parties?
                    Yes <input type="radio" name="courtReceivedInformation" value="yes" />
                    No <input type="radio" name="courtReceivedInformation" value="no" /><br /><br />
                    
                    If the child gave input (testimony) to the court:<br /><br />
                    
                    What was the age of the child?
                    under 10 <input type="radio" name="childsAgeTestimony" value="under10" />
                    10-14 <input type="radio" name="childsAgeTestimony" value="10-14" />
                    Over 14 <input type="radio" name="childsAgeTestimony" value="over14" /><br /><br />
                    
                    How was the examination conducted?<br /><br />
                    Examined on the witness stand <input type="radio" name="examinationConducted" value="witnessStand" /><br /><br />
                        Did anyone object to the child being questioned in open court?
                        Yes <input type="radio" name="openCourt" value="yes" />
                        No <input type="radio" name="openCourt" value="no" /><br />
                        If yes, who objected? <input type="text" name="whoObjected" /><br />
                        Was the child placed under oath?
                        Yes <input type="radio" name="childUnderOath" value="yes" />
                        No <input type="radio" name="childUnderOath" value="no" /><br />
                        Who questioned the child?<br />
                        Judge <input type="checkbox" name="whoQuestionedChild" value="judge" />
                        Child's Attorney <input type="checkbox" name="whoQuestionedChild" value="attorney" />
                        Petitioner/Attorney <input type="checkbox" name="whoQuestionedChild" value="petitioner" />
                        Respondent/Attorney <input type="checkbox" name="whoQuestionedChild" value="respondent" />
                        Other <input type="checkbox" name="whoQuestionedChild" value="other" /><br />
                        Was either party denied the opportunity to question the child?
                        Yes <input type="radio" name="deniedOpportunity" value="yes" />
                        No <input type="radio" name="deniedOpportunity" value="no" /><br />
                        If yes, who was prevented from questioning the child?
                        Petitioner <input type="checkbox" name="preventedFromQuestioning" value="petitioner" />
                        Respondent <input type="checkbox" name="preventedFromQuestioning" value="respondent" /><br />
                        How did the child react to the examination? <input type="text" name="childReactionWitnessStand" /><br /><br />
                    Questioned in chambers <input type="radio" name="examinationConducted" value="chambers" /><br /><br />
                        Did any party object to the child being questioned in chambers?
                        Yes <input type="radio" name="objectToChamberQuestioning" value="yes" />
                        No <input type="radio" name="objectToChamberQuestioning" value="no" /><br />
                        Who went into chambers for the questioning?<br />
                        Petitioner <input type="checkbox" name="questioning" value="petitioner" /><br />
                        Petitioner's Attorney <input type="checkbox" name="questioning" value="petitionerAttorney" /><br />
                        Respondent <input type="checkbox" name="questioning" value="respondent" /><br />
                        Respondent's Attorney <input type="checkbox" name="questioning" value="respondentAttorney" /><br />
                        Child's Attorney <input type="checkbox" name="questioning" value="childAttorney" /><br />
                        Court Reporter <input type="checkbox" name="questioning" value="courtReporter" /><br />
                        If a court reporter was present for the in-chambers questioning, did the court make an order 
                        preventing the parties from accessing a record of the examination?
                        Yes <input type="radio" name="accessRecord" value="yes" />
                        No <input type="radio" name="accessRecord" value="no" /><br/><br />
                    Questioned by remote access <input type="radio" name="examinationConducted" value="remoteAccess" /><br /><br />
                        At the courthouse in a separate location by video transmission to the courtroom
                        <input type="radio" name="remoteAccessQuestioning" value="courthouse" /><br />
                        Away from the courthouse by Skype to the courtroom
                        <input type="radio" name="remoteAccessQuestioning" value="skype" /><br />
                        Other <input type="radio" name="remoteAccessQuestioning" value="other" />
                        Describe <input type="text" name="otherRemoteAccess" /><br />
                        Was the child placed under oath?
                        Yes <input type="radio" name="childUnderOathRemoteAccess" value="yes" />
                        No <input type="radio" name="childUnderOathRemoteAccess" value="no" /><br />
                        Who questioned the child?<br />
                        Judge <input type="checkbox" name="whoQuestionedChildRemoteAccess" value="judge" />
                        Child's Attorney <input type="checkbox" name="whoQuestionedChildRemoteAccess" value="childAttorney" />
                        Petitioner/Attorney <input type="checkbox" name="whoQuestionedChildRemoteAccess" value="petitioner" />
                        Respondent/Attorney <input type="checkbox" name="whoQuestionedChildRemoteAccess" value="respondent" />
                        Other <input type="checkbox" name="whoQuestionedChildRemoteAccess" value="other" /><br />
                        Was either party denied the opportunity to question the child?
                        Yes <input type="radio" name="deniedQuestioning" value="yes" />
                        No <input type="radio" name="deniedQuestioning" value="no" /><br />
                        If yes, who was prevented from questioning the child?
                        Petitioner <input type="checkbox" name="prevented" value="petitioner" />
                        Respondent <input type="checkbox" name="prevented" value="respondent" /><br /><br />
                        
                        How did the child react to the examination?
                        <input type="text" name="childReactionRemoteAccess" />
                        <p class="close">close</p>
              </div>

        

    </div>
</form>
</script>