<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
$current_user = wp_get_current_user();
?>
                </div><!-- close .row -->
            </div><!-- close .container -->
        </div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>
	</div>
</div><!-- #page -->
<div id="mensajes_privados">
	<div class="aleta vertical-text"><a href="#">Mensajes</a></div>
	<div class=mensajes>
		<ul>
		<?php 
		$query = "SELECT * FROM clan_mensajes_privados where referencia_destinatario={$current_user->ID};";
		 ?>
			<li><a href="#">mensaje #1</a></li>
			<li><a href="#">mensaje #1</a></li>
			<li><a href="#">mensaje #1</a></li>
		</ul>
	</div>
</div>
<div id="modalMensaje" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seleccione color de <span id="nombre_elemento"></span></h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<style type="text/css">
	#mensajes_privados{
		display: block;
		position: fixed;
		top:30px;
		right: -114px;
		transition: right 1s;
	}
	#mensajes_privados.selected{
		right: 0px;
	}
	.mensajes{
		float: right;
		margin: 0 0 0 -60px;
	}
	.vertical-text {
		transform: rotate(90deg);
		transform-origin: 0px 0px 0;
		display: block;
		background-color: #CCC;
	}
	#mensajes_privados .aleta a{
		color: #ffffff;
	}
	.aleta{
		display: block;
		background-color: #0077CC;
		color: #FFF;
		float: left;
	}
</style>
<script type="text/javascript">
	jQuery(function($){
		$(".aleta a").click(function(event){
			event.preventDefault();
			$("#mensajes_privados").toggleClass("selected");
		})
	});
</script>
<?php wp_footer(); ?>

</body>
</html>