<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) { redirect("login.php");} ?>

<?php
$photos = Photo::find_all();
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php include("includes/top_nav.php"); ?>
        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/side_nav.php"); ?>

    </nav>

    <div id="page-wrapper">
    	<div class="container-fluid">

	        <!-- Page Heading -->
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">
	                    Photos
	                    <small>Subheading</small>
	                </h1>
	                <ol class="breadcrumb">
	                    <li>
	                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
	                    </li>
	                    <li class="active">
	                        <i class="fa fa-file"></i> Blank Page
	                    </li>
	                </ol>

	                <div class="col-md-12">
	                	<table class="table table-hover">
	                		<thead>
	                			<tr>
	                				<th>Photo</th>
	                				<th>Id</th>
	                				<th>Filename</th>
	                				<th>Title</th>
	                				<th>Size</th>
	                			</tr>
	                		</thead>
	                		<tbody>
	                			<?php foreach ($photos as $photo) : ?>
	                			<tr>
	                				<th><img src="<?php echo $photo->photo_path(); ?>"></th>
	                				<th><?php echo $photo->photo_id; ?></th>
	                				<th><?php echo $photo->filename; ?></th>
	                				<th><?php echo $photo->title; ?></th>
	                				<th><?php echo $photo->size; ?></th>
	                			</tr>
	                		<?php endforeach; ?>
	                		</tbody>
	                	</table>
	                </div>

	            </div>
	        </div> <!-- /.row -->
	    </div> <!-- /.container-fluid -->
	</div> <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>