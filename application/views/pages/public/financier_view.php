<!-- Inside Page Financiers -->
<div class="sub_page_wraper">

<section class="tf-inner-banner">
	<div class="container">
		<h3>Financiers</h3>
		<h4>Expand your trade finance portfolio.</h4>
	</div>
</section>

<!-- Financiers -->
<section id="Financiers" class="section pb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2 class="mb-0">Instrument Currently Active for Funding</h2>
				</div>
			</div>
		</div>		
		
		
		<div class="row projectFactsWrapColumns">
                <div class="col-md-12">
					<!--<div class="section-title text-center">
						<h3 class="mb-0">Total Instruments</h3>
					</div>-->
					<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap">
            <div class="item single">
                <p id="number1" class="counter"><?php echo $total_count ?></p>
                <span></span>
                <p>Total Instruments For Funding</p>
				<p class="small">(Amount in USD)</p>
            </div>
			<div class="item single">
                <p id="number2" class="counter"><?php echo $count ?></p>
                <span></span>
                <p>Active Instruments For Funding</p>
				<p class="small">(Amount in USD)</p>
            </div>
			<div class="item single">
                <p id="number3" class="counter"><?php echo $tot_sum ?></p>
                <span></span>
                <p>Total Value of Trade Instruments</p>
				<p class="small">(Amount in USD)</p>
            </div>
        </div>
    </div>
</div>
					
                </div>
				
                <div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="mb-0">Trade Instruments Live worth USD</h3>
					</div>					
					<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap flex-projectFactsWrap">
            <div class="item">
                <p id="number1" class="counter"><?php echo $rec_sum ?></p>
                <span></span>
                <p>Receviables</p>
            </div>
            <div class="item">
                <p id="number2" class="counter"><?php echo $loc_sum ?></p>
                <span></span>
                <p>Letter of Credit</p>
            </div>
            <div class="item">
                <p id="number3" class="counter"><?php echo $bg_sum ?></p>
                <span></span>
                <p>Bank Guarantees</p>
            </div>
            <div class="item">
                <p id="number4" class="counter"><?php echo $sblc_sum ?></p>
                <span></span>
                <p>SBLC</p>
            </div>
			<div class="item">
                <p id="number5" class="counter"><?php echo $wr_sum ?></p>
                <span></span>
                <p>Warehouse Receipt</p>
            </div>
			<div class="item">
                <p id="number6" class="counter"><?php echo $pay_sum ?></p>
                <span></span>
                <p>Payable</p>
            </div>
			<div class="item">
                <p id="number7" class="counter"><?php echo $oth_sum ?></p>
                <span></span>
                <p>Other</p>
            </div>
        </div>
    </div>
