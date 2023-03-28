<!-- <pre>
    <p>Tableau des users récupéré depuis la BDD : </p>
    < var_dump($users); ?>
    <br>
</pre> -->

<!-- <ul>
    < foreach ($users as $user) : ?>
        <li>
            <p>ID:</p>
            <p> < ($user->id) ?> </p>
        </li>
        <li>
            <p>Mail:</p>
            <p> < ($user->email) ?> </p>
        </li>
        <li>
            <p>Password :</p>
            <p> < ($user->password) ?> </p>
        </li>
    < endforeach ?>
</ul> -->

<table class="users-table">
    <h2>Tableau des users récupéré depuis la BDD : </h2>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= ($user->id) ?></td>
            <td><?= ($user->email) ?></td>
            <td><?= ($user->password) ?></td>
        </tr>
    <?php endforeach ?>
</table>