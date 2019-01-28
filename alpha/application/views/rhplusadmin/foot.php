			</div>

			<!-- Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Tous droits réservés © Réseau RH+ 2019</span>
					</div>
				</div>
			</footer><!-- FIN Footer -->
		</div><!-- FIN #content-wrapper -->
    </div><!-- FIN #wrapper -->

    <!-- Bouton retours vers le haut-->
    <a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
    </a>

	<!-- Modal déconnexion -->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="deconnexionModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deconnexionModalLabel">Déconnexion</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Voulez-vous vraiment mettre fin à votre session?</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?php echo base_url('rhplusadmin/logout'); ?>">Quitter</a>
				</div>
			</div>
		</div>
	</div><!-- FIN Modal déconnexion -->
    
    <!-- jQuery 3.3.1 -->
    <script src="<?= js_url('jquery/jquery-3.3.1.min'); ?>"></script>
    <!-- jQuery UI -->
    <script src="<?= js_url('jquery-ui/jquery-ui.min'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= js_url('bootstrap/bootstrap.bundle.min'); ?>"></script>
    <!-- "Page level plugin JavaScript" -->
    <script src="<?= js_url('datatables/jquery.dataTables.min'); ?>"></script>
    <script src="<?= js_url('datatables/dataTables.bootstrap4.min'); ?>"></script>
    <!-- "Custom scripts for all pages" -->
    <script src="<?= js_url('sb-admin/sb-admin.min'); ?>"></script>
    <!-- "Demo scripts for this page" -->
    <script src="<?= js_url('sb-admin/demo/datatables-demo'); ?>"></script>
    <!-- TinyMCE -->
	<script src="<?= tinymce_url('tinymce.min.js'); ?>"></script><!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
	<!-- Javascript personnalisés -->
    <script type="text/javascript">
		$(function(){
		/* TinyMCE */
			// Version limitée :
			tinymce.init({
				selector: '.tinymce-limite',
				height: 100,
				menubar: false,
				entity_encoding:"raw",
				toolbar: 'bold italic',
				plugins: [
					'advlist autolink lists link image charmap print preview anchor wordcount',
					'searchreplace visualblocks code fullscreen'
				],
				content_css: [
					'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
					'//www.tinymce.com/css/codepen.min.css'
				]
			});

			// Version basique :
			tinymce.init({
				selector: '.tinymce-basique',
				height: 200,
				image_list : "img_list.php",
				menubar: false,
				entity_encoding:"raw",
				style_formats: [
				{title: "Normal", format: "p"},
				{title: "Titres", items: [
				{title: "Sous titre 1", format: "h2"},
				{title: "Sous titre 2", format: "h3"},
				{title: "Sous titre 3", format: "h4"}
				]}],
				plugins: [
					'advlist autolink lists link image charmap print preview anchor wordcount',
					'searchreplace visualblocks code fullscreen'
				],
				toolbar: 'undo redo | styleselect | bold italic | bullist numlist outdent indent | link image',
				content_css: [
					'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
					'//www.tinymce.com/css/codepen.min.css'
				]
			});

			// Version pour message du jour :
			tinymce.init({
				selector: '.tinymce-messagejour',
				height: 100,
				menubar: false,
				entity_encoding:"raw",
				toolbar: 'undo redo | bold italic',
				plugins: [
					'advlist autolink lists link image charmap print preview anchor wordcount',
					'searchreplace visualblocks code fullscreen'
				],
				content_css: [
					'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
					'//www.tinymce.com/css/codepen.min.css'
				]
			});

		/* jQuery UI Sortable */
			$(".sortable").sortable();
			$(".sortable").disableSelection();
			
		/* AJAX afficher liste menu secondaire */	
			$("#selectMenuPrin").change(function(){
				var parent=$("#selectMenuPrin").val();
				$("option[value='0']").hide();
				$("#formAjoutModif input").val("");
				$("#formAjoutModif textarea").val("");
				$(".card-footer").slideDown();
				$("li").remove(".list-group-item");
				if(parent!=0){
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>"+"rhplusadmin/afficher_menu_sec/"+parent,
						dataType: 'json',
						data: {parent: parent},
						success: function(data){
							if(data[0] != null){
								data.forEach(function(menu){
									if(menu.personnalise==""){
										$("#listMenuSec").append("<li id='"+menu.id+"' class='ui-state-default list-group-item d-flex align-items-center'><i class='fas fa-arrows-alt-v mr-3'></i>"+menu.nom+"<a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/menu/"+menu.id+"/standard'><i class='fas fa-edit ml-auto mr-2'></i></a>|<a href='http://reseaurhplus.com/beta/rhplusadmin/supprimer/menu/"+menu.id+"' onclick=\"return(confirm('Êtes-vous certain de vouloir supprimer cette page ?'));\"><i class='fas fa-trash-alt ml-2'></i></a></li>");
									}
									else
										$("#listMenuSec").append("<li id='"+menu.id+"' class='ui-state-default list-group-item d-flex align-items-center'><i class='fas fa-arrows-alt-v mr-3'></i>"+menu.nom+"<a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/menu/"+menu.id+"/personnalise'><i class='fas fa-edit ml-auto'></i></a>");
								});
								$("#listMenuSec").slideDown();
							}
							else
								$("#listMenuSec").slideUp();
						},
						error:function( error, msg ){
							console.log("Aficher liste menu sec : " + msg + " " +  error.status + " " + error.statusText  );
						},
					});
				}
				else
					return;
				$(".card-footer").slideDown();
			});

		/* Changer l'ordre d'un menu (liste "dragable") */	
			$('ul.sortable').sortable({
				placeholder: "ui-state-highlight",
				revert: true,
				stop: function (evt, ui) {
					var data = $(this).sortable('toArray');
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>"+"rhplusadmin/changer_ordre/menu",
						data: {positionmenu:data},
						dataType:"html",
						error:function( error, msg ){
							console.log(msg + " " + error.status + " " + error.statusText);
						},
						success:function(data){
							alert(data);
						}
					});
				}
			});
		
		/* Bouton pour afficher formulaire ajouter un élément (sauf page/menu secondaire) */	
			$(".card-footer .btnAjoutElement").click(function(){
				$(".table-responsive").slideUp();
				$(".formAjoutElement").slideDown();
				$(".card-footer .btnAjoutElement").fadeOut("fast",function(){
					$(".card-footer button:last-of-type").fadeIn("fast");
				});
			});	

		/* Bouton pour cacher formulaire ajouter un element (sauf page/menu secondaire) */	
			$(".card-footer button:last-of-type").click(function(){
				$(".table-responsive").slideDown();
				$(".formAjoutElement").slideUp();
				$(this).fadeOut("fast",function(){
					$(".card-footer button:first-of-type").fadeIn("fast");
				});
			});	

		/* Bouton pour afficher formulaire ajouter page/menu secondaire */	
			$(".card-footer #btnAjoutPage").click(function(){
				var parent = $("#selectMenuPrin").val();
				$.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>"+"rhplusadmin/ajax_get/menu/"+parent,
					dataType: 'json',
					data: {parent: parent},
					success: function(data){
						data.forEach(function(menu){
							$("#site").val(menu.site);		
						});
						$("#parent").val(parent);
						$("#selectMenuPrin").prop("disabled",true);
						$("#listMenuSec").slideUp();
						$("#formAjoutModif").slideDown();
						$(".card-footer #btnAjoutPage").fadeOut("fast",function(){
							$(".card-footer button:last-of-type").fadeIn("fast");
						});
					},
					error:function( error, msg ){
						console.log(msg + " " +  error.status + " " +   error.statusText  );
					},
				});
			});

		/* Bouton pour cacher formulaire ajouter page/menu secondaire */	
			$(".card-footer button:last-of-type").click(function(){
				$("#selectMenuPrin").prop("disabled",false);
				$("#listMenuSec").slideDown();
				$("#formAjoutModif").slideUp();
				$(this).fadeOut("fast",function(){
					$(".card-footer button:first-of-type").fadeIn("fast");
				});
			});

		});
	</script>
  </body>
</html>