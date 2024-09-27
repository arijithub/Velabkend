 @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Home</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <h2>Edit Products</h2>
<form name="frm" action="{{ route('updpro') }}" method="post">
    {{ csrf_field() }}
    <?php foreach ($users as $user) { ?>
    <div class="form-group">
        <input type="hidden" name="hid" value="<?php echo $user->pid; ?>">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title1" value="<?php echo $user->title; ?>" required>
    </div>
    <div class="form-group">
      <label for="link">Link:</label>
      <input type="text" class="form-control" id="link" name="link" value="<?php echo $user->link; ?>" required>
    </div>
    <input type="submit" name="sub" class="btn btn-default" value="Edit">
     <?php  } ?>
  </form>

   </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    