    <div class="brand clearfix">

<h4 class="pull-left text-white" style="margin:20px 0px 0px 20px"><img src="img/logo.png" class="logo"> Grocery Store</h4>

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
  <p class="text-center" style="color:#ffffff; margin-top: 100px;">© Quintus Labs
  </p>
</nav>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4>Notification
                      </h4>
                    </div>
                    <div class="panel-body">
                      <form method="post" class="form-horizontal">
                                                <div class="form-group">
                          <label class="col-sm-1 control-label">Title
                          </label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="title" required="">
                          </div>
                          <label class="col-sm-1 control-label">Description
                          </label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="desc" required="">
                          </div>
                          <div class="col-sm-2">
                            <button class="btn btn-primary" name="submit" type="submit">ADD
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
          <div class="panel panel-default">
            <div class="panel-heading">Notification List
            </div>
            <div class="panel-body">
              <table class="display table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#
                    </th>
                    <th>Title
                    </th>
                    <th>Description
                    </th>
                    <th>Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  	
                  <tr>
                    <td>
                      1                    </td>
                    <td>
                      Test                    </td>
                    <td>
                      ok                    </td>
                    <td>
                      <a href="notification.php?del=123" onclick="return confirm('Do you want to delete');">
                        <i class="fa fa-close" style="color:red">
                        </i>
                      </a>
                    </td>
                  </tr>
                  	
                  <tr>
                    <td>
                      2                    </td>
                    <td>
                      test                    </td>
                    <td>
                      test description                    </td>
                    <td>
                      <a href="notification.php?del=117" onclick="return confirm('Do you want to delete');">
                        <i class="fa fa-close" style="color:red">
                        </i>
                      </a>
                    </td>
                  </tr>
                  	
                  <tr>
                    <td>
                      3                    </td>
                    <td>
                      test                    </td>
                    <td>
                      test description                    </td>
                    <td>
                      <a href="notification.php?del=116" onclick="return confirm('Do you want to delete');">
                        <i class="fa fa-close" style="color:red">
                        </i>
                      </a>
                    </td>
                  </tr>
                  	
                  <tr>
                    <td>
                      4                    </td>
                    <td>
                      kkk                    </td>
                    <td>
                      kkkkkk                    </td>
                    <td>
                      <a href="notification.php?del=115" onclick="return confirm('Do you want to delete');">
                        <i class="fa fa-close" style="color:red">
                        </i>
                      </a>
                    </td>
                  </tr>
                                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    