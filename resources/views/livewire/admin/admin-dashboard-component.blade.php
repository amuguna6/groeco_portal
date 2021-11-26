
    <div class="brand clearfix">

<h4 class="pull-left text-white" style="margin:20px 0px 0px 20px"><img src="assets/images/groeco.png" class="logo"> Grocery Store</h4>

		<span class="menu-btn"><i class="fa fa-bars"></i></span>

		<ul class="ts-profile-nav">

			

			<li class="ts-account">

				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>

				<ul>
                    <li><a href="#">Change Password</a></li>
					<!--<li><a href="change-password.php">Change Password</a></li>-->

					<li><a href="logout.php">Logout</a></li>

				</ul>

			</li>

		</ul>

	</div>

    <div class="ts-main-content">
      <nav class="ts-sidebar">
  <ul class="ts-sidebar-menu">
    <li class="ts-label">Main
    </li>
    <li>
      <a href="{{route('admin.dashboard')}}">
        <i class="fa fa-dashboard">
        </i> Dashboard
      </a>
    </li>
    <li>
      <div class="more"><i class="fa fa-angle-down"></i></div><a href="#" class="parent">
        <i class="fa fa-files-o">
        </i> Category
      </a>
      <ul>
        <li>
          <a href="{{route('admin.add_category')}}">Add Category
          </a>
        </li>
        <li>
          <a href="{{route('admin.manage_category')}}">Manage Category
          </a>
        </li>
      </ul>
    </li>
    <li>
      <div class="more"><i class="fa fa-angle-down"></i></div><a href="#" class="parent">
        <i class="fa fa-files-o">
        </i>Items
      </a>
      <ul>
        <li>
          <a href="add-items.php">Add Items
          </a>
        </li>
        <li>
          <a href="manage-items.php">Manage Items
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="manage-orders.php">
        <i class="fa fa-cart-arrow-down">
        </i> Orders
      </a>
    </li>
    <li>
      <a href="manage-user.php">
        <i class="fa fa-user">
        </i>  Users
      </a>
    </li>
    
    <li>
      <div class="more"><i class="fa fa-angle-down"></i></div><a href="#" class="parent">
        <i class="fa fa-picture-o">
        </i> Banner
      </a>
      <ul>
        <li>
          <a href="add-banner.php">Add Banner
          </a>
        </li>
        <li>
          <a href="manage-banner.php">Manage Banner
          </a>
        </li>
      </ul>
    </li>
    <li>
      <div class="more"><i class="fa fa-angle-down"></i></div><a href="#" class="parent">
        <i class="fa fa-gift">
        </i> Offer
      </a>
      <ul>
        <li>
          <a href="add-offer.php">Add Offer
          </a>
        </li>
        <li>
          <a href="manage-offer.php">Manage Offer
          </a>
        </li>
      </ul>
    </li>

	<li>
      <a href="notification.php">
        <i class="fa fa-bell">
        </i>  Notification
      </a>
    </li>
	<li>
      <a href="message.php">
        <i class="fa fa-envelope">
        </i>  Messages
      </a>
    </li>
  </ul>
  <p class="text-center" style="color:#ffffff; margin-top: 100px;">© Quintus Labs
  </p>
