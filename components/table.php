<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Table Component</title>

  <link
    href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"
    rel="stylesheet" />

  <link href="../assets/stylesheet/css/style.css" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&display=swap"
    rel="stylesheet" />
</head>

<body>
  <?php
  $users = [
    [
      "id" => "1",
      "name" => "Jese Leos",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "clipboard",
      "role" => "Administrator",
      "role_class" => "administrator",
      "status" => "Active",
      "status_class" => "active",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 4.7,
      "rating_direction" => "up",
      "date" => "20 Nov 2022"
    ],
    [
      "id" => "2",
      "name" => "Bonnie Green",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "viewer",
      "status" => "Active",
      "status_class" => "active",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.9,
      "rating_direction" => "down",
      "date" => "23 Nov 2022"
    ],
    [
      "id" => "3",
      "name" => "Leslie Livingston",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "person-add",
      "role" => "Moderator",
      "role_class" => "moderator",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble"],
      "rating" => 4.8,
      "rating_direction" => "up",
      "date" => "19 Nov 2022"
    ],
    [
      "id" => "4",
      "name" => "Micheal Gough",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "person-add",
      "role" => "Moderator",
      "role_class" => "moderator",
      "status" => "Active",
      "status_class" => "active",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 5,
      "rating_direction" => "up",
      "date" => "27 Nov 2022"
    ],
    [
      "id" => "5",
      "name" => "Joseph McFall",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "viewer",
      "status" => "Active",
      "status_class" => "active",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 4.2,
      "rating_direction" => "down",
      "date" => "20 Nov 2022"
    ],
    [
      "id" => "6",
      "name" => "Robert Brown",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "viewer",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter"],
      "rating" => 4.5,
      "rating_direction" => "up",
      "date" => "20 Nov 2022"
    ],
    [
      "id" => "7",
      "name" => "Karen Nelson",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "viewer",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 4.1,
      "rating_direction" => "down",
      "date" => "18 Nov 2022"
    ],
    [
      "id" => "8",
      "name" => "Helene Engels",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "person-add",
      "role" => "Moderator",
      "role_class" => "moderator",
      "status" => "Active",
      "status_class" => "active",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.8,
      "rating_direction" => "down",
      "date" => "27 Nov 2022"
    ],
    [
      "id" => "9",
      "name" => "Lana Byrd",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "viewer",
      "status" => "Active",
      "status_class" => "active",
      "social_profiles" => ["facebook", "github"],
      "rating" => 4.8,
      "rating_direction" => "up",
      "date" => "20 Nov 2022"
    ],
    [
      "id" => "10",
      "name" => "Neil Sims",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "person-add",
      "role" => "Moderator",
      "role_class" => "moderator",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 5.0,
      "rating_direction" => "up",
      "date" => "20 Nov 2022"
    ],
    [
      "id" => "11",
      "name" => "Bonnie Green",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.9,
      "rating_direction" => "down",
      "date" => "23 Nov 2022"
    ],
    [
      "id" => "12",
      "name" => "Bonnie Green",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.9,
      "rating_direction" => "down",
      "date" => "23 Nov 2022"
    ],
    [
      "id" => "13",
      "name" => "Bonnie Green",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.9,
      "rating_direction" => "down",
      "date" => "23 Nov 2022"
    ],
    [
      "id" => "14",
      "name" => "Bonnie Green",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.9,
      "rating_direction" => "down",
      "date" => "23 Nov 2022"
    ],
    [
      "id" => "15",
      "name" => "Bonnie Green",
      "image" => "https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg?auto=compress&cs=tinysrgb&w=600",
      "role_icon" => "eye",
      "role" => "Viewer",
      "role_class" => "",
      "status" => "Inactive",
      "status_class" => "inactive",
      "social_profiles" => ["facebook", "github", "dribbble", "twitter", "google"],
      "rating" => 3.9,
      "rating_direction" => "down",
      "date" => "23 Nov 2022"
    ],
  ]; ?>
  <div class="table-component">
    <table cellspacing="0">
      <tr>
        <th>
          <input type="checkbox" id="0" /> <label for="0"></label>
        </th>
        <th>USER</th>
        <th>USER ROLE</th>
        <th>STATUS</th>
        <th>SOCIAL PROFILE</th>
        <th>PROMOTE</th>
        <th>RATING</th>
        <th>LAST LOGIN</th>
        <th></th>
      </tr>
      <?php
      foreach ($users as $user) {
        echo '<tr>';
        echo '<td><input type="checkbox" id="' . $user["id"] . '" /> <label for="' . $user["id"] . '"></label></td>';
        echo '<td class="user-name"><img src="' . $user["image"] . '" /> ' . $user["name"] . '</td>';
        echo '<td><span class="user-role ' . $user["role_class"] . '"><ion-icon name="' . $user["role_icon"] . '"></ion-icon>' . $user["role"] . '</span></td>';
        echo '<td><span class="status"><span class="status-icon ' . $user["status_class"] . '"></span>' . $user["status"] . '</span></td>';
        echo '<td><span class="social-profile">';
        foreach ($user["social_profiles"] as $profile) {
          echo '<ion-icon name="logo-' . $profile . '"></ion-icon>';
        }
        echo '</span></td>';
        echo '<td><label class="switch"><input type="checkbox" id="' . $user["id"] . '"><span class="slider round"></span></label></td>';
        echo '<td><span class="rating"><ion-icon class="arrow-' . $user["rating_direction"] . '" name="arrow-round-' . $user["rating_direction"] . '"></ion-icon>' . $user["rating"] . '</span></td>';
        echo '<td><span class="last-login">' . $user["date"] . '</span></td>';
        echo '<td><ion-icon name="more" class="more-icon"></ion-icon></td>';
        echo '</tr>';
      } ?>
    </table>
  </div>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>