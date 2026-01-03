<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

// Fetch all requests
$ret = "SELECT * FROM users_request";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Comment</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $cnt = 1;
    while($row = $res->fetch_object()) {
    ?>
        <tr>
            <td><?php echo $cnt; ?></td>
            <td><?php echo htmlspecialchars($row->name); ?></td>
            <td><?php echo htmlspecialchars($row->email); ?></td>
            <td><?php echo htmlspecialchars($row->mobile); ?></td>
            <td><?php echo htmlspecialchars($row->comment); ?></td>
            <td>
                <?php if($row->status == 'pending') { ?>
                    <span class="label label-warning">Pending</span>
                <?php } elseif($row->status == 'accepted') { ?>
                    <span class="label label-success">Accepted</span>
                <?php } else { ?>
                    <span class="label label-danger">Rejected</span>
                <?php } ?>
            </td>
            <td>
                <?php if($row->status == 'pending'){ ?>
                    <a href="request-action.php?action=accept&id=<?php echo $row->id; ?>" onclick="return confirm('Accept this request?');">✔</a>
                    <a href="request-action.php?action=reject&id=<?php echo $row->id; ?>" onclick="return confirm('Reject this request?');">✖</a>
                <?php } else { ?>
                    <a href="request-action.php?action=delete&id=<?php echo $row->id; ?>" onclick="return confirm('Delete this request?');">🗑</a>
                <?php } ?>
            </td>
        </tr>
    <?php
        $cnt++;
    }
    ?>
    </tbody>
</table>
