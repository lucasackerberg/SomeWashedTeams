
<table>
  <tr>
    <th>Team Name</th>
    <th>League</th>
    <th>Last time they were Champions of the washed league</th>
    <th>City</th>
    <th>Nickname</th>
    <th>Website</th>
  </tr>
  <?php foreach($teams as $teamName => $teamData) { ?>
    <tr>
        <td><?php echo $teamName ?></td>
        <td><?php echo $teamData["league"]?></td>
        <td><?php echo $teamData['last-time-champions'] ?? 'Never have been'?></td>
        <td><?php echo $teamData['city']?></td>
        <td><?php echo $teamData['nickname'] ?? 'Not known'?></td>
        <td> 
          <a href="<?php echo $teamData['url']?>">Homepage</a> <p>Of <?php echo $teamName?></p>
        </td>
    </tr> <?php } ?>
</table>
  