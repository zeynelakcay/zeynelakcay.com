<div id="page-wrapper">
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Kategoriler
		<a href="/Admin/Category/add" class="btn btn-outline btn-info">Yeni Kategori Ekle</a>
	    </h1>
	</div>
    </div>
    <div class="row">
	<div class="col-lg-12">
	    <div class="panel panel-default">
		<div class="panel-heading">
		    Kategoriler
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
		    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
			    <tr>
				<th>Başlık</th>
				<th>Durumu</th>
				<th>İşlem</th>
			    </tr>
			</thead>
			<tbody>
			    <?php
			    foreach ($categories as $category)
			    {
				?>
    			    <tr class="odd gradeX">
    				<td><?php echo $category['title']; ?></td>
    				<td class="center">
					<?php
					if ($category['status'] == 1)
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
    				    <a href="/Admin/Category/edit/<?php echo $category['category_id']; ?>" class="btn btn-outline btn-info">Güncelle</a>
    				    <a href="" class="btn btn-outline btn-danger">Sil</a>
    				</td>
    			    </tr>
			    <?php } ?>
			</tbody>
		    </table>
		</div>
	    </div>
	</div>  
    </div>

</div>