</div>
					
					
					
				</div>
        </div>
	
	
		

		<div class="row">
                    <div class="col-md-12">
					
					<div class="tf-assets-table-area">
                        <div class="tf-filters">
                            <div class="tf-ticker-head">
                                <ul class="nav tf-nav-tabs tf-ticker-nav tf-ticker-nav-desktop form-tabs" role="tablist">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#tab1" role="tab" data-toggle="tab" aria-selected="true">All</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" href="#tab1" role="tab" data-toggle="tab" aria-selected="true">Receivables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab" aria-selected="false">Letters of Credit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab" aria-selected="false">Bank Guarantees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab4" role="tab" data-toggle="tab" aria-selected="false">SBLC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab5" role="tab" data-toggle="tab" aria-selected="false">Warehousing Receipt</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" href="#tab6" role="tab" data-toggle="tab" aria-selected="false">Payable</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" href="#tab7" role="tab" data-toggle="tab" aria-selected="false">Other</a>
                                    </li>
                                </ul>
                                <div class="tf-ticker-nav-mobile">
                                    <select class="form-control" id="tab_selector">
                                        <option value="0">All</option>
										<option value="0">Receivables</option>
                                        <option value="1">Letters of Credit</option>
                                        <option value="2">Bank Guarantees</option>
                                        <option value="3">SBLC</option>
                                        <option value="4">Warehousing Receipt</option>
										<option value="5">Payable</option>
										<option value="6">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="tf-assets-table-block">
                            <div class="tf-assets-table-block-inner">
                                <div class="tab-content">
                                    <!-- Start Receivables Data -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578550427933</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578550427933')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578474181526</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578474181526')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578473119444</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578473119444')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Receivables Data -->

                                    <!-- Start letters of credit Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="overflow-fade left on"></div>
                        <div class="overflow-fade right on"></div>
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">Letter Of Credit</td>
      <td>REC1578550427933</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578550427933')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Letter Of Credit</td>
      <td>SBLC1578474181526</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('SBLC1578474181526')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Letter Of Credit</td>
      <td>REC1578473119444</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578473119444')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End letters of credit Data -->

                                    <!-- Start Bank Gaurantees Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="overflow-fade left on"></div>
                        <div class="overflow-fade right on"></div>
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">Bank Guarantees</td>
      <td>REC1578550427933</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578550427933')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Bank Guarantees</td>
      <td>SBLC1578474181526</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('SBLC1578474181526')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Bank Guarantees</td>
      <td>REC1578473119444</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578473119444')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Bank Gaurantees Data -->

                                    <!-- Start SBLC Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="overflow-fade left on"></div>
                        <div class="overflow-fade right on"></div>
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">SBLC</td>
      <td>REC1578550427933</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578550427933')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">SBLC</td>
      <td>SBLC1578474181526</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('SBLC1578474181526')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">SBLC</td>
      <td>REC1578473119444</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578473119444')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End SBLC Data -->

                                    <!-- Start Warehousing Receipt Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="overflow-fade left on"></div>
                        <div class="overflow-fade right on"></div>
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578550427933</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578550427933')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">SBLC</td>
      <td>SBLC1578474181526</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('SBLC1578474181526')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578473119444</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578473119444')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Warehousing Receipt Data -->
									
									<!-- Start Warehousing Receipt Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="overflow-fade left on"></div>
                        <div class="overflow-fade right on"></div>
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578550427933</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578550427933')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">SBLC</td>
      <td>SBLC1578474181526</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('SBLC1578474181526')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Receivable</td>
      <td>REC1578473119444</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('REC1578473119444')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Warehousing Receipt Data -->
									
									<!-- Start Other Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
						<div class="overflow-fade left on"></div>
                        <div class="overflow-fade right on"></div>
						<div class="table-responsive">
						<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">INSTRUMENT TYPE</th>
      <th scope="col">INSTRUMENT REF</th>
      <th scope="col">COUNTRY OF ORIGINATION</th>
      <th scope="col">AMOUNT</th>
	  <th scope="col">DATE OF MATURITY</th>
	  <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="bold">Other</td>
      <td>OTH1577103284017</td>
      <td>India</td>
      <td>XDC 100</td>
	  <td>31-01-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('OTH1577103284017')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Other</td>
      <td>OTH1577103284017</td>
      <td>Canada</td>
      <td>USD 60000</td>
	  <td>27-03-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('OTH1577103284017')"><span>Get Document Access</span></button></td>
    </tr>
    <tr>
      <td class="bold">Other</td>
      <td>OTH1577103284017</td>
      <td>Austria</td>
      <td>EUR 100000</td>
	  <td>22-02-2020</td>
	  <td><button class="btn btn-blue" onclick="passData('OTH1577103284017')"><span>Get Document Access</span></button></td>
    </tr>
  </tbody>
