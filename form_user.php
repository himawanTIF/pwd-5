<?php
echo "<h2>Tambah User</h2>
<form action=input_user.php method=post>
    <table>
        <tr>
            <td>Username</td>
            <td> : <input type='text' name='id_user'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : <input type='password' name='password'></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>: <input type='text' name='nama_lengkap'></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : <input type='text' name='email'></td>
        </tr>
        <tr><td colspan=2><input type='submit' value='SIMPAN'></td></tr>
    </table>
</form>";
?>