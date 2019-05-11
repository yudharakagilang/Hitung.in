
<script src="js/main.js"></script>
<?php 

include "config.php";
$mysqli = mysqli_connect("localhost", "root", "", "grafana");

?>
 
<div id="aw">
<?php
$sql="SELECT value FROM test ORDER by time desc limit 1";

$result = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_array($result)) {
    echo $row['value']; 
}
echo "<br>";

echo rand();

?>


</div>


<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script>
 $(function() {

//This setTimeout function execute or call automatically when 5 second completed.


setInterval(function() {
  $("#aw").load(" #aw");
}, 1000);
});
</script>

