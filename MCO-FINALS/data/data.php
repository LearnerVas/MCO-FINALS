<!--This are just dummy data but you can use this as a reference-->
<?php
$data = [ //create a data for a certain entity, you can add the ID, first name and more
    ["pname" => "Izza Dela Rosa","doc" => "Dr.Alupani","nurse" => "Christine Infante","service" => "Ultrasound","dt" => "05-31-2024 11:00 AM","status" => "Pending" ]
];
$Adata = [
    ["pname" => "Genesis Manzano","doc" => "Dr.Alupani","nurse" => "Christine Infante","service" => "X-Ray","dt" => "06-04-2024 08:00 AM","status" => "Pending" ]
];
$Bdata = [
    ["pname" => "Francine Pais","doc" => "Dr.Alupani","nurse" => "Hezekiah Publico","service" => "Chemotherapy","dt" => "06-05-2024 10:00 AM","status" => "Pending" ]
];
$Cdata = [
    ["pname" => "Esther Sapguian","doc" => "Dr.Isidro","nurse" => "Marife Garcia","service" => "Vision Care","dt" => "06-10-2024 09:00 AM","status" => "Pending" ]
];
$Ddata = [
    ["pname" => "Sean Galace","doc" => "Dr.Bayle","nurse" => "Sammy Ping-Ay","service" => "Nose Surgery","dt" => "06-17-2024 10:00 AM","status" => "Pending" ]
];
$Edata = [
];

?>
<table><!--A table for the datas-->
    <tr><!--Table Row element, this element defines a row of cells in a table -->
        <th>Patient Name</th> <!--Table header to define each cells-->
        <th>Doctor</th>
        <th>Nurse</th>
        <th>Service</th>
        <th>Date/Time</th>
        <th>Status</th>
    </tr>
    <?php foreach ($data as $data): ?> <!--Copy for each table to prevent bugs-->
    <tr>
        <td><?php echo $data['pname']; ?></td> <!--Nakakalito yung sa echo $data pero basing doon sa reference sa taas, iba yung code niya pag dating sa pag gamit ng sql-->
        <td><?php echo $data['doc']; ?></td>
        <td><?php echo $data['nurse']; ?></td>
        <td><?php echo $data['service']; ?></td>
        <td><?php echo $data['dt']; ?></td>
        <td><?php echo $data['status']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php foreach ($Adata as $Adata): ?>
    <tr>
        <td><?php echo $Adata['pname']; ?></td>
        <td><?php echo $Adata['doc']; ?></td>
        <td><?php echo $Adata['nurse']; ?></td>
        <td><?php echo $Adata['service']; ?></td>
        <td><?php echo $Adata['dt']; ?></td>
        <td><?php echo $Adata['status']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php foreach ($Bdata as $Bdata): ?>
    <tr>
        <td><?php echo $Bdata['pname']; ?></td>
        <td><?php echo $Bdata['doc']; ?></td>
        <td><?php echo $Bdata['nurse']; ?></td>
        <td><?php echo $Bdata['service']; ?></td>
        <td><?php echo $Bdata['dt']; ?></td>
        <td><?php echo $Bdata['status']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php foreach ($Cdata as $Cdata): ?>
    <tr>
        <td><?php echo $Cdata['pname']; ?></td>
        <td><?php echo $Cdata['doc']; ?></td>
        <td><?php echo $Cdata['nurse']; ?></td>
        <td><?php echo $Cdata['service']; ?></td>
        <td><?php echo $Cdata['dt']; ?></td>
        <td><?php echo $Cdata['status']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php foreach ($Ddata as $Ddata): ?>
    <tr>
        <td><?php echo $Ddata['pname']; ?></td>
        <td><?php echo $Ddata['doc']; ?></td>
        <td><?php echo $Ddata['nurse']; ?></td>
        <td><?php echo $Ddata['service']; ?></td>
        <td><?php echo $Ddata['dt']; ?></td>
        <td><?php echo $Ddata['status']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php foreach ($Edata as $Edata): ?>
    <tr>
        <td><?php echo $Edata['pname']; ?></td>
        <td><?php echo $Edata['doc']; ?></td>
        <td><?php echo $Edata['nurse']; ?></td>
        <td><?php echo $Edata['service']; ?></td>
        <td><?php echo $Edata['dt']; ?></td>
        <td><?php echo $Edata['status']; ?></td>

    </tr>
    <?php endforeach; ?>
</table>