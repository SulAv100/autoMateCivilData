<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="nepali-date-picker.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>Barahi Technical Solutions Pvt Ltd</h1>
    <h4>Pokhara-8</h4>
    <table>
        <tr>
            <td><label for="date">Date of casting</label></td>
            <td><input type="text" class="nepalidatepicker" /></td>
        </tr>
    </table>

    <!-- Include jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Nepali Date Picker JS -->
    <script src="nepali-date-picker.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Nepali Date Picker
            $('.nepalidatepicker').nepaliDatePicker();
        });
    </script>
</body>
</html>