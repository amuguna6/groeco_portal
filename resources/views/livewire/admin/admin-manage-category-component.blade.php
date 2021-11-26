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
  <p class="text-center" style="color:#ffffff; margin-top: 100px;">© GroEco 2020
  </p>
</nav>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Manage Category
              </h2>
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-6">
                    All Categories
                  </div>
                  <div class="col-md-6">
                    <a href="{{route('admin.add_category')}}" class="btn btn-info pull-right">Add New</a>
                  </div>
                </div>
              </div>
              
              <!-- Zero Configuration Table -->
              <div class="panel panel-default">
                <div class="panel-heading">List Category
                </div>
                <div class="panel-body">
                                    <div id="zctb_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                      <div class="row">
                                      <div class="col-sm-12">
                                      <table id="zctb" class="display table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="zctb_info" style="width: 100%;" width="100%" cellspacing="0">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 103px;" aria-sort="ascending" aria-label="#
                        : activate to sort column descending">#
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 197px;" aria-label="Image
                        : activate to sort column ascending">Image
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 197px;" aria-label="Image
                        : activate to sort column ascending">Name
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 251px;" aria-label="Category
                        : activate to sort column ascending">Slug
                        </th><th class="sorting" tabindex="0" aria-controls="zctb" rowspan="1" colspan="1" style="width: 200px;" aria-label="Action
                        : activate to sort column ascending">Action
                        </th></tr>
                    </thead>
                    <tbody>
                                            
                     @foreach($scategories as $scategory)                       
                    <tr>
                        <td>$scategory->id</td>
						            <td>
                          <img style="border-radius:60%;" src="{{asset('assets/images/categories')}}/{{$scategory->image}}" width="60px">
                        </td>
                        <td>{{$scategory->name}}</td>
                        <td>{{$scategory->slug}}</td>
                        <td>
                         <a href="javascript: void(0)" data-toggle="modal" data-target="#editModal" data-id="388" data-category="Beverages" data-image="20211114061153.png">
                                                    <i class="fa fa-pencil" style="color:blue; margin-right:10px;">
                                                    </i>
                                                  </a>

                          <a href="manage-category.php?del=388" onclick="return confirm('Do you want to delete');">
                            <i class="fa fa-trash" style="color:red">
                            </i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{$scategories->links()}}
                </div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="height: 100%; padding-top: 10%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

              <form enctype="multipart/form-data" method="post" class="form-horizontal" onsubmit="return valid();">
                                                                            <input type="hidden" class="form-control" name="categryId" id="cat-id" required="">
                                       <div class="form-group">
                                         <label class="col-sm-4 control-label">Category
                                         </label>
                                         <div class="col-sm-8">
                                           <input type="text" class="form-control" name="categry" id="cat-name" required="">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-sm-4 control-label">Category Image
                                         </label>
                                            <div class="col-sm-8">
                                           <input type="file" class="form-control" name="categryimg" id="cat-image">
                                           <div id="img-name"></div>
                                         </div>
                                       </div>
                                       <div class="hr-dashed">
                                       </div>
                                       <div class="form-group">
                                         <div class="col-sm-8 col-sm-offset-4">
                   		                   <button class="btn btn-default" type="reset" data-dismiss="modal">Cancel</button>
                                           <button class="btn btn-primary" name="submit" type="submit">Update
                                           </button>
                                         </div>
                                       </div>
                                       </form>
                                     </div>

                </div>
       </div>
    </div>

    </div>


