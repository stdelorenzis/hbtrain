<?php
	require 'db.php';
	require 'structure.php';

	get_header();
?>
<script type="text/javascript">
		//ALLOWS FOR ELEMENTS TO BE DROPPED
		//on drag over
		function allowDrop(ev){
			ev.preventDefault();
		}
		
		//on drag start
		//SETS THE IMG ID (DRAGGED DATA)
		function drag(ev){
			ev.dataTransfer.setData("Text",ev.target.id);
		}
		
		//on drop
		function drop(ev){
			//DEFAULT DOESNTT ALLOW DRAG
			ev.preventDefault(ev);
			//GET THE DATA SET BY SETDATA()
			var data = ev.dataTransfer.getData("Text");
			console.log(ev.target.tagName);
			console.log(ev.target.innerHTML);
			var text=ev.target.innerHTML;
			
			//DON'T ALLOW FOR DRAG ONTO IMG
			if (ev.target.tagName != 'IMG'){
				//APPENDS
				ev.target.appendChild(document.getElementById(data));
				
			}
			else
				alert("You can't drag that here");
		}
	

</script>
	<div class="container-fluid">
		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>Details</h3></legend>
		</div>
		<!--inside content-->
		<div class="row-fluid">
			<div class="span3 dragPuppy" id="dragFromDiv" ondragover="allowDrop(event)" ondrop="drop(event)" style="border: 2px solid black">
				<img src="img/cute_puppy.jpg" id="puppy_1" draggable="true" ondragstart="drag(event)">
				<img src="img/puppies_tongue.jpg" id="puppy_2" draggable="true" ondragstart="drag(event)">
				<img src="img/puppy_husky.jpg" id="puppy_3" draggable="true" ondragstart="drag(event)">
				<img src="img/puppy_bear.jpg" id="puppy_3" draggable="true" ondragstart="drag(event)">
			</div>
			<div class="span6 well dragPuppy" ondragover="allowDrop(event)" ondrop="drop(event)" id="dragToDiv">
				<p id="puppyText">Drag puppies in here.</p><br/>
			</div>
			<div class="span3"></div>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-primary btn-block btn-large" href="index.php"><i class="icon-home icon-white"></i>&nbsp&nbspHome</a>
			</div>
			<div class="span3"></div>
		</div>
	</div>

<?php
	get_footer();
?>