</table></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Other Data -->
                                </div>
                            </div>
                        </div>
                    </div>
						
						
						
						
						<!--<div class="tf-financier-table tf-element">
                            <div class="overflow-fade left on"></div>
                            <div class="overflow-fade right on"></div>
                            <div class="table">
                                <div class="table-head">
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 16%;"><span>Instrument Type</span></div>
                                    </div>
									<div class="cell-wrapper">
                                        <div class="table-cell" style="width: 16%;"><span>Instrument Ref</span></div>
                                    </div>
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 17%;"><span>Country of Origination</span></div>
                                    </div>
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 15%;"><span>Amount</span></div>
                                    </div>
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 16%;"><span>Date of Maturity</span></div>
                                    </div>
                                </div>
                                <div>
                                    <?php
                                // if ($instrumnent && !empty($instrumnent) && is_array($instrumnent) && sizeof($instrumnent) <> 0) {
                                    foreach ($instrument as $instru) { ?>
                                    <div class="table-row collapsed">
                                        <div class="cell-wrapper">
                                            <div class="table-cell bold" style="width: 16%;"><span><?php 
                                            if($instru->tfi_instrument == "SBLC")
                                            {  echo 'SBLC'; 
                                            }
                                            else if($instru->tfi_instrument == "REC")
                                            {  echo 'Receivable'; 
                                            }
                                            else if($instru->tfi_instrument == "LC")
                                            {  echo 'Letter Of Credit'; 
                                            }
                                            else if($instru->tfi_instrument == "BG")
                                            {  echo 'Bank Guarantees'; 
                                            }
                                            else if($instru->tfi_instrument == "PAY")
                                            {  echo 'Payable'; 
                                            }
                                            else if($instru->tfi_instrument == "OTH")
                                            {  echo 'Other'; 
                                            }
                                            else if($instru->tfi_instrument == "WR")
                                            {  echo 'Warehouse Receipt'; 
                                            }
                                            
                                            ?></span></div>
                                        </div>
										<div class="cell-wrapper">
                                            <div class="table-cell bold small" style="width: 16%;"><?php echo $instru->tfi_docRef ?></div>
                                        </div>
                                        <div class="cell-wrapper">
                                            <div class="table-cell" style="width: 17%;"><span><?php echo $instru->tfi_country ?></span></div>
                                        </div>
                                        <div class="cell-wrapper">
                                            <div class="table-cell bold" style="width: 15%;"><span><?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?></span></div>
                                        </div>
                                        <div class="cell-wrapper">
                                            <div class="table-cell" style="width: 16%;"><span><?php echo $instru->tfi_maturityDate ?></span></div>
                                        </div>
                                        <div class="table-cell" style="width: 16%;">
											<button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Document Access</span></button>
										</div>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
	</div>
</section>
<!-- /. Financiers -->

</div>
<!-- /. Inside Page Financiers -->
<div id="tf-loader-wrapper" style="display: none;"><div id="tf-loader"></div></div>
<div class="modal fade" id="privkey" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog" style="">
		<!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
			<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
                </div>
				<div class="modal-body text-center">
                        <div class="deployedData_modal_block">
                            <p class="left"><strong>*Only trusted masternode entity within the network can access the record. If you are a Masternode holder, enter the private key & access the document.</strong></p>
							<!--<p id="deployedData" style="word-break: break-all;"></p>-->
                            <p><span><a href="<?php echo base_url()?>publicv/setup_masternode" target="_blank">How to Create PrivateKey & Setup Masternode?</a></span></p>
							<form id="checkprivatekey_form" class="tf-suppliers-form" enctype="multipart/form-data" method="post">
                            
                                <div class="form-group ">
                                    <label for="private-key"class="left">Enter Private Key</label>
                                    <input type="text" class="form-control" id="privateKey" name="privateKey" autocomplete= "off"placeholder="Enter Private Key">
                                </div>
                                <div class="row">
									<div class="form-group ">
										<button  id = "checkprivkey" name = "suppliers" type="submit" class="btn btn-blue text-uppercase" >Submit</button>
									</div>
								</div>
                            </form>						
						</div>
				</div>
			</div>
	 	</div>
</div>
<div id="tf-loader-wrapper" style="display: none;"><div id="tf-loader"></div></div>
<div class="modal fade" id="wrngprivkey" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog" style="">
		<!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
			<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
                </div>
				<div class="modal-body text-center">
                        <div class="deployedData_modal_block">
							<p>Please become a masternode holder to view the document.</p>
                        <!--<p id="deployedData" style="word-break: break-all;"></p>-->			<div class="row">
                                <div class="form-group ">
                                    <button  id = "ok" name = "suppliers" type="submit" class="btn btn-blue text-uppercase" >OK</button>
                                </div>
                            </div>	
						</div>
				</div>
			</div>
	 	</div>
</div>
<div id="tf-loader-wrapper" style="display: none;"><div id="tf-loader"></div></div>
<div class="modal fade" id="hash" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog" style="">
		<!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
			<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
                </div>
				<div class="modal-body text-center">
                        <div class="deployedData_modal_block">
							<p>Document Hash.</p>
							<!--<p id="deployedData" style="word-break: break-all;"></p>-->
							
							<div id="hashData" style="word-break: break-all;">
								
								
                            </div>
                            <div class="form-group">
								<button id="okBtn" type="submit" class="btn btn-blue text-uppercase" data-keyboard="false">OK</button>
							</div>							
						</div>
				</div>
			</div>
	 	</div>
</div>

<?php
	
	// $this->load->view('includes/block_create_account');
	//$this->load->view('includes/block_features');	
	$this->load->view('includes/login_modal');
	
?>	

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" >
function passData(docRef){
    var myurl = '<?php echo base_url()?>publicv/get_access';
    $("#privkey").modal("show");
    $('#privkey').css('opacity', '1');
    $('#checkprivkey').click(function(e) {
        var privkey = document.getElementById("privateKey").value;
        jQuery.validator.addMethod("privateKey", function(value, element) {
		// allow any non-whitespace characters as the host part
            return this.optional( element ) || /^[0-9a-f]{64}$/.test( value );
        }, 'This field allows only number from 0-9 and alphabets from a-f');
        $('#checkprivatekey_form').validate({
            rules: {
                privateKey: {
                    required:true,
                    privateKey : true,
                    normalizer: function(value) {
                        // Update the value of the element
                        this.value = $.trim(value);
                        check = this.value;
                        if(check.startsWith("0x")){
                            check = check.slice(2);
                        }
                        else{
                            check = this.value;
                        }
                        // Use the trimmed value for validation
                        return check;
                    }
                }
            },
            messages: {
                privateKey:{
                    required: "Please enter a private key",
                    privateKey : "Enter valid private key of 64 characters"
                }
            },
            success: function (elem) {


            },
            error: function (elem) {
                
                
            },
            submitHandler: function (form, e) {
                // console.log(privkey,docRef);
                e.preventDefault();
                $("#privkey").modal("hide"); 
                showLoader1();   
                $.ajax({
                type: "POST",
                url: myurl,
                dataType:"json",
                data: {"action":"getaccess","docRef":docRef,"privkey":privkey}, // serializes the form's elements.
                success: (resp =>{
                    // console.log(resp);
                })// show response from the php script.
                }).done(resp => {
                                console.log(resp);
                    if(resp.privatekey == "true"){
                        $.ajax({
                        type:"POST",
                        dataType:"json",
                        url:"https://tfd.xinfin.net/api/getDocHash",
                        data:{"contractAddr":resp.contractAddr,
                                "passKey": resp.key,
                                "contractType" : "brokerInstrument"
                        },
                        success: resp => {
                            // console.log("response success: ",resp)
                        },
                        error: err =>{
                            console.log("response error: ",err)
                        }
                        }).done(resp => {
                        // .then(resp => {
                            // console.log("response : ",resp);
                            hideLoader1();
                            // console.log('formDataObj>>>>>>>', resp);
                            if(resp.status == true){
                                const hashUrl = `https://ipfs-gateway.xinfin.network/${resp.ipfsHash}`;
                                const tHtml = `
                                                <p>
                                                    <br><a href="${hashUrl}"target="_blank">${resp.ipfsHash}</a>
                                                </p>
                                                `
                                // hideLoader();
                                $("#hash").modal("show");
                                $('#hash').css('opacity', '1');
                                $('#hashData').html(tHtml);
                                $('#okBtn').click(function() {
                                    $("#hash").modal("hide");
                                    location.reload();
                                });
                            }
                                                    
                                                    
                        }).fail(error =>{
                            // hideLoader();
                            toastr.error('Something went wrong.', {timeOut: 70000}).css({"word-break":"break-all","width":"auto"});
                            setTimeout(location.reload.bind(location), 6000);
                        })
                    }
                    else{
                        hideLoader1();
                        $("#wrngprivkey").modal("show");
                        $('#wrngprivkey').css('opacity', '1');
                        $('#ok').click(function(e) {
                            location.reload();
                        })
                    }
                })
            }
        })
    });

}
</script>



<!--Animated counters script start -->
<script>
$(document).ready(function() {
	$('.counter').each(function () {
		$(this).prop('Counter',0).animate({
		Counter: $(this).text()
	}, {
	duration: 4000,
	easing: 'swing',
	step: function (now) {
		//$(this).text(Math.ceil(now));
		$(this).text(this.Counter.toFixed(0));
	}
	});
	});
});
</script>
<!--Animated counters script end -->

<script>
$('#tab_selector').on('change', function (e) {
	$('.form-tabs li a').eq($(this).val()).tab('show');
});
</script>