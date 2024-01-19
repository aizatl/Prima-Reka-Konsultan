<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
<center>
  <table >
  <thead>
      <th>Due Date</th>
      <th>Task</th>
      <th>Status</th>
      <th>Submitted</th>
      <th>PIC/EIC</th>
      <th>Remark</th>
  </thead>
  <tbody>
    <?php foreach ($files as $file): ?>
      <tr>
        <td><?php echo $file['dueDate']; ?></td>
        <td><?php echo $file['nameTaskDetail']; ?></td>
        <td><?php echo $file['status']; ?></td>
        <td><a href="staffDownloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
        <td><?php echo $file['staffInCharge']; ?></td>
        <td><?php echo $file['remark']; ?></td>


      </tr>
    <?php endforeach;?>

  </tbody>
  </table>
</center>
</body>
</html>
