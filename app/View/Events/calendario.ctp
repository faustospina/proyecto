<div class="events form">

	<fieldset>
		<legend><?php echo __('calendario'); ?></legend>

	</fieldset>

	<div id='calendar'></div>

	<a href="#" data-toggle="modal" style='display: none' id='modalCalendario' data-target="#myModal_calendario" role="button" style='padding: 5px 22px;'>modal</a>


</div>




<!-- Modal -->
<div id="myModal_calendario" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button
				type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Crear evento</h4>
			</div>
			<div class="modal-body">

			
			<select id="tipoEvento">
				<option></option>

				<?php
					for ($i=0; $i < sizeof($tiposEventos); $i++) {
						echo  "<option  value='".$tiposEventos[$i]["id"]."'>".$tiposEventos[$i]["name"]."</option>";
					}
				?>
			</select>

	<?php
	
		echo $this->Form->input('title',array("id" => "title",'class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('details',array("id" => "detail",'class' => 'form-control', 'label' => 'detalle'));
	
		echo $this->Form->input('end',array('type'=>'date', "id" => "end", 'label' => 'fin'));
		
		
	
	?>
	<div id="contenedor_fecha"></div>
			<br><input type='button' value="Guardar" onclick="crearEvento()" /><br>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal" id='cerrar_asistir_edit'>Cerrar</button>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
	var eventosCalendario = [
        <?php 

        for ($i=0; $i < sizeof($eventos); $i++) { 
          echo "{
            start: '".$eventos[$i]['start']."',
            title: '".$eventos[$i]['title']."',            
            end: '".$eventos[$i]['start']."'
          },";
        }

        ?>
        ];
</script>