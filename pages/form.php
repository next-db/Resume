<?php
$title = 'Обратная связь';
$content = '
    <form method="post" enctype="multipart/form-data">
    <table border="1" width=30%>
        <tr>
            <td colspan="2">
                <h2 align="center">
        Обратная связь
    </h2>
            </td>
        </tr>
        <tr>
            <td width=25%>
                <label for="login">Login</label>
            </td>
            <td>
                <input type="text" name="login" id="login" placeholder="Enter your login"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email</label>
            </td>
            <td>
                <input type="email" name="email" id="email" placeholder="Enter your email"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="pass">Password</label>
            </td>
            <td>
                <input type="password" name="pass" id="pass" placeholder="Enter your password"/>
            </td>
        <tr>
            <td>
                <label for="comment"><i>Comment</i></label>
            </td>
            <td>
                <textarea name="comment" id="comment"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <b>Gender</b>
            </td>
            <td>
                <input type="radio" name="gender" value="Male"/>Male
                <input type="radio" name="gender" value="Unknow" checked/>Unknow <br>
                <input type="radio" name="gender" value="Female"/>Female
            </td>
        </tr>
        <tr>
            <td>
                <b>Application For</b>
            </td>
            <td>
                <input type="checkbox" name="Version1"/>Version1
                <input type="checkbox" name="Version3"/>Version3<br>
                <input type="checkbox" name="Version2"/>Version2
                <input type="checkbox" name="Version4"/>Version4
            </td>
        </tr>
        <tr>
            <td>
                <u>Your country</u>
            </td>
            <td>
                <select name="countries[]">
                    <option selected disabled value=0>Choose your country</option>
                    <option value="ua">Ukraine</option>
                    <option value="en">England</option>
                    <option value="de">Germany</option>
                    <option value="us">USA</option>
                    <option value="es">Spain</option>
                    <option disabled value="ussr">USSR</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
    Your CV
    </td>
            <td>
                <input type="file" name="cv" multiple/>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Отправить"/>
            </td>
        </tr>
    </table>
    <input type="hidden" name="h_date" value="01.09.2016"/>
</form>
    ';
?>