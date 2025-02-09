<?php
//note we need to go up 1 more directory
require(__DIR__ . "/partials/nav.php");

if (!is_logged_in()) {
    header("Location: login.php?role=1"); 
}

if (!has_role("Admin")) { 
    header("Location: profile.php?role=1"); 
}
//handle the toggle first so select pulls fresh data
if (isset($_POST["role_id"])) {
    $role_id = se($_POST, "role_id", "", false);
    if (!empty($role_id)) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE Roles SET is_active = !is_active WHERE id = :rid");
        try {
            $stmt->execute([":rid" => $role_id]);
            //flash("Updated Role", "success");
        } catch (PDOException $e) {
            //flash(var_export($e->errorInfo, true), "danger");
        }
    }
}
$query = "SELECT id, name, description, is_active from Roles";
$params = null;
if (isset($_POST["role"])) {
    $search = se($_POST, "role", "", false);
    $query .= " WHERE name LIKE :role";
    $params =  [":role" => "%$search%"];
}
$query .= " ORDER BY modified desc LIMIT 10";
$db = getDB();
$stmt = $db->prepare($query);
$roles = [];
try {
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $roles = $results;
    } else {
        //flash("No matches found", "warning");
    }
} catch (PDOException $e) {
    //flash(var_export($e->errorInfo, true), "danger");
}

?>
<div class="container">
    <h1>List Roles</h1>
    <form method="POST">
        <input type="search" name="role" placeholder="Role Filter" value="<?php se($_POST, "role");?>" />
        <input type="submit" value="Search" />
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($roles)) : ?>
                <tr>
                <td colspan="100%">No roles</td>
                </tr>
            <?php else : ?>
                <?php foreach ($roles as $role) : ?>
                    <tr>
                        <td><?php se($role, "id"); ?></td>
                        <td><?php se($role, "name"); ?></td>
                        <td><?php se($role, "description"); ?></td>
                        <td><?php echo (se($role, "is_active", 0, false) ? "active" : "disabled"); ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="role_id" value="<?php se($role, 'id'); ?>" />
                                <?php if (isset($search) && !empty($search)) : ?>
                                    <?php /* if this is part of a search, lets persist the search criteria so it reloads correctly*/ ?>
                                    <input type="hidden" name="role" value="<?php se($search, null); ?>" />
                                <?php endif; ?>
                                <input type="submit" value="Toggle" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php
//note we need to go up 1 more directory
//require_once(__DIR__ . "/partials///flash.php");
?>