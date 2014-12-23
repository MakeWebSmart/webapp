<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2>Take a <span>quick test</span></h2>
                                                <!--<div class="container">-->
<a href="#" class="btn btn-lg btn-success"   data-toggle="modal"   data-target="#questionModal">Click to open queries</a>
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Self test</h4>
            </div>
            <div class="modal-body">
                <h3>Modal Body</h3>
                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#querybox" aria-controls="querybox" role="tab" data-toggle="tab">Queries</a></li>
    <li role="presentation"><a href="#contactinfo" aria-controls="contactinfo" role="tab" data-toggle="tab">Contact Info</a></li>
  </ul>

  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="querybox">
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>Query</th>
            <th>Answer</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Please select your Country</td>
            <td>
                <select  class="form-control" name="qcountry" id="qCountry">
                    <option value="" selected disabled>Please select</option>
                    <option value="uk">UK</option>
                    <option value="au">Australia</option>
                    <option value="bd">Bangladesh</option>
                    <option value="in">India</option>
                </select>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Please tell us your Education Qualification</td>
            <td>
                <select  class="form-control" name="qeducation" id="qEducation">
                    <option value="" selected disabled>Please select</option>
                    <option value="12">HSC/GCSE/O level</option>
                    <option value="16">Undergraduate</option>
                    <option value="17">Graduate</option>
                    <option value="50">Other</option>
                </select>
                
            </td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Please tell us your current status</td>
            <td>
                <input type="text" class="form-control" name="qcurrent"  placeholder="study/job/other" id="qcurrent" />
            </td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Do you have study gap?</td>
            <td>
                <select  class="form-control" name="qgap" id="qGap">
                    <option value="" selected disabled>Please select</option>
                    <option value="0">No</option>
                    <option value="1">Yes, 1 year</option>
                    <option value="2">Yes, 2 years</option>
                    <option value="3">Yes, 3 years</option>
                    <option value="4">Yes, 4 years</option>
                    <option value="5">Yes, 5 years</option>
                    <option value="10">Yes, more than 5 years</option>
                </select>
            </td>
          </tr>
          <tr>
            <td>5.</td>
            <td>Do you have any English Certificate?</td>
            <td>
                <div class="radio">
                    <label>
                      <input type="radio" name="qcert" id="qcert1" value="y" checked>
                      Yes
                    </label>
<!--                  </div>
                  <div class="radio">-->
                    <label>
                      <input type="radio" name="qcert" id="qcert2" value="n">
                      No
                    </label>
                  </div>
                </td>
          </tr>
          <tr>
            <td>5.2</td>
            <td>If yes selected above, then please mention the certificate name:</td>
            <td>
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="ielts">
                      IELTS
                    </label>
                    <label>
                      <input type="checkbox" value="tofel">
                      TOFEL
                    </label>
                    <label>
                      <input type="checkbox" value="sat">
                      SAT
                    </label>
                    <label>
                      <input type="checkbox" value="gre">
                      GRE
                    </label>
                    <label>
                      <input type="checkbox" value="gmat">
                      GMAT
                    </label>
                </div>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Do you have any work experience? </td>
            <td>
                <div class="radio">
                    <label>
                      <input type="radio" name="qwork" id="qwork1" value="y" checked>
                      Yes
                    </label>
                    <label>
                      <input type="radio" name="qwork" id="qwork2" value="n">
                      No
                    </label>
                  </div>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>Have you been applied any country for student visa?</td>
            <td>
                <div class="radio">
                    <label>
                      <input type="radio" name="qapply" id="qapply1" value="y" checked>
                      Yes
                    </label>
                    <label>
                      <input type="radio" name="qapply" id="qapply2" value="n">
                      No
                    </label>
                  </div>
            </td>
        </tr>
        <tr>
            <td>7.2</td>
            <td>If yes selected above, then please mention the certificate name:</td>
            <td>
                <input type="text"  class="form-control" name="qapplycountry"  placeholder="countries name" id="qapplycountry" />
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Current Location?</td>
            <td>
                <input type="text"  class="form-control" name="qlocation"  placeholder="city, country" id="qlocation" />
            </td>
        </tr>
        </tbody>
    </table>
</div>
        
<div role="tabpanel" class="tab-pane" id="contactinfo">
    settings content
</div>
</div>

        
</div>
       
</div>
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">View Result</button>
        </div>
    </div>
    </div>
  </div>
</div>
<!--</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>