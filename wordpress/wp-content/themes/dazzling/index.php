<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>	

        <div id="primary" class="content-area col-sm-12 col-md-12 p-0 page-home">
                <main id="main" class="site-main clan" role="main">
                
                <!-- div class="left">
                   
                    <ul class="left_menu">
                        <li class="menu_foro"><a href="http://96.126.102.69/forums/">
                                <span>FORO</span></a>
                            </a>
                        </li>
                        <li class="menu_encuesta">
                            <a href="/como-te-sientes/">
                            <span>C&Oacute;MO TE SIENTES</span>
                            </a>
                        </li>
                        <li class="menu_reto">
                            <a href="/retos/">
                            <span>RETOS</span>                                
                            </a>
                        </li>
                        <li class="menu_telefono">
                            <a href="#">
                                <span>+56912345678</span>
                            </a>
                        </li>
                    </ul>

                </div -->
                <?php include("menu_lateral.php") ?>
                <div class="content-clan p-0">
                    <div id="muro">
                        <div class="page-title">
                          <h1>Exprésate</h1>
                        </div>
                        <div class="subtitle">Inicia una conversación completamente anónima</div>
                        <div id="publicaciones">
<?php 
  global $wpdb;
  $query = "SELECT * FROM (select * from clan_mensajes where referencia_mensaje = -1 order by id_mensaje DESC LIMIT 5)sub ORDER BY id_mensaje ASC;";
  $results = $wpdb->get_results( $query, OBJECT );
?>
                           <ul class="muro">
                            <?php foreach ($results as $key => $value) { ?>
                               <li id="<?php echo "conversacion_{$value->id_mensaje}" ?>" 
                                  style="background-color: <?php echo $value->color ?>">
                                 <div class="name-user">
                                   <div class="pull-left"></div>
                                   <?php 
                                   $fecha_mensaje = date("d/m H:i", strtotime($value->fecha_mensaje));
                                    ?>
                                   <div class="pull-right"><?php echo $fecha_mensaje ?></div>
                                 </div>
                                 <span class="content"><?php echo $value->mensaje ?></span>
                                 <ul class="comentarios">
                                  <?php    $comentarios = $wpdb->get_results( "select * from clan_mensajes where referencia_mensaje = {$value->id_mensaje} order by fecha_mensaje ASC limit 5;", OBJECT );
                                  foreach ($comentarios as $comentario) { ?>
                                    <li>
                                      <div class="name-user">
                                        <div class="pull-left"></div>
                                   <?php 
                                   $fecha_mensaje = date("d/m H:i", strtotime($comentario->fecha_mensaje));
                                    ?>
                                        <div class="pull-right"><?php echo $fecha_mensaje ?></div>
                                      </div>
                                      <span class="content"><?php echo $comentario->mensaje ?></span>
                                    </li>
                                  <?php } ?>
                                 </ul>
                                 <div class="area_comentario">
                                  <input type="hidden" value="<?php echo "{$value->id_mensaje}" ?>" name="id_mensaje" id="id_mensaje">
                                   <textarea name="comentario" id="comentario_{$id_conversacion}" cols="30" rows="5"></textarea>
                                   <button class="enviar_comentario">Enviar</button>
                                 </div>
                                 <a href="#" class="responder">Comentar</a>
                               </li>
                              <?php } ?>
                               <!--li>
                                 <div class="name-user">
                                   <div class="pull-left"></div>
                                   <div class="pull-right">15:05</div>
                                 </div>
                                 <span class="content">Hola super</span>
                                 <a href="#" class="responder">Comentar</a>
                               </li>

                               <li>
                                 <div class="name-user">
                                   <div class="pull-left">  </div>
                                   <div class="pull-right">15:30</div>
                                 </div>
                                 <span class="content">Hola a todos</span>
                                 <a href="#" class="responder">Comentar</a>
                               </li>


                               <li>
                                 <div class="name-user">
                                   <div class="pull-left"></div>
                                   <div class="pull-right">15:35</div>
                                 </div>
                                 <div class="content">Necesito ayuda</div>
                                 <a href="#" class="responder">Comentar</a>
                               </li>

                               <li>
                                 <div class="name-user">
                                   <div class="pull-left"></div>
                                   <div class="pull-right">15:35</div>
                                 </div>
                                 <div class="content">Que pasa???</div>
                                 <a href="#" class="responder">Comentar</a>
                               </li-->
                           </ul>
                        </div>


                        <div class="btn-group" role="group" aria-label="...">


                          <?php                         
                            $colors = ['#F4D48B', '#EFC555', '#D78D6C', '#D56D5F', '#E297B0', '#ADA4CA', '#6782B0', '#58A7D1', '#70B5A5', '#ABC371', '#4C7356'];
                          ?>

                          <?php foreach ($colors as &$color): ?>
                            <button type="button" class="btn" style="background-color:<?php echo $color ?>;width: 62px;height: 50px;border:0;" ></button>
                          <?php endforeach; ?>


                          
                        </div>

                        <form action="" id="muro_form" class="muro">
                          <input type="text" id="comentario" value="">
                          <button>Enviar</button>
                        </form>
                        
                    </div>
                </div>

                <div class="right">
                    <div class="avances">
                      <div class="perfil">
                        <?php   
                        $current_user = wp_get_current_user();
                        $avatar_option = "avatar_{$current_user->user_login}";
                        $avatar_capas = get_option($avatar_option);
                        $array_capas = json_decode(str_replace("\\","",$avatar_capas));                     
                        $avatar_option = "avatar_{$current_user->user_login}";
                        $valor =  rand( 10000, 99999 );
                        $imagen = "/wp-content/avatar/avatares/{$avatar_option}.png?{$valor}";
                        ?>
                        <a href="http://96.126.102.69/perfil/" class="avatar" style="background-color: <?php echo isset($array_capas->background)?$array_capas->background:'#FFF' ?> ">
                          <img src="<?php echo $imagen ?>" alt="">
                        </a>
                        <?php
                          $nickname_option = "nickname_{$current_user->user_login}";
                          $nickname = get_option($nickname_option); 
                          $nickname = ($nickname!==false)?$nickname:$current_user->user_login;
                        ?>                        
                        <span id="nickname"><?php echo $nickname ?></span>
                      </div>                      
                        <span>Avances</span>
                    </div>
                    <div class="calendario">
                        <a href="calendario"><span>CALENDARIO</span></a>
                    </div>
               
                </div>


                </main>
        </div>
<style type="text/css">
  .area_comentario{
    display: none;
  }
  #nickname{
    display: block;
    width: 196px;
    height: 30px;
    text-indent: 0px;
    background-color: #F3F4DD;
    text-align: center;
    margin-left: 9px;
    font-size: 20px;
    font-weight: bold;
    padding-top: 9px;
  }
</style>



<script>
  
  jQuery("#publicaciones").mCustomScrollbar({
      axis:"y",
      scrollButtons:{ enable: true },
      alwaysShowScrollbar: 1
  });

</script>