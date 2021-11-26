    <div class="brand clearfix">

<h4 class="pull-left text-white" style="margin:20px 0px 0px 20px"><img src="asssets/images/groeco.png" class="logo"> Grocery Store</h4>

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
      <a href="dashboard.php">
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
          <a href="">Add Category
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
  <p class="text-center" style="color:#ffffff; margin-top: 100px;">© GroEco 2020
  </p>
</nav>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Messages
              </h2>
              <!-- Zero Configuration Table -->
              <div class="panel panel-default">
                <div class="panel-heading">List Messages
                </div>
                <div class="panel-body">
                                    <div id="zctb_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="zctb_length"><label>Show <select name="zctb_length" aria-controls="zctb" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="zctb_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="zctb"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="zctb" class="display table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="zctb_info" style="width: 100%;" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 58px;" aria-sort="ascending" aria-label="#
                        : activate to sort column descending">#
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 117px;" aria-label="Name
                        : activate to sort column ascending">Name
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 241px;" aria-label="Mobile Number
                        : activate to sort column ascending">Mobile Number
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 174px;" aria-label="Messages
                        : activate to sort column ascending">Messages
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 124px;" aria-label="Action
                        : activate to sort column ascending">Action
                        </th></tr>
                    </thead>
                    <tbody>
                                          <tr class="odd"><td colspan="5" class="dataTables_empty" valign="top">No data available in table</td></tr></tbody>
                  </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="zctb_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="zctb_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="zctb_previous"><a href="#" aria-controls="zctb" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next disabled" id="zctb_next"><a href="#" aria-controls="zctb" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    