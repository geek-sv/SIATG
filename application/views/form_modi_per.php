
<title>
Datos personales
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="../css/structure.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="../scripts/wufoo.js"></script>


<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">

<div id="container" class="ltr">
<?php 
        $atributos = array('id'=> 'form_modi_per', 'class' => 'persona_form');
        echo form_open('persona/actualizar_persona',$atributos); //en este caso datosenviados contiene la url que hace el action 
        $data_carnet = array(
              'name'        => 'carnet',
              'id'          => 'id_carnet',
              'value'       => $id,
              'maxlength'   => '7',
              'size'        => '15',
             
              'placeholder' => 'Digite el carnet',
            );
        $data_nombres = array(
              'name'        => 'nombres',
              'id'          => 'id_nombre',
              'value'       => $user['nombres_p'],
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite los nombres',
            ); 
        $data_apellidos = array(
              'name'        => 'apellidos',
              'id'          => 'id_apellidos',
              'value'       => $user['apellidos_p'],
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite los apellidos',
            ); 
        $data_dir = array(
              'name'        => 'direccion',
              'id'          => 'id_apellidos',
              'value'       => $user['direccion_p'],
              'width'       => '50',
              'rows '       => '10',
              'cols'        => '50',
             
              'maxlength'   => '30',
              'placeholder' => 'Digite la dirección',
            ); 
        
         $data_tel = array(
              'name'        => 'telefono',
              'id'          => 'id_telefono',
              'value'       => $telefono['telefono'],
              'maxlength'   => '9',
              'size'        => '50',
              
              'placeholder' => 'Digite el Telefono sin guiones',
            );
        $data_correo = array(
              'name'        => 'correo',
              'id'          => 'id_correo',
              'value'       => $user['correo_p'],
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite el correo',
            );
        $data_options = array(
                'TRUE'  => 'Activo',
                'FALSE'  => 'Inactivo',
    );
        $options = array(
                  1  => 'Docente',
                  2  => 'Estudiante',
                  
                );
if($tipo == 1){
        $data_titulo = array(
              'name'        => 'titulo',
              'id'          => 'id_titulo',
              'value'       => $user['titulo'],
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite el Título',
            );
}
else{
	$data_titulo = array(
		'name'        => 'titulo',
		'id'          => 'id_titulo',
		'maxlength'   => '50',
		'size'        => '50',

		'placeholder' => 'Digite el Título',
);
}
       /* $data_tg = array(
              'name'        => 'tg',
              'id'          => 'id_tg',
              'value'       => set_value('tg'),
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite el ID de trabajo de Graduación',
            );*/
        //recupero el array aqui.
        $data_tg=$tg;
        $data_carrera=$item;//recupero el array aqui.
        ?>
    

<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


<h2>Datos personales</h2>
<div>Ingreso de Datos Personales</div>


<ul>

<li id="foli1" class="notranslate      ">
<label class="desc" id="title1" for="Field1">
 <?php echo form_label('Carnet:'); ?> 
<span id="req_1" class="req">*</span>
</label>
<div>

 <?php echo form_input($data_carnet);?>
 <?php echo form_error('carnet');?>
</div>
</li><li id="foli2" class="notranslate      ">
<label class="desc" id="title2" for="Field2">
<?php echo form_label('Nombres y Apellidos:');?>
<span id="req_2" class="req">*</span>
</label>
<span>
<?php echo form_input($data_nombres);?>
<?php echo form_error('nombres');?>
<label for="Field2">Nombres</label>
</span>
<span>
<?php echo form_input($data_apellidos);?>
<?php echo form_label('Apellidos');?>
<?php echo form_error('apellidos');?>
</span>
</li>
<li id="foli10" 
class="notranslate      "><label class="desc" id="title10" for="Field10">
Dirección
<span id="req_10" class="req">*</span>
</label>

<div>
<?php echo form_textarea($data_dir);?>
<?php echo form_error('direccion');?>

</div>
</li>
<li id="foli11" class="notranslate      ">
<label class="desc" id="title11" for="Field11">
Teléfono
</label>
<div>
<?php echo form_input($data_tel);?>
<?php echo form_error('telefono');?>
</div>
</li>
<li id="foli11" class="notranslate      ">
<label class="desc" id="title11" for="Field11">
Correo electrónico
</label>

<div>
<?php echo form_input($data_correo);?>
<?php echo form_error('correo');?>
</div>
</li>
<li id="foli12" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>
<legend id="title12" class="desc">
Estado  <span id="req_2" class="req">*</span>
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title12" class="desc">
Estado
</label>
<![endif]-->
<div>
<span>
<?php echo form_dropdown('estado',$data_options);?>

</span>
</div>
</fieldset>
</li><li id="foli213" class="notranslate       ">
<label class="desc" id="title213" for="Field213">
Tipo
<span id="req_213" class="req">*</span>
</label>
<div>
<select name="Tipo" id="Tipo">
				
			  	<option value="1" <?php  if($tipo == 1){ echo "selected='".$tipo."'";}?>>Docente</option>
			  	<option value="2" <?php  if($tipo == 2){ echo "selected='".$tipo."'";}?>>Estudiante</option>
			  	
      		</select>
</div>
</li> <li class="buttons ">

<!campo que permenace oculto si no se selecciona docente>

<div id="titulo" style="display:none">
<?php echo form_input($data_titulo);?>
<?php echo form_error('titulo');?>
 <select name="Tipo2" id="Tipo2">
				
			  	<option value="1">Asesor</option>
			  	<option value="2">Observador</option>
			  	
      		</select>   
</div>

<!campos que permenace ocultos si no se selecciona estudiante>

<div id="id_tg" style="display:none">
<label class="desc" id="title11" for="Field11">
Tema Trabajo de Graduación
</label>
    
<?php echo form_dropdown('tg', $data_tg,$user['id_trabajog']);
//<?php echo form_error('titulo');?>
<label class="desc" id="title11" for="Field11">
Carrera
</label>
    
<?php echo form_dropdown('carrera', $data_carrera,$user['id_carrera']);
//<?php echo form_error('titulo');?>    
    
</div>


    
    
    
    
<div>
<?php echo form_submit('ingresar','Actualizar Usuario');
echo form_hidden('idtel',$user['id_telefono']);?>
                    
 </div>
</li>


</form> 

</div><!--container-->
<script>
//funcion para tipo de usuario
$('#Tipo').change(function(){
	//muestra campos para bibliotecarios
	if($(this).val()==1 ){
        $('#titulo').show();
        $('#id_tg').hide();
	}
    if($(this).val()!=1 && $(this).val()!=2){
        $('#titulo').hide();
	}
	//muestra campos para miembros
	if($(this).val()==2){
        $('#id_tg').show();
        $('#titulo').hide();
       
	}
    

   });

</script>