</nav>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Dashboard
              </h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body bk-primary text-light">
                          <div class="stat-panel text-center">
                                                        <div class="stat-panel-number h1 ">
                              2315                            </div>
                            <div class="stat-panel-title text-uppercase">Orders
                            </div>
                          </div>
                        </div>
                        <a href="manage-orders.php" class="block-anchor panel-footer">Full Detail
                          <i class="fa fa-arrow-right">
                          </i>
                        </a>
                      </div>
                    </div>
					          <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body bk-danger text-light">
                          <div class="stat-panel text-center">
                                                          <div class="stat-panel-number h1 ">
                              12                            </div>
                            <div class="stat-panel-title text-uppercase">Items
                            </div>
                          </div>
                        </div>
                         <a href="manage-items.php" class="block-anchor panel-footer text-center">Full Detail &nbsp;
                          <i class="fa fa-arrow-right">
                          </i>
                        </a>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body bk-success text-light">
                          <div class="stat-panel text-center">
                                                         <div class="stat-panel-number h1 ">
                              2146                            </div>
                            <div class="stat-panel-title text-uppercase">Pending
                            </div>
                          </div>
                        </div>
                        <a href="pending-orders.php" class="block-anchor panel-footer text-center">Full Detail &nbsp;
                          <i class="fa fa-arrow-right">
                          </i>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body bk-info text-light">
                          <div class="stat-panel text-center">
                                                        <div class="stat-panel-number h1 ">
                              2722                            </div>
                            <div class="stat-panel-title text-uppercase">Users
                            </div>
                          </div>
                        </div>
                        <a href="manage-user.php" class="block-anchor panel-footer text-center">Full Detail &nbsp;
                          <i class="fa fa-arrow-right">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-sm-9">
                    <h3>Recent Orders</h3>
                 </div>
                 <div class="col-sm-3"><h5><a href="/drugstore/admin/manage-orders.php" class="pt-3">View All Orders</a></h5></div>
                <div class="col-sm-12">
                <div class="panel panel-default">
							<div class="panel-heading">Orders</div>
							<div class="panel-body">
															<div id="zctb_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="zctb_length"><label>Show <select name="zctb_length" aria-controls="zctb" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="zctb_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="zctb"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="zctb" class="display table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="zctb_info" style="width: 100%;" width="100%" cellspacing="0">
									<thead>
										<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="OrderID: activate to sort column descending">OrderID</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 56px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 81px;" aria-label="Mobile Number: activate to sort column ascending">Mobile Number</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 50px;" aria-label="Area: activate to sort column ascending">Area</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 177px;" aria-label="Address: activate to sort column ascending">Address</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 43px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 45px;" aria-label="Action: activate to sort column ascending">Action</th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 84px;" aria-label=": activate to sort column ascending"></th></tr>
									</thead>
									<tbody>

																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
																				
										
									<tr role="row" class="odd">
											<td class="sorting_1">17002359</td>
											<td>Gsh  </td>
											<td>8699998142</td>
											<td>Ludhiana</td>
											<td>bsjjs</td>
											<td><b class="text-warning">Confirmed</b></td>
											<td><a href="view-order.php?orderid=17002359">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Confirmed">
												<option selected="">Pending</option>
												<option value="manage-orders.php?confirmid=17002359&amp;mobile=8699998142" selected="">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002359&amp;mobile=8699998142">Prepared</option>
												<option value="manage-orders.php?wayid=17002359&amp;mobile=8699998142">On Way</option>
												<option value="manage-orders.php?deliveredid=17002359&amp;mobile=8699998142">Delivered</option>
												</select></td>
										</tr><tr role="row" class="even">
											<td class="sorting_1">17002360</td>
											<td>Gsh  </td>
											<td>8699998142</td>
											<td>Ludhiana</td>
											<td>bsjjs</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002360">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002360&amp;mobile=8699998142">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002360&amp;mobile=8699998142">Prepared</option>
												<option value="manage-orders.php?wayid=17002360&amp;mobile=8699998142">On Way</option>
												<option value="manage-orders.php?deliveredid=17002360&amp;mobile=8699998142">Delivered</option>
												</select></td>
										</tr><tr role="row" class="odd">
											<td class="sorting_1">17002361</td>
											<td>Gsh  </td>
											<td>8699998142</td>
											<td>Ludhiana</td>
											<td>bsjjs</td>
											<td><b class="text-warning">Confirmed</b></td>
											<td><a href="view-order.php?orderid=17002361">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Confirmed">
												<option selected="">Pending</option>
												<option value="manage-orders.php?confirmid=17002361&amp;mobile=8699998142" selected="">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002361&amp;mobile=8699998142">Prepared</option>
												<option value="manage-orders.php?wayid=17002361&amp;mobile=8699998142">On Way</option>
												<option value="manage-orders.php?deliveredid=17002361&amp;mobile=8699998142">Delivered</option>
												</select></td>
										</tr><tr role="row" class="even">
											<td class="sorting_1">17002362</td>
											<td>Gsh  </td>
											<td>8699998142</td>
											<td>Ludhiana</td>
											<td>bsjjs</td>
											<td><b class="text-warning">Delivered</b></td>
											<td><a href="view-order.php?orderid=17002362">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Delivered">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002362&amp;mobile=8699998142">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002362&amp;mobile=8699998142">Prepared</option>
												<option value="manage-orders.php?wayid=17002362&amp;mobile=8699998142">On Way</option>
												<option value="manage-orders.php?deliveredid=17002362&amp;mobile=8699998142" selected="">Delivered</option>
												</select></td>
										</tr><tr role="row" class="odd">
											<td class="sorting_1">17002363</td>
											<td>Testing </td>
											<td>9888599696</td>
											<td>Gxjdjsjs</td>
											<td> Dbdhdhjd,  Gxjdjsjs,  Dhdbnd- Shshs</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002363">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002363&amp;mobile=9888599696">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002363&amp;mobile=9888599696">Prepared</option>
												<option value="manage-orders.php?wayid=17002363&amp;mobile=9888599696">On Way</option>
												<option value="manage-orders.php?deliveredid=17002363&amp;mobile=9888599696">Delivered</option>
												</select></td>
										</tr><tr role="row" class="even">
											<td class="sorting_1">17002364</td>
											<td>Tiara  </td>
											<td>0853693342</td>
											<td>Takhatgarh</td>
											<td>ghs</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002364">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002364&amp;mobile=0853693342">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002364&amp;mobile=0853693342">Prepared</option>
												<option value="manage-orders.php?wayid=17002364&amp;mobile=0853693342">On Way</option>
												<option value="manage-orders.php?deliveredid=17002364&amp;mobile=0853693342">Delivered</option>
												</select></td>
										</tr><tr role="row" class="odd">
											<td class="sorting_1">17002365</td>
											<td>Gsh  </td>
											<td>8699998142</td>
											<td>Ludhiana</td>
											<td>bsjjs</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002365">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002365&amp;mobile=8699998142">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002365&amp;mobile=8699998142">Prepared</option>
												<option value="manage-orders.php?wayid=17002365&amp;mobile=8699998142">On Way</option>
												<option value="manage-orders.php?deliveredid=17002365&amp;mobile=8699998142">Delivered</option>
												</select></td>
										</tr><tr role="row" class="even">
											<td class="sorting_1">17002366</td>
											<td>Thangdeptrai  </td>
											<td>0971521719</td>
											<td>New Delhi</td>
											<td>jsissjsj</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002366">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002366&amp;mobile=0971521719">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002366&amp;mobile=0971521719">Prepared</option>
												<option value="manage-orders.php?wayid=17002366&amp;mobile=0971521719">On Way</option>
												<option value="manage-orders.php?deliveredid=17002366&amp;mobile=0971521719">Delivered</option>
												</select></td>
										</tr><tr role="row" class="odd">
											<td class="sorting_1">17002367</td>
											<td>Gaurav  </td>
											<td>9265681173</td>
											<td>Nadiad</td>
											<td>Kavant - Nasvadi Rd</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002367">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002367&amp;mobile=9265681173">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002367&amp;mobile=9265681173">Prepared</option>
												<option value="manage-orders.php?wayid=17002367&amp;mobile=9265681173">On Way</option>
												<option value="manage-orders.php?deliveredid=17002367&amp;mobile=9265681173">Delivered</option>
												</select></td>
										</tr><tr role="row" class="even">
											<td class="sorting_1">17002368</td>
											<td>Thangdeptrai  </td>
											<td>0971521719</td>
											<td>Delhi</td>
											<td>jsissjsj</td>
											<td><b class="text-warning">Pending</b></td>
											<td><a href="view-order.php?orderid=17002368">View Order</a></td>
											<td>
												<select onchange="location = this.value;" value="Pending">
												<option>Pending</option>
												<option value="manage-orders.php?confirmid=17002368&amp;mobile=0971521719">Confirmed</option>
												<option value="manage-orders.php?prepareid=17002368&amp;mobile=0971521719">Prepared</option>
												<option value="manage-orders.php?wayid=17002368&amp;mobile=0971521719">On Way</option>
												<option value="manage-orders.php?deliveredid=17002368&amp;mobile=0971521719">Delivered</option>
												</select></td>
										</tr></tbody>
								</table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="zctb_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="zctb_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="zctb_previous"><a href="#" aria-controls="zctb" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="zctb" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button next" id="zctb_next"><a href="#" aria-controls="zctb" data-dt-idx="4" tabindex="0">Next</a></li></ul></div></div></div></div>
							</div>
						</div>
                 
                </div>
              
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
   