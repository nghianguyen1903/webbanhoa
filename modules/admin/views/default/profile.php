<!--
/* 
    Created on : April 2, 2015
    Author     : Nghia Nguyen
*/
-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> Profile
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Create User</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="form-create">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Create User
                    </button>
                    <button type="button" class="btn btn-primary btn-lg btn-lg-login" data-toggle="modal" data-target="#myModallogin">
                        Login
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Create User</h4>
                            </div>
                        <div class="modal-body">

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="ttdd-label">Ảnh đại diện</label>
                                </div>
                                <div class="col-md-9 description">
                                    <div class="ava-wrapper">
                                        
                                    <input id="anh-dai-dien" accept="image/*" class="up-av-img" onchange="UpBlogAva(this);" type="file" name="fileField" >
                                    <img src="img/comic-poster.jpg" alt="image" id="chosen-blog-img"><br />
                                    </div>
                                    
                                     
                                </div>
                            </div>

                            <!--User name-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-user"></i>
                                        </span>
                                        <input type="email" required name="user-name" class="form-control input-circle-right" placeholder="User name..">
                                    </div>
                                </div>
                            </div>

                            <!--Full name-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-star-half-o"></i>
                                        </span>
                                        <input type="email" required name="full-name" class="form-control input-circle-right" placeholder="Full name..">
                                    </div>
                                </div>
                            </div>

                            <!--Phone-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="email" required name="phone" class="form-control input-circle-right" placeholder="Phone number..">
                                    </div>
                                </div>
                            </div>

                            <!--Adress-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-map-marker"></i>
                                        </span>
                                        <input type="email" required name="adress" class="form-control input-circle-right" placeholder="Adress..">
                                    </div>
                                </div>
                            </div>

                            <!--Birthday-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="text" id="datepicker" data-role="date" class="form-control input-circle-right" placeholder="Birthday..">
                                    </div>
                                </div>
                            </div>

                            <!--Password-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-key"></i>
                                        </span>
                                        <input type="text" required name="password" class="form-control input-circle-right" placeholder="Password">
                                    </div>
                                </div>
                                <a href="" class="pull-left gen-password">Genarate password</a>
                            </div>


                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                      </div>
                    </div>

                    <!--Modal login -->
                    <div class="modal fade" id="myModallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Login</h4>
                            </div>
                        <div class="modal-body">
                            <!--User name-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-user"></i>
                                        </span>
                                        <input type="email" required name="user-name" class="form-control input-circle-right" placeholder="User name..">
                                    </div>
                                </div>
                            </div>

                            <!--Password-->
                            <div class="form-group">
                                <div class="form-info">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-key"></i>
                                        </span>
                                        <input type="text" required name="password" class="form-control input-circle-right" placeholder="Password">
                                    </div>
                                </div>
                            </div>


                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-primary-login">Login</button>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
