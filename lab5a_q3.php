<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q3</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
                font-family: Arial, sans-serif;
            }
            th, td {
                border: 1px solid #000;
                padding: 8px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
        // Function to generate multiplication table
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'no' => $i,
                    'multiplier' => $multiplier,
                    'answer' => $i * $multiplier
                ];
            }
            return $results;
        }

        // Call the function and store the results
        $multiplier = 2; // Example: 2 (you can change this value)
        $multiplicationTable = multiplication($multiplier);
        ?>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Multiplier</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($multiplicationTable as $row): ?>
                    <tr>
                        <td><?php echo $row['no']; ?></td>
                        <td><?php echo $row['multiplier']; ?></td>
                        <td><?php echo $row['answer']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
