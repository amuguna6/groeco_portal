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
          <a href="add-category.php">Add Category
          </a>
        </li>
        <li>
          <a href="manage-category.php">Manage Category
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
  <p class="text-center" style="color:#ffffff; margin-top: 100px;" >?? GroEco 2020
  </p>
</nav>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Add New Category
              </h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-12">
                    <a href="{{route('admin.manage_category')}}" class="btn btn-info pull-right">All Categories</a>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Form fields
                    </div>
                    <div class="panel-body">

                      @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                      @endif

                      <form class="form-horizontal" 
                            wire:submit.prevent="createNewCategory">

                          <div class="form-group">
                            <label class="col-sm-4 control-label">Category Name
                            </label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" wire:model="category_name">
                              @error('category_name') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-4 control-label">Category Image
                            </label>
                            <div class="col-sm-8">
                              <input type="file" class="form-control" wire:model="category_image">
                              @error('category_image') <p class="text-danger">{{$message}}</p>@enderror
                              @if($category_image)
                              <img src="{{$category_image->temporaryUrl()}}" style="border-radius:50%;">
                              @endif
                            </div>
                          </div>
                          <div class="hr-dashed">
                          </div>
                          <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                              <button class="btn btn-success" name="submit" type="submit">Add
                              </button>
                            </div>
                          </div>
                          </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
