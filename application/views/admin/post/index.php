<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Postlar
		<a href="/Admin/Post/add" class="btn btn-outline btn-info">Yeni İçerik Ekle</a>
	    </h1>
	</div>
	<!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
	<div class="col-lg-12">
	    <div class="panel panel-default">
		<div class="panel-heading">
		    Postlar
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
		    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
			    <tr>
				<th>Tarih</th>
				<th>Başlık</th>
				<th>Yazar</th>
				<th>Durumu</th>
				<th>İşlem</th>
			    </tr>
			</thead>
			<tbody>
			    <?php
			    foreach ($posts as $post)
			    {
				?>
    			    <tr class="odd gradeX">
    				<td><?php echo $post['write_date']; ?></td>
    				<td><?php echo $post['title']; ?></td>
    				<td><?php echo $post['author']; ?></td>
    				<td class="center">
					<?php
					if ($post['status'] == 1)
					{
					    ?>
					    <span class="btn-success">Aktif</span>
					    <?php
					}
					else
					{
					    ?>
					    <span class="btn-danger">Pasif</span>
					    <?php
					}
					?>
    				</td>
    				<td class="center">
    				    <a href="/Admin/Post/edit/<?php echo $post['post_id']; ?>" class="btn btn-outline btn-info">Güncelle</a>
    				    <a href="" class="btn btn-outline btn-danger">Sil</a>
    				</td>
    			    </tr>
			    <?php } ?>
			</tbody>
		    </table>
		</div>
		<!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
    </div>

</div>
