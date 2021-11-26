    <div class="brand clearfix">

<h4 class="pull-left text-white" style="margin:20px 0px 0px 20px"><img src="assets/images/groeco.png" class="logo"> GroEco Store</h4>

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
              <h2 class="page-title">Manage Items
              </h2>
              <!-- Zero Configuration Table -->
              <div class="panel panel-default">
                <div class="panel-heading">List Items
                </div>
                <div class="panel-body">
                                    <div id="zctb_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="zctb_length"><label>Show <select name="zctb_length" aria-controls="zctb" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="zctb_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="zctb"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="zctb" class="display table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="zctb_info" style="width: 100%;" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 9px;" aria-sort="ascending" aria-label="#
                        : activate to sort column descending">#
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 41px;" aria-label="Image
                        : activate to sort column ascending">Image
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 82px;" aria-label="Name
                        : activate to sort column ascending">Name
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 88px;" aria-label="Category
                        : activate to sort column ascending">Category
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 92px;" aria-label="Description
                        : activate to sort column ascending">Description
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 35px;" aria-label="Price
                        : activate to sort column ascending">Price
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 85px;" aria-label="Discount Price
                        : activate to sort column ascending">Discount Price
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 71px;" aria-label="Homepage
                        : activate to sort column ascending">Homepage
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 43px;" aria-label="Action
                        : activate to sort column ascending">Action
                        </th></tr>
                    </thead>
                    <tbody>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                          <tr role="row" class="odd">
                        <td class="sorting_1">
                          1                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061129000000.png" style="width:50px;">
                        </td>
                        <td>
                          Fish                        </td>
                        <td>
                          Meat &amp; Fish                        </td>
                        <td>
                                                  </td>

                        <td>
                          253 ₹
                          <a href="update-item.php?edititem=1150" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1150" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1150" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1150" data-category="Meat &amp; Fish" data-name="Fish" data-image="20211114061129000000.png" data-description="" data-price="253" data-discount="" data-attribute="1kg">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1150" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">
                          2                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061153000000.png" style="width:50px;">
                        </td>
                        <td>
                          Chicken Egg Brown                        </td>
                        <td>
                          Dairy &amp; Egg                        </td>
                        <td>
                                                  </td>

                        <td>
                          60 ₹
                          <a href="update-item.php?edititem=1151" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1151" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1151" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1151" data-category="Dairy &amp; Egg" data-name="Chicken Egg Brown" data-image="20211114061153000000.png" data-description="" data-price="60" data-discount="" data-attribute="10 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1151" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">
                          3                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061119000000.png" style="width:50px;">
                        </td>
                        <td>
                          Chicken Egg White                        </td>
                        <td>
                          Dairy &amp; Egg                        </td>
                        <td>
                                                  </td>

                        <td>
                          50 ₹
                          <a href="update-item.php?edititem=1152" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1152" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1152" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1152" data-category="Dairy &amp; Egg" data-name="Chicken Egg White" data-image="20211114061119000000.png" data-description="" data-price="50" data-discount="" data-attribute="10 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1152" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">
                          4                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061141000000.png" style="width:50px;">
                        </td>
                        <td>
                          Diet Coke                        </td>
                        <td>
                          Beverages                        </td>
                        <td>
                                                  </td>

                        <td>
                          30 ₹
                          <a href="update-item.php?edititem=1153" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1153" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1153" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1153" data-category="Beverages" data-name="Diet Coke" data-image="20211114061141000000.png" data-description="" data-price="30" data-discount="" data-attribute="1 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1153" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">
                          5                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061112000000.png" style="width:50px;">
                        </td>
                        <td>
                          Coca Cola                         </td>
                        <td>
                          Beverages                        </td>
                        <td>
                                                  </td>

                        <td>
                          50 ₹
                          <a href="update-item.php?edititem=1154" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1154" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1154" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1154" data-category="Beverages" data-name="Coca Cola " data-image="20211114061112000000.png" data-description="" data-price="50" data-discount="" data-attribute="1 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1154" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">
                          6                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061137000000.png" style="width:50px;">
                        </td>
                        <td>
                          Sprite                        </td>
                        <td>
                          Beverages                        </td>
                        <td>
                                                  </td>

                        <td>
                          40 ₹
                          <a href="update-item.php?edititem=1155" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1155" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1155" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1155" data-category="Beverages" data-name="Sprite" data-image="20211114061137000000.png" data-description="" data-price="40" data-discount="" data-attribute="1 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1155" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">
                          7                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061104000000.png" style="width:50px;">
                        </td>
                        <td>
                          Pepsi Can                        </td>
                        <td>
                          Beverages                        </td>
                        <td>
                                                  </td>

                        <td>
                          60 ₹
                          <a href="update-item.php?edititem=1156" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1156" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1156" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1156" data-category="Beverages" data-name="Pepsi Can" data-image="20211114061104000000.png" data-description="" data-price="60" data-discount="" data-attribute="10 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1156" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">
                          8                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061138000000.png" style="width:50px;">
                        </td>
                        <td>
                          Mango Juice                        </td>
                        <td>
                          Beverages                        </td>
                        <td>
                                                  </td>

                        <td>
                          80 ₹
                          <a href="update-item.php?edititem=1157" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1157" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1157" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1157" data-category="Beverages" data-name="Mango Juice" data-image="20211114061138000000.png" data-description="" data-price="80" data-discount="" data-attribute="1 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1157" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">
                          9                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061110000000.png" style="width:50px;">
                        </td>
                        <td>
                          Grape Juice                        </td>
                        <td>
                          Beverages                        </td>
                        <td>
                                                  </td>

                        <td>
                          60 ₹
                          <a href="update-item.php?edititem=1158" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1158" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1158" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1158" data-category="Beverages" data-name="Grape Juice" data-image="20211114061110000000.png" data-description="" data-price="60" data-discount="" data-attribute="1 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1158" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">
                          10                        </td>
                        <td>
                          <img src="../assets/images/ProductImage/product/20211114061133000000.png" style="width:50px;">
                        </td>
                        <td>
                          Cabbage                        </td>
                        <td>
                          Fruits &amp; Vegetables                        </td>
                        <td>
                                                  </td>

                        <td>
                          30 ₹
                          <a href="update-item.php?edititem=1159" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>

                        <td>
                           ₹
                          <a href="update-item.php?edititem=1159" onclick="return confirm('Do you want to update Price');">&nbsp;
                            <i class="fa fa-pencil">
                            </i>
                          </a>
                        </td>
                        <td>
                                                    <a href="manage-items.php?unhomepage=1159" onclick="return confirm('Do you really want to Make item on Homepage')">NO
                          </a>
                                                  </td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="1159" data-category="Fruits &amp; Vegetables" data-name="Cabbage" data-image="20211114061133000000.png" data-description="" data-price="30" data-discount="" data-attribute="1 piece">
                                                                            <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                                            </i>
                                                                          </a>
                          <a href="manage-items.php?del=1159" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr></tbody>
                  </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="zctb_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="zctb_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="zctb_previous"><a href="#" aria-controls="zctb" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="zctb" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="zctb_next"><a href="#" aria-controls="zctb" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="height: 100%; padding-top: 10%;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Update Item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                   <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   <input type="hidden" name="id" class="form-control" id="id" required="">

                   <div class="form-group">
                   <label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
                   <div class="col-sm-10">
                   <input type="text" name="itemname" class="form-control" id="itemname" required="">
                   </div>

                   </div>

                   <div class="hr-dashed"></div>
                   <div class="form-group">
                   <label class="col-sm-2 control-label">Description<span style="color:red">*</span></label>
                   <div class="col-sm-10">
                   <textarea class="form-control" name="itemdes" id="itemdes"></textarea>
                   </div>
                   </div>

                   <div class="form-group">
                   <label class="col-sm-2 control-label">Price<span style="color:red">*</span></label>
                   <div class="col-sm-4">
                   <input type="number" name="itemprice" class="form-control" id="itemprice" required="" placeholder="Per gm/kg/bounch/piece">
                   </div>
                   <label class="col-sm-2 control-label">Discount Price<span style="color:red"></span></label>
                   <div class="col-sm-4">
                      <input type="number" name="discount" class="form-control" id="discount" placeholder="Per gm/kg/bounch/piece">
                   </div>
                   </div>

                   <div class="form-group">
                   <label class="col-sm-2 control-label" style="word-break: break-all;">Attributes(gm/kg/bounch)<span style="color:red">*</span></label>
                   <div class="col-sm-4">
                      <input type="text" name="attribute" class="form-control" id="attribute" required="" placeholder="gm/kg/bounch/piece">
                   </div>
                   <label class="col-sm-2 control-label">Image<span style="color:red">*</span></label>
                   <div class="col-sm-4">
                   <input type="file" name="itemimg" class="form-control" value="Select Image File">
                   <div id="itemimg"></div>
                   </div>
                   </div>
                   <div class="form-group">
                   	<div class="col-sm-8 col-sm-offset-2">
                   		<button class="btn btn-default" type="reset" data-dismiss="modal">Cancel</button>
                   		<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
                   	</div>
                   </div>

                   										</form>
                                           </div>

                      </div>
             </div>
          </div>


    </div>
    