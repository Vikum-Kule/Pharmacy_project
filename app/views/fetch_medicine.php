<?php require_once('db.php');?>
<?php 
    $medName = $_POST['medi_name'];
    $sql = "SELECT * FROM `medicine` WHERE name='$medName' LIMIT 1 ";
    $result_set = mysqli_query($con,$sql);
    if($result_set){
        while($row= mysqli_fetch_array($result_set)){
            $medId = $row[`medicineId`];

        }
    }
    

?>
<script>
    var barcode = "<?php echo $medId ?>;" >;
    console.log(barcode);
</script>

<script type="text/javascript" src="display.js"></script>