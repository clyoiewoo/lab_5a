<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
                font-family: Arial, sans-serif;
            }
            td {
                border: 1px solid #ddd;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #f2fb2f2;
            }
            tr:hover {
                background-color: #ddd;
            }
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <?php
        $name = "Nurjeha Binti Alias";
        $matric_number = "Ai220112";
        $course = "Bachelor of Computer Science (Software Engineering) with honours";
        $year_of_study = "Year 3";
        $address = "No. 64, Kampung Tajin, 21700 Kuala Berang, Terengganu";
        ?>

        <table>
            <tr>
                <th>Details</th>
                <th>Information</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matric_number; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo $year_of_study; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>
    </body>
</html>
