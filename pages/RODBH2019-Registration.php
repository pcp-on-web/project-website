    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="de name">Doktorandensymposium: Research on Online Databases in History (RODBH 2019), 4./5. April 2019, Leipzig</span>
                        <span class="en name">Doctoral Symposium on Research on Online Databases in History (RODBH 2019), April 4th-5th 2019, Leipzig</span>

                        <hr class="star-light">
                        <span class="skills"> <a href="page.php?goto=RODBH2019#en">Call for Papers</a> | <a href="page.php?goto=RODBH2019-AcceptedPapers#en">Accepted Papers</a> |  <a href="page.php?goto=RODBH2019-Agenda#en">Agenda</a>  | Registration</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Partner Section -->
    <?php echo section_begin("Registration","Registration",0); ?> 

    <!-- Beginn Partner Content -->
<p>Participation is open for researchers and students who are interested in the topic of research on online databases in history. There is no participation fee. Participants will be asked to pay for lunch (15 Euro/day) at the Mensa in advance. For those PhD students who submitted a paper or abstract and have been accepted, accommodation is provided as well as parts of the travel expenses which get reimbursed pro rata, funded by the German Science Foundation (DFG).
</p>

            <form name="sentMessage" id="contactForm" novalidate>

<h3>Personal Data</h3>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
							<div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Role</label>

									<p style="font-size: 1.5em; color: rgb(85, 85, 85);">
									Role: <input id="role" type="checkbox" name="PhD Student" value="PhD Student"> PhD Student
									<input id="role" type="checkbox" name="Author" value="Author"> Author
									<input id="role" type="checkbox" name="DfHM" value="DfH Member"> Data for History Member
									<input id="role" type="checkbox" name="Researcher" value="Researcher"> Researcher
									<input id="role" type="checkbox" name="Student" value="Student"> Student
									<input id="role" type="checkbox" name="Other" value="Other"> Other Role
									</p>

                </div>
							<div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Affiliation</label>
                  <input class="form-control" id="affiliation" type="text" placeholder="Affiliation" required data-validation-required-message="Please enter your affiliation.">
                  <p class="help-block text-danger"></p>

                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Country</label>
                  <input class="form-control" id="country" type="text" placeholder="Country" required data-validation-required-message="Please enter your country.">
                  <p class="help-block text-danger"></p>

                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

<h3>Participation</h3>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">

<ul>
									<p style="font-size: 1.5em; color: rgb(85, 85, 85);">

									<input id="participation" type="checkbox" name="WedActivity" value="WedActivity"> Wednesday Activity (April 3rd)<br/>
									<input id="participation" type="checkbox" name="Thursday" value="Thursday"> Thursday (April 4th)<br/>
									<input id="participation" type="checkbox" name="ThuLunch" value="ThuLunch"> Thursday Lunch (+15,00 Euro)<br/>
									<input id="participation" type="checkbox" name="Dinner" value="Dinner"> Dinner<br/>
									<input id="participation" type="checkbox" name="Friday" value="Friday"> Friday (April 5th)<br/>
									<input id="participation" type="checkbox" name="FriLunch" value="ThuLunch"> Friday Lunch (+15,00 Euro)<br/>
									<input id="participation" type="checkbox" name="FriActivity" value="FriActivity"> Friday Activity<br/>
									</p>
</ul>
		           </div>
              </div>

<h3>Food preferences </h3>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">

<ul>
									<p style="font-size: 1.5em; color: rgb(85, 85, 85);">

									<input id="food" type="checkbox" name="Vegetarian" value="Vegetarian"> Vegetarian<br/>
									<input id="food" type="checkbox" name="Pork" value="Pork" checked> Pork<br/>
									<input id="food" type="checkbox" name="Beef" value="Beef" checked> Beef<br/>
									</p>
</ul>
		           </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Other preferences</label>
                  <textarea class="form-control" id="foodother" rows="5" placeholder="Other food preferences"></textarea>
                </div>
              </div>

<h3>Further information for the organizing team</h3>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message"></textarea>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
<button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
              </div>
</form>



    <!-- End Partner Content -->
    <?php echo section_end(); ?> 

