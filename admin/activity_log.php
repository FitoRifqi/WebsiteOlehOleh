<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root'; // Ganti dengan username database Anda
$password = '';     // Ganti dengan password database Anda
$database = 'oleh2_db';

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data activity log
$sql = "SELECT id, activity_type, description, created_at FROM activity_log ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Log</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .badge {
            @apply px-2 py-1 rounded-full text-xs font-semibold;
        }
        .badge-login { @apply bg-green-100 text-green-800; }
        .badge-create { @apply bg-blue-100 text-blue-800; }
        .badge-update { @apply bg-yellow-100 text-yellow-800; }
        .badge-delete { @apply bg-red-100 text-red-800; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Activity Log</h1>
            
            <!-- Filter Form -->
            <form method="GET" class="mb-6 bg-gray-50 p-4 rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="activity_type" class="block text-sm font-medium text-gray-700 mb-1">Activity Type</label>
                        <select name="activity_type" id="activity_type" class="w-full p-2 border rounded-md">
                            <option value="">All Types</option>
                            <option value="login">Login</option>
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                        <i class="fas fa-filter mr-2"></i>Filter
                    </button>
                    <a href="activity_log.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md">
                        <i class="fas fa-sync-alt mr-2"></i>Reset
                    </a>
                </div>
            </form>

            <!-- Activity Log Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 text-left">ID</th>
                            <th class="py-3 px-4 text-left">Activity Type</th>
                            <th class="py-3 px-4 text-left">Description</th>
                            <th class="py-3 px-4 text-left">Timestamp</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<tr class="border-b hover:bg-gray-50">';
                                echo '<td class="py-3 px-4">' . $row['id'] . '</td>';
                                
                                // Menampilkan activity type dengan badge warna berbeda
                                echo '<td class="py-3 px-4">';
                                switch($row['activity_type']) {
                                    case 'login':
                                        echo '<span class="badge badge-login">' . ucfirst($row['activity_type']) . '</span>';
                                        break;
                                    case 'create':
                                        echo '<span class="badge badge-create">' . ucfirst($row['activity_type']) . '</span>';
                                        break;
                                    case 'update':
                                        echo '<span class="badge badge-update">' . ucfirst($row['activity_type']) . '</span>';
                                        break;
                                    case 'delete':
                                        echo '<span class="badge badge-delete">' . ucfirst($row['activity_type']) . '</span>';
                                        break;
                                    default:
                                        echo '<span class="badge">' . ucfirst($row['activity_type']) . '</span>';
                                }
                                echo '</td>';
                                
                                echo '<td class="py-3 px-4">' . $row['description'] . '</td>';
                                echo '<td class="py-3 px-4">' . date('d M Y H:i:s', strtotime($row['created_at'])) . '</td>';
                                echo '<td class="py-3 px-4">';
                                echo '<button class="bg-blue-500 hover:bg-blue-600 text-white p-1 rounded mr-1">';
                                echo '<i class="fas fa-eye"></i>';
                                echo '</button>';
                                echo '<button class="bg-red-500 hover:bg-red-600 text-white p-1 rounded">';
                                echo '<i class="fas fa-trash"></i>';
                                echo '</button>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5" class="py-4 text-center text-gray-500">No activity logs found</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    Showing <?php echo $result->num_rows; ?> entries
                </div>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 border rounded bg-gray-100 text-gray-600">
                        Previous
                    </button>
                    <button class="px-3 py-1 border rounded bg-blue-500 text-white">
                        1
                    </button>
                    <button class="px-3 py-1 border rounded bg-gray-100 text-gray-600">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Tutup koneksi database
    $conn->close();
    ?>
</body>
</html>