<?php
function logActivity($pdo, $activityType, $description, $username = null) {
    if ($username === null && isset($_SESSION['admin_username'])) {
        $username = $_SESSION['admin_username'];
    }
    
    $fullDescription = ($username ? 'Admin ' . $username . ' ' : '') . $description;
    
    $stmt = $pdo->prepare("INSERT INTO activity_log 
                          (activity_type, description) 
                          VALUES (?, ?)");
    $stmt->execute([$activityType, $fullDescription]);
}
?>