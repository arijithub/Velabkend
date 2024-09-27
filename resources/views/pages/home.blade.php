    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Home</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Products</h2>
<form name="frm" action="{{ route('saveUser') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
    </div>
    <div class="form-group">
      <label for="link">Link:</label>
      <input type="text" class="form-control" id="link" name="link" placeholder="Enter link" required>
    </div>
    
    <input type="submit" name="sub" class="btn btn-default" value="Submit">
  </form>
            <!-- /.row -->
                       <!-- /.row -->

                       <br><br>
        <!-- /#page-wrapper -->
        <div class="panel panel-default">
                        <div class="panel-heading">
                            Products
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Link</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php foreach ($users as $user) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $user->title; ?></td>
                                        <td><?php echo $user->link; ?></td>
                                       <td class="center"><a href="/proedit/<?php echo $user->pid; ?>">Edit</a>|<a href="/prodel/<?php echo $user->pid; ?>" onclick="return confirm('Do you want to delete?');">Delete</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    
