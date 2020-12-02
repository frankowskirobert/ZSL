<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
  </head>
  <body>
    <style>
      *{
        margin: 0;
        padding: 0;
      }

      body{
        background: #c8d6e5;
        font-family: sans-serif;
      }

      span{
        color: #EA2027;
      }

      table{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 5px 15px rgba(0,0,0,1);
        padding: 30px 10px;
        border-radius: 5px;
      }

      table .des{
        font-size: 12px;
        margin-left: 95px;
        font-weight: 0;
        color: #8395a7;
      }

      table tr td{
        padding: 10px;
        font-weight: 600;
      }

      table input[type=text]{
        height: 30px;
        padding: 0 7px;
        width: 250px;
      }

      table input[type=submit]{
        padding: 5px;
        outline: none;
        border: 1px solid #000;
        box-shadow: 0px 3px 10px #000;
      }

      table input[type=submit]:hover{
        background: #c8d6e5;
        box-shadow: 0px 0px 0px #000;
      }

      table select{
        padding: 3px 5px;
      }

      table select[name=country]{
        width: 325px;
      }

      table select, input{
        outline: none;
        border: 1px solid #000;
        border-radius: 3px;
        background: #fff;
        margin-left: 20px;
        transition: all .3s ease;
      }

      table input[name=code]{
        width: 50px;
      }

      table input[name=phone]{
        width: 160px;
      }

      table input:focus{
        background: #c8d6e5;
      }
    </style>
    
    <form action="./form_user_data.php" method="post">
      <table>
        <tr>
          <td>(<span>*</span>) Required fields</td>
        </tr>
        <tr>
          <td>Account Type <span>*</span></td>
          <td><input type="radio" name="AT" value="P" checked /> Personal Account <input type="radio" name="AT" value="B" /> Business Account</td>
        </tr>
        <tr>
          <td>First Name <span>*</span></td>
          <td><input type="text" name="first" pattern="^[A-ZĆŻŹŚŃÓŁ]{1}[a-ząęćżźńśół]{1,9}$"></td>
        </tr>
        <tr>
          <td>Last Name <span>*</span></td>
          <td><input type="text" name="last" pattern="^[A-ZĆŻŹŚŃÓŁ]{1}[a-ząęćżźńśół]{1,19}$"/></td>
        </tr>
        <tr>
          <td>Country/Region <span>*</span></td>
          <td><select name="country">
            <option value="Poland">Poland</option>
            <option value="United States"selected>United States</option>
            <option value="Grecce">Grecce</option>
          </select></td>
        </tr>
        <tr>
          <td>Street Address <span>*</span></td>
          <td><input type="text" name="street1" /></td>
        </tr>
        <tr>
          <td>Street Address 2</td>
          <td><input type="text" name="street2" /></td>
        </tr>
        <tr>
          <td>City <span>*</span></td>
          <td><input type="text" name="city" /></td>
        </tr>
        <tr>
          <td>State/Province <span>*</span></td>
          <td><select name="state">
            <option value="S" hidden selected>Select State or Province</option>
            <option value="Greater Poland">Greater Poland</option>
            <option value="West Pomeranian">West Pomeranian</option>
            <option value="Lesser Poland">Lesser Poland</option>
          </select></td>
        </tr>
        <tr>
          <td>ZIP/Postal Code <span>*</span></td>
          <td><input type="text" name="code" pattern="[0-9]{5}" /></td>
        </tr>
        <tr>
          <th colspan="2"><span class="des">Only used for questions related to your order.</span></th>
        </tr>
        <tr>
          <td>Phone Number <span>*</span></td>
          <td><br /><input type="text" name="phone" pattern="[0-9]{9}$"/></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center"><input type="submit" value="Send Form" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
