<?php

$teams = [
    'Arsenal' => [
        'league' => 'Premier league',
        'last-time-champions' => 2004,
        'city' => 'London',
        'url' => 'https://www.arsenal.com/'
    ],
    'Aston Villa' => [
        'league' => 'Premier league',
        'last-time-champions' => 1981,
        'city' => 'Birmingham',
        'url' => 'https://www.avfc.co.uk/'
    ],
    'Manchester City' => [
        'league' => 'Premier league',
        'last-time-champions' => 2023,
        'city' => 'Manchester',
        'url' => 'https://www.mancity.com/'
    ],
    'Newcastle' => [
        'league' => 'Premier league',
        'last-time-champions' => 1927,
        'city' => 'Newcastle',
        'nickname' => 'Magpies',
        'url' => 'https://www.nufc.co.uk/'
    ],
    'Chelsea' => [
        'league' => 'Premier league',
        'last-time-champions' => 2017,
        'city' => 'London',
        'url' => 'https://www.chelseafc.com/en'
    ],
    'Watford' => [
        'league' => 'Championship',
        'last-time-champions' => null,
        'city' => 'London',
        'url' => 'https://www.watfordfc.com/'
    ],
    'Brighton' => [
        'league' => 'Premier league',
        'last-time-champions' => null,
        'city' => 'Brighton',
        'url' => 'https://www.brightonandhovealbion.com/'
    ],
];

?>

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
  