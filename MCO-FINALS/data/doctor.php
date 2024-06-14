<?php
$doctor1 = [
    ["fname" => "Tricia", "lname" => "Alupani", "licensenum" => "DO1-74826462", "contactnum" => "0991 456 7837", "email" => "triciaalupani@gmail.com","spec"=>"Radiology"]
];
$doctor2 = [
    ["fname" => "Leannah", "lname" => "Isidro", "licensenum" => "DO1-75934568", "contactnum" => "0992 871 4974", "email" => "leannahisidro@gmail.com","spec"=>"Opthalmology"]
];
$doctor3 = [
    ["fname" => "Carylle", "lname" => "Bayle", "licensenum" => "DO1-75265267", "contactnum" => "0993 895 4910", "email" => "caryllebayle@gmail.com","spec"=>"Surgeon"]
];
$doctor4 = [
    ["fname" => "Janice", "lname" => "Alviento", "licensenum" => "DO1-757263569", "contactnum" => "0906 215 8901", "email" => "janicealviento@gmail.com","spec"=>"Psychology"]
];
$nurse1 = [
    ["fname" => "Christine Jhed", "lname" => "Infante", "licensenum" => "NO1-673865", "contactnum" => "0956 345 7987", "email" => "christinejhedinfante@gmail.com","spec"=>"Raidology"]
];
$nurse2 = [
    ["fname" => "Marife", "lname" => "Garcia", "licensenum" => "NO1-673822", "contactnum" => "0967 861 2043", "email" => "marifegarcia@gmail.com","spec"=>"Radiology"]
];
$nurse3 = [
    ["fname" => "Hezekiah", "lname" => "Publico", "licensenum" => "NO1-673901", "contactnum" => "0926 854 0734", "email" => "hezekiahpublico@gmail.com","spec"=>"Opthalmology"]
];
$nurse4 = [
    ["fname" => "Sammy", "lname" => "Ping-Ay", "licensenum" => "NO1-673709", "contactnum" => "0916 175 8742", "email" => "sammypingay@gmail.com","spec"=>"Surgeon"]
];
$nurse5 = [
    ["fname" => "Jenny", "lname" => "Gazmen", "licensenum" => "NO1-673367", "contactnum" => "0926 987 682", "email" => "jennygazmen@gmail.com","spec"=>"Psychology"]
];
?>
<table>
    <tr>
        <th>Doctors</th>
    </tr>
    <table>
        <tr>
            <th>Doctor</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>License Number</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Specialization</th>
        </tr>

        <?php foreach ($doctor1 as $doctor1): ?>
        <tr>
            <td><img src="assets/doctor pics/alupani.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor1['fname']; ?></td>
            <td><?php echo $doctor1['lname']; ?></td>
            <td><?php echo $doctor1['licensenum']; ?></td>
            <td><?php echo $doctor1['contactnum']; ?></td>
            <td><?php echo $doctor1['email']; ?></td>
            <td><?php echo $doctor1['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($doctor2 as $doctor2): ?>
        <tr>
            <td><img src="assets/doctor pics/isidro.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor2['fname']; ?></td>
            <td><?php echo $doctor2['lname']; ?></td>
            <td><?php echo $doctor2['licensenum']; ?></td>
            <td><?php echo $doctor2['contactnum']; ?></td>
            <td><?php echo $doctor2['email']; ?></td>
            <td><?php echo $doctor2['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($doctor3 as $doctor3): ?>
        <tr>
            <td><img src="assets/doctor pics/bayle.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor3['fname']; ?></td>
            <td><?php echo $doctor3['lname']; ?></td>
            <td><?php echo $doctor3['licensenum']; ?></td>
            <td><?php echo $doctor3['contactnum']; ?></td>
            <td><?php echo $doctor3['email']; ?></td>
            <td><?php echo $doctor3['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($doctor4 as $doctor4): ?>
        <tr>
            <td><img src="assets/doctor pics/janice.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor4['fname']; ?></td>
            <td><?php echo $doctor4['lname']; ?></td>
            <td><?php echo $doctor4['licensenum']; ?></td>
            <td><?php echo $doctor4['contactnum']; ?></td>
            <td><?php echo $doctor4['email']; ?></td>
            <td><?php echo $doctor4['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
</table>

<table>
    <tr>
        <th>Nurses</th>
    </tr>
    <table>
        <tr>
            <th>Nurse</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>License Number</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Specialization</th>
        </tr>

        <?php foreach ($nurse1 as $nurse1): ?>
        <tr>
            <td><img src="assets/doctor pics/infante.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $nurse1['fname']; ?></td>
            <td><?php echo $nurse1['lname']; ?></td>
            <td><?php echo $nurse1['licensenum']; ?></td>
            <td><?php echo $nurse1['contactnum']; ?></td>
            <td><?php echo $nurse1['email']; ?></td>
            <td><?php echo $nurse1['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($nurse2 as $nurse2): ?>
        <tr>
            <td><img src="assets/doctor pics/garcia.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $nurse2['fname']; ?></td>
            <td><?php echo $nurse2['lname']; ?></td>
            <td><?php echo $nurse2['licensenum']; ?></td>
            <td><?php echo $nurse2['contactnum']; ?></td>
            <td><?php echo $nurse2['email']; ?></td>
            <td><?php echo $nurse2['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($nurse3 as $nurse3): ?>
        <tr>
            <td><img src="assets/doctor pics/kiah.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $nurse3['fname']; ?></td>
            <td><?php echo $nurse3['lname']; ?></td>
            <td><?php echo $nurse3['licensenum']; ?></td>
            <td><?php echo $nurse3['contactnum']; ?></td>
            <td><?php echo $nurse3['email']; ?></td>
            <td><?php echo $nurse3['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($nurse4 as $nurse4): ?>
        <tr>
            <td><img src="assets/doctor pics/sammy.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $nurse4['fname']; ?></td>
            <td><?php echo $nurse4['lname']; ?></td>
            <td><?php echo $nurse4['licensenum']; ?></td>
            <td><?php echo $nurse4['contactnum']; ?></td>
            <td><?php echo $nurse4['email']; ?></td>
            <td><?php echo $nurse4['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($nurse5 as $nurse5): ?>
        <tr>
            <td><img src="assets/doctor pics/gazmen.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $nurse5['fname']; ?></td>
            <td><?php echo $nurse5['lname']; ?></td>
            <td><?php echo $nurse5['licensenum']; ?></td>
            <td><?php echo $nurse5['contactnum']; ?></td>
            <td><?php echo $nurse5['email']; ?></td>
            <td><?php echo $nurse5['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
</table>