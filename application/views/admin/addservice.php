      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
          <div class="row">
              <div class="col-lg-12">
                  <section class="panel">
                      <header class="panel-heading">
                          Add a new customer
                      </header>
                      <div class="panel-body">
                          <form action="<?php echo base_url() ?>admin/home/addcustver" method="post" class="form-horizontal">
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Customer Name</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="customer_name" class="form-control">
                                  </div>
                                </div>
                               <div class="form-group">
                                  <label class="col-sm-2 control-label">S.No</label>
                                      <input type="text" name="sno" placeholder="" class="form-control">
                                      <span class="help-inline">(999) 999-9999</span>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Brand</label>
                                  <input type="text" name="brand" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Model</label>
                                  <div class="col-sm-10">
                                        <input type="text" name="model" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">IMEI</label>
                                  <div class="col-sm-10">
                                        <input type="text" name="imei" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Complaint</label>
                                  <div class="col-sm-10">
                                        <input type="text" name="complaint" class="form-control">
                                  </div>
                              </div>            
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Amount</label>
                                  <div class="col-sm-10">
                                        <input type="text" name="amount" class="form-control">
                                  </div>
                              </div>      
                              <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <button type="submit" class="btn btn-success">Submit</button>
                               </div>
                              </div>
                          </form>
                      </div>
                  </section>
              </div>
          </div>
              <!-- page end-->
          </section>
      </section>